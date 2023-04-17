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

    public function index($category = '')
    {
        $this->data['sub_content']['title'] = 'Home | Bliibii TV';
        $this->data['sub_content']['category_names'] = $this->model->getCategoryName();
        if (!empty($category)) {
            $this->data['genre_names'] = $this->model->getGenreName($category);
        } else {
            $response = new response();
            $response->redirect(_web_root.'/For%20you');
        }

        if (!empty($this->data['genre_names']))
            foreach ($this->data['genre_names'] as $key => $genre_name) {
                $this->data['animes'][$genre_name] = $this->model->getAnime($category, $genre_name);
            }
        self::render('layouts/clientLayouts/home', $this->data);
    }

    public function getAnimeInfo()
    {
        $request = new request();
        $anime_id = $request->getField('anime_id')['anime_id'];
        $data = $request->getField();
        $anime = $this->model->getAnimeInfo($anime_id);
        echo '<a class=\'anime-info-popup card\' href=\'description/' . strtolower($anime['anime_id']) . '\' target=\'_blank\'
                style=\'position: absolute; top: '.$data['top'].'px;left: '.$data['left'].'px; z-index : 100; height : '.$data['h'].'px;width : '.$data['w'].'px;\'>
                <img src=\'' . _web_root . '/uploads/' . $anime['anime_file'] . '\' class=\'card-img-top\' alt=\'...\'\'>
                <div class=\'info-container card-body\'>
                <div class=\'info-name text-start\'>' . $anime['anime_name'] . '</div>
                <div class=\'d-flex text-black mb-1\'>
                <div class=\'info-item-score\'><i class=\'fa-solid fa-star\'></i> 5.0</div>
                <div class=\'info-item-year\'>' . $anime['anime_year'] . '</div>
                <div class=\'info-item-update\'>' . $anime['anime_episode'] . ' Episode</div>
                </div>
                <div class=\'info-item-description text-black\' > ' . $anime['anime_des'] . '</div >
                </div>
                </a>';
    }
}
