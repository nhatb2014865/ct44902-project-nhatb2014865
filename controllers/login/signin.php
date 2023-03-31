<?php
class signin extends controller
{
    protected $modelName = 'login/signinModel';

    public function index()
    {
        $model = self::getModel($this->modelName);

        $model->getUserData();

        self::render('layouts/loginLayouts/signin');
    }
}
