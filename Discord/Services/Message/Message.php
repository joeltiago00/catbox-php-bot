<?php

namespace CatboxPhpBot\Discord\Services\Message;

use CatboxPhpBot\Discord\Contacts\IMessage;
use CatboxPhpBot\Discord\Services\Message\UseCases\SendMessageByWebhook;

class Message implements IMessage
{
    private SendMessageByWebhook $sendMessageByWebhook;

    public function __construct()
    {
        $this->sendMessageByWebhook = new SendMessageByWebhook();
    }

    public function sendByWebhook(string $message, string $username, string $webhookUri): bool
    {
        return $this->sendMessageByWebhook->handle($message, $username, $webhookUri);
    }
}