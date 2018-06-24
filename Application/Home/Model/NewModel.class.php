<?php

namespace Home\Model;

use Think\Model;

class NewModel extends Model
{

    public function getNew()
    {
        $data = M('New')->select();
        return $data;
    }

}