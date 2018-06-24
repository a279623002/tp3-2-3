<?php

namespace Admin\Model;

use Think\Model;

class NewModel extends Model
{
    public function addNew($title, $content, $img)
    {

        $data = array(
            'title' => $title, 'content' => $content, 'img' => $img, 'addtime' => time()
        );
        $Model = M('New')->add($data);

        return $Model;
    }
    public function getNew()
    {
        $data = M('New')->select();
        return $data;
    }
    public function delNew($id)
    {
        $data = M('New')->delete($id);
        return $data;
    }
}