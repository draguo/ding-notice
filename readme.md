钉钉自定义机器人 api 的包装  

<p align="center">
<a href="https://travis-ci.org/draguo/ding-notice"><img src="https://travis-ci.org/draguo/ding-notice.svg?branch=master" alt="Build Status"></a>
</p>

### 请先阅读 [文档](https://open-doc.dingtalk.com/docs/doc.htm?spm=a219a.7629140.0.0.NVWSPm&treeId=257&articleId=105735&docType=1#)

### 使用
```php
    // token 获取方法请参考上面的文档，传入 access_token= 后面的部分
    $ding = new Notice($token);
```
#### @功能 
  to 方法是支持 @ 某人 或 @ 所有人，   
  如果是 @ 指定人，可以是对应的手机号数组或以英文逗号分隔的字符串  
  如果是 @ 所有人，传入字符串 all
### 消息类型
#### text 类型
```php
    $message = new Text('hello world');
    $result = $ding->to('all')->send($message);
    // or
    $result = $ding->to(['18912341234'])->send('hello world');
```
#### link 类型
```php
$link = new \Draguo\Ding\Message\Link([
        "text" => "文字主体部分",
        "title" => "文字标题",
        "picUrl" => "",
        "messageUrl" => "https://mp.weixin.qq.com"
]);
$result = $notice->send($link);
```
#### markdown
```php
$markdown = new \Draguo\Ding\Message\Markdown([
    "title" => "杭州天气",
    "text" => "#### 杭州天气 @156xxxx8827\n".
        "> 9度，西北风1级，空气良89，相对温度73%\n\n".
        "> ![screenshot](http://image.jpg)\n".
        "> ###### 10点20分发布 [天气](http://www.thinkpage.cn/) \n"
]);
$result = $notice->send($markdown);
```
#### 整体跳转ActionCard类型
```php
$card = new \Draguo\Ding\Message\ActionCard([
    "title" => "乔布斯 20 年前想打造一间苹果咖啡厅，而它正是 Apple Store 的前身",
    "text" => "![screenshot](@lADOpwk3K80C0M0FoA)
               ### 乔布斯 20 年前想打造的苹果咖啡厅
               Apple Store 的设计正从原来满满的科技感走向生活化，而其生活化的走向其实可以追溯到 20 年前苹果一个建立咖啡馆的计划",
    "hideAvatar" => "0",
    "btnOrientation" => "0",
    "singleTitle" => "阅读全文",
    "singleURL" => "https://www.dingtalk.com/"
    ]);
$result = $notice->send($card);
```
#### 独立跳转ActionCard类型
```php
$card = new \Draguo\Ding\Message\ActionCard([
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
$result = $notice->send($card);
```
#### FeedCard类型
```php
$feedCard = new \Draguo\Ding\Message\FeedCard([
    "links" => [
        [
            "title" => "时代的火车向前开",
            "messageURL" => "https://mp.weixin.qq.com/s?__biz=MzA4NjMwMTA2Ng==&mid=2650316842&idx=1&sn=60da3ea2b29f1dcc43a7c8e4a7c97a16&scene=2&srcid=09189AnRJEdIiWVaKltFzNTw&from=timeline&isappinstalled=0&key=&ascene=2&uin=&devicetype=android-23&version=26031933&nettype=WIFI",
            "picURL" => "https://www.dingtalk.com/"
        ],
        [
            "title" => "时代的火车向前开2",
            "messageURL" => "https://mp.weixin.qq.com/s?__biz=MzA4NjMwMTA2Ng==&mid=2650316842&idx=1&sn=60da3ea2b29f1dcc43a7c8e4a7c97a16&scene=2&srcid=09189AnRJEdIiWVaKltFzNTw&from=timeline&isappinstalled=0&key=&ascene=2&uin=&devicetype=android-23&version=26031933&nettype=WIFI",
            "picURL" => "https://www.dingtalk.com/"
        ]
    ]
]);

$result = $notice->send($feedCard);
```
