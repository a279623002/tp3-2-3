<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }
    public function about()
    {
        $Model = D('Info');
        $data = $Model->getInfo();
        $this->assign('data', $data);
        $this->display();
    }
    public function NewsList()
    {
        $Model = D('New');
        $data = $Model->getNew();
        foreach ($data as $key => $value) {
            $data[$key]['addtime'] = date('Y-m-d h:i:s', $data[$key]['addtime']);
        }
        $this->assign('data', $data);
        $this->display();
    }
    public function Productlist()
    {
        $Model = D('Product');
        $data = $Model->getPro();
        $this->assign('data', $data);
        $this->display();
    }
    public function case()
    {
        $Model = D('Case');
        $data = $Model->getCase();
        foreach ($data as $key => $value) {
            $data[$key]['addtime'] = date('Y-m-d h:i:s', $data[$key]['addtime']);
        }
        $this->assign('data', $data);
        $this->display();
    }
    public function video()
    {
        $Model = D('Video');
        $data = $Model->getVideo();
        foreach ($data as $key => $value) {
            $data[$key]['addtime'] = date('Y-m-d h:i:s', $data[$key]['addtime']);
        }
        $this->assign('data', $data);
        $this->display();
    }

    public function Merchants()
    {
        $this->display();
    }
    public function Contact()
    {
        $this->display();
    }
}