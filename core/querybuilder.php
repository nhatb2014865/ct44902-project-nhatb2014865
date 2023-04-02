<?php
trait querybuilder
{
    private $tableName = '';
    private $where = '';
    private $selectField = '*';
    private $values = '';

    private function resetQuery()
    {
        $this->tableName = '';
        $this->where = '';
        $this->selectField = '*';
        $this->values = '';
    }

    protected function get()
    {
        $pdo_Obj = $this->db->selectDB($this->tableName, $this->selectField, $this->where);
        $data_Arr = self::fetchAll($pdo_Obj);
        $this->resetQuery();
        return $data_Arr;
    }

    protected function insert()
    {
        $insertStatus = $this->db->insertDB($this->tableName, $this->selectField, $this->values);
        $this->resetQuery();
        return $insertStatus;
    }

    protected function update()
    {
        $select_Arr = explode(',', $this->selectField);
        $values_Arr = explode(',', $this->values);
        $updateStr = '';
        foreach ($select_Arr as $key => $value) {
            $updateStr .= "$value = $values_Arr[$key] ,";
        }
        $updateStr = rtrim($updateStr, ',');
        $updateStatus = $this->db->updateDB($this->tableName, $updateStr, $this->where);
        $this->resetQuery();
        return $updateStatus;
    }

    protected function delete()
    {
        $deleteStatus = $this->db->deleteDB($this->tableName, $this->where);
        $this->resetQuery();
        return $deleteStatus;
    }

    protected function table($tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }

    protected function where($field, $compare, $value)
    {
        if (empty($this->where)) {
            $operator =  "WHERE";
        } else {
            $operator =  "AND";
        }
        $this->where .= " $operator $field $compare '$value'";;
        return $this;
    }

    protected function select($selectField)
    {
        if (!empty($selectField)) {
            $this->selectField = $selectField;
        }
        return $this;
    }

    protected function values($values_Arr = [])
    {
        foreach ($values_Arr as $value) {
            $this->values .= "'$value',";
        }
        $this->values = rtrim($this->values, ',');
        return $this;
    }
}
