# pinyin
汉字转带有声调的汉语拼音，汉字转无声调的汉语拼音，汉字转成汉语拼音首字母


#### Install

```
composer require xiaobopang/pinyin

```

#### Example

```php

<?php

require_once './vendor/autoload.php';

use Xiaobopang\Pinyin\Pinyin;

$pinyin = new Pinyin();

//没有声调
$testStr = $pinyin->transformWithoutTone("你好，中国");

var_dump($testStr); //string(16) "woshizhongguoren"

//汉字首字母
$testStr1 = $pinyin->transformUcwords("中国");

var_dump($testStr1);  //string(3) "ZGR"

//有声调
$testStr2 = $pinyin->transformWithTone("你好，中国");

var_dump($testStr2);  //string(26) "wǒ shì zhōng guó rén "

    
```
