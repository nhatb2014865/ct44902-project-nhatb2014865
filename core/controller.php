<?php
class controller
{
    public static function getModel($modelUrl)
    {
        require _dir_root . '/app/models/' . $modelUrl . '.php';
        $model = array_filter(explode('/', $modelUrl));
        $model = $model[array_key_last($model)];
        $model = new $model();
        return $model;
    }

    public static function render($view, $data = [])
    {
        extract($data);
        require '' . _dir_root . '/app/views/' . $view . '.php';
    }
}
