<?php

namespace CatboxPhpBot\Discord\Contacts;

interface ISendMessageByWebhook
{
    public function handle(string $message, string $username, string $webhookUri): bool;
}