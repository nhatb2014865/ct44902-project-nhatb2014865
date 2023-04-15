<?php
class signout extends controller
{
    function index()
    {
        session::delete();
        echo 'success';
    }
}
