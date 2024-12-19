<?php

declare(strict_types=1);

namespace App\Logger\Infrastructure;

class DatabaseLogger extends AbstractLogger
{
    protected string $type = 'database';

    /**
     * @inheritDoc
     */
    public function send(string $message): void
    {
        echo "Logging to database: $message" . PHP_EOL;
    }
}