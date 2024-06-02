<?php
namespace Admin\FpolyBaseWeb18401\Commons;
class Helper{
    public static function debug($data){
        echo '<pre>';
        print_r($data);
        die;
    }
    public static function assert($path){
        return $_ENV['BASE_URL'] .$path;
    }
}
