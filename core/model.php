<?php
class model
{
    protected $db;
    protected $request;

    use querybuilder;

    function __construct()
    {
        $this->db = new database();
        $this->request=new request();
    }

    private static function fetchAll($pdo_Obj)
    {
        $arr_Data = $pdo_Obj->fetch(PDO::FETCH_ASSOC);
        return $arr_Data;
    }
}
