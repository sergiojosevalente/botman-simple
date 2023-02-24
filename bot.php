<?php

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Telegram\TelegramDriver;

require_once "vendor/autoload.php";

$config = [
    // Your driver-specific configuration
    "telegram" => [
        "token" => '6011528705:AAEMOq9T5GAlRKZPp9hD1zV9ecOq5eMHfyQ'
    ]
];

DriverManager::loadDriver(TelegramDriver::class);

$botman = BotManFactory::create($config);

$botman->hears('/hello', function (BotMan $bot) {
    $bot->reply('Hello yourself.');
});

$botman->listen();
