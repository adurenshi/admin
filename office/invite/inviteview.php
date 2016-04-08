<?php
require "../datamenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>人员详情-邀请人员-应用数据</title>
  

	<style type="text/css">
  
   
	</style>
</head>
<body>
<div class="content">
        <div class="header">
              <h1 class="page-title"><i class="glyphicon glyphicon-list-alt"></i> 人员详情</h1> 
        </div>
   <div class="main-content">
	 <div class="panel panel-default">
        <label class="panel-heading" data-toggle="collapse"><font size="3"> 基本信息</font></label> 
        <div id="page-stats" class="panel-collapse panel-body collapse in">

           <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>姓名:</b></label>
                  <p class="form-control-static">durenshi</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>性别:</b></label>
                  <p class="form-control-static">男</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>手机:</b></label>
                  <p class="form-control-static"></p>
              </div>
               <div class="form-group">
                <label class="col-sm-2 control-label"><b>微信号:</b></label>
                  <p class="form-control-static">durenshi</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>邮箱:</b></label>
                  <p class="form-control-static">durenshi@qq.com</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>邀请人:</b></label>
                  <p class="form-control-static">durenshi</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>申请时间:</b></label>
                  <p class="form-control-static"></p>
              </div>
            </form>
                       
                    
        </div>
    </div> <!-- div panel panel-default-->
     <div class="col-sm-offset-1 col-sm-9">
         <button id="returnbtn" class="btn btn-info">返回</button>
   
    </div>
   </div>
</div>





<script type="text/javascript">
   
	$(document).ready(function() {
        $("#returnbtn").click(function(){
            window.location.href='invitelist.php';
        });
  });
</script>

        </body></html>