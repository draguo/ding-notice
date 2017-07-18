
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