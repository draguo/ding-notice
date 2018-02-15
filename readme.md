[文档](https://open-doc.dingtalk.com/docs/doc.htm?spm=a219a.7629140.0.0.NVWSPm&treeId=257&articleId=105735&docType=1#)

### 初始化
```php
    $ding = new Notice($token);
```
### 消息类型
@功能 
    // or  to 里面是为了 @ 某人 all 就是 @ 全体， 可以是对应的手机号数组或字符串，字符串中间用英文逗号分隔
#### text
```php
    $message = new Text('hello world');
    $result = $ding->to('all')->send($message);
    $result = $ding->to(['18912341234'])->send('hello world');
```
#### link
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

#### 独立跳转ActionCard类型

#### FeedCard类型