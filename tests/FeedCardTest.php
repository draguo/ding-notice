<?php

namespace Draguo\Ding\Tests;

use Draguo\Ding\Message\FeedCard;

class FeedCardTest extends TestCase
{
    public function testSend()
    {
        $feedCard = new FeedCard([
            "links" => [
                [
                    "title" => "时代的火车向前开",
                    "messageURL" => "https://mp.weixin.qq.com",
                    "picURL" => "https://www.dingtalk.com/"
                ],
                [
                    "title" => "时代的火车向前开2",
                    "messageURL" => "https://mp.weixin.qq.com",
                    "picURL" => "https://www.dingtalk.com/"
                ]
            ]
        ]);

        $this->app->send($feedCard);

    }
}
