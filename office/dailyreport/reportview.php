<?php
require "../datamenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>报告详情-工作报告-应用数据</title>
  <link rel="stylesheet" href="../../lib/css/view.css">

	<style type="text/css">
  
   
	</style>
  }
</head>
<body>
<div class="content">
        <div class="header">
              <h1 class="page-title"><i class="glyphicon glyphicon-list-alt"></i> 报告详情</h1> 
        </div>
   <div class="main-content">
	 <div class="panel panel-default">
        <label class="panel-heading" data-toggle="collapse"><font size="3"> </font></label> 
        <div id="page-stats" class="panel-collapse panel-body collapse in">
<!-- <dl class="dl-horizontal" >
        <dt>类型：</dt>
        <dd>周报</dd>
      <dt>周报标题：</dt>
      <dd><strong>2016年第12周(03-21 - 03-27) 周报</strong></dd>
      <dt>发起人：</dt>
      <dd>
        <strong class="label label-primary font12">周卓立</strong>
        &nbsp;&nbsp;
        <abbr title="发起时间"><span class="badge">2016-03-27 20:43</span></abbr>
      </dd>
      <dt>报告日期：</dt>
      <dd>2016-03-21</dd>
      <dt>发送给：</dt>
      <dd style="line-height:150%;">
        <span class="label label-info font12">鹏哥</span>
        <span class="label label-info font12">隆哥</span>
        <span class="label label-info font12">浩哥</span>
      </dd>
      <dt>转发给：</dt>
      <dd style="line-height:150%;">
        <strong>无</strong>
      </dd>
      <dt>详情：</dt>
      <dd>
        <blockquote class="m-0 font12">
          <h3 class="font12 text-bold"><strong>2016年第12周(03-21 - 03-27) 周报</strong></h3>
          沟通明道与泛微OA的代理政策。加入有关智慧医疗的群，了解智慧医疗的讯息，关注展会        </blockquote>
      </dd>
    </dl> -->
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>类型:</b></label>
                  <p class="form-control-static">durenshi</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>周报标题:</b></label>
                  <p class="form-control-static">ll</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>发起人:</b></label>
                  <p class="form-control-static label label-primary">飞飞</p>&nbsp;&nbsp;<span class="badge"> 2016-03-27 20:43</span>
              </div>
               <div class="form-group">
                <label class="col-sm-2 control-label"><b>报告日期:</b></label>
                  <p class="form-control-static">durenshi</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>发送给:</b></label>
                  <p class="form-control-static "><span class="label label-info font12">鹏哥</span></p>
              </div>
               <div class="form-group">
                <label class="col-sm-2 control-label"><b>转发给:</b></label>
                  <p class="form-control-static">2test</p>
              </div>
             <div class="form-group">
                <label class="col-sm-2 control-label"><b>详情:</b></label>
                  <p class="form-control-static">2个烟灰缸</p>
              </div>
             
            </form>
                    
        </div>
    </div> <!-- div panel panel-default-->
     
    <ul id="myTab" class="nav nav-tabs">
       <li class="active">
          <a href="#list_member" data-toggle="tab">
             工作报告批注
          </a>
       </li>
       
   </ul>
   <div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="list_member">
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


<input type="hidden" value="reportview.php" id="currenturl">


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