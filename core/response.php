<?php
class response
{
    public static function redirect($uri = '')
    {
        if (preg_match('~^(http|https)~is', $uri)) {
            $uri = $uri;
        } else {
            $uri = _web_root . '/' . $uri;
        }
        header('Location:'.$uri);
    }
}
