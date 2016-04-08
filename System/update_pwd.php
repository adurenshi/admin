<?php
require "systemmenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>修改密码</title>
	<style type="text/css">
	
	</style>
</head>
<body>
<div class="content">
        <div class="header">
           

                      <h1 class="page-title"><i class="glyphicon glyphicon-lock"></i> 修改密码</h1>
                              

        </div>
        <div class="main-content">
        	<form class="form-horizontal">
        	     <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">最后登陆时间</label>
				    <div class="col-sm-6">
				    	<p class="form-control-static">2016-03-25 15:35</p>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">最后登陆</label>
				    <div class="col-sm-6">
				    	<p class="form-control-static">125.213.33.33</p>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">登录密码</label>
				    <div class="col-sm-8">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="登录密码">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">再次输入密码</label>
				    <div class="col-sm-8">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="再次输入密码">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				    
				    <button type="submit" class="btn btn-success">确认修改</button>
				      
				    </div>
				  </div>
				</form>

        </div>




 </div>
<input type="hidden" value="update_pwd.php" id="currenturl">
<script type="text/javascript">
	
</script>

</body>
</html>