<?php

namespace Draguo\Ding\Tests;

use Draguo\Ding\Message\Text;

class TextTest extends TestCase
{
    // 直接把文字写入消息
    public function testSimple()
    {
        $this->app->send('test Simple');
    }

    // use text class
    public function testText()
    {
        $text = new Text('test Text');
        $this->app->send($text);
    }

    public function testToOneUserText()
    {
        $this->app->to($this->testUser)->send('test Simple');
    }

    public function testToAll()
    {
        $this->app->to('all')->send('test send all');
    }
}
