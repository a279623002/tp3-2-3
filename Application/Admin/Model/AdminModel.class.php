<?php

namespace Admin\Model;

use Think\Model;

class AdminModel extends Model
{
    public function checkLogin($name, $password)
    {
        $Model = M('admin')->where(array('name' => $name, 'password' => $password))->find();

        return $Model;
    }
}