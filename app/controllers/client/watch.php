<?php
class watch extends controller
{

    private $modelPath = 'client/watchModel';
    public $model;
    public $data = [];

    function __construct()
    {
        $this->model = self::getModel($this->modelPath);
    }

    public function index($anime_id = '', $anime_name = '', $episode = '')
    {
        if (!empty($anime_id)) {
            $data = $this->model->getAnimeInfo($anime_id);
            if (!empty($data)) {
                $this->data['sub_content']['title'] = 'Watch ' . $data['anime_name'] . ' | Bliibii TV';
                $this->data['anime'] = $data;
            }
            $episodes = $this->model->getEpisode($anime_id);
            if (!empty($episodes)) {
                if (!empty($episode))
                    $this->data['current_episode'] = $this->model->getCurrentEp($episode);
                foreach ($episodes as $key => $episode) {
                    $this->data['episodes'][] = $episode;
                }
            }
        } else {
            $response = new response();
            $response->redirect('home');
        }
        $this->data['sub_content']['category_names'] = $this->model->getCategoryName();
        self::render('layouts/clientLayouts/watch', $this->data);
    }
}
