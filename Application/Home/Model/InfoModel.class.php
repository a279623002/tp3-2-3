<?php

namespace Home\Model;

use Think\Model;

class InfoModel extends Model
{

    public function getInfo()
    {
        $data = M('info')->select();
        return $data;
    }

}