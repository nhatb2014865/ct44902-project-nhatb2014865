<?php
class signin extends controller
{
    protected $modelName = 'login/signinModel';

    public function index()
    {
        $model = self::getModel($this->modelName);

        $model->index();

        self::render('layouts/loginLayouts/signin');
    }
}
