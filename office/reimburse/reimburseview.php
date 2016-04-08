<?php
require "../datamenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>报销详情-报销-应用数据</title>
  <link rel="stylesheet" href="../../lib/css/view.css">

	<style type="text/css">
 
   
	</style>
  }
</head>
<body>
<div class="content">
        <div class="header">
              <h1 class="page-title"><i class="glyphicon glyphicon-list-alt"></i> 报销详情</h1> 
        </div>
   <div class="main-content">
	 <div class="panel panel-default">
        <label class="panel-heading" data-toggle="collapse"><font size="3"> 报销：2个烟灰缸</font></label> 
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
                <label class="col-sm-2 control-label"><b>报销总计:</b></label>
                  <p class="form-control-static">38</p>
              </div>
               <div class="form-group">
                <label class="col-sm-2 control-label"><b>审批状态:</b></label>
                  <p class="form-control-static">durenshi</p>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><b>审批内容:</b></label>
                  <p class="form-control-static">2个烟灰缸</p>
              </div>
            
             
            </form>
                       
                    
        </div>
    </div> <!-- div panel panel-default-->
     
    <ul id="myTab" class="nav nav-tabs">
       <li class="active">
          <a href="#list_bill" data-toggle="tab">
             账单明细
          </a>
       </li>
       <li><a href="#list_proc" data-toggle="tab">审批进程</a></li>   
   </ul>
   <div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="list_bill">
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
    
        <tbody>
            
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            </tbody>
         
             </table>
        
   </div>
   <div class="tab-pane fade" id="list_proc">
      <p>你好</p>
   </div>
</div>


   </div>
</div>


<input type="hidden" value="reimburseview.php" id="currenturl">


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