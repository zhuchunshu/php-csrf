<?php
namespace Csrf;
use Delight\Cookie\Cookie;
use Illuminate\Support\Str;

class Csrf {

    /**
     * 设置Csrf-token
     * @return string
     */
    public static function set($time){
        $token = Str::random();
        Cookie::setcookie("csrf_token",$token,time()+$time);
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
    public static function get($time=1200){
        if(!self::has()){
            return self::set($time);
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