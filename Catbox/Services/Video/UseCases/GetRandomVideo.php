<?php

namespace CatboxPhpBot\Catbox\Services\Video\UseCases;

use CatboxPhpBot\Catbox\Contracts\IGetRandomVideo;
use CatboxPhpBot\Catbox\Contracts\IGetVideo;

class GetRandomVideo implements IGetRandomVideo
{
    private const CHARACTER = 'abcdefghijklmnopqrstuvwxyz0123456789';
    private int $defaultUriLength = 6;
    private IGetVideo $getVideo;

    public function __construct()
    {
        $this->getVideo = new GetVideo();
    }

    public function handle(): string
    {
        do {
            $response = $this->getVideo->handle($this->generateRandomString());
        } while (is_null($response));

        return $response;
    }

    private function generateRandomString(): string
    {
        $charactersLength = strlen(self::CHARACTER);
        $randomString = '';

        for ($i = 0; $i < $this->defaultUriLength; $i++) {
            $randomString .= self::CHARACTER[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}