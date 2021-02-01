<?php
/**
 * @file F
 * @brief helper
 * @version 1.0
 *
 * @author lerok
 * @date 2021-01-29
 *
 */
namespace Fenghe;

class F {
    /**
     * 以 GET 方式取得參數值
     * @param $name string
     * @param $default mixed
     * @return mixed
     */
    public static function get($name, $default){
        return request()->get($name, $default);
    }

    /**
     * 以 POST 方式取得參數值
     * @param $name string
     * @param $default mixed
     * @return mixed
     */
    public static function post($name, $default){
        return request()->post($name, $default);
    }

    /**
     * 取得參數值
     * @param $name string
     * @param $default mixed
     * @return mixed
     */
    public static function request($name, $default){
        return self::request($name, $default);
    }

    /**
     *  移除標籤
     * @param $s mixed
     * @return string|string[]|null
     */
    public static function removeTag($s){
        $pat = "/<(\/?)(script|i?frame|style|html|body|li|i|map|title|img|link|span|u|font|table|tr|b|marquee|td|strong|div|a|p|input|textarea|meta|\?|\%)([^>]*?)>/isU";
        return preg_replace($pat, "", $s);
    }
    
}