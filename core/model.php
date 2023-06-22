<?php
class model
{
    protected $db;

    use querybuilder;

    function __construct()
    {
        $this->db = new database();
    }

    private static function fetchAll($pdo_Obj)
    {
        $arr_Data = [];
        while($rowData = $pdo_Obj->fetch(PDO::FETCH_ASSOC))
            array_push($arr_Data,$rowData);
        return $arr_Data;
    }

    private static function fetch($pdo_Obj)
    {
        $arr_Data = $pdo_Obj->fetch(PDO::FETCH_ASSOC);
        return $arr_Data;
    }
}
