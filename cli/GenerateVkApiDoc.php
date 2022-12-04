<?php

namespace Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;

class GenerateVkApiDoc extends Command
{
    private const NAME = 'generate-vk-api-openapi';
    private const DESCRIPTION = 'Генерирует спеку api VK в формате openapi';
    private const VK_BASE_LINK = 'https://api.vk.com';
    private const VK_METHOD = '/method/';
    private const UNSUPPORTED_KEYWORDS = [
        '$schema',
        'additionalItems',
        'const',
        'contains',
        'dependencies',
        '$id',
        'patternProperties',
        'propertyNames',
        'enumNames',
        'entity',
        'global',
        'subcodes',
    ];

    public function __construct()
    {
        parent::__construct(self::NAME);
        $this->setDescription(self::DESCRIPTION);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(self::NAME . ' started');

        $data = json_decode(file_get_contents(__DIR__ . '/../schemas/vk-api.json'), true);

        $data = $this->recursiveReplace($data);

        $result = [
            'openapi' => '3.0.1',
            'info' => [
                'title' => 'VK api',
                'version' => $data['version'],
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

        $result['components']['schemas'] = $data['definitions'] + $data['errors'];
        $result['paths'] = $this->prepareMethods($data['methods'], $result);

        file_put_contents(__DIR__ . '/../schemas/vk-api.yaml', Yaml::dump($result, 255, 2));

        $output->writeln(self::NAME . ' done');
        return Command::SUCCESS;
    }

    private function prepareMethods(array $methods, array $data): array
    {
        $result = [];
        foreach ($methods as $method) {
            $get = [];
            if (isset($method['parameters']) && $method['parameters']) {
                $get['parameters'] = $this->prepareMethodParameters($method['parameters'], $data);
            }

            $responses = $this->getResponses($method['responses'] ?? []);
            $errors = $this->getResponses($method['errors'] ?? []);

            $get['responses'] = [
                200 => $responses,
                500 => $errors,
            ];

            $result[self::VK_METHOD . $method['name']] = [
                'get' => $get,
            ];
        }
        return $result;
    }

    private function prepareMethodParameters(array $data, array $result): array
    {
        foreach ($data as $paramName => $paramValue) {

            $param['in'] = 'query';
            $param['name'] = $paramValue['name'];
            $paramValue['description'] = $paramValue['description'] ?? 'null';
            $param['description'] = $paramValue['description'];
            if (isset($paramValue['required'])) {
                $param['required'] = $paramValue['required'];
            }

            if (isset($paramValue['type'])) {
                unset(
                    $paramValue['name'],
                    $paramValue['required'],
                    $paramValue['description']
                );
                if (isset($paramValue['$ref'])) {
                    $exploded = explode('/', $paramValue['$ref']);
                    $temp = $result;
                    unset($exploded[0]);
                    foreach ($exploded as $key) {
                        $temp = $temp[$key];
                    }
                    $paramValue = $temp + $paramValue;
                    unset($paramValue['$ref']);
                }
                $param['schema'] = $paramValue;
            }

            $data[$paramName] = $param;
        }
        return $data;
    }


    private function recursiveReplace(array $data): array
    {
        foreach ($data as $key => $value) {
            if (in_array($key, self::UNSUPPORTED_KEYWORDS)) {
                unset($data[$key]);
                continue;
            }
            if (is_array($value)) {
                if (isset($value['required']) && !isset($value['name'])) {
                    unset($value['required']);
                }
                if ($key === 'discriminator' && isset($value['mapping'])) {
                    foreach ($value['mapping'] as $keyMap => $map) {
                        $value['mapping'][$keyMap] = str_replace('definitions', 'components/schemas', $map);
                    }
                }
                if (isset($value['type']) && !isset($value['type']['type']) && !isset($value['type']['$ref'])) {
                    $value['type'] = $this->arrayTypesToString($value);
                }
                if (isset($value['code']) && !isset($value['code']['type']) && !isset($value['code']['$ref'])) {
                    $value['type'] = 'integer';
                    $value['example'] = $value['code'];
                    unset($value['code']);
                }
                if (isset($value['deprecated_from_version'])) {
                    $value['description'] = isset($value['description'])
                        ? $value['description'] . ' deprecated_from_version ' . $value['deprecated_from_version']
                        : 'deprecated_from_version ' . $value['deprecated_from_version'];
                    unset($value['deprecated_from_version']);
                }
                if (isset($value['$ref'])) {
                    if (!isset($value['name'])) {
                        if (isset($value['description'])) {
                            unset($value['description']);
                        }
                        if (isset($value['type'])) {
                            unset($value['type']);
                        }
                    }
                    if (isset($value['default'])) {
                        unset($value['default']); //todo save in ref
                    }
                }
                $data[$key] = $this->recursiveReplace($value);
                continue;
            }
            if ($key === '$ref') {
                if (str_contains($value, 'definitions')) {
                    $search = 'definitions';
                } else {
                    $search = 'errors';
                }
                $data[$key] = str_replace($search, 'components/schemas', $value);
            }
        }
        return $data;
    }

    /**
     * @param array|string $data
     * @return string
     */
    private function arrayTypesToString(array|string $data): string
    {
        return is_array($data['type']) ? 'string' : $data['type'];
    }

    /**
     * @param array $responses
     * @return array
     */
    private function getResponses(array $responses): array
    {
        $result = [
            'description' => 'null',
            'content' => ['application/json' => ['schema' => []]],
        ];

        if (count($responses) > 1) {
            $oneOf = [];
            foreach ($responses as $response) {
                $oneOf[] = $response;
            }
            $result['content']['application/json']['schema']['oneOf'] = $oneOf;
        } else {
            $result['content']['application/json']['schema'] = array_shift($responses) ?: ['description' => 'null'];
        }
        return $result;
    }
}