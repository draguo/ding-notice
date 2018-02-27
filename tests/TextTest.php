<?php

namespace Draguo\Ding\Tests;

use Draguo\Ding\Message\Text;

class TextTest extends TestCase
{
    // 直接把文字写入消息
    public function testSimple()
    {
        $result = $this->app->send('test Simple');

        $this->assertEquals(0, $result->errcode);
    }

    // use text class
    public function testText()
    {
        $text = new Text('test Text');
        $result = $this->app->send($text);

        $this->assertEquals(0, $result->errcode);
    }

    public function testToOneUserText()
    {
        $result = $this->app->to($this->testUser)->send('test Simple');

        $this->assertEquals(0, $result->errcode);
    }

    public function testToAll()
    {
        $result = $this->app->to('all')->send('test send all');

        $this->assertEquals(0, $result->errcode);
    }
}
