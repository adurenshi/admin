<?php
require "../datamenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>审批详情-审批-应用数据</title>
    <link rel="stylesheet" href="../../lib/css/view.css">

	<style type="text/css">
  
   
	</style>
</head>
<body>
<div class="content">
        <div class="header">
              <h1 class="page-title"><i class="glyphicon glyphicon-list-alt"></i> 审批详情</h1> 
        </div>
   <div class="main-content">
	 <div class="panel panel-default">
        <label class="panel-heading" data-toggle="collapse"><font size="3"> 花都出差</font></label> 
        <div id="page-stats" class="panel-collapse panel-body collapse in">

           <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>申请人:</b></label>
                  <p class="form-control-static">durenshi</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>审批人:</b></label>
                  <p class="form-control-static">ll</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>抄送人:</b></label>
                  <p class="form-control-static"></p>
              </div>
               <div class="form-group">
                <label class="col-sm-2 control-label"><b>审批状态:</b></label>
                  <p class="form-control-static">durenshi</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>审批内容:</b></label>
                  <p class="form-control-static">durenshi@qq.com</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>审批图片:</b></label>
                  <p class="form-control-static">durenshi</p>
              </div>
             
            </form>
                       
                    
        </div>
    </div> <!-- div panel panel-default-->
     <ul id="myTab" class="nav nav-tabs">
       <li class="active">
          <a href="#list_proc" data-toggle="tab">
             审核进程
          </a>
       </li>
       
   </ul>
   <div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="list_proc">
     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%"> 
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
    
         
             </table>
        
   </div>
   <div class="tab-pane fade" id="list_proc">
      <p>你好</p>
   </div>
</div>




   </div>
</div>


<input type="hidden" value="askforview.php" id="currenturl">


<script type="text/javascript">
	$(document).ready(function() {
       $('#example').dataTable( {
          "lengthChange": false,//是否允许用户自定义显示数量
          "searching":false,
           "ordering": false,
           "info":     false,  //页脚信息隐藏
			"language": {           
                 "zeroRecords": "没有找到记录",
             }
        });

  });   
	
</script>

        </body></html>