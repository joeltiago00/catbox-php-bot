<?php

namespace CatboxPhpBot\Discord;

use CatboxPhpBot\Discord\Contacts\IDiscord;
use CatboxPhpBot\Discord\Contacts\IMessage;
use CatboxPhpBot\Discord\Services\Message\Message;

class Discord implements IDiscord
{
    private IMessage $message;

    public function __construct()
    {
        $this->message = new Message();
    }

    public function message(): IMessage
    {
        return $this->message;
    }
}