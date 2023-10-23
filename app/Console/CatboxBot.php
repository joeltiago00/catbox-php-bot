<?php

namespace CatboxPhpBot\app\Console;

use Carbon\Carbon;
use CatboxPhpBot\Catbox\Catbox;
use CatboxPhpBot\Catbox\Contracts\ICatbox;
use CatboxPhpBot\Discord\Contacts\IDiscord;
use CatboxPhpBot\Discord\Discord;

class CatboxBot
{
    private const DEFAULT_USERNAME = 'catbox';
    private ICatbox $catbox;
    private IDiscord $discord;

    public function __construct()
    {
        $this->catbox = new Catbox();
        $this->discord = new Discord();
    }

    public function handle(): void
    {
        $now = Carbon::now();
        $expireAt = Carbon::now()->addSeconds((int)getenv('CATBOX_TTL_SCRIPT') ?? 360);

        do {
            $videoUri = $this->catbox->video()->getRandom();

            echo sprintf('video url: %s', $videoUri);

            if (getenv('DISCORD_AUTO_MESSAGE') && getenv('DISCORD_WEBHOOK_URL')) {
                $this->discord
                    ->message()
                    ->sendByWebhook($videoUri, self::DEFAULT_USERNAME, getenv('DISCORD_WEBHOOK_URL'));
            }
        } while ($now->lessThan($expireAt));
    }
}