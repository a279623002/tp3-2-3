//alert($)
$(document).ready(function(){//页面加载完成再加载脚本
	$('input[name="button"]').click(function(event){
		var $title = $('input[name="title"]');
		var $content = $('input[name="content"]'); 
		var $img = $('input[name="img"]'); 
		var $text = $(".text");
		var _title = $.trim($title.val());//去掉字符串多余空格
		var _content = $.trim($content.val());
		var _img = $.trim($img.val());

		if(_title==''){
			$text.text('请输入用户名');
			$title.focus();
			return;
		}
		if(_content==''){
			$text.text('请输入密码');
			$title.focus();
			return;
		}
		if(_img==''){
			$text.text('请上传图片');
			$title.focus();
			return;
		}

		// if(_name=="admin" &&_password=="admin"){
		// 	$text.text("登陆成功，请稍后...");
		//     window.location.href = "checkLogin";
		// }else{
		// 	$text.text("用户名或密码错误.");
		// }

		

	});

});