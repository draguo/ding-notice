
## 钉钉自定义机器人发送信息

```php
$token = ''; // get from ding group
$ding = new Notice($token);
$arr = [
  '测试',
  '## 标题',
  "### 第二行"
];
// or        
$string = "## this is test \n **blod** ";
$type = 'markdown'; // or default is test
$result = $ding->notice($string,'markdown');
// or
$ding->text($string);
// or
$ding->markdown($arr);
```


[文档](https://open-doc.dingtalk.com/docs/doc.htm?spm=a219a.7629140.0.0.NVWSPm&treeId=257&articleId=105735&docType=1#)

### 消息类型
text

link

markdown



$token = ''; // get from ding group
$ding = new Notice($token);
$arr = [
  '测试',
  '## 标题',
  "### 第二行"
];
$text = new Text('123123123');
$ding->to('all')->send($text);