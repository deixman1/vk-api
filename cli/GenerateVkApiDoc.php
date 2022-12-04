<?php

namespace Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;

class GenerateVkApiDoc extends Command
{
    private const NAME = 'generate-vk-api-dto';
    private const DESCRIPTION = 'Генерирует дтошки для api VK';
    const VK_BASE_LINK = 'https://api.vk.com';
    const VK_METHOD = '/method/';

    public function __construct()
    {
        parent::__construct(self::NAME);
        $this->setDescription(self::DESCRIPTION);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(self::NAME . ' started');

        $methodData = json_decode(
            file_get_contents(__DIR__ . '/../vendor/vkcom/vk-api-schema/methods.json'),
            true
        );
        $errorData = json_decode(
            file_get_contents(__DIR__ . '/../vendor/vkcom/vk-api-schema/errors.json'),
            true
        );
        $objectData = json_decode(
            file_get_contents(__DIR__ . '/../vendor/vkcom/vk-api-schema/objects.json'),
            true
        );
        $responseData = json_decode(
            file_get_contents(__DIR__ . '/../vendor/vkcom/vk-api-schema/responses.json'),
            true
        );
        $result = [
            'openapi' => '3.0.1',
            'info' => [
                'title' => 'VK api',
                'version' => $methodData['version'],
            ],
            'servers' => [
                [
                    'description' => 'Сервер VK',
                    'url' => self::VK_BASE_LINK,
                ],
            ],
            'paths' => [],
            'components' => [
                'schemas' => [],
            ],
        ];
//        $errorData = $this->prepareDataObject($this->recursiveReplaceRef($errorData['definitions']));
//        $data['components']['schemas'] = $errorData;
        $objectData = $this->prepareComponents($objectData['definitions']);
        $result['components']['schemas'] = array_merge_recursive($result['components']['schemas'], $objectData);
        $responseData = $this->prepareComponents($responseData['definitions']);
        $result['components']['schemas'] = array_merge_recursive($result['components']['schemas'], $responseData);
        $methodData = $this->recursiveReplaceRef($methodData);
        foreach ($methodData['methods'] as $method) {
            $get = [];
            if (isset($method['parameters'])) {
                $get['parameters'] = $this->prepareParameters($method['parameters'], $result);
            }
            $responses = $method['responses']['response'] ?? ['description' => null];
            $get['responses'] = [200 => $responses];
            $result['paths'] += [
                self::VK_METHOD . $method['name'] => [
                    'get' => $get,
                ],
            ];
        }



        file_put_contents(__DIR__ . '/result.yaml', Yaml::dump($result, 255, 2));

        $output->writeln(self::NAME . ' done');
        return Command::SUCCESS;
    }

    private function prepareParameters(array $data, array $result): array
    {
        foreach ($data as $paramName => $paramValue) {

            $param['in'] = 'query';
            $param['name'] = $paramValue['name'];
            $param['description'] = $paramValue['description'] ?? '';

            if (isset($paramValue['type'])) {

                unset($paramValue['name']);
                if (isset($paramValue['description'])) {
                    unset($paramValue['description']);
                }

                if (isset($paramValue['$ref'])) {
                    $exploded = explode('/', $paramValue['$ref']);
                    $temp = $result;
                    unset($exploded[0]);
                    foreach($exploded as $key) {
                        $temp = $temp[$key];
                    }
                    $paramValue = $paramValue + $temp;
                    unset($paramValue['$ref']);
                }

                $paramValue['type'] = $this->arrayTypesToString($paramValue);

                $paramValue = $this->unsetFields($paramValue);

                $param['schema'] = $this->prepareDataObject($paramValue);
            }

            $data[$paramName] = $param;
        }
        return $data;
    }

    private function prepareComponents(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                if (!isset($value['type'])) {
                    $value = $value['response'] ?? $value;

                    $value = [
                        'type' => 'object',
                        'properties' => $value,
                    ];
                }

                $data[$key] = $this->recursiveReplaceRef($value);
            }
        }
        return $data;
    }

    private function recursiveReplaceRef(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = $this->recursiveReplaceRef($value);
                continue;
            }
            if ($key === '$ref') {
                $data[$key] = $this->getReplacedRef($value);
            }
        }
        return $data;
    }

    /**
     * @param mixed $value
     * @return array|false|string|string[]
     */
    private function getReplacedRef(mixed $value): string|array|false
    {
        return str_replace( 'definitions', 'components/schemas', strstr($value, '#'));
    }

    /**
     * @param array $data
     * @return array
     */
    private function prepareDataObject(array $data): array
    {
        $data = $this->unsetFields($data);

        foreach ($data as $propertyName => $propertyValue) {
            if (is_array($propertyValue)) {
                echo PHP_EOL;
                $propertyValue = $this->unsetFields($propertyValue);

                if (isset($propertyValue['allOf'])) {
                    foreach ($propertyValue['allOf'] as $keyAllOf => $allOf) {
                        if (isset($oneOf['properties'])) {
                            $propertyValue['allOf'][$keyAllOf] = $this->prepareDataObject($allOf);
                        }
                    }
                }
                if (isset($propertyValue['oneOf'])) {
                    foreach ($propertyValue['oneOf'] as $keyOneOf => $oneOf) {
                        if (isset($oneOf['properties'])) {
                            $propertyValue['oneOf'][$keyOneOf] = $this->prepareDataObject($oneOf);
                        }
                    }
                }

                if (!isset($propertyValue['type']) && isset($propertyValue['properties'])) {
                    $propertyValue = $this->prepareDataObject($propertyValue['properties']);
                }

                if (isset($propertyValue['type'])) {
                    $propertyValue['type'] = $this->arrayTypesToString($propertyValue);

                    switch ($propertyValue['type']) {
                        case 'string':
                            if (isset($propertyValue['properties'])) {
                                $propertyValue = $this->prepareDataObject($propertyValue['properties']);
                            }
                            break;
                        case 'object':
                            if (isset($propertyValue['properties'])) {
                                $propertyValue = $this->prepareDataObject($propertyValue['properties']);
                            }
                            break;
                        case 'array':
                            if (isset($propertyValue['items'])) {
                                $propertyValue = $this->prepareDataObject($propertyValue['items']);
                            }
                            break;
                    }
                }
            }

            $data[$propertyName] = $propertyValue;
        }
        return $data;
    }

    /**
     * @param array $propertyValue
     * @return array
     */
    private function unsetFields(array $propertyValue): array
    {
        if (isset($propertyValue['format'])) {
            unset($propertyValue['format']);
        }
        if (isset($propertyValue['entity'])) {
            unset($propertyValue['entity']);
        }
        if (isset($propertyValue['enumNames'])) {
            unset($propertyValue['enumNames']);
        }
        if (isset($propertyValue['required'])) {
            unset($propertyValue['required']);
        }
        if (isset($propertyValue['entity'])) {
            unset($propertyValue['entity']);
        }
        return $propertyValue;
    }

    /**
     * @param array $propertyValue
     * @return string
     */
    private function arrayTypesToString(array $propertyValue): string
    {
        return is_array($propertyValue['type']) ? 'string' : $propertyValue['type'];
    }
}