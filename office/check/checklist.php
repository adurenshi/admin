<?php
require "../datamenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>公司考勤记录-考勤-应用数据</title>
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
              <h1 class="page-title"><i class="glyphicon glyphicon-th-list"></i> 公司考勤记录</h1> 
        </div>
   <div class="main-content">
   <ul id="myTab" class="nav nav-tabs">
       <li class="active">
          <a href="checklist.php">全部</a>
       </li>
       <li>
          <a href="checklist.php" >上班</a>
       </li>
       <li>
          <a href="checklist.php?type=0" >下班</a>
       </li>
       
   </ul>
	 <div class="panel panel-default">
        <label class="panel-heading" data-toggle="collapse"><font size="3"> 搜索考勤记录</font></label> 
        <div id="page-stats" class="panel-collapse panel-body collapse in">

            <form class="form-inline">
            <div class="form-row">
               <div class="form-group">
                    <label  for="exampleInputEmail3">部门:</label>
                    <input type="text" class="input-sm form-control" id="exampleInputEmail3" placeholder="输入姓名">
                  </div> <span class="space"></span>
              <div class="form-group">
                <label for="exampleInputName2">请假类型:</label>
                <select class="form-control">
                  <option>正常</option>
                  <option>迟到</option>
                  <option>早退</option>
                </select>
               
              </div> 
 
              </div>
              <div class="form-row">
                  <div class="form-group">
                    <label  for="exampleInputEmail3">姓名:</label>
                    <input type="text" class="input-sm form-control" id="exampleInputEmail3" placeholder="输入姓名">
                  </div><span class="space"></span>
                   <div class="form-group">
                    <label  for="exampleInputEmail3">申请时间范围:</label>
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" id="begindate" placeholder="开始日期">
                        <span class="input-group-addon">至</span>
                        <input type="text" class="input-sm form-control" id="enddate" placeholder="结束日期">
                    </div>
                  </div>
                  <span class="space"></span>
                    <button type="submit" class="btn btn-info">搜索</button>
                    <button type="submit" class="btn btn-warning">导出</button>
              </div>

            </form>
                       
                    
        </div>
    </div> <!-- div panel panel-default-->
   
         <div class="panel panel-default">
            <label class="panel-heading" data-toggle="collapse"><font size="3"> 记录列表</font></label> 
            <div id="page-stats" class="panel-collapse panel-body collapse in">
            <button type="button" id="askforview" class="btn btn-info">详情</button>
            <button type="button" id="delete" class="btn btn-danger">删除</button>
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
    </div>
		

   </div>
</div>




<input type="hidden" value="checklist.php" id="currenturl">
<script type="text/javascript">
    $('#begindate').datetimepicker({ 
    　　minView: "month", //选择日期后，不会再跳转去选择时分秒 
    　　format: "yyyy-mm-dd", //选择日期后，文本框显示的日期格式 
    　　language: 'zh-CN', //汉化 
    　　autoclose:true //选择日期后自动关闭 
    });
    $('#enddate').datetimepicker({ 
    　　minView: "month", //选择日期后，不会再跳转去选择时分秒 
    　　format: "yyyy-mm-dd", //选择日期后，文本框显示的日期格式 
    　　language: 'zh-CN', //汉化 
    　　autoclose:true //选择日期后自动关闭 
    });
	$(document).ready(function() {

        var table=$('#example').DataTable();

        $('#example tbody').on( 'click', 'tr', function () {
          
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
        $('#delete').click( function () {
          var delcontent = table.$('tr.selected').find("td:eq(0)").text().trim();
          if(delcontent==""){
            $("#deleteModal").modal('show');
          }
          else{
            table.row('.selected').remove().draw( false );
          }
         } );
        $(".dataTables_filter").remove();
        $(".dataTables_length").remove();
        $("#askforview").click(function(){
            window.location.href='checkview.php';
        });
    } );
</script>

        </body></html>