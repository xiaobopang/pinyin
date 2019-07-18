<?php

namespace Xiaobopang\Pinyin\Test;

use PHPUnit_Framework_TestCase;
use Xiaobopang\Pinyin\Pinyin;

class PinyinTest extends PHPUnit_Framework_TestCase
{
    public function testPinyinCase()
    {
        $pinyin = new Pinyin();

        //没有声调
        $this->assertSame("nihaozhongguo", $pinyin->transformWithoutTone("你好，中国"));

        //汉字首字母
        $this->assertSame("ZZ", $pinyin->transformUcwords("中国")); 
        
        //有声调
        $this->assertSame("nǐ hǎo ，zhōng guó ", $pinyin->transformWithTone("你好，中国")); 

        //中文名字
        $this->assertSame("PP", $pinyin->getFirstCharacter('peter pang')); 

    }
}
