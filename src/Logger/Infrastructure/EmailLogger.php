<?php

declare(strict_types=1);

namespace App\Logger\Infrastructure;

class EmailLogger extends AbstractLogger
{
    protected string $type = 'email';

    /**
     * @inheritDoc
     */
    public function send(string $message): void
    {
        echo "Sending email log: $message" . PHP_EOL;
    }
}