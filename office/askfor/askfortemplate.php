<?php
require "../datamenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>审批流程-审批-应用数据</title>
   

	<style type="text/css">
   }
   
	</style>
</head>
<body>
<div class="content">
        <div class="header">
              <h1 class="page-title"><i class="glyphicon glyphicon-th-list"></i> 审批流程</h1> 
        </div>
   <div class="main-content">
	 <div class="panel panel-default">
        <label class="panel-heading" data-toggle="collapse"><font size="3"> </font></label> 
        <div id="page-stats" class="panel-collapse panel-body collapse in">

          <button id="returnbtn" class="btn btn-success">启用</button>
           <button id="returnbtn" class="btn btn-warning">禁用</button>
            <button id="returnbtn" class="btn btn-danger">删除</button>
             <button id="returnbtn" class="btn btn-info">添加流程</button>
                       
                    
        </div>
    </div> <!-- div panel panel-default-->
    
   </div>
</div>


<input type="hidden" value="askfortemplate.php" id="currenturl">


<script type="text/javascript">
    
	$(document).ready(function() {
        $("#returnbtn").click(function(){
            window.location.href='askforlist.php';
        });
  });
</script>

        </body></html>