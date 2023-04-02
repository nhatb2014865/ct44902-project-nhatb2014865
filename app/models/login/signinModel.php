<?php
class signinModel extends model
{
    public function index()
    {
        // var_dump($this->table('tb_user')->where('fullname','=','someone')->delete());
        // var_dump($this->table('tb_user')->select('username,password,fullname')->values(array('guest', '000000', 'someone'))->insert());
        // print_r($this->request->getField());
    }

    public function getUserData()
    {
    }
}
