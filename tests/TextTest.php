<?php

namespace Draguo\Ding\Tests;

use Draguo\Ding\Message\Text;

class TextTest extends TestCase
{
    // 直接把文字写入消息
    public function testSimple()
    {
        $result = $this->app->send('test Simple');

    }

    // use text class
    public function testText()
    {
        $text = new Text('test Text');
        $result = $this->app->send($text);

    }

    public function testToOneUserText()
    {
        $result = $this->app->to($this->testUser)->send('test Simple');

    }

    public function testToAll()
    {
        $result = $this->app->to('all')->send('test send all');

    }
}
