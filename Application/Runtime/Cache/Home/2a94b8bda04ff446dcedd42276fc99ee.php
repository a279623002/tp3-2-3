<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
  <title>某手机网站模板</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="author" content="某手机网站模板" />
  <meta name="keywords" content="这里填写你的关键字" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"
  />
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

<body>
  <!--页眉开始-->
  <div id="header">
    <!--幻灯片 开始-->
    <script type="text/javascript" src="/Public/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript">          $(document).ready(function () {

        $('.myflexslider').flexslider({

          controlNav: true,

          directionNav: false,

          animation: "slide",

          //manualControls: ".myflexslider .slidenav"

        });

      });

    </script>
    <div class="myflexslider" style="margin-top:1px;">
      <ul class="slides">
        <li>
          <img src="/Public/images/1408672627.jpg" width="100%" />
        </li>
        <li>
          <img src="/Public/images/1408672648.jpg" width="100%" />
        </li>
        <li>
          <img src="/Public/images/1408672632.jpg" width="100%" />
        </li>
        <li>
          <img src="/Public/images/1409647536.jpg" width="100%" />
        </li>
      </ul>
    </div>
    <!--幻灯片 结束-->
  </div>
  <div id="content">
    <!--导航开始-->
    <ul class="channellist">
      <li>
        <a href="<?php echo U('About','','');?>">
          <div class="ChannelIcon">
            <img src="/Public/images/about.jpg" />
          </div>
          <div class="ChannelName">
            关于我们
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo U('NewsList','','');?>">
          <div class="ChannelIcon">
            <img src="/Public/images/news.jpg" />
          </div>
          <div class="ChannelName">
            资讯中心
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo U('Productlist','','');?>">
          <div class="ChannelIcon">
            <img src="/Public/images/Product.jpg" />
          </div>
          <div class="ChannelName">
            产品中心
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo U('Case','','');?>">
          <div class="ChannelIcon">
            <img src="/Public/images/1409023353.jpg" />
          </div>
          <div class="ChannelName">
            案例展示
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo U('video','','');?>">
          <div class="ChannelIcon">
            <img src="/Public/images/1408672415.jpg" />
          </div>
          <div class="ChannelName">
            视频展示
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo U('Merchants','','');?>">
          <div class="ChannelIcon">
            <img src="/Public/images/1408672427.jpg" />
          </div>
          <div class="ChannelName">
            招商加盟
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo U('Contact','','');?>">
          <div class="ChannelIcon">
            <img src="/Public/images/1408672469.jpg" />
          </div>
          <div class="ChannelName">
            联系我们
          </div>
        </a>
      </li>
    </ul>
    <!--导航结束-->
    <div class="clear"></div>
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
          <a href="Contact.html">
            <span style="background-image: url(/Public/ky_img/tel.png);"></span>
          </a>
        </div>
        <div class="themeStyle plug-btn plug-btn3 close">
          <a href="About.html">
            <span style="background-image: url(/Public/ky_img/aboutus.png);"></span>
          </a>
        </div>
        <div class="themeStyle plug-btn plug-btn4 close">
          <a href="Message.html">
            <span style="background-image: url(/Public/ky_img/guestbook.png);"></span>
          </a>
        </div>
        <div class="plug-btn plug-btn5 close"></div>
      </div>
    </div>
    <!--快捷按钮 结束-->
    <div class="copyright">
      这里是底部信息
      <br>免责声明：所有资源仅供学习与参考，版权归原作者，请勿用于商业用途，否则产生的一切后果将由您自行承担，与本人无关。
    </div>
  </div>
  <!--页脚结束-->
</body>

</html>