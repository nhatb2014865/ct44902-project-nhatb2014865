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

    public function index($category = 'For%20you')
    {
        $this->data['sub_content']['title'] = 'Home | Bliibii TV';
        $this->data['sub_content']['category_names'] = $this->model->getCategoryName();
        if (!empty($category))
            $this->data['genre_names'] = $this->model->getGenreName($category);
        else
            $this->data['genre_names'] = $this->model->getGenreName('For%20you');
        if (!empty($this->data['genre_names']))
            foreach ($this->data['genre_names'] as $key => $genre_name) {
                print_r($genre_name);
                // $this->data['animes'][$genre_name] = $this->model->getAnime($category);
            }

        self::render('layouts/clientLayouts/home', $this->data);
    }
}
