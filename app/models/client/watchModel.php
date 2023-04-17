<?php
class watchModel extends model
{
    public function getCategoryName()
    {
        $data = $this->table('tb_category')->get();
        foreach ($data as $key => $value)
            $name[] = $value['category_name'];
        return $name;
    }

    public function getAnimeInfo($anime_id)
    {
        $anime = $this->table('tb_anime')->where('anime_id', '=', $anime_id)->get();
        if (!empty($anime))
            return $anime[0];
    }

    public function getCurrentEp($episode_num)
    {
        $ep = $this->table('tb_episode')->where('episode_num', '=', $episode_num)->get();
        if (!empty($ep))
            return $ep[0];
    }

    public function getEpisode($anime_id)
    {
        $episode = $this->table('tb_episode')->where('anime_id', '=', $anime_id)->get();
        if (!empty($episode))
            return $episode;
    }
}
