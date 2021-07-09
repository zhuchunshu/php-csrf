<?php
if (!function_exists("csrf_token")){
    function csrf_token($time=120){
        return \Csrf\Csrf::get($time);
    }
}