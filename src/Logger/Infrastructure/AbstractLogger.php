<?php

declare(strict_types=1);

namespace App\Logger\Infrastructure;

use App\Logger\Domain\Interfaces\LoggerInterface;
use LogicException as LogicExceptionAlias;

abstract class AbstractLogger implements LoggerInterface
{
    protected string $type;

    /**
     * @inheritDoc
     */
    abstract public function send(string $message): void;

    /**
     * @inheritDoc
     */
    public function sendByLogger(string $message, string $loggerType): void
    {
        if ($loggerType === $this->type) {
            $this->send($message);
        } else {
            throw new LogicExceptionAlias("Logger type mismatch.");
        }
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @inheritDoc
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}