<?php

namespace Draguo\Ding\Tests;


use Draguo\Ding\Message\Markdown;

class MarkdownTest extends TestCase
{
    public function testSend()
    {
        $markdown = new Markdown([
            "title" => "杭州天气",
            "text" => "#### 杭州天气 @156xxxx8827\n".
                "> 9度，西北风1级，空气良89，相对温度73%\n\n".
                "> ![screenshot](http://image.jpg)\n".
                "> ###### 10点20分发布 [天气](http://www.thinkpage.cn/) \n"
        ]);

        $result = $this->app->send($markdown);

        $this->assertEquals(0, $result->errcode);
    }
}