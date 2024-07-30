<?php

namespace Service\Sms;

use IService\MessageServiceInterface;

class SmsService implements MessageServiceInterface
{
    public function send(string $recipient, string $message): void {
        echo "Отправка SMS на номер: $recipient: $message\n";
    }
}