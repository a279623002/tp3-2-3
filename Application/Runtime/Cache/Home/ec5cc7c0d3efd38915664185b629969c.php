<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
  <title>产品列表页</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="author" content="某手机网站模板 smallseashell.com" />
  <meta name="keywords" content="这里填写你的关键字" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
  <link href="/Public/css/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="/Public/js/jquery-1.7.2.min.js"></script>
  <script src="/Public/js/common.js" type="text/javascript"></script>
  <script>  //document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() { 

  //		WeixinJSBridge.call('hideToolbar'); 

 // });

 //document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

//	WeixinJSBridge.call('hideOptionMenu');

//  });



/*

function weixinAddContact(name){ 

    WeixinJSBridge.invoke("addContact", {webtype: "1",username: name}, function(e) { 

        //WeixinJSBridge.log(e.err_msg); 

        //e.err_msg:add_contact:added 已经添加 

        //e.err_msg:add_contact:cancel 取消添加 

        //e.err_msg:add_contact:ok 添加成功 

        if( e.err_msg == 'add_contact:ok'){ 

            alert("关注成功");

        } else if(e.err_msg == 'add_contact:added'){

			alert("已经关注过!");

		}else{

			alert(e.err_msg);

		}

    }) 

} 

*/

  </script>
</head>

<body class="body_product">
  <!--顶部开始-->
  <div id="top">
    <!--频道导航 开始-->
    <script>        window.onload = function () {

        var oWin = document.getElementById("window");

        var oLay = document.getElementById("overlay");

        var oBtn = document.getElementById("popmenu");

        var oClose = document.getElementById("close");

        oBtn.onclick = function () { oLay.style.display = "block"; oWin.style.display = "block" };

        oLay.onclick = function () { oLay.style.display = "none"; oWin.style.display = "none" }

      };

    </script>
    <div style="margin-bottom:55px;">
      <div id="toolbar">
        <div class="fixed-green">
          <a class="ui-title" id="popmenu">产品列表页</a>
          <a class="ui-btn-back" href="javascript:history.go(-1)"></a>
          <a class="ui-btn-home" href="/"></a>
        </div>
      </div>
      <div id="overlay"></div>
      <div id="window">
        <ul class="windowlist">
          <li>
            <a href="/">
              <span>网站首页</span>
            </a>
          </li>
          <li>
            <a href="<?php echo U('About');?>">
              <span>关于我们</span>
            </a>
          </li>
          <li>
            <a href="<?php echo U('NewsList');?>">
              <span>资讯中心</span>
            </a>
          </li>
          <li>
            <a href="<?php echo U('ProductList');?>">
              <span>产品中心</span>
            </a>
          </li>
          <li>
            <a href="<?php echo U('Case');?>">
              <span>案例展示</span>
            </a>
          </li>
          <li>
            <a href="<?php echo U('Video');?>">
              <span>视频展示</span>
            </a>
          </li>
          <li>
            <a href="<?php echo U('Merchants');?>">
              <span>招商加盟</span>
            </a>
          </li>
          <li>
            <a href="<?php echo U('contact');?>">
              <span>联系我们</span>
            </a>
          </li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>
    <!--频道导航 结束-->
  </div>
  <!--顶部结束-->
  <div id="content">
    <div class="product">
      <ul class="channellist">
        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><li>
            <!-- <a href="Productfl.html"> -->
            <div class="ChannelIcon">
              <img src="<?php echo ($vo["img"]); ?>" />
            </div>
            <div class="ChannelName">
                <?php echo ($vo["title"]); ?>
            </div>
          </li><?php endforeach; endif; ?>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  <!--页脚开始-->
  <div id="footer">
    <!-- 微信分享导引 开始-->
    <script>        function openGuide() { document.getElementById('guide').style.display = 'block'; }

      function closeGuide() { document.getElementById('guide').style.display = ''; }

    </script>
    <div id="guide" onClick="closeGuide()">
      <img src="/Public/images/guide.png" />
    </div>
    <!-- 微信分享导引 结束-->
    <!--快捷按钮 开始-->
    <div class="plug-div">
      <div class="plug-phone">
        <div class="plug-menu themeStyle">
          <span class="close"></span>
        </div>
        <div class="themeStyle plug-btn plug-btn1 close">
          <a href="/">
            <span style="background-image: url(/Public/ky_img/home.png);"></span>
          </a>
        </div>
        <div class="themeStyle plug-btn plug-btn2 close">
          <a href="<?php echo U('contact');?>">
            <span style="background-image: url(/Public/ky_img/tel.png);"></span>
          </a>
        </div>
        <div class="themeStyle plug-btn plug-btn3 close">
          <a href="<?php echo U('about');?>">
            <span style="background-image: url(/Public/ky_img/aboutus.png);"></span>
          </a>
        </div>
      </div>
    </div>
    <!--快捷按钮 结束-->
    <div>
      <ul class="wxlist">
        <a href="#top">
          <li>
            <div class="GoTop">
              <img src="/Public/images/top.png" />回顶部
            </div>
          </li>
        </a>
      </ul>
    </div>
    <div class="copyright">
      这里是底部信息
      <br />免责声明：所有资源仅供学习与参考，版权归原作者，请勿用于商业用途，否则产生的一切后果将由您自行承担，与本人无关。
    </div>
  </div>
  <!--页脚结束-->
</body>

</html>