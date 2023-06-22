<?php
class signin extends controller
{
    private $modelPath = 'login/signinModel';
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
        self::render('layouts/loginLayouts/signin', $this->data);
    }

    public function postUserInfo()
    {
        $request = new request();
        $request->rules([
            'user_email' => 'required|email|min:6|verify:tb_user:user_email',
            'user_password' => 'required|min:8|verify:tb_user:user_password|reject:user_email:verify'
        ]);
        $request->message([
            'user_email.required' => 'Email không được để trống',
            'user_email.email' => 'Định dạng email không hợp lệ',
            'user_email.min' => 'Email phải lớn hơn 6 ký tự',
            'user_email.verify' => 'Email không tồn tại',
            'user_password.required' => 'Mật khẩu không được để trống',
            'user_password.min' => 'Mật khẩu phải lớn hơn 8 ký tự',
            'user_password.verify' => 'Mật khẩu không chính xác'
        ]);
        $validate = $request->validates();

        if (!$validate) {
            session::flash('errors', $request->errors());
            session::flash('oldData', $request->getField());
            $respone = new response();
            $respone->redirect('signin');
        } else {
            $userData =  $this->model->getUserData($request->getField());
            if ($this->checkRole($userData)) {
                session::data('admin', $userData);
            } else session::data('user', $userData);
        }
    }

    public function verify($table, $field, $value)
    {
        return $this->model->verify($table, $field, $value);
    }

    public function checkRole($userData)
    {
        if ($userData['user_role'])
            return false;
        return true;
    }
}
