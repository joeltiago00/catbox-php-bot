<?php

namespace CatboxPhpBot\Catbox\Contracts;

interface IVideo
{
    public function get(string $random): ?string;

    public function getRandom(): ?string;
}