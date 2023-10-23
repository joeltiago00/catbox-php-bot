<?php

namespace CatboxPhpBot\Catbox\Request;

use CatboxPhpBot\Shared\Request\Client;
use GuzzleHttp\Exception\GuzzleException;

class GetVideoRequest extends Client
{
    private const BASE_URL = 'https://files.catbox.moe/%s.mp4';

    public function handle(string $randomString): ?string
    {
        $url = sprintf(self::BASE_URL, $randomString);

        try {
            $this->get($url);
        } catch (GuzzleException) {
            return null;
        }

        return $url;
    }
}