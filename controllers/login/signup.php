<?php
class signup extends controller
{
    protected $modelName = '';

    public function index()
    {
        self::render('layouts/loginLayouts/signup');
    }
}
