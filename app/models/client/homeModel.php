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
        $nameArr= [];
        if (!empty($names))
            foreach ($names as $key => $name)
                $nameArr[] = $name['genre_name'];
        return $nameArr;
    }

    public function getAnime($genre_name)
    {
    }
}
