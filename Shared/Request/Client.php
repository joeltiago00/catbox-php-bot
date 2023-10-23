<?php

namespace CatboxPhpBot\Shared\Request;

use CatboxPhpBot\Shared\Request\Contracts\IClient;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\ResponseInterface;
use Spatie\GuzzleRateLimiterMiddleware\RateLimiterMiddleware;

abstract class Client implements IClient
{
    private GuzzleClient $client;

    public function __construct()
    {
        $stack = HandlerStack::create();
        $stack->push(RateLimiterMiddleware::perMinute(10000));
        $this->client = new GuzzleClient([
            'handler' => $stack
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function get(string $uri): ResponseInterface
    {
        return $this->client
            ->get($uri);
    }

    /**
     * @throws GuzzleException
     */
    public function post(string $uri, array $options = []): ResponseInterface
    {
        return $this->client
            ->post($uri, $options,);
    }
}