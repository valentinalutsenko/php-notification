<?php

namespace Service\Push;

require_once $_SERVER['DOCUMENT_ROOT'] . '/str/Service/Push/PushService.php';
use IService\MessageServiceInterface;

class PushService implements MessageServiceInterface
{
    public function send(string $to, string $message): void
    {
        echo "Отправка Push-уведомления на $to: $message\n";
    }
}