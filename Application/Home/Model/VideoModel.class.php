<?php

namespace Home\Model;

use Think\Model;

class VideoModel extends Model
{

    public function getVideo()
    {
        $data = M('Video')->select();
        return $data;
    }

}