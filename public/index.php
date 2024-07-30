<?php

use Service\Email\EmailService;
use Service\Push\PushService;
use Service\Sms\SmsService;
use str\Notification;

// Создание экземпляров классаов
$emailService = new EmailService();
$smsService = new SmsService();
$pushService = new PushService();

// Создание экземпляра универсального сервиса отправки сообщений
$messageSender = new Notification();

// Добавление сервисов в универсальный сервис
$messageSender->addService('email', $emailService);
$messageSender->addService('sms', $smsService);
$messageSender->addService('push', $pushService);

// Отправка одного сообщения
$messageSender->send('email', 'user@example.com', 'Hello via Email!');
$messageSender->send('sms', '+123456789', 'Hello via SMS!');
$messageSender->send('push', 'push_token_123', 'Hello via Push!');
