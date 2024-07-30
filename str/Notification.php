<?php
namespace str;

use Exception;
use IService\MessageServiceInterface;

class Notification
{
    public function addService(string $type, MessageServiceInterface $service): void
    {
        $this->services[$type] = $service;
    }

    public function send(string $type, string $user, string $message): void
    {
        if (!isset($this->services[$type])) {
            throw new Exception("Страница не найден.");
        }
        $this->services[$type]->send($user, $message);
    }
}