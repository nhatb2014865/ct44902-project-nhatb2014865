<?php
class dashboardModel extends model
{
    public function getCategory()
    {
        return $this->table('tb_category')->get();
    }

    public function deleteCategory($data)
    {
        extract($data);
        $deleteStatus = $this->table('tb_category')->where($field, '=', $value)->delete();
        return $deleteStatus;
    }

    public function addCategory($data)
    {
        foreach ($data as $field => $value)
            $insertStatus = $this->table('tb_category')->select($field)->values($value)->insert();
        if ($insertStatus)
            return true;
        return false;
    }
    
    public function getGenre()
    {
        return $this->table('tb_genre')->get();
    }

    public function deleteGenre($data)
    {
        extract($data);
        $deleteStatus = $this->table('tb_genre')->where($field, '=', $value)->delete();
        return $deleteStatus;
    }

    public function addGenre($data)
    {
        foreach ($data as $field => $value)
            $insertStatus = $this->table('tb_genre')->select($field)->values($value)->insert();
        if ($insertStatus)
            return true;
        return false;
    }

    public function checkUnique($table, $field, $value)
    {
        if (empty(($this->table($table)->select($field)->where($field, '=', $value)->get())))
            return false;
        return true;
    }
}
