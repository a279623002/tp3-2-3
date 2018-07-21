## 配置域名
 
 由于引用路径问题，需要通过配置域名访问(不知道的话可以百度)，如 tp3-2-3.test（以下使用这个域名）
 
 ## 配置数据库
 
 新建一个数据库，如 tp3-2-3（以下使用这个数据库）
 导入sql文件
 配置Admin模块下的数据库信息（Admin/Conf/config.php）
 
 ```
    //'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'tp3-2-3',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
 ```
配置Home模块下的数据库信息（Home/Conf/config.php）
 
 ```
    //'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'tp3-2-3',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
 ```
 
 ## 前台首页
 
 前台首页直接访问 tp3-2-3.test 即可
 
 ## 后台
 
 访问 tp3-2-3.test/index.php/Admin/index/login
 
 管理员账号: zero
 密码: 279623002
 
 ## 使用Login层
 
 ### Api控制器
 
 ```
 <?php
 namespace Api\Controller;
 use Think\Controller;
 use Api\Logic\***Logic;
 class ***Controller extends Controller {
 
 }
 ```
 ***使用时记得实例化，如 $SystemLogic = new SystemLogic();***
 
 
 ### API Logic层
 
 ```
<?php 
 namespace Api\Logic;
 use Think\Model\RelationModel;
 class ***Logic extends RelationModel{
  //到这就和Model层差不多
 }
 ```
 ### 使用封装的apiReturn方法 在底层封装Think\Controller
 
 ```
     /**
     * [apiReturn 用于给app提供接口使用 带有请求结果状态表示,和结果提示，默认返回json]
     * @param  [number] $status  [请求结果的状态标识，设定后要在文档中给予说明]
     * @param  string $message [请求结果的提示语句]
     * @param  [array] $data    [请求返回的数据,app前端需要的数据]
     * @param  [string] $type    [要返回的数据类型，支持json,xml，默认返回json]
     * @return [json或xml]          [返回数据]
     */
    protected function apiReturn($status, $message = '', $data = null, $type){
    
    	if(!is_numeric($status) || !is_string($message) ){
    		$this->apiReturn('400','参数错误');
    	}
    	$res = array();
    	$res['status'] = $status;
    	$res['message'] = $message;
    	$res['data'] = $data;
    
    	if(in_array($type, array('json','xml'))){
    		$this->ajaxReturn($res,$type);
    	}else{
    		$this->ajaxReturn($res);
    	}
    }
 ```
 
 ***模型： 如 return array('state'=> true, 'msg'=>'修改成功');***
 ***控制器： 如 $this->apiReturn(200, $result['msg'], $result['data']);***
 
 ### 数组删除值为空的键 方法array_filter
 
 ***如 $arr = array('a'=>'1','b'=>'','c'=>'2')***
 
 ```
  array_filter($arr);//返回的是array('a'=>'1','c'=>'2')
 ```
 
 
