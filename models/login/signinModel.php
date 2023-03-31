<?php
class signinModel extends model
{
    public $model;

    function __construct()
    {
        $this->model = new model();
    }

    public function index()
    {
    }

    public function getUserData()
    {
        $this->model->table('tb_user')->select('password,fullname')->values(array('111111','son thuy'))->where('id_user','=','4')->update();
    }
}
