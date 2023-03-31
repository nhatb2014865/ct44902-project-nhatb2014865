<?php
class model
{
    private $db;

    use querybuilder;

    function __construct()
    {
        $this->db = new database();
    }

    private static function fetchAll($pdo_Obj)
    {
        $arr_Data = $pdo_Obj->fetch(PDO::FETCH_ASSOC);
        return $arr_Data;
    }
}
