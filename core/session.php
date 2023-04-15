<?php
class session
{
    public static function init()
    {
        session_start();
    }

    public static function data($key, $value = '')
    {
        if (!empty($value)) {
            $_SESSION[$key] = $value;
            return true;
        } else {
            return !empty($_SESSION[$key]) ? $_SESSION[$key] : false;
        }
    }

    public static function flash($key, $value = '')
    {
        $dataFlash = self::data($key, $value);
        if (empty($value)) {
            self::delete($key);
        }
        return $dataFlash;
    }

    public static function delete($key = '')
    {
        if (!empty($key)) {
            unset($_SESSION[$key]);
        } else {
            session_destroy();
        }
    }

    public static function check($key)
    {
        if (!empty($key)) {
            return isset($_SESSION[$key]) ? true : false;
        }
    }
}
