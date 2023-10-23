<?php

namespace CatboxPhpBot\Discord\Contacts;

interface IMessage
{
    public function sendByWebhook(string $message, string $username, string $webhookUri): bool;
}