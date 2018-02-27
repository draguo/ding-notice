<?php

namespace Draguo\Ding\Tests;


use Draguo\Ding\Message\Markdown;

class MarkdownTest extends TestCase
{
    private function generateContent()
    {
        // @ 单个人的时候要求在文字内也要有对应的手机号
        return new Markdown([
            "title" => "杭州天气",
            "text" => "#### 杭州天气 @{$this->testUser}\n".
                "> 9度，西北风1级，空气良89，相对温度73%\n\n".
                "> ![screenshot](http://image.jpg)\n".
                "> ###### 10点20分发布 [天气](http://www.thinkpage.cn/) \n"
        ]);
    }

    public function testSend()
    {
        $markdown = $this->generateContent();

        $result = $this->app->send($markdown);

        $this->assertEquals(0, $result->errcode);
    }

    public function testToSomeUser()
    {
        $markdown = $this->generateContent();

        $result = $this->app->to($this->testUser)->send($markdown);

        $this->assertEquals(0, $result->errcode);
    }

    public function testToAll()
    {
        $markdown = $this->generateContent();

        $result = $this->app->to('all')->send($markdown);

        $this->assertEquals(0, $result->errcode);
    }
}