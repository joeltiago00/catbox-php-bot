<?php

namespace CatboxPhpBot\Catbox\Services\Video\UseCases;

use CatboxPhpBot\Catbox\Contracts\IGetVideo;
use CatboxPhpBot\Catbox\Request\GetVideoRequest;

class GetVideo implements IGetVideo
{
    private GetVideoRequest $request;

    public function __construct()
    {
        $this->request = new GetVideoRequest();
    }

    public function handle(string $random): ?string
    {
        return $this->request->handle($random);
    }
}