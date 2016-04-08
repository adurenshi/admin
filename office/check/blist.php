<?php
require "../datamenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>班次安排-考勤-应用数据</title>

	<style type="text/css">

	</style>
</head>
<body>
<div class="content">
        <div class="header">
              <h1 class="page-title"><i class="glyphicon glyphicon-th-list"></i> 班次安排</h1> 
        </div>
   <div class="main-content">
   
	 <div class="panel panel-default">
        <label class="panel-heading" data-toggle="collapse"><font size="3"> 搜索班次</font></label> 
        <div id="page-stats" class="panel-collapse panel-body collapse in">

            <form class="form-inline">
            <div class="form-row">
               <div class="form-group">
                    <label  for="exampleInputEmail3">班次:</label>
                    <input type="text" class="input-sm form-control" id="exampleInputEmail3" placeholder="输入班次名称">
                  </div> <span class="space"></span>
       
                  <div class="form-group">
                    <label  for="exampleInputEmail3">考勤地点:</label>
                    <input type="text" class="input-sm form-control" id="exampleInputEmail3" placeholder="输入考勤地点">
                  </div><span class="space"></span>
                  
                  <span class="space"></span>
                    <button type="submit" class="btn btn-info">搜索</button>
                   
             </div>

            </form>
                       
                    
        </div>
    </div> <!-- div panel panel-default-->
   
         <div class="panel panel-default">
            <label class="panel-heading" data-toggle="collapse"><font size="3"> 记录列表</font></label> 
            <div id="page-stats" class="panel-collapse panel-body collapse in">
            <button type="button" id="badd" class="btn btn-success">添加班次</button>
            <button type="button" id="askforview" class="btn btn-info">编辑</button>
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




<input type="hidden" value="blist.php" id="currenturl">
<script type="text/javascript">
  
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
        $("#badd").click(function(){
            window.location.href='badd.php';
        });
        $("#askforview").click(function(){
            window.location.href='checkview.php';
        });
    } );
</script>

        </body></html>