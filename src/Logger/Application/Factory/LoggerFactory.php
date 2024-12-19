<?php

declare(strict_types=1);

namespace App\Logger\Application\Factory;

use App\Logger\Domain\Interfaces\LoggerInterface;
use InvalidArgumentException;

class LoggerFactory
{
    private iterable $loggers;

    public function __construct(iterable $loggers)
    {
        $this->loggers = $loggers;
    }

    public function createFromType(string $type): LoggerInterface
    {
        foreach ($this->loggers as $logger) {
            if ($logger->getType() === $type) {
                return $logger;
            }
        }

        throw new InvalidArgumentException("Unknown logger type: $type");
    }

    public function getAllLoggers(): iterable
    {
        return $this->loggers;
    }
}