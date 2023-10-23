<?php

namespace CatboxPhpBot\Discord\Request;

use CatboxPhpBot\Shared\Request\Client;
use GuzzleHttp\Exception\GuzzleException;

class SendMessageRequest extends Client
{

    public function handle(string $message, string $username, string $webhookUri): bool
    {
        try {
            $this->post($webhookUri, [
                'json' => [
                    'username' => $username,
                    'content' => $message
                ],
                'headers' => [
                    'Content-Type' => 'application/json'
                ]
            ]);
        } catch (GuzzleException) {
            return false;
        }

        return true;
    }
}