<?php
class homeModel extends model
{
    public function getCategoryName()
    {
        $data = $this->table('tb_category')->get();
        foreach ($data as $key => $value)
            $name[] = $value['category_name'];
        return $name;
    }
}
