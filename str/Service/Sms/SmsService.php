<?php

namespace Service\Sms;

require_once $_SERVER['DOCUMENT_ROOT'] . '/str/Service/Push/PushService.php';
use IService\MessageServiceInterface;

class SmsService implements MessageServiceInterface
{
    public function send(string $to, string $message): void
    {
        echo "Отправка SMS на номер: $to: $message\n";
    }
}