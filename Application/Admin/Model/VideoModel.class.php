<?php

namespace Admin\Model;

use Think\Model;

class VideoModel extends Model
{
    public function addVideo($title, $src)
    {

        $data = array(
            'title' => $title, 'src' => $src, 'addtime' => time()
        );
        $Model = M('Video')->add($data);

        return $Model;
    }
    public function getVideo()
    {
        $data = M('Video')->select();
        return $data;
    }
    public function delVideo($id)
    {
        $data = M('Video')->delete($id);
        return $data;
    }
}