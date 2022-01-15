<?php

use captchaimg\facade\CaptchaImg;
/**
 * 生成验证码
 */
function captchaimg(){
    return CaptchaImg::create();
}

/**
 * 验证
 */
function captchaimg_check($code,$key){
    return CaptchaImg::check($code,$key);
}