<?php
class home extends controller
{

    private $modelPath = 'client/homeModel';
    public $model;
    public $data = [];

    function __construct()
    {
        $this->model = self::getModel($this->modelPath);
    }

    public function index()
    {
        $this->data['sub_content']['title'] = 'Home | Bliibii TV';
        $this->data['sub_content']['category_names'] = $this->model->getCategoryName();
        // $this->data['sub_content']['category_names'] = $this->model->getGenreName();
        // $this->data['sub_content']['anime_list'] = $this->model->getAnimeList();

        self::render('layouts/clientLayouts/home', $this->data);
    }
}
