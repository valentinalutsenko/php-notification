<?php

use Service\Email\EmailService;
use Service\Push\PushService;
use Service\Sms\SmsService;
use str\Notification;


require_once $_SERVER['DOCUMENT_ROOT'] . '/str/Service/Email/EmailService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/str/Service/Sms/SmsService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/str/Service/Push/PushService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/str/Notification.php';

// Создание экземпляров классаов
$emailService = new EmailService();
$smsService = new SmsService();
$pushService = new PushService();
$notification= new Notification();


$notification->addService('email', $emailService);
$notification->addService('sms', $smsService);
$notification->addService('push', $pushService);

$notification->send('email', 'hello@work.com', 'Email');
$notification->send('sms', '88004672345', 'SMS');
$notification->send('push', 'api_id', 'Push');
