<?php

namespace Admin\Model;

use Think\Model;

class InfoModel extends Model
{
    public function addInfo($title, $content, $img)
    {
        $data = array(
            'title' => $title, 'content' => $content, 'img' => $img
        );
        $Model = M('info')->add($data);

        return $Model;
    }
    public function getInfo()
    {
        $data = M('info')->select();
        return $data;
    }
    public function delInfo($id)
    {
        $data = M('info')->delete($id);
        return $data;
    }
}