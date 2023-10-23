<?php

namespace CatboxPhpBot\Catbox\Contracts;

interface IGetVideo
{
    public function handle(string $random): ?string;
}