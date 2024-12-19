<?php

declare(strict_types=1);

namespace App\Logger\Infrastructure;

class FileLogger extends AbstractLogger
{
    protected string $type = 'file';

    /**
     * @inheritDoc
     */
    public function send(string $message): void
    {
        echo "Writing to file: $message" . PHP_EOL;
    }
}