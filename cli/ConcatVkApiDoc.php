<?php

namespace Console;

use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;

class ConcatVkApiDoc extends Command
{
    private const NAME = 'concat-vk-api';
    private const DESCRIPTION = 'Склеивает все схемы vk-api';

    private const DIR_SCHEMAS = __DIR__ . '/../vendor/vkcom/vk-api-schema/';

    public function __construct()
    {
        parent::__construct(self::NAME);
        $this->setDescription(self::DESCRIPTION);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(self::NAME . ' started');

        $dirs = array_filter(glob(self::DIR_SCHEMAS . '*'), 'is_dir');

        $this->concatSchemasAndSave($dirs);

        $output->writeln(self::NAME . ' done');
        return Command::SUCCESS;
    }

    private function concatSchemasAndSave(array $dirs): void
    {
        $errors = json_decode(file_get_contents(__DIR__ . '/../vendor/vkcom/vk-api-schema/errors.json'), true);
        $result = [
            '$schema' => 'http://json-schema.org/draft-07/schema#',
            'version' => '5.131',
            'title' => 'VK API JSON Schema',
            'description' => 'Contains JSON Schema documents explaining the VK.COM API objects and methods',
            'termsOfService' => 'https://dev.vk.com/rules',
            'methods' => [],
            'definitions' => $errors['definitions'],
            'errors' => $errors['errors'],
        ];
        unset($errors);
        foreach ($dirs as $dir) {
            if (file_exists($dir . '/methods.json')) {
                $methods = json_decode(file_get_contents($dir . '/methods.json'), true);
                $result['methods'] = $result['methods'] + $methods['methods'];
                unset($methods);
            }
            if (file_exists($dir . '/objects.json')) {
                $objects = json_decode(file_get_contents($dir . '/objects.json'), true);
                $result['definitions'] = $result['definitions'] + $objects['definitions'];
                unset($objects);
            }
            if (file_exists($dir . '/responses.json')) {
                $responses = json_decode(file_get_contents($dir . '/responses.json'), true);
                $result['definitions'] = $result['definitions'] + $responses['definitions'];
                unset($responses);
            }
        }
        $result = $this->recursiveReplaceRef($result);
        if (!is_dir(__DIR__ . '/../schemas')) {
            mkdir(__DIR__ . '/../schemas');
        }
        file_put_contents(__DIR__ . '/../schemas/vk-api.json', json_encode($result));
    }

    private function recursiveReplaceRef(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = $this->recursiveReplaceRef($value);
                continue;
            }
            if ($key === '$ref') {
                $data[$key] = strstr($value, '#');
            }
        }
        return $data;
    }
}