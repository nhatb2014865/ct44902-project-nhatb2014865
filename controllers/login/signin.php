<?php
class signin extends controller
{
    protected $modelName = 'login/signinModel';

    public function index()
    {
        $model = self::getModel($this->modelName);

        self::render('layouts/loginLayouts/signin');
    }
}
