<?php
class description extends controller
{

    private $modelPath = 'client/descriptionModel';
    public $model;
    public $data = [];

    function __construct()
    {
        $this->model = self::getModel($this->modelPath);
    }

    public function index($anime_id = '')
    {
        if (!empty($anime_id)) {
            $data = $this->model->getAnimeInfo($anime_id);
            $this->data['sub_content']['title'] = $data['anime_name'] . ' | Bliibii TV';
            $this->data['anime'] = $data;
            $episodes = $this->model->getEpisode($anime_id);
            if (!empty($episodes)) {
                foreach ($episodes as $key => $episode) {
                    $this->data['episodes'][] = $episode;
                }
            }
        } else {
            $response = new response();
            $response->redirect('home');
        }
        $this->data['sub_content']['category_names'] = $this->model->getCategoryName();
        self::render('layouts/clientLayouts/descriptionLayouts', $this->data);
    }
}
