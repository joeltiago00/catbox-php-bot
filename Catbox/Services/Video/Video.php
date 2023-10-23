<?php

namespace CatboxPhpBot\Catbox\Services\Video;

use CatboxPhpBot\Catbox\Contracts\IGetRandomVideo;
use CatboxPhpBot\Catbox\Contracts\IGetVideo;
use CatboxPhpBot\Catbox\Contracts\IVideo;
use CatboxPhpBot\Catbox\Services\Video\UseCases\GetRandomVideo;
use CatboxPhpBot\Catbox\Services\Video\UseCases\GetVideo;

class Video implements IVideo
{
    private IGetVideo $getVideo;
    private IGetRandomVideo $getRandomVideo;

    public function __construct()
    {
        $this->getVideo = new GetVideo();
        $this->getRandomVideo = new GetRandomVideo();
    }

    public function get(string $random): ?string
    {
        return $this->getVideo->handle($random);
    }

    public function getRandom(): ?string
    {
        return $this->getRandomVideo->handle();
    }
}