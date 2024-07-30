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

    //Оправка одного сообщения
    public function send(string $type, string $recipient, string $message): void
    {
        if (!isset($this->services[$type])) {
            throw new Exception("Страница $type не найден.");
        }

        $this->services[$type]->send($recipient, $message);
    }
}