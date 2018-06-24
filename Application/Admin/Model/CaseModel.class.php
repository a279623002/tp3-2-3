<?php

namespace Admin\Model;

use Think\Model;

class CaseModel extends Model
{
    public function addCase($title, $content, $img)
    {

        $data = array(
            'title' => $title, 'info' => $content, 'img' => $img, 'addtime' => time()
        );
        $Model = M('Case')->add($data);

        return $Model;
    }
    public function getCase()
    {
        $data = M('Case')->select();
        return $data;
    }
    public function delCase($id)
    {
        $data = M('Case')->delete($id);
        return $data;
    }
}