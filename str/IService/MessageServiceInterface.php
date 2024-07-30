<?php

namespace IService;

interface MessageServiceInterface
{
    public function send(string $recipient, string $message): void;
}