<?php
class signinModel extends model
{
    public static function index()
    {
        self::insert('tlb_user','id, user, pass','"2", "cus", "000000"');
        
    }
}
