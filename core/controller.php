<?php
class controller
{
    public static function getModel($model)
    {
        require '' . _dir_root . '/models/' . $model . '.php';
        $model = new $model();
        return $model;
    }

    public static function render($view, $data = [])
    {
        extract($data);
        require '' . _dir_root . '/views/' . $view . '.php';
    }
}
