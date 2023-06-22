<?php
class signup extends controller
{
    private $modelPath = 'login/signupModel';
    public $model;
    public $data = [];

    function __construct()
    {
        $this->model = self::getModel($this->modelPath);
    }

    public function index()
    {
        $request = new request();
        if ($request->isPost())
            $this->postUserInfo();
        else {
            $this->data['errors'] = session::flash('errors');
            $this->data['oldData'] = session::flash('oldData');
        }
        if (session::check('user')) {
            $respone = new response();
            $respone->redirect('home');
        }
        if (session::check('admin')) {
            $respone = new response();
            $respone->redirect('admin');
        }
        self::render('layouts/loginLayouts/signup', $this->data);
    }

    public function postUserInfo()
    {
        $request = new request();
        $request->rules([
            'user_email' => 'required|email|min:6|unique:tb_user:user_email',
            'user_name' => 'required|min:6|max:30',
            'user_password' => 'required|min:8',
            'comfirmPassword' => 'required|min:8|match:user_password'
        ]);
        $request->message([
            'user_email.required' => 'Email không được để trống',
            'user_email.email' => 'Định dạng email không hợp lệ',
            'user_email.min' => 'Email phải lớn hơn 6 ký tự',
            'user_email.unique' => 'Tài khoản đã tồn tại trong hệ thống',
            'user_name.required' => 'Tên không được để trống',
            'user_name.min' => 'Tên phải lớn hơn 6 ký tự',
            'user_name.max' => 'Tên phải nhỏ hơn 30 ký tự',
            'user_password.required' => 'Mật khẩu không được để trống',
            'user_password.min' => 'Email phải lớn hơn 8 ký tự',
            'comfirmPassword.required' => 'Mật khẩu không được để trống',
            'comfirmPassword.min' => 'Mật khẩu phải lớn hơn 8 ký tự',
            'comfirmPassword.match' => 'Mật khẩu không trùng khớp'
        ]);
        $validate = $request->validates();
        if (!$validate) {
            session::flash('errors', $request->errors());
            session::flash('oldData', $request->getField());

            $respone = new response();
            $respone->redirect('signup');
        } else {
            $createStatus = $this->model->createAccount($request->getField());
            if ($createStatus) {
                $respone = new response();
                $respone->redirect('home');
            }
        }
    }

    public function checkUnique($table, $field, $value)
    {
        return $this->model->checkUnique($table, $field, $value);
    }
}
