<?php

namespace captchaimg\facade;

use think\Facade;

class CaptchaImg extends Facade{

    protected static function getFacadeClass()
    {
        return \captchaimg\CaptchaImg::class;
    }
}