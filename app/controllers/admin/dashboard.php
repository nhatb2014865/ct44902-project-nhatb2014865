<?php
class dashboard extends controller
{
    private $modelPath = 'admin/dashboardModel';
    public $model;
    public $data = [];

    function __construct()
    {
        $this->model = self::getModel($this->modelPath);
    }

    public function category()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['name'];
            $this->data['sub_content']['currentPage'] = 'category';
        }
        $this->data['categorys'] = $this->model->getCategory();
        self::render('layouts/adminLayouts/viewCategory', $this->data);
    }

    public function deleteCategory()
    {
        $request = new request();
        $data = $request->getField();
        $deleteStatus = $this->model->deleteCategory($data);
        if ($deleteStatus)
            echo 'success';
    }

    public function addCategory()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['name'];
            $this->data['sub_content']['currentPage'] = 'category';
        }
        $this->data['success'] = session::flash('success');
        $request = new request();
        $data = $request->getField();
        $request->rules([
            'name' => 'required|min:5|max:50|unique:tb_category:category_name'
        ]);
        $request->message([
            'name.required' => 'Tên danh mục không được để trống',
            'name.min' => 'Tên danh mục phải lớn hơn 5 ký tự',
            'name.unique' => 'Tên danh mục đã tồn tại trong hệ thống',
            'name.max' => 'Tên danh mục phải nhỏ hơn 30 ký tự',
        ]);
        if (!empty($data)) {
            $validate = $request->validates();
            if ($validate) {
                $insertStatus = $this->model->addCategory($data);
                if ($insertStatus)
                    session::flash('success', 'Thêm danh mục thành công');
                $response = new response();
                $response->redirect('admin/addCategory');
            } else {
                $this->data['oldData'] = $request->getField();
                $this->data['errors'] = $request->errors();
            }
        }
        self::render('layouts/adminLayouts/addCategory', $this->data);
    }

    public function genre()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['name'];
            $this->data['sub_content']['currentPage'] = 'genre';
        }
        $this->data['genres'] = $this->model->getCategory();
        self::render('layouts/adminLayouts/viewGenre', $this->data);
    }

    public function deleteGenre()
    {
        $request = new request();
        $data = $request->getField();
        $deleteStatus = $this->model->deleteCategory($data);
        if ($deleteStatus)
            echo 'success';
    }

    public function addGenre()
    {
        if (!session::check('admin')) {
            $response = new response();
            $response->redirect('signin');
        } else {
            $userData = session::data('admin');
            $this->data['sub_content']['title'] = 'Admin | Bliibii TV';
            $this->data['sub_content']['username'] = $userData['name'];
            $this->data['sub_content']['currentPage'] = 'genre';
        }
        $this->data['success'] = session::flash('success');
        $request = new request();
        $data = $request->getField();
        $request->rules([
            'name' => 'required|min:5|max:50|unique:tb_category:category_name'
        ]);
        $request->message([
            'name.required' => 'Tên danh mục không được để trống',
            'name.min' => 'Tên danh mục phải lớn hơn 5 ký tự',
            'name.unique' => 'Tên danh mục đã tồn tại trong hệ thống',
            'name.max' => 'Tên danh mục phải nhỏ hơn 30 ký tự',
        ]);
        if (!empty($data)) {
            $validate = $request->validates();
            if ($validate) {
                $insertStatus = $this->model->addCategory($data);
                if ($insertStatus)
                    session::flash('success', 'Thêm danh mục thành công');
                $response = new response();
                $response->redirect('admin/addGenre');
            } else {
                $this->data['oldData'] = $request->getField();
                $this->data['errors'] = $request->errors();
            }
        }
        self::render('layouts/adminLayouts/addGenre', $this->data);
    }

    public function checkUnique($table, $field, $value)
    {
        return $this->model->checkUnique($table, $field, $value);
    }
}
