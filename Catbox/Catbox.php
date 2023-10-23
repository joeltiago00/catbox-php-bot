<?php

namespace CatboxPhpBot\Catbox;

use CatboxPhpBot\Catbox\Contracts\ICatbox;
use CatboxPhpBot\Catbox\Contracts\IVideo;
use CatboxPhpBot\Catbox\Services\Video\Video;

class Catbox implements ICatbox
{
    private IVideo $video;

    public function __construct()
    {
        $this->video = new Video();
    }

    public function video(): IVideo
    {
        return $this->video;
    }
}