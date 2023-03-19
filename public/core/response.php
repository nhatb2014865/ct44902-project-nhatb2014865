<?php
class response
{
    public static function redirect($uri){
        $url = $uri;
        header('Location:'.$url);
    }
}
