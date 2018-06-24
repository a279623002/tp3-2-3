<?php

namespace Admin\Model;

use Think\Model;

class ProductModel extends Model
{
    public function addPro($title, $content, $img)
    {

        $data = array(
            'title' => $title, 'info' => $content, 'img' => $img
        );
        $Model = M('Product')->add($data);

        return $Model;
    }
    public function getPro()
    {
        $data = M('Product')->select();
        return $data;
    }
    public function delPro($id)
    {
        $data = M('Product')->delete($id);
        return $data;
    }
}