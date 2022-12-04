<?php

namespace Console;

use Swaggest\JsonSchema\Schema;
use Swaggest\PhpCodeBuilder\App\PhpApp;
use Swaggest\PhpCodeBuilder\JsonSchema\ClassHookCallback;
use Swaggest\PhpCodeBuilder\JsonSchema\PhpBuilder;
use Swaggest\PhpCodeBuilder\PhpClass;
use Swaggest\PhpCodeBuilder\PhpCode;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateVkApiClass extends Command
{
    private const NAME = 'generate-vk-api-class';
    private const DESCRIPTION = 'Генерирует дтошки для api VK';
    private const JSON_SCHEMAS_FILES = [
        'errors.json',
        'methods.json',
        'objects.json',
        'package.json',
        'responses.json',
        'schema.json',
    ];
    private string $schemaPath;
    private string $dirResult;
    private string $namespaceResult;

    public function __construct()
    {
        parent::__construct(self::NAME);
        $this->setDescription(self::DESCRIPTION);
        $this->schemaPath = __DIR__ . '/../vendor/vkcom/vk-api-schema/methods.json';
        $this->dirResult = __DIR__ . '/../src/Temp';
        $this->namespaceResult = 'VkApi\Temp';
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(self::NAME . ' started');

        $schema = Schema::import(json_decode(file_get_contents($this->schemaPath)));

        $app = new PhpApp();
        $app->setNamespaceRoot($this->namespaceResult, '.');

        $builder = new PhpBuilder();
        $builder->buildSetters = true;
        $builder->makeEnumConstants = true;
        $builder->classCreatedHook = new ClassHookCallback(
            function (PhpClass $class, $path, $schema) use ($app) {
                $desc = '';
                if ($schema->title) {
                    $desc = $schema->title;
                }
                if ($schema->description) {
                    $desc .= "\n" . $schema->description;
                }
                if ($fromRefs = $schema->getFromRefs()) {
                    $desc .= "\nBuilt from " . implode("\n" . ' <- ', $fromRefs);
                }

                $class->setDescription(trim($desc));

                $class->setNamespace($this->namespaceResult);
                if ('#' === $path) {
                    $class->setName('Test'); // Class name for root schema
                } elseif (str_contains($path, '#/definitions/')) {
                    $class->setName(PhpCode::makePhpClassName(basename($path)));
                }
//                } elseif ($this->strStartsWithArray($path) && str_contains($path, '#/definitions/')) {
//                    $class->setName(PhpCode::makePhpClassName(basename($path)));
//                }
                $app->addClass($class);
            }
        );

        $builder->getType($schema);
//        $app->clearOldFiles($this->dirResult);
        $app->store($this->dirResult);

        $output->writeln(self::NAME . ' done');
        return Command::SUCCESS;
    }

    private function strStartsWithArray($value): bool
    {
        foreach (self::JSON_SCHEMAS_FILES as $fileName) {
            if (str_starts_with($value, $fileName)) {
                return true;
            }
        }
        return false;
    }
}