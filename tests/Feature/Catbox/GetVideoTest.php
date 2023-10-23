<?php

namespace CatboxPhpBot\tests\Feature\Catbox;

use CatboxPhpBot\Catbox\Catbox;
use PHPUnit\Framework\TestCase;

class GetVideoTest extends TestCase
{
    public function testSuccess()
    {
        $catbox = new Catbox();

        $result = $catbox->video()->get('jaevw1');

        $this->assertIsString($result);
        $this->assertEquals('https://files.catbox.moe/jaevw1.mp4', $result);
    }

    public function testFail()
    {
        $catbox = new Catbox();

        $this->assertNull($catbox->video()->get('jevw1'));
    }
}