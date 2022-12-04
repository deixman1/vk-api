<?php

namespace Console;

use Symfony\Component\Console\Application;

require __DIR__ . '/../vendor/autoload.php';

$cli = new Application('Console');
$cli->add(new GenerateVkApiDoc());
$cli->add(new ConcatVkApiDoc());
$cli->run();