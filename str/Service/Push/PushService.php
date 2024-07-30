<?php

namespace Service\Push;

use IService\MessageServiceInterface;

class PushService implements MessageServiceInterface
{
    public function send(string $recipient, string $message): void
    {
        echo "Sending Push Notification to $recipient: $message\n";
    }
}