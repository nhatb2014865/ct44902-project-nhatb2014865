<?php
class signinModel extends model
{
    public function verify($table, $field, $value)
    {
        return $this->select($field)->table($table)->where($field, '=', $value)->get();
    }

    public function getUserData($field)
    {
        $table = 'tb_user';
        $query =  $this->table($table);
        foreach ($field as $key => $value) {
            $query = $query->where($key, '=', $value);
        }
        $data = $query->get();
        return  reset($data);
    }
}
