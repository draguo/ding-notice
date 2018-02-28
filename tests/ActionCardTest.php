<?php

namespace Draguo\Ding\Tests;

use Draguo\Ding\Message\ActionCard;

class ActionCardTest extends TestCase
{
    // 整体跳转
    public function testJumpAllSend()
    {
        $card = new ActionCard([
            "title" => "乔布斯 20 年前想打造一间苹果咖啡厅，而它正是 Apple Store 的前身",
            "text" => "![screenshot](@lADOpwk3K80C0M0FoA)
               ### 乔布斯 20 年前想打造的苹果咖啡厅
               Apple Store 的设计正从原来满满的科技感走向生活化，而其生活化的走向其实可以追溯到 20 年前苹果一个建立咖啡馆的计划",
            "hideAvatar" => "0",
            "btnOrientation" => "0",
            "singleTitle" => "阅读全文",
            "singleURL" => "https://www.dingtalk.com/"
        ]);

        $result = $this->app->send($card);

        $this->assertEquals(0, $result->errcode);
    }

    public function testJumpEveryOne()
    {
        $card = new ActionCard([
            "title" => "乔布斯 20 年前想打造一间苹果咖啡厅，而它正是 Apple Store 的前身",
            "text" => "![screenshot](@lADOpwk3K80C0M0FoA) 
               ### 乔布斯 20 年前想打造的苹果咖啡厅 
                Apple Store 的设计正从原来满满的科技感走向生活化，而其生活化的走向其实可以追溯到 20 年前苹果一个建立咖啡馆的计划",
            "hideAvatar" => "0",
            "btnOrientation" => "0",
            "btns" => [
                [
                    "title" => "内容不错",
                    "actionURL" => "https://www.dingtalk.com/"
                ],
                [
                    "title" => "不感兴趣",
                    "actionURL" => "https://www.dingtalk.com/"
                ]
            ]
        ]);

        $result = $this->app->send($card);

        $this->assertEquals(0, $result->errcode);
    }
}
