<?php

namespace Wnx\LaravelStats\Classifiers;

use Illuminate\Console\Command;
use Wnx\LaravelStats\ReflectionClass;
use Wnx\LaravelStats\Contracts\Classifier;

class CommandClassifier implements Classifier
{
    public function name(): string
    {
        return 'Commands';
    }

    public function satisfies(ReflectionClass $class): bool
    {
        return $class->isSubclassOf(Command::class);
    }
}
