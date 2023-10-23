<?php

namespace CatboxPhpBot\tests\Feature\Discord;

use CatboxPhpBot\Discord\Discord;
use PHPUnit\Framework\TestCase;

class SendMessageByWebhookTest extends TestCase
{
    public function testSuccess()
    {
        $discord = new Discord();

        $this->assertTrue(
            $discord->message()->sendByWebhook('test message', 'test', getenv('DISCORD_WEBHOOK_URL'))
        );
    }

    public function testFail()
    {
        $discord = new Discord();

        $this->assertFalse(
            $discord->message()->sendByWebhook('test message', 'test', 'teste')
        );
    }
}