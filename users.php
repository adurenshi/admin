<?php
require "usersmenu.php";
?>
<<!DOCTYPE html>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css">
    <script src="lib/bootstrap-datetimepicker-master/bootstrap-datetimepicker.min.js"></script>
    <script src="lib/bootstrap-datetimepicker-master/bootstrap-datetimepicker.zh-CN.js"></script>
	 <style type="text/css"> 
	 
	 .department{
	 	/*width: 310px;*/
	 	height: 550px;
	 	background: #fafafa;
	 	overflow:scroll;
	 	
	 }
.firstmenu li{
	width: 320px;
}


	 .searchmenu{
	 	width: 300px;
	 }
	 .sidebar-nav .treea{

		line-height: 29px;

	 }

	 .col-lg-9{
	 	position: relative;
	 	margin-left: 50px;
	 }
	 .adddept{
	 	
	 	margin-left: 160px;
	 	margin-top: -24px;
	 	display: inline-block;
		float: left;
	 	/*z-index: 10;*/
	 	cursor: pointer;
	 }
	
	
	 .buttonmenu{
	 	margin-bottom: 20px;
	 }

	 .button{
	 	display: inline-block;
		padding: 6px 12px;
		margin-bottom: 0;
		font-size: 14px;
		font-weight: 400;
		line-height: 1.42857143;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		border: 1px solid transparent;
		border-radius: 4px;
	 }

	 .btn-delete{
		color: #fff;
		background-color: #d9534f;
		border-color: #d43f3a;
	 }
	
	 .btn-delete:hover{
		color: #fff;
		background-color: #d43f3a;
	 }
	 .dataTables_wrapper .dataTables_paginate .paginate_button{
	 	padding: 0 0;
	 }
	  .dataTables_wrapper .dataTables_paginate .paginate_button:hover{
	    border: 1px solid #fafafa;
	 }
	 .dataTables_wrapper .dataTables_paginate .paginate_button:{
	    border: 1px solid #fafafa;
	 }
	 tbody tr.selected {
    	background-color: #B0BED9;
	 }

	 .text-danger{
	 	color: #e14430;
	 }
	 .form-inline{
	 	margin-bottom: 5px;
	 }
	 #seearchdept{
	 	width: 60%;
	 }
	 .dropdown{
	 	display: inline-block;
	 }
	 ul.tanchuang{
	 	position: relative;
	 	float: left;
	 	left:420px;
	 	margin-top: -500px;
	 	display: block;
	 }
	 .sidebar-nav .nav-list{
	 	margin-left: 15px;
	 }
	.sidebar-nav .nav-list > li:hover{
		border-left: 0px solid #FAFAFA;

	}
	
	 .sidebar-nav .nav-list.collapse.in {
    	border: 1px solid #FAFAFA;
}

        </style> 
</head>
<body>
 <div class="content">
        <div class="header">
           

            <h1 class="page-title">员工列表</h1>
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">人员管理</li>
        </ul>

        </div>

    <div class="main-content">
    <div class="col-sm-3 col-md-3 col-lg-2">
    	<div class="searchmenu">
            <form class="form-inline">
			  <div class="form-group">
			   
			    <div class="input-group">
			      
			      <input type="text" class="form-control" id="seearchdept" placeholder="搜索部门">
			      <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			    </div>
			  </div>
			  <div class="dropdown">
			 	 <button  class="btn btn-info plusmenu" data-toggle="dropdown"><span class="glyphicon glyphicon-plus"></span></button>
			  	<ul class="dropdown-menu mainmenu" role="menu" aria-labelledby="dropdownMenu1">
			      <li role="presentation">
			         <a role="menuitem" tabindex="-1" id="adddeptmenu">添加部门</a>
			      </li>
			      <li role="presentation" class="divider"></li>
			      <li role="presentation">
			         <a role="menuitem" tabindex="-1" href="#">设置属性</a>
			      </li>
			      <li role="presentation" class="divider"></li>
			      <li role="presentation">
			         <a role="menuitem" tabindex="-1" href="#">
			            设置标签
			         </a>
			      </li>
			    
			     
			   </ul>
			   </div>
			</form>
			</div>
		<div class="department sidebar-nav">
			

		<ul class="firstmenu">
	    	
<!-- <i  data-toggle="dropdown1" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i> -->

			<li><a  class="treea nav-header"><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 一级部门(17) </a><i  onClick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i> 
			</li>
	    

	   		<li><ul class="nav nav-list collapse in dashboard-menu1">
	            <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 研发部 (6) </a><i onclick="showaddmenu(this)"   class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>
<!-- 
<li>
	<ul class="nav nav-list collapse in ">
		<li></li>
	</ul>
</li> -->

	            <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 商务部 (4) </a><i onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>
	            <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 管理层 (5) </a><i onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>
	            <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 面试人员 (0) </a><i onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>
	            <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> OA (2) </a><i onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>
	        </ul></li>

	        <li><a  class="treea nav-header"><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 华南理工大学(10) </a><i onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>
	        <li><ul class="nav nav-list collapse in dashboard-menu">
	            <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> B3 (6) </a><i onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>
	            <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> B1 (4) </a><i onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>
	           
	        </ul></li>
	     </ul>
		</div>

	</div>

	<div class="col-sm-9 col-md-9 col-lg-9">
	  <div class="buttonmenu">
		  <button type="button" id="add" class="btn btn-info">添加员工</button>
		  <button type="button" id="delete" class="button btn-delete">删除员工</button>
	  </div>
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
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
         
    </table>

	</div>
    </div>

    </div>

<!--1  -->
<div  class="tanchuang" style="display:none;">
                <ul class="dropdown-menu tanchuang" >
                    <!-- 弹窗部门 -->
                    <li><a href="javascript:void(0);" id="addchild" data-ng-click="addChildDepartment(dep)">添加子部门</a></li>
                     <li role="presentation" class="divider"></li>
                    <!-- 弹窗部门_初始化 -->
                    <!-- ngIf: !(dep.cd_id == departmentList[0].cd_id) --><li data-ng-if="!(dep.cd_id == departmentList[0].cd_id)" class="ng-scope">
                   
                        <a href="javascript:void(0);" data-ng-click="editChildDepartment(dep)">编辑</a>
                    </li><!-- end ngIf: !(dep.cd_id == departmentList[0].cd_id) -->
                    <!-- 弹窗保险机制是否确定 -->
                     <li role="presentation" class="divider"></li>
                    <!-- ngIf: !(dep.cd_id == departmentList[0].cd_id) --><li data-ng-if="!(dep.cd_id == departmentList[0].cd_id)" class="ng-scope">
                    
                        <a href="javascript:void(0);" data-ng-click="delDepartment(dep)">删除</a>
                    </li><!-- end ngIf: !(dep.cd_id == departmentList[0].cd_id) -->
                </ul>
            </div>
<!--1  -->
    <!-- 模态框（Modal） -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <center><i class="glyphicon glyphicon-exclamation-sign"></i>  提示</center>
            </h4>
         </div>
         <div class="modal-body">
            <center><font size="4">请选择要删除的条目！</font></center>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
            </button>
           
         </div>
      </div><!-- /.modal-content -->
      </div>
</div><!-- /.modal -->


<!-- 弹出添加人员层-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">添加人员</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="recipient-name" class="col-sm-3 control-label"><span class="text-danger">*</span>姓名:</label>
             <div class="col-sm-7">
            	<input type="text" class="form-control" id="recipient-name">
            </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-sm-3 control-label">帐号:</label>
             <div class="col-sm-7">
            <input type="text" class="form-control" id="message-text"></textarea>
            </div>
          </div>

          <div class="form-group">
           <label for="message-text" class="col-sm-3 control-label"><span class="text-danger">*</span>性别:</label>
           <div class="col-sm-7">
	          <label class="radio-inline">
	  			<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 男
			</label>
			<label class="radio-inline">
	 			 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 女
			</label></div>
		</div>

		 <div class="form-group">
            <label for="message-text" class="col-sm-3 control-label"><span class="text-danger">*</span>选择部门:</label>
             <div class="col-sm-7">
            <button type="button" class="btn btn-info">选择部门</button></div>
          </div>
		<div class="form-group">
            <label for="message-text" class="col-sm-3 control-label"></label>
             <div class="col-sm-7">
            <input type="text" class="form-control" id="message-text" readOnly="true"></textarea></div>
          </div>

           <div class="form-group">
            <label for="message-text" class="col-sm-3 control-label">直属上级:</label>
             <div class="col-sm-7">
            <button type="button" class="btn btn-info">选择上级</button></div>
          </div>
		<div class="form-group">
            <label for="message-text" class="col-sm-3 control-label"></label>
             <div class="col-sm-7">
            <input type="text" class="form-control" id="message-text" readOnly="true"></textarea></div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-sm-3 control-label">手机号:</label>
             <div class="col-sm-7">
            <input type="text" class="form-control" id="message-text"></textarea></div>
          </div>

          <div class="form-group">
            <label for="message-text" class=" col-sm-3 control-label">微信号:</label>
             <div class="col-sm-7">
            <input type="text" class="form-control" id="message-text"></textarea></div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-sm-3 control-label">电子邮箱:</label>
             <div class="col-sm-7">
            <input type="email" class="form-control" id="message-text"></textarea>
            </div>
          </div>

 		<div class="form-group">
            <label for="message-text" class="col-sm-3 control-label">生日:</label>
             <div class="col-sm-7">
            <input type="text" class="form-control" id="Birthday"></textarea></div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-sm-3 control-label">地址:</label>
             <div class="col-sm-7">
            <input type="text" class="form-control" id="message-text"></textarea></div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-sm-3 control-label">职位:</label>
             <div class="col-sm-7">
            <input type="text" class="form-control" id="message-text"></textarea></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary">提交</button>
      </div>
    </div>
  </div>
</div>


<input type="hidden" value="users.php" id="currenturl">
<script type="text/javascript">

$('#Birthday').datetimepicker({ 
　　minView: "month", //选择日期后，不会再跳转去选择时分秒 
　　format: "yyyy-mm-dd", //选择日期后，文本框显示的日期格式 
　　language: 'zh-CN', //汉化 
　　autoclose:true //选择日期后自动关闭 
});
		function slidefun(obj){
		     $(obj).parent().parent().next().find("ul").first().slideToggle("slow");

		}
    

        var $node;

		function showaddmenu(obj){
			 var e = event || window.event;
		     var pointx=e.clientX+10;
			 var pointy=e.clientY-390;
			//alert(pointx+" "+pointy);
			$(".tanchuang").css({ left: pointx, top:pointy }); 
			//node = $(this).prev().text();
			//alert(obj.parentNode.innerHTML);
			$node = $(obj);
			$(".tanchuang").show();	
			$(".mainmenu").hide();
			event.stopPropagation();
        }
        //alert(node.text());
        $("#addchild").click(function(){
        //$("#addchild").on("click", function() {
        	if($node.parent().next().find("ul").first().length<1){
        		var menu_ul = '<li><ul class="nav nav-list collapse in "></ul></li>';
        		$node.parent().after(menu_ul);
        	}
        	//alert($node.parent().next().find("ul").first().length);
        	//var menuul = '<ul class="nav nav-list collapse in "></ul>'
        	//$(this).append(menuli) ;
        	//alert($node.prev().text());
      		var menuli ='<li ><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> testt(0) </a><i onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>';
				// //$("ul.firstmenu ul").append(menuli) ;
			 $node.parent().next().find("ul").first().append(menuli);
				$('ul.firstmenu li').hover(function(){
	              	$(this).children(".adddept").show();
	             	 },function(){
	                      $(this).children(".adddept").hide();
        		});
        		//$(".glyphicon-triangle-bottom").click(function(){
				
			   // $(this).parent().parent().next().find("ul").first().slideToggle("slow");
			  //});
 		});
       
  		

    

        $(document).click(function() {
			$(".mainmenu").hide();
			$('.tanchuang').hide();
		});
		$(".plusmenu").click(function() {
			$(".mainmenu").show();
			$('.tanchuang').hide();
		});
		$(document).ready(function() {
			
		    var table=$('#example').DataTable({
		    	"ajax": "data.txt"
		    });

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
		} );

		$(function(){
 	
			$("#adddeptmenu").click(function(){

				var menuli ='<li><a  class="treea nav-header"><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 华南理工大学(10) </a><i onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></i></li>';
				$("ul.firstmenu").append(menuli) ;
				$('ul.firstmenu li').hover(function(){
	              	$(this).children(".adddept").show();
	             	 },function(){
	                      $(this).children(".adddept").hide();
        		});
			});

			$('ul.firstmenu li').hover(function(){
	              	$(this).children("i.adddept").show();
	             	 },function(){
	                      $(this).children(".adddept").hide();
        	});

    //     	  $("ul.firstmenu li").on("mouseover",function(){
    //     $(this).children("i.adddept").show();
    // }).on("mouseout",function(){
    //    $(this).children("i.adddept").hide();
    // });
			
   
 			// $(".adddept").click(function(){
    //         		alert(1);
    //         });
			$("#add").click(function(){
				$("#addModal").modal();
			});

		});

        $(function() {
            var url = $("#currenturl").val();
            if(url=="users.php"){
            	$(".sidebar-nav  li:first .glyphicon-menu-right").hide();
            
            }
        });
    </script>
</body>
</html>