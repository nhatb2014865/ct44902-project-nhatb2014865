<?php
class homeModel extends model
{
    public function getCategoryName()
    {
        $data = $this->table('tb_category')->get();
        foreach ($data as $key => $value)
            $name[] = $value['category_name'];
        return $name;
    }

    public function getGenreName($category_name)
    {
        $data = $this->table('tb_category')->select('category_id')->where('category_name', '=', $category_name)->get();
        if (!empty($data))
            foreach ($data as $key => $id)
                $names = $this->table('tb_genre')->select('genre_name')->where('category_id', '=', $id['category_id'])->get();
        $nameArr = [];
        if (!empty($names))
            foreach ($names as $key => $name)
                $nameArr[] = $name['genre_name'];
        return $nameArr;
    }

    public function getAnime($category, $genre_name)
    {
        $category_id = $this->table('tb_category')->select('category_id')->where('category_name', '=', $category)->get()[0]['category_id'];
        $genre_id = $this->table('tb_genre')->select('genre_id')->where('genre_name', '=', $genre_name)->where('category_id', '=', $category_id)->get()[0]['genre_id'];
        $data = $this->table('tb_anime')->where('category_id', '=', $category_id)->where('genre_id', '=', $genre_id)->get();
        if (!empty($data))
            return $data;
    }

    public function getAnimeInfo($anime_id)
    {
        $anime = $this->table('tb_anime')->where('anime_id', '=', $anime_id)->get();
        if (!empty($anime))
            return $anime[0];
    }
}
