<?php

class database
{
    private static $conn;

    public function __construct()
    {
        self::connect();
    }

    private static function connect()
    {
        global $__config;
        extract($__config['database']);

        if (!empty($database)) {
            try {
                if (!self::$conn) {
                    $dsn = 'mysql:host=' . $hostname . ';dbname=' . $database;
                    $options = array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    );
                    self::$conn = new PDO($dsn, $username, $password, $options);
                }
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        } else
            echo 'Có lỗi khi kết nối với Data hãy kiểm tra lại file config database';
    }

    public static function runQuery($query = '')
    {
        try {
            $data = self::$conn->prepare($query);
            $data->execute();
            return $data;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectDB($table, $selectField, $condition)
    {
        $query = "SELECT $selectField FROM $table $condition";
        $pdo_Obj = self::runQuery($query,array($table));
        return $pdo_Obj;
    }

    public function insertDB($table, $selectField, $values)
    {
        $query = "INSERT INTO $table ( $selectField ) VALUES ( $values )";
        $status = self::runQuery($query);
        if ($status) return true;
        else return false;
    }

    public function updateDB($table, $updateStr, $condition)
    {
        $query = "UPDATE $table SET $updateStr $condition";
        $status = self::runQuery($query);
        if ($status) return true;
        else return false;
    }

    public function deleteDB($table, $condition)
    {
        $query = "DELETE FROM $table $condition";
        $status = self::runQuery($query);
        if ($status) return true;
        else return false;
    }
}
