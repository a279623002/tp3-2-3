<?php

namespace Home\Model;

use Think\Model;

class CaseModel extends Model
{

    public function getCase()
    {
        $data = M('Case')->select();
        return $data;
    }

}