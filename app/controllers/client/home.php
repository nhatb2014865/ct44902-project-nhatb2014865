<?php
class home extends controller
{

    private $modelPath = 'login/signupModel';
    public $model;
    public $data = [];

    function __construct()
    {
        $this->model = self::getModel($this->modelPath);
    }

    public function index()
    {
        $this->data['sub_content']['title'] = 'Home | Bliibii TV';
        self::render('layouts/clientLayouts/home', $this->data);
    }
}
