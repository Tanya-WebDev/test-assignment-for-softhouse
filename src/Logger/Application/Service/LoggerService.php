<?php

declare(strict_types=1);

namespace App\Logger\Application\Service;

use App\Logger\Application\Factory\LoggerFactory;

class LoggerService
{
    private LoggerFactory $loggerFactory;
    private string $defaultLoggerType;

    public function __construct(LoggerFactory $loggerFactory, string $defaultLoggerType)
    {
        $this->loggerFactory = $loggerFactory;
        $this->defaultLoggerType = $defaultLoggerType;
    }

    public function log(string $message): void
    {
        $logger = $this->loggerFactory->createFromType($this->defaultLoggerType);
        $logger->send($message);
    }

    public function logTo(string $type, string $message): void
    {
        $logger = $this->loggerFactory->createFromType($type);
        $logger->send($message);
    }

    public function logToAll(string $message): void
    {
        foreach ($this->loggerFactory->getAllLoggers() as $logger) {
            $logger->send($message);
        }
    }
}
