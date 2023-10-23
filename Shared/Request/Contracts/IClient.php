<?php

namespace CatboxPhpBot\Shared\Request\Contracts;

use Psr\Http\Message\ResponseInterface;

interface IClient
{
    public function get(string $uri): ResponseInterface;

    public function post(string $uri, array $options = []): ResponseInterface;
}