<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>栏目管理</title>

  <!-- Bootstrap -->
  <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
  <link rel="stylesheet" type="text/css" href="/Public/css/rightmain.css">
</head>

<body>
  <div class="iframecontent">
    <div class="pos">
      <i class="icoh"></i>
      <span>栏目列表-->关于我们</span>
    </div>
    <div class="operate">
      <div class="pull-left">
        <input type="button" name="" value="添加" class="btn  btn-success" onclick="addInfo()">
      </div>
      <!-- operate标题结束 -->
      <div class="list">
        <div class="tablewrap">
          <table class="table" width="100%" id="datalist">
            <thead>
              <tr>
                <th>编号</th>
                <th>标题</th>
                <th>内容</th>
                <th>存放路径</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr id="info<?php echo ($vo["id"]); ?>">
                  <td><?php echo ($vo["id"]); ?></td>
                  <td><?php echo ($vo["title"]); ?></td>
                  <td style="max-width: 300px;"><?php echo ($vo["content"]); ?></td>
                  <td><?php echo ($vo["img"]); ?></td>
                  <td>
                    <a href="javascript:;" onclick="delInfo(<?php echo ($vo["id"]); ?>)">删除</a>
                  </td>
                </tr><?php endforeach; endif; ?>

            </tbody>
          </table>
        </div>
        <div class="page"></div>
      </div>

    </div>
  </div>


  <script src="/Public/public/js/jquery-3.1.1.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    //alert($)
    //复选框全部选中
    $(function () {
      $("#all").click(function () {
        if ($(this).prop('checked')) {
          $('#datalist :checkbox').prop('checked', true)
        } else {
          $('#datalist :checkbox').prop('checked', false)
        }
      })
    })
    function addInfo() {
      window.location.href = 'addInfo';
    }
    function delInfo(id) {
      if (confirm("是否确认删除")) {

        $.ajax({
          type: "get",
          url: "<?php echo U('delInfo','','');?>",
          data: { 'id': id },
          success: function (data) {
            if (data) {
              $('#info' + id).remove();
            } else {
              alert('删除失败');
            }
          }
        });
      }
      return false;
    }
  </script>
</body>

</html>