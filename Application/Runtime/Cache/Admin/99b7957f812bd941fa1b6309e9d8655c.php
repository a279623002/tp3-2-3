<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../public/css/base.css">  -->
    <link rel="stylesheet" type="text/css" href="/Public/css/b_login.css">
	<title>后台账号修改页面</title>
</head>
<body>
<div class="login">
	<div class="loginmain">
		<h2>账号修改管理系统</h2>
			<form action="<?php echo U('checkEdit','','');?>" method="POST" class="form-horizontal">
		           <!-- 让表单在一行中显示form-horizontal -->
		          <div class="form-group">
		              <label for="username" class="col-lg-2 control-label" style="text-align: center;">用户名</label>
		              <div class="col-lg-3">
		                <input type="text" name="username" id="username" class="form-control" placeholder="<?php echo ($admin["name"]); ?>">
		              </div>              
		          </div>
				  <div class="form-group"></div>
				  <div class="form-group"></div>

		          <div class="form-group">
		              <label for="password" class="col-lg-2 control-label" style="text-align: center;">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
		              <div class="col-lg-3">
		                <input type="password" name="password" id="password" class="form-control">
		              </div>              
		          </div>
				  <div class="form-group"></div>
				  <div class="form-group"></div>
		          <div class="form-group">
		              <label for="cpw" class="col-lg-2 control-label" style="text-align: center;">&nbsp;&nbsp;&nbsp;确认密码</label>
		              <div class="col-lg-3">
		                <input type="password" name="cpw" id="cpw" class="form-control">
		              </div>              
		          </div>
                   <div class="form-group"></div>
                   <!-- <div class="form-group"></div> -->

		        

		          <div class="form-group">
		            <div class="col-lg-4 col-lg-offset-1">
		                <input type="submit" name="button" value="修改" class="btn btn-danger btn-lg">
		                <span class="text"></span>              
		            </div>

		          </div>

		    </form>
	</div>
	<div class="rightpic">
		<div id="container">
			<!-- <img src="/Public/picture/1.jpg" alt="" width="500px" height="330px"> -->
		</div>
	</div>
</div>

<script src="/Public/public/js/jquery-3.1.1.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/public/js/delaunay.js"></script>
<script src="/Public/public/js/TweenMax.js"></script>
<script src="/Public/js/effect.js"></script>

<script src="/Public/js/b_edit.js"></script>	
</body>
</html>