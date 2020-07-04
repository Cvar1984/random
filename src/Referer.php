<?php

class Referer {
    public static function random()
    {
        $list[] = 'http://facebook.com';
        $list[] = 'http://m.facebook.com';
        $list[] = 'http://google.com.sg';
        $list[] = 'http://twitter.com';
        $list[] = 'http://google.co.id';
        $list[] = 'http://google.com.my';
        $list[] = 'http://google.jp';
        $list[] = 'http://google.us';
        $list[] = 'http://google.tl';
        $list[] = 'http://google.ac';
        $list[] = 'http://google.ad';
        $list[] = 'http://google.ae';
        $list[] = 'http://google.af';
        $list[] = 'http://google.ag';
        $list[] = 'http://google.ru';
        $list[] = 'http://google.by';
        $list[] = 'http://google.ca';
        $list[] = 'http://google.cn';
        $list[] = 'http://google.cl';
        $list[] = 'http://google.cm';
        $list[] = 'http://google.cv';
        $list[] = 'http://google.gg';
        $list[] = 'http://google.ge';
        $list[] = 'http://google.gr';
        $list[] = 'http://google.com.tw';
        $list[] = 'http://ahmia.fi';
        $list[] = 'http://search.yahoo.com';
        $list[] = 'http://www.beinyu.com';
        $list[] = 'http://duckduckgo.com';
        $list[] = 'http://youtube.com';
        $list[] = 'http://telegram.org';

        $random = array_rand($list, 1);
        return $list[$random];
    }
}
