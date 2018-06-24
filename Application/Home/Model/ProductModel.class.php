<?php

namespace Home\Model;

use Think\Model;

class ProductModel extends Model
{

    public function getPro()
    {
        $data = M('Product')->select();
        return $data;
    }

}