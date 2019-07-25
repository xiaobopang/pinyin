<?php

/*
 * Created Date: Friday December 16th 2016
 * Author: Pangxiaobo
 * Last Modified: Friday December 16th 2016 4:05:44 pm
 * Modified By: the developer formerly known as Pangxiaobo at <10846295@qq.com>
 * Copyright (c) 2016 Pangxiaobo
 */

namespace Xiaobopang\Pinyin\Test;

use PHPUnit\Framework\TestCase;
use Xiaobopang\Pinyin\Pinyin;

class PinyinTest extends TestCase
{
    public function testPinyinCase()
    {
        $pinyin = new Pinyin();

        //没有声调
        $this->assertSame('nihaozhongguo', $pinyin->transformWithoutTone('你好，中国'));

        //汉字首字母
        $this->assertSame('ZZ', $pinyin->transformUcwords('中国'));

        //有声调
        $this->assertSame('nǐ hǎo ，zhōng guó ', $pinyin->transformWithTone('你好，中国'));

        //中文名字
        $this->assertSame('PP', $pinyin->getFirstCharacter('peter pang'));
    }
}
