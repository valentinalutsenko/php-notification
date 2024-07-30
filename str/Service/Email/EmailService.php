<?php

namespace Service\Email;

require_once $_SERVER['DOCUMENT_ROOT'] . '/str/IService/MessageServiceInterface.php';
use IService\MessageServiceInterface;

class EmailService implements MessageServiceInterface
{
    public function send(string $to, string $message): void
    {
        echo "Отправка электронного письма по адресу: $to: $message\n";
    }
}