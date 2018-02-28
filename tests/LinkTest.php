<?php

namespace Draguo\Ding\Tests;

use Draguo\Ding\Message\Link;

class LinkTest extends TestCase
{
    public function testSend()
    {
        $link = new Link([
            "title" => "文字标题",
            "text" => "文字主体部分",
            "picUrl" => "https://img.alicdn.com/tfs/TB1VfZtaUgQMeJjy0FeXXXOEVXa-498-193.png",
            "messageUrl" => "https://mp.weixin.qq.com"
        ]);
        $result = $this->app->send($link);

        $this->assertEquals(0, $result->errcode);
    }
}
