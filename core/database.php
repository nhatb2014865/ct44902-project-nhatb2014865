<?php

use Exception as GlobalException;

class database
{
    protected static $conn;

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
                if (!self::$conn)
                    self::$conn = mysqli_connect($hostname, $username, $password, $database);
            } catch (GlobalException $ex) {
                // render databaseError;
                die($ex->getMessage());
            }
        } else
            echo 'Không xác định được database hãy kiểm tra lại file config database';
    }

    protected static function runQuery($query = '')
    {
        if (!empty($query)) {
            $data = self::$conn->query($query);
            if (!is_bool($data)) {
                return $data;
            }
        } else echo 'Lỗi cú pháp truy vấn database';
    }
}
