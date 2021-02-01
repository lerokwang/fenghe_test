<?php
/**
 * @file F_CValidate
 * @brief validate
 * @version 1.0
 *
 * @author lerok
 * @date 2021-01-29
 *
 */

namespace Fenghe;


class F_CValidate {

    /**
     * 驗證是否為正確的Email格式
     * @param $email string
     * @return bool
     */
    public static function email($email){
        return preg_match('/^\w+[-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $email)>0;
    }

    /**
     * 驗證是否為英文字母組成
     * @param $english string
     * @return bool
     */
    public static function english($english){
        return preg_match('/^[A-Za-z]+$/', $english)>0;
    }

    /**
     * 驗證探否為英文+數字所組成
     * @param $en
     * @return bool
     */
    public static function EN($en){
        return preg_match('/^[A-Za-z0-9]+$/', $en)>0;
    }
}