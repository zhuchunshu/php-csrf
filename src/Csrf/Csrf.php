<?php
namespace Csrf;
use Delight\Cookie\Cookie;
use Illuminate\Support\Str;

require_once __DIR__."/../../vendor/autoload.php";


class Csrf {

    /**
     * 设置Csrf-token
     * @return string
     */
    public static function set(){
        $token = Str::random();
        Cookie::setcookie("csrf_token",$token,time()+120);
        return $token;
    }

    /**
     * 判断Csrf-token存在
     * @return bool
     */
    public static function has(){
        return Cookie::exists("csrf_token");
    }

    /**
     * 获取Csrf-token
     * @return mixed
     */
    public static function get(){
        if(!self::has()){
            return self::set();
        }
        return Cookie::get("csrf_token");
    }

    /**
     * 验证Csrf-token
     * @param $token
     * @return bool
     */
    public static function check($token){
        if($token==self::get()){
            return true;
        }else{
            return false;
        }
    }

}