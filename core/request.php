<?php
class request
{
    private $__rules = [];
    private $__message = [];
    private $__errors = [];
    private $__rejectErrors = [];

    public function getMethod()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        return $method;
    }

    public function isGet()
    {
        return ($this->getMethod() == 'get') ? true : false;
    }

    public function isPost()
    {
        return ($this->getMethod() == 'post') ? true : false;
    }

    public function getField()
    {
        $dataField = [];
        if ($this->isGet()) {
            if (!empty($_GET)) {
                foreach ($_GET as $key => $value) {
                    if (is_array($value)) {
                        $dataField[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else
                        $dataField[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
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
        }
        return $dataField;
    }

    public function rules($rules = [])
    {
        $this->__rules = $rules;
    }

    public function message($__message = [])
    {
        $this->__message = $__message;
    }

    public function validates()
    {
        $checkValidate = true;
        $this->__rules = array_filter($this->__rules);
        if (!empty($this->__rules)) {
            $dataField = $this->getField();
            foreach ($this->__rules as $fieldName => $ruleItem) {
                $ruleItemArr = explode('|', $ruleItem);
                foreach ($ruleItemArr as $rule) {
                    $ruleName = null;
                    $ruleValue = null;
                    $ruleArr = explode(':', $rule);
                    $ruleName = reset($ruleArr);
                    if (count($ruleArr) > 1) {
                        $ruleValue = end($ruleArr);
                    }

                    if ($ruleName == 'required') {
                        if (empty(trim($dataField[$fieldName]))) {
                            $this->setError($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }
                    if ($ruleName == 'min') {
                        if (strlen(trim($dataField[$fieldName])) < $ruleValue) {
                            $this->setError($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }
                    if ($ruleName == 'max') {
                        if (strlen(trim($dataField[$fieldName])) > $ruleValue) {
                            $this->setError($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }
                    if ($ruleName == 'email') {
                        if (!filter_var($dataField[$fieldName], FILTER_VALIDATE_EMAIL)) {
                            $this->setError($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }
                    if ($ruleName == 'match') {
                        if (trim($dataField[$fieldName]) != trim($dataField[$ruleValue])) {
                            $this->setError($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }
                    if ($ruleName == 'unique') {
                        $tableName = null;
                        $fieldCheck = null;
                        if (!empty($ruleArr[1])) {
                            $tableName = $ruleArr[1];
                        }
                        if (!empty($ruleArr[2])) {
                            $fieldCheck = $ruleArr[2];
                        }
                        if (!empty($tableName) && !empty($fieldCheck)) {
                            $controller =  app::$app->getCurrentController();
                            if (method_exists($controller, 'checkUnique')) {
                                $checkUnique = call_user_func_array([$controller, 'checkUnique'], [$tableName, $fieldCheck, $dataField[$fieldName]]);
                                if ($checkUnique) {
                                    $this->setError($fieldName, $ruleName);
                                    $checkValidate = false;
                                }
                            }
                        }
                    }
                    if ($ruleName == 'unique_array') {
                        $tableName = null;
                        $fieldCheck = null;
                        if (!empty($ruleArr[1])) {
                            $tableName = $ruleArr[1];
                        }
                        if (!empty($ruleArr[2])) {
                            $fieldChecks = $ruleArr[2];
                            $fieldChecks = explode('/', $fieldChecks);
                        }
                        if (!empty($tableName) && !empty($fieldChecks)) {
                            $controller =  app::$app->getCurrentController();
                            if (method_exists($controller, 'checkUniqueArray')) {
                                foreach ($fieldChecks as $key => $fieldCheck)
                                    $value[] = $dataField[$fieldCheck];
                                $checkUnique = call_user_func_array([$controller, 'checkUniqueArray'], [$tableName, $fieldChecks, $value]);
                                if ($checkUnique) {
                                    $this->setError($fieldName, $ruleName);
                                    $checkValidate = false;
                                }
                            }
                        }
                    }
                    if ($ruleName == 'verify') {
                        $tableName = null;
                        $fieldCheck = null;
                        if (!empty($ruleArr[1])) {
                            $tableName = $ruleArr[1];
                        }
                        if (!empty($ruleArr[2])) {
                            $fieldCheck = $ruleArr[2];
                        }
                        if (!empty($tableName) && !empty($fieldCheck)) {
                            $controller =  app::$app->getCurrentController();
                            if (method_exists($controller, 'verify')) {
                                $checkUnique = call_user_func_array([$controller, 'verify'], [$tableName, $fieldCheck, $dataField[$fieldName]]);
                                if (!$checkUnique) {
                                    $this->setError($fieldName, $ruleName);
                                    $checkValidate = false;
                                }
                            }
                        }
                    }
                    if ($ruleName == 'reject') {
                        $fieldCheck = null;
                        $error = null;
                        if (!empty($ruleArr[1])) {
                            $fieldCheck = $ruleArr[1];
                        }
                        if (!empty($ruleArr[2])) {
                            $error = $ruleArr[2];
                        }
                        if (!empty($fieldCheck) && !empty($error)) {
                            $deleteField = $fieldName;
                            $this->__rejectErrors[$fieldCheck] = [$error, $deleteField];
                        }
                    }
                }
            }
        }
        return $checkValidate;
    }

    public function errors($fieldName = '')
    {
        if (!empty($this->__errors)) {

            if (empty($fieldName)) {
                foreach ($this->__errors as $key => $value) {
                    if (!empty($this->__rejectErrors[$key])) {
                        if (array_keys($value)[0] == $this->__rejectErrors[$key][0])
                            unset($this->__errors[$this->__rejectErrors[$key][1]]);
                    }
                }
                $errorArr = [];
                foreach ($this->__errors as $key => $value) {
                    $errorArr[$key] = reset($value);
                }
                return $errorArr;
            }
            return reset($this->__errors[$fieldName]);
        }
    }

    public function setError($fieldName, $ruleName)
    {
        $this->__errors[$fieldName][$ruleName] = $this->__message[$fieldName . '.' . $ruleName];
    }

    public function upload()
    {
        $name = array_keys($_FILES);
        $name = $name[0];
        move_uploaded_file($_FILES[$name]['tmp_name'], _dir_root . '/public/uploads/' . $_FILES[$name]['name']);
    }

    public function upload2()
    {
        $name = array_keys($_FILES);
        $name = $name[1];
        move_uploaded_file($_FILES[$name]['tmp_name'], _dir_root . '/public/uploads/' . $_FILES[$name]['name']);
    }
}
