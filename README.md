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
