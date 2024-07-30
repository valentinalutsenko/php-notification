<?php

namespace Service\Email;

use IService\MessageServiceInterface;

class EmailService implements MessageServiceInterface
{
    public function send(string $recipient, string $message): void {
        echo "Sending Email to $recipient: $message\n";
    }
}