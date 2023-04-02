<?php
class request
{
    private function getMethod()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        return $method;
    }

    private function isGet()
    {
        return ($this->getMethod() == 'get') ? true : false;
    }

    private function isPost()
    {
        return ($this->getMethod() == 'post') ? true : false;
    }

    public function getField()
    {
        if ($this->isGet()) {
            if (!empty($_GET)) {
                foreach ($_GET as $key => $value) {
                    if (is_array($value)) {
                        $dataField[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else
                        $dataField[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
            echo 'get';
        }
        if ($this->isPost()) {
            if (!empty($_POST)) {
                foreach ($_POST as $key => $value) {
                    if (is_array($value)) {
                        $dataField[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else
                        $dataField[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
            echo 'post';

        }

        return $dataField;
    }
}
