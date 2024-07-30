<?php

namespace IService;

interface MessageServiceInterface
{
    public function send(string $to, string $message): void;
}