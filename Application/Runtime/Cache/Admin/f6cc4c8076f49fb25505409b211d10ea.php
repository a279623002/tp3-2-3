<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="../public/css/base.css"> -->
	<link rel="stylesheet" type="text/css" href="/Public/css/index.css">
	<title>后台管理系统</title>
</head>

<body>

	<div class="head">
		<div class="headlogo pull-left">
			<h1>
				<a href="javascript:;">菜单管理</a>
			</h1>
		</div>
		<ul class="headnav pull-left">
			<li class="menu_0 current_menu">
				<a href="javascript:;">菜单管理</a>
			</li>
		</ul>
		<ul class="headlink pull-right">
			<li class="link_0">
				<a href="javascript:;">您好，<?php echo ($admin); ?></a>
			</li>
			<li class="link_1">
				<a href="javascript:;">
					<span class="ton">隐藏菜单</span>
				</a>
			</li>
			<li class="link_2">
				<a href="/">首页</a>
			</li>
			<li class="link_4">
				<a href="<?php echo U('logout','','');?>">退出</a>
			</li>
		</ul>
	</div>
	<!-- 头部页面结束 -->
	<div class="leftmenu">
		<div class="leftmenu_0">
			<dl>
				<dt>栏目管理</dt>
				<dd>
					<ul class="clearfix">
						<li>
							<a href="javascript:;" _link="icolumn.html">关于我们</a>
						</li>
						<li>
							<a href="javascript:;" _link="ncolumn.html">资讯中心</a>
						</li>
						<li>
							<a href="javascript:;" _link="pcolumn.html">产品中心</a>
						</li>
						<li>
							<a href="javascript:;" _link="ccolumn.html">案例展示</a>
						</li>
						<li>
							<a href="javascript:;" _link="vcolumn.html">视频展示</a>
						</li>
					</ul>
				</dd>
			</dl>


		</div>



	</div>
	<!-- 左边导航结束 -->
	<div class="rightmain" id="rightmain">
		<div class="rightcontent">
			<iframe src="<?php echo U('icolumn','','');?>" id="main" name="main" frameborder="0" scrolling="yes"></iframe>
		</div>
	</div>

	<script src="/Public/public/js/jquery-3.1.1.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
	<script src="/Public/public/js/banner.js"></script>
	<script type="text/javascript">
		//导航经过改变宽度和颜色
		$(".headnav li").click(function () {
			var index = $(this).index();
			//alert(index);
			$(this).addClass("current_menu").siblings().removeClass('current_menu');
			//头部导航和左边导航对应
			$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');

		});
		//头部导航和左边导航对应
		// bannerplay($(".leftmenu"),$(".leftmenu_0"),$(".headnav li"),4,false,2);

		//左边导航点击上拉
		$(".leftmenu dl dt").click(function () {
			if (false == $(this).siblings("dd").is(":visible")) {
				//如果不可见点击后变蓝色
				$(this).css('background-position', 'right -30px');
			} else {
				$(this).css('background-position', 'right 0px');
				//可见点击后变红色
			}

			$(this).siblings('dd').slideToggle('fast').siblings('dt');//.end()

		});
		//点击隐藏菜单
		var i = 1;

		//替换文字并显示隐藏左侧导航
		function replace() {
			var i = j = 1;
			var x = $(".link_1");
			var y = $(".ton");
			y.click(function () {
				i++;
				if (i % 2 == 0) {
					//alert(i)
					y.text("显示菜单");
					$('#rightmain').addClass('rightmain1').removeClass('rightmain');
				} else {
					y.text("隐藏菜单");
					$('#rightmain').addClass('rightmain').removeClass('rightmain1');
				}

			})
			x.click(function () {
				j++;
				//alert(j);
				j % 2 == 0 ? $(".leftmenu").css('display', 'none') : $(".leftmenu").css('display', 'block');
			})
		}
		replace();

		//左侧导航切换出右侧页面ifream
		$(".leftmenu dl dd ul li a").click(function () {
			var _link = $(this).attr('_link');
			//alert(_link)
			$("#main").attr('src', _link);
			$(this).addClass('current-menuleft').parent().siblings().children().removeClass('current-menuleft');
			$(this).parents('dl').siblings().find('dd ul li a').removeClass('current-menuleft');

		});


	</script>
</body>

</html>