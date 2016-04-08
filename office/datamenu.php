<?php

?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../../lib/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lib/font-awesome/css/font-awesome.css">
   
    <link rel="stylesheet" href="../../lib/datatables/dataTables.bootstrap.min.css">



    <script src="../../lib/jquery-1.11.1.min.js" type="text/javascript"></script>



    <link rel="stylesheet" type="text/css" href="../../lib/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="../../lib/stylesheets/premium.css">
    <link rel="stylesheet" href="../../lib/css/mycss.css">
    <style type="text/css"> 



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
            <li><a href="../askfor/askforlist.php"><i class="glyphicon glyphicon-th"></i>  应用数据</a></li>
            <li><a href="../../userslist.php"><i class="glyphicon glyphicon-user"></i>  人员管理</a></li>
            <li><a href="../../system/managerlist.php"><i class="glyphicon glyphicon-wrench"></i>  系统设置</a></li>
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
                <li><a href="../../system/update_pwd.php">修改密码</a></li>
                <li class="divider"></li>
              
                <li><a tabindex="-1" href="">退出登录</a></li>
              </ul>
            </li>
          </ul>

    </div>


        

      </div>
    
    

    <div class="sidebar-nav">
    <ul>
    <li><a  data-target=".askfor-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;审批<i class="fa fa-collapse"></i></a></li>
    <li><ul class="askfor-menu nav nav-list collapse ">
            <li><a href="../askfor/askforlist.php"><span  class="fa fa-caret-right"></span> 审批列表</a></li>
             <li><a href="../askfor/askfortemplate.php"><span class="fa fa-caret-right"></span> 审批流程</a></li>
    </ul></li>

    <li><a  data-target=".baoxiao-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;报销<i class="fa fa-collapse"></i></a></li>
    <li><ul class="baoxiao-menu nav nav-list collapse ">
            <li><a href="../reimburse/reimburselist.php"><span class="fa fa-caret-right"></span> 报销列表</a></li>
             <li><a href=""><span class="fa fa-caret-right"></span> 报销设置</a></li>
    </ul></li>
        

     <li><a  data-target=".report-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;工作报告<i class="fa fa-collapse"></i></a></li>
    <li><ul class="report-menu nav nav-list collapse ">
            <li><a href="../dailyreport/reportlist.php"><span class="fa fa-caret-right"></span> 报告列表</a></li>
             <li><a href=""><span class="fa fa-caret-right"></span> 报告设置</a></li>
    </ul></li>

    <li><a  data-target=".kaoqin-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;考勤<i class="fa fa-collapse"></i></a></li>
    <li><ul class="kaoqin-menu nav nav-list collapse ">
            <li><a href="../check/checklist.php"><span class="fa fa-caret-right"></span> 公司考勤记录</a></li>
             <li><a href="../check/outlist.php"><span class="fa fa-caret-right"></span> 外出考勤记录</a></li>
             <li><a href="../check/blist.php"><span class="fa fa-caret-right"></span> 班次安排</a></li>
    </ul></li>
     
     <li><a  data-target=".qingjia-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;请假<i class="fa fa-collapse"></i></a></li>
    <li><ul class="qingjia-menu nav nav-list collapse ">
            <li><a href="../askoff/askofflist.php"><span class="fa fa-caret-right"></span> 请假列表</a></li>
             <li><a href=""><span class="fa fa-caret-right"></span> 请假设置</a></li>
    </ul></li>
     
     <li><a  data-target=".invite-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa-fw glyphicon glyphicon-record"></i> &nbsp;邀请人员<i class="fa fa-collapse"></i></a></li>
    <li><ul class="invite-menu nav nav-list collapse ">
            <li><a href="../invite/invitelist.php"><span class="fa fa-caret-right"></span> 人员列表</a></li>
             <li><a href=""><span class="fa fa-caret-right"></span> 邀请设置</a></li>
    </ul></li>

           
    </div>






    <script src="../../lib/bootstrap/js/bootstrap.js"></script>
    <script src="../../lib/datatables/jquery.dataTables.min.js"></script>
    <script src="../../lib/datatables/dataTables.bootstrap.min.js"></script>
    
   <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });

         $(function() {
            
            var url = $("#currenturl").val();
            if(url=="askforlist.php"){
              $(".sidebar-nav ul.askfor-menu li:eq(0)").addClass("active");
              $(".sidebar-nav a.nav-header:eq(0)").removeClass("collapsed");
              $(".sidebar-nav ul.askfor-menu").addClass("in");  //打开列表
            }
             if(url=="askforview.php"){
              $(".sidebar-nav a.nav-header:eq(0)").removeClass("collapsed");
              $(".sidebar-nav ul.askfor-menu").addClass("in");  //打开列表
            }
            if(url=="askfortemplate.php"){
              $(".sidebar-nav ul.askfor-menu li:eq(1)").addClass("active");
              $(".sidebar-nav a.nav-header:eq(0)").removeClass("collapsed");
              $(".sidebar-nav ul.askfor-menu").addClass("in");  //打开列表
            }
            if(url=="reimburselist.php"){
              $(".sidebar-nav ul.baoxiao-menu li:eq(0)").addClass("active");
               $(".sidebar-nav a.nav-header:eq(1)").removeClass("collapsed");
              $(".sidebar-nav ul.baoxiao-menu").addClass("in");    
            }
            if(url=="reimburseview.php"){
            
               $(".sidebar-nav a.nav-header:eq(1)").removeClass("collapsed");
              $(".sidebar-nav ul.baoxiao-menu").addClass("in");    
            }
            if(url=="reportlist.php"){
              $(".sidebar-nav ul.report-menu li:eq(0)").addClass("active");
               $(".sidebar-nav a.nav-header:eq(2)").removeClass("collapsed");
              $(".sidebar-nav ul.report-menu").addClass("in");
            }
            if(url=="reportview.php"){
             
              $(".sidebar-nav a.nav-header:eq(2)").removeClass("collapsed");
              $(".sidebar-nav ul.report-menu").addClass("in");  
            }
            if(url=="checklist.php"){
              $(".sidebar-nav ul.kaoqin-menu li:eq(0)").addClass("active");
               $(".sidebar-nav a.nav-header:eq(2)").removeClass("collapsed");
              $(".sidebar-nav ul.kaoqin-menu").addClass("in");
            }
            if(url=="checkview.php"){
               $(".sidebar-nav a.nav-header:eq(2)").removeClass("collapsed");
              $(".sidebar-nav ul.kaoqin-menu").addClass("in");
            }
            if(url=="outlist.php"){
              $(".sidebar-nav ul.kaoqin-menu li:eq(1)").addClass("active");
               $(".sidebar-nav a.nav-header:eq(2)").removeClass("collapsed");
              $(".sidebar-nav ul.kaoqin-menu").addClass("in");
            }
            if(url=="blist.php"){
              $(".sidebar-nav ul.kaoqin-menu li:eq(2)").addClass("active");
               $(".sidebar-nav a.nav-header:eq(2)").removeClass("collapsed");
              $(".sidebar-nav ul.kaoqin-menu").addClass("in");
            }
            if(url=="badd.php"){
              
               $(".sidebar-nav a.nav-header:eq(2)").removeClass("collapsed");
              $(".sidebar-nav ul.kaoqin-menu").addClass("in");
            }
            if(url=="askofflist.php"){
              $(".sidebar-nav ul.qingjia-menu li:eq(0)").addClass("active");
               $(".sidebar-nav a.nav-header:eq(4)").removeClass("collapsed");
              $(".sidebar-nav ul.qingjia-menu").addClass("in");        
            }
            if(url=="askoffview.php"){
               $(".sidebar-nav a.nav-header:eq(4)").removeClass("collapsed");
              $(".sidebar-nav ul.qingjia-menu").addClass("in");
            }
            if(url=="invitelist.php"){
              $(".sidebar-nav ul.invite-menu li:eq(0)").addClass("active");
               $(".sidebar-nav a.nav-header:eq(5)").removeClass("collapsed");
              $(".sidebar-nav ul.invite-menu").addClass("in");
             
            }
            
        });
    </script>

    
  
</body></html>
