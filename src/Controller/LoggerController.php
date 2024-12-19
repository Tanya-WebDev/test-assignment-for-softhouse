<?php

declare(strict_types=1);

namespace App\Controller;

use App\Logger\Application\Service\LoggerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoggerController extends AbstractController
{
    private LoggerService $loggerService;

    public function __construct(LoggerService $loggerService)
    {
        $this->loggerService = $loggerService;
    }

    #[Route('/log')]
    public function log(): Response
    {
        $this->loggerService->log('Default log message');
        return new Response('Message logged to default logger.');
    }

    #[Route('/log/all')]
    public function logToAll(): Response
    {
        $this->loggerService->logToAll("This is a log message to all loggers.");
        return new Response("Log message sent to all loggers.");
    }

    #[Route('/log/{type}')]
    public function logTo(string $type): Response
    {
        $this->loggerService->logTo($type, "This is a log message to $type.");
        return new Response("Log message sent to $type logger.");
    }
}