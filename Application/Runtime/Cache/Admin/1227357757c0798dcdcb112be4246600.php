<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/tp3-2-3/Public/bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="../public/css/base.css">  -->
	<link rel="stylesheet" type="text/css" href="/tp3-2-3/Public/css/b_login.css">
	<title>添加新闻</title>
</head>

<body>
	<div class="login">
		<div class="loginmain">
			<h2>添加</h2>
			<form action="<?php echo U('checkNew','','');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
				<!-- 让表单在一行中显示form-horizontal -->
				<div class="form-group">
					<label for="title" class="col-lg-1 control-label">标&nbsp;&nbsp;&nbsp;&nbsp;题</label>
					<div class="col-lg-4">
						<input type="text" name="title" id="title" class="form-control" placeholder="admin">
					</div>
				</div>
				<div class="form-group"></div>

				<div class="form-group">
					<label for="content" class="col-lg-1 control-label">内&nbsp;&nbsp;&nbsp;&nbsp;容</label>
					<div class="col-lg-4">
						<textarea name="content" id="content" class="form-control" rows="5"></textarea>
					</div>
				</div>
				<div class="form-group"></div>


				<div class="form-group">
					<label for="file" class="col-lg-1 control-label">图&nbsp;&nbsp;&nbsp;&nbsp;片</label>
					<div class="col-lg-4">
						<input type="file" name="file" id="file" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-4 col-lg-offset-1">
						<input type="submit" name="button" value="添加" class="btn btn-danger btn-lg">
						<span class="text"></span>
					</div>

				</div>

			</form>
		</div>
		<div class="rightpic">
			<div id="container">
				<!-- <img src="/tp3-2-3/Public/picture/1.jpg" alt="" width="500px" height="330px"> -->
			</div>
		</div>
	</div>

	<script src="/tp3-2-3/Public/public/js/jquery-3.1.1.min.js"></script>
	<script src="/tp3-2-3/Public/bootstrap/js/bootstrap.min.js"></script>
	<script src="/tp3-2-3/Public/public/js/delaunay.js"></script>
	<script src="/tp3-2-3/Public/public/js/TweenMax.js"></script>
	<script src="/tp3-2-3/Public/js/effect.js"></script>

</body>

</html>