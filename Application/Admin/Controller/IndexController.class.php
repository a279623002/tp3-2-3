<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Model;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }
    public function login()
    {
        if (!empty(session('admin'))) {
            echo "<script>window.location.href='" . U('content', '', '') . "';</script>";
        }
        $this->display();
    }
    public function logout()
    {
        if (!empty(session('admin'))) {
            session('admin', null);
            echo "<script>alert('退出成功，即将跳转到登录页');window.location.href='" . U('login', '', '') . "';</script>";
        } else {
            echo "<script>window.location.href='" . U('login', '', '') . "';</script>";
        }

    }
    public function edit()
    {
        if (empty(session('admin'))) {
            echo "<script>window.location.href='" . U('login', '', '') . "';</script>";
        }
        $this->assign('admin', session('admin'));
        $this->display();
    }
    public function checkLogin()
    {
        $account = I('post.');
        $Model = D('Admin');
        $data = $Model->checkLogin($account['username'], $account['password']);
        if (!empty($data)) {
            session('admin', $data);
            echo "<script>alert('登录成功，即将跳转到管理中心');window.location.href='" . U('content', '', '') . "';</script>";
        } else {
            echo "<script>alert('登录失败，请重试');history.go(-1);</script>";
        }
    }

    public function content()
    {
        if (empty(session('admin'))) {
            echo "<script>alert('请登录');window.location.href='" . U('login', '', '') . "';</script>";
        }
        $this->assign('admin', session('admin')['name']);
        $this->display();
    }


    // 栏目--》关于我们板块
    public function icolumn()
    {
        if (empty(session('admin'))) {
            echo "<script>alert('请登录');window.location.href='" . U('login', '', '') . "';</script>";
        }
        $Model = D('Info');
        $data = $Model->getInfo();
        $this->assign('data', $data);// 赋值数据集
        $this->display();
    }
    // 栏目--》关于我们板块添加
    public function addInfo()
    {
        $this->display();
    }
    // 栏目--》关于我们板块添加检查
    public function checkInfo()
    {
        $data = I('post.');
        if (empty($data['title'])) {
            echo "<script>alert('标题不得为空');history.go(-1);</script>";
        } else if (empty($data['content'])) {
            echo "<script>alert('内容不得为空');history.go(-1);</script>";
        } else if (empty($_FILES['file'])) {
            echo "<script>alert('请选择文件');history.go(-1);</script>";
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = 'Public/uploads/'; // 设置附件上传根目录
        // 上传单个文件 
        $info = $upload->uploadOne($_FILES['file']);
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            $img = '/Public/uploads/' . $info['savepath'] . $info['savename'];
            $Model = D('Info');
            if ($Model->addInfo($data['title'], $data['content'], $img)) {
                echo "<script>alert('添加成功');window.location.href='" . U('icolumn', '', '') . "';</script>";
            } else {
                echo "<script>alert('添加失败，请重试');history.go(-1);</script>";
            }
        }
    }
    // 栏目--》关于我们删除
    public function delInfo()
    {
        $id = I('get.id');
        $Model = D('Info');
        $data = $Model->delInfo($id);
        $this->ajaxReturn($data);
    }

    // 栏目--》新闻板块
    public function ncolumn()
    {
        if (empty(session('admin'))) {
            echo "<script>alert('请登录');window.location.href='" . U('login', '', '') . "';</script>";
        }
        $Model = D('New');
        $data = $Model->getNew();
        foreach ($data as $key => $value) {
            $data[$key]['addtime'] = date('Y-m-d h:i:s', $data[$key]['addtime']);
        }
        $this->assign('data', $data);// 赋值数据集
        $this->display();
    }
    public function addNew()
    {
        $this->display();
    }
    public function checkNew()
    {
        $data = I('post.');
        if (empty($data['title'])) {
            echo "<script>alert('标题不得为空');history.go(-1);</script>";
        } else if (empty($data['content'])) {
            echo "<script>alert('内容不得为空');history.go(-1);</script>";
        } else if (empty($_FILES['file'])) {
            echo "<script>alert('请选择文件');history.go(-1);</script>";
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = 'Public/uploads/'; // 设置附件上传根目录
        // 上传单个文件 
        $info = $upload->uploadOne($_FILES['file']);
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            $img = '/Public/uploads/' . $info['savepath'] . $info['savename'];
            $Model = D('New');
            if ($Model->addNew($data['title'], $data['content'], $img)) {
                echo "<script>alert('添加成功');window.location.href='" . U('ncolumn', '', '') . "';</script>";
            } else {
                echo "<script>alert('添加失败，请重试');history.go(-1);</script>";
            }
        }
    }
    public function delNew()
    {
        $id = I('get.id');
        $Model = D('New');
        $data = $Model->delNew($id);
        $this->ajaxReturn($data);
    }


    // 栏目--》产品板块
    public function pcolumn()
    {
        if (empty(session('admin'))) {
            echo "<script>alert('请登录');window.location.href='" . U('login', '', '') . "';</script>";
        }
        $Model = D('Product');
        $data = $Model->getPro();
        $this->assign('data', $data);// 赋值数据集
        $this->display();
    }
    public function addPro()
    {
        $this->display();
    }
    public function checkPro()
    {
        $data = I('post.');
        if (empty($data['title'])) {
            echo "<script>alert('标题不得为空');history.go(-1);</script>";
        } else if (empty($data['content'])) {
            echo "<script>alert('内容不得为空');history.go(-1);</script>";
        } else if (empty($_FILES['file'])) {
            echo "<script>alert('请选择文件');history.go(-1);</script>";
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = 'Public/uploads/'; // 设置附件上传根目录
        // 上传单个文件 
        $info = $upload->uploadOne($_FILES['file']);
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            $img = '/Public/uploads/' . $info['savepath'] . $info['savename'];
            $Model = D('Product');
            if ($Model->addPro($data['title'], $data['content'], $img)) {
                echo "<script>alert('添加成功');window.location.href='" . U('pcolumn', '', '') . "';</script>";
            } else {
                echo "<script>alert('添加失败，请重试');history.go(-1);</script>";
            }
        }
    }
    public function delPro()
    {
        $id = I('get.id');
        $Model = D('Product');
        $data = $Model->delPro($id);
        $this->ajaxReturn($data);
    }
    // 栏目--》案例板块
    public function ccolumn()
    {
        if (empty(session('admin'))) {
            echo "<script>alert('请登录');window.location.href='" . U('login', '', '') . "';</script>";
        }
        $Model = D('Case');
        $data = $Model->getCase();
        foreach ($data as $key => $value) {
            $data[$key]['addtime'] = date('Y-m-d h:i:s', $data[$key]['addtime']);
        }
        $this->assign('data', $data);// 赋值数据集
        $this->display();
    }
    public function addCase()
    {
        $this->display();
    }
    public function checkCase()
    {
        $data = I('post.');
        if (empty($data['title'])) {
            echo "<script>alert('标题不得为空');history.go(-1);</script>";
        } else if (empty($data['content'])) {
            echo "<script>alert('内容不得为空');history.go(-1);</script>";
        } else if (empty($_FILES['file'])) {
            echo "<script>alert('请选择文件');history.go(-1);</script>";
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = 'Public/uploads/'; // 设置附件上传根目录
        // 上传单个文件 
        $info = $upload->uploadOne($_FILES['file']);
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            $img = '/Public/uploads/' . $info['savepath'] . $info['savename'];
            $Model = D('Case');
            if ($Model->addCase($data['title'], $data['content'], $img)) {
                echo "<script>alert('添加成功');window.location.href='" . U('ccolumn', '', '') . "';</script>";
            } else {
                echo "<script>alert('添加失败，请重试');history.go(-1);</script>";
            }
        }
    }
    public function delCase()
    {
        $id = I('get.id');
        $Model = D('Case');
        $data = $Model->delCase($id);
        $this->ajaxReturn($data);
    }
    // 栏目--》视频展示板块
    public function vcolumn()
    {
        if (empty(session('admin'))) {
            echo "<script>alert('请登录');window.location.href='" . U('login', '', '') . "';</script>";
        }
        $Model = D('Video');
        $data = $Model->getVideo();
        foreach ($data as $key => $value) {
            $data[$key]['addtime'] = date('Y-m-d h:i:s', $data[$key]['addtime']);
        }
        $this->assign('data', $data);// 赋值数据集
        $this->display();
    }
    public function addVideo()
    {
        $this->display();
    }
    public function checkVideo()
    {
        $data = I('post.');
        if (empty($data['title'])) {
            echo "<script>alert('标题不得为空');history.go(-1);</script>";
        } else if (empty($data['src'])) {
            echo "<script>alert('请输入视频链接');history.go(-1);</script>";
        }

        $Model = D('Video');
        if ($Model->addVideo($data['title'], $data['src'])) {
            echo "<script>alert('添加成功');window.location.href='" . U('vcolumn', '', '') . "';</script>";
        } else {
            echo "<script>alert('添加失败，请重试');history.go(-1);</script>";
        }

    }
    public function delVideo()
    {
        $id = I('get.id');
        $Model = D('Video');
        $data = $Model->delVideo($id);
        $this->ajaxReturn($data);
    }


}