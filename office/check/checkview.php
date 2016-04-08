<?php
require "../datamenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>考勤详情-考勤-应用数据</title>
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css">
    <script src="../../lib/bootstrap-datetimepicker-master/bootstrap-datetimepicker.min.js"></script>
    <script src="../../lib/bootstrap-datetimepicker-master/bootstrap-datetimepicker.zh-CN.js"></script>
  <link rel="stylesheet" href="../../lib/css/view.css">

	<style type="text/css">
   

	</style>
</head>
<body>
<div class="content">
        <div class="header">
              <h1 class="page-title"><i class="glyphicon glyphicon-list-alt"></i> 考勤详情</h1> 
        </div>
   <div class="main-content">
	 <div class="panel panel-default">
        <label class="panel-heading" data-toggle="collapse"><font size="3"> 考勤详情</font></label> 
        <div id="page-stats" class="panel-collapse panel-body collapse in">

           <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>签到人:</b></label>
                <div class="col-sm-2">
                  <p class="form-control-static">durenshi</p>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>日期:</b></label>
                 <div class="col-sm-2">
                     <input type="text" class="input-sm form-control" id="checkdate" placeholder="选择日期" value="2016-03-29">
                  </div>
              </div>
               
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>上班:</b></label>
                <div class="col-sm-10">
                  <p class="form-control-static text-info"><span class="glyphicon glyphicon-log-in"></span> 正常<span class="space"></span><span class="glyphicon glyphicon-time"></span> 2016-6-9<span class="space"></span><span class="glyphicon glyphicon-map-marker"></span> 43245444444444444444435</p>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2 control-label"><b>下班:</b></label>
                <div class="col-sm-10">
                   <p class="form-control-static text-info"><span class="glyphicon glyphicon-log-in"></span> 正常<span class="space"></span><span class="glyphicon glyphicon-time"></span> 2016-6-9<span class="space"></span><span class="glyphicon glyphicon-map-marker"></span> 43245444444444444444435</p>
                  </div>
              </div>
             
            </form>
                       
                    
        </div>
    </div> <!-- div panel panel-default-->
     <div class="col-sm-offset-1 col-sm-9">
         <button id="returnbtn" class="btn btn-info">返回</button>
   
    </div>
   </div>
</div>



<input type="hidden" value="checkview.php" id="currenturl">


<script type="text/javascript">
  $('#checkdate').datetimepicker({ 
    　　minView: "month", //选择日期后，不会再跳转去选择时分秒 
    　　format: "yyyy-mm-dd", //选择日期后，文本框显示的日期格式 
    　　language: 'zh-CN', //汉化 
    　　autoclose:true //选择日期后自动关闭 
    });
	$(document).ready(function() {
        $("#returnbtn").click(function(){
            window.location.href='checklist.php';
        });
  });
</script>

        </body></html>