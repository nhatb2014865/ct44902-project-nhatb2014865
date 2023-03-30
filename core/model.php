<?php
class model extends database
{
    protected static function select($table = '', $scope = '', $condition = '')
    {
        $query = 'SELECT ' . $scope . ' FROM ' . $table . ' ' . $condition;
        $data = self::runQuery($query);
        return $data;
    }

    protected static function insert($table = '', $attribute = 'attr1, attr2,....', $value = '"val1", "val2",.....')
    {
        $query = 'INSERT INTO ' . $table . ' (' . $attribute . ') VALUES (' . $value . ')';
        self::runQuery($query);
    }

    protected static function update()
    {
    }
}
