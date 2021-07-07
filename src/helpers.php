<?php
if (!function_exists("csrf_token")){
    function csrf_token(){
        return \Csrf\Csrf::get();
    }
}