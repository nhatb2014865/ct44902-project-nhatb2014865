<?php
class signout extends controller{
    public function index(){
        $response = new response();

        $url = _web_root.'/login/signin';
        $response::redirect($url);
    }
}