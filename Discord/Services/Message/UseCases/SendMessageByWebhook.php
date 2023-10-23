<?php

namespace CatboxPhpBot\Discord\Services\Message\UseCases;

use CatboxPhpBot\Discord\Contacts\ISendMessageByWebhook;
use CatboxPhpBot\Discord\Request\SendMessageRequest;

class SendMessageByWebhook implements ISendMessageByWebhook
{
    private SendMessageRequest $request;

    public function __construct()
    {
        $this->request = new SendMessageRequest();
    }

    public function handle(string $message, string $username, string $webhookUri): bool
    {
        return $this->request->handle($message, $username, $webhookUri);
    }
}