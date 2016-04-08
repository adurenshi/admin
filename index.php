<?php

?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="lib/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
   
    <link rel="stylesheet" href="lib/datatables/dataTables.bootstrap.min.css">



    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>



    <link rel="stylesheet" type="text/css" href="lib/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="lib/stylesheets/premium.css">
    <style type="text/css"> 
    .header{
             margin: 0px 0em 1.0em 0em;
            padding: 1em 0em 0.4em 0em;
    }
        a:link {
              text-decoration: none;
        } 
        a:hover{
            cursor: pointer;
        }
    
        .far{
            float: right;
            margin-right: 10px;
            margin-top: 8px;

        }
        .navbar-header{
            margin-right: 113px;
        }
        .btn-success{
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from( #5cb85c), to( #5cb85c));

        }

    </style> 

</head>
<body class=" theme-blue">

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>


    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Aircraft</span></a></div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" id="navmenu">
            <li ><a href="#"><i class="glyphicon glyphicon-cloud"></i>  应用中心 </a></li>
            <li><a href="index.php"><i class="glyphicon glyphicon-th"></i>  应用数据</a></li>
            <li><a href="users.php"><i class="glyphicon glyphicon-user"></i>  人员管理</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-wrench"></i>  系统设置</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-question-sign"></i>  帮助中心<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>

          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> durenshi
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li><a href="update_pwd.php">修改密码</a></li>
                <li class="divider"></li>
              
                <li><a tabindex="-1" href="">退出登录</a></li>
              </ul>
            </li>
          </ul>

    </div>


        

      </div>
    
    

    <div class="sidebar-nav">
    <ul>
    <li><a href="" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;审批<i class="far glyphicon glyphicon-menu-right"></i></a></li>
    

    <li><a href="javascript:;" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;报销<i class="far glyphicon glyphicon-menu-right"></i></a></li>
        

     <li><a href="javascript:;" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;工作报表<i class="far glyphicon glyphicon-menu-right"></i> </a></li>

     <li><a href="javascript:;" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;考勤<i class="far glyphicon glyphicon-menu-right"></i></a></li>
     
     <li><a href="javascript:;" class="nav-header"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;请假<i class="far glyphicon glyphicon-menu-right"></i></a></li>
     
     <li><a href="javascript:;" class="nav-header"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;邀请人员<i class="far glyphicon glyphicon-menu-right"></i></a></li>
     </ul>

           
    </div>






    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script src="lib/datatables/jquery.dataTables.min.js"></script>
    <script src="lib/datatables/dataTables.bootstrap.min.js"></script>
    
   <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  
</body></html>
