<?php
require "../datamenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>添加班次-考勤-应用数据</title>
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css">
    <script src="../../lib/bootstrap-datetimepicker-master/bootstrap-datetimepicker.min.js"></script>
    <script src="../../lib/bootstrap-datetimepicker-master/bootstrap-datetimepicker.zh-CN.js"></script>
    <link rel="stylesheet" href="../../lib/css/view.css">

	<style type="text/css">
 
   .till{
      min-height: 30px;
      line-height: 30px;
   }
	</style>
  }
</head>
<body>
<div class="content">
        <div class="header">
              <h1 class="page-title"><i class="glyphicon glyphicon-list-alt"></i> 添加班次</h1> 
        </div>
   <div class="main-content">
	 <div class="panel panel-default">
        
        <div id="page-stats" class="panel-collapse panel-body collapse in">

          <form class="form-horizontal">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"><span style="color:red;">*</span>班次:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="输入班次">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2 control-label"><span style="color:red;">*</span>时间段:</label>
                <div class="col-sm-4">
                  <select class="form-control">
                    <option>9:00</option>
                    <option>10:00</option>
                    <option>11:00</option>
                  </select>
             
                <span class="till">至</span>
              
                  <select class="form-control">
                    <option>9:00</option>
                    <option>10:00</option>
                    <option>11:00</option>
                  </select>
               </div>
              </div> 
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"><span style="color:red;">*</span>日期:</label>
                <div class="col-sm-4">
                  <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" value="option1" checked>周一
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox2" value="option2" checked>周二
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3" checked>周三
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3" checked>周四
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3" checked>周五
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3">周六
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3">周日
                    </label>
                </div>
              </div>
             
              <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label"><span style="color:red;">*</span>启用时间:</label>
                  
                    <div class="col-sm-4">
                        <input type="text" class=" form-control" id="begindate" placeholder="开始日期">                         
                  </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">部门:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="输入班次">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">范围开关:</label>
                <div class="col-sm-4">
                  <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">开启范围
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked> 关闭范围
                  </label>
                  
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">晚多久算迟到:</label>
                <div class="col-sm-4">
                  <input type="number" class="form-control" id="inputEmail3" >
                  <span class="till">单位：分钟</span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button id="submit" class="btn btn-success">提交</button>
                </div>
              </div>
            </form>
                       
                    
        </div>
    </div> <!-- div panel panel-default-->
   


   </div>
</div>


<input type="hidden" value="badd.php" id="currenturl">


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
       $('#example').dataTable( {
          "lengthChange": false,//是否允许用户自定义显示数量
          "searching":false,
           "ordering": false,
           "info":     false,  //页脚信息隐藏
           "language": {           
                 "zeroRecords": "没有找到记录",
             }
        });
       $("#submit").click(function(event){
          event.preventDefault();//阻止表单提交
          window.location.href='blist.php';
       });

  });
</script>

        </body></html>