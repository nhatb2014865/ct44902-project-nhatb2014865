<?php
class signupModel extends model
{
    public function checkUnique($table, $field, $value)
    {
        if (empty(($this->table($table)->select($field)->where($field, '=', $value)->get())))
            return false;
        return true;
    }

    public function createAccount($field)
    {
        $field['user_role'] = '1';
        unset($field['comfirmPassword']);
        $values = $field;
        $field = array_keys($field);

        return $this->table('tb_user')->select($field)->values($values)->insert();
    }
}
