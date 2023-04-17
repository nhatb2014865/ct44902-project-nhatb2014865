<?php
class dashboardModel extends model
{
    public function getCategory()
    {
        return $this->table('tb_category')->get();
    }

    public function getGenre($data)
    {
        foreach ($data as $field => $value)
            return $this->table('tb_genre')->where($field, '=', $value)->get();
    }

    public function getAnime($data)
    {
        if (empty($data)) {
                return $this->table('tb_anime')->get();
        }
        foreach ($data as $field => $value)
            return $this->table('tb_anime')->where($field, '=', $value)->get();
    }

    public function getEpisode($data)
    {
        foreach ($data as $field => $value)
            return $this->table('tb_episode')->where($field, '=', $value)->get();
    }

    public function addCategory($data)
    {
        foreach ($data as $field => $value)
            $insertStatus = $this->table('tb_category')->select($field)->values($value)->insert();
        if ($insertStatus)
            return true;
        return false;
    }

    public function addGenre($data)
    {
        foreach ($data as $field => $value) {
            $fields[] = $field;
            $values[] = $value;
        }
        $insertStatus = $this->table('tb_genre')->select($fields)->values($values)->insert();
        if ($insertStatus)
            return true;
        return false;
    }

    public function addAnime($data)
    {
        foreach ($data as $field => $value) {
            $fields[] = $field;
            $values[] = $value;
        }
        $insertStatus = $this->table('tb_anime')->select($fields)->values($values)->insert();
        if ($insertStatus)
            return true;
        return false;
    }

    public function addEpisode($data)
    {
        foreach ($data as $field => $value) {
            $fields[] = $field;
            $values[] = $value;
        }
        $insertStatus = $this->table('tb_episode')->select($fields)->values($values)->insert();
        if ($insertStatus)
            return true;
        return false;
    }

    public function deleteGenre($data)
    {
        extract($data);
        $deleteStatus = $this->table('tb_genre')->where($field, '=', $value)->delete();
        return $deleteStatus;
    }

    public function deleteAnime($data)
    {
        extract($data);
        $deleteStatus = $this->table('tb_anime')->where($field, '=', $value)->delete();
        return $deleteStatus;
    }
    public function deleteEpisode($data)
    {
        extract($data);
        $deleteStatus = $this->table('tb_episode')->where($field, '=', $value)->delete();
        return $deleteStatus;
    }

    public function deleteCategory($data)
    {
        extract($data);
        $deleteStatus = $this->table('tb_category')->where($field, '=', $value)->delete();
        return $deleteStatus;
    }

    public function checkUnique($table, $field, $value)
    {
        if (empty(($this->table($table)->select($field)->where($field, '=', $value)->get())))
            return false;
        return true;
    }

    public function checkUniqueArray($table, $fields, $values)
    {
        $query = $this->select($fields)->table($table);
        foreach ($fields as $key => $value)
            $query = $query->where($value, '=', $values[$key]);
        if (empty($query->get()))
            return false;
        return true;
    }

    public function getCategoryName($data)
    {
        $data = $this->table('tb_category')->where('category_id', '=', $data)->get();
        foreach ($data as $key => $value)
            return $value['category_name'];
    }

    public function getGenreName($data)
    {
        $data = $this->table('tb_genre')->where('genre_id', '=', $data)->get();
        foreach ($data as $key => $value)
            return $value['genre_name'];
    }
}
