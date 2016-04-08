<?php
require "systemmenu.php";
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
	<title>管理员列表</title>
	<style type="text/css">

   .buttonmenu{
   	margin-bottom: 20px;
   }

	</style>
</head>
<body>
<div class="content">
        <div class="header">
              <h1 class="page-title"><i class="glyphicon glyphicon-th-list"></i> 管理员列表</h1> 
        </div>
<div class="main-content" style="margin-left: 50px;">
	
		<div class="row">
			
			 <div class="col-sm-6  col-md-6 buttonmenu">
		      <button type="button" id="add" class="btn btn-info">添加管理员</button>
		      <button type="button" id="delete" class="btn btn-danger">删除管理员</button>
	    	</div>
	    	</div>

    <div class="row">
		
    	<div class="col-md-10 col-lg-10">
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
        <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
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




<input type="hidden" value="managerlist.php" id="currenturl">
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
        $("input[type='search']").attr('placeholder','搜索管理员');
    } );
</script>

        </body></html>