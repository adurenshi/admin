<?php
require "usersmenu.php";
?>

<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>员工列表</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css">
    <script src="lib/bootstrap-datetimepicker-master/bootstrap-datetimepicker.min.js"></script>
    <script src="lib/bootstrap-datetimepicker-master/bootstrap-datetimepicker.zh-CN.js"></script>
    <style type="text/css">
   
   .department{
    overflow: scroll;
   
    background: #fafafa;
    width: 260px;
   }
.firstmenu li{
  width: 320px;
}

.glyphicon-search{
  text-align: center;
}
#searchdept{
  width: 60%;
  height: 34px;
    padding-left: 5px ;
    font-size: 13px;
    line-height: 1.32857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
}
   .searchdiv{
   	margin-bottom: 13px;
   }

   .text-danger{
    color: #e14430;
   }
   .form-inline{
    margin-bottom: 5px;
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
            

                      <h1 class="page-title"><i class="glyphicon glyphicon-user"></i> 员工管理</h1>
                      

        </div>
        <div class="main-content">
          
            <div class="row">
              <div class="col-sm-3 col-md-3 col-lg-3">
             <div class="searchdiv">
                <input type="text"  id="searchdept" placeholder="搜索部门">
                
                <button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span></button>
                
               
                <div class="dropdown">
                   <button  class="btn btn-info plusmenu btn-sm" data-toggle="dropdown"><span class="glyphicon glyphicon-plus"></span></button>
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
              </div>
          
                
            <div class="sidebar-nav department">
              <ul class="firstmenu">
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


              <li><a  class="treea nav-header"><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 一级部门(17)  <span  onClick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display: none"></span>  </a>
              </li>
      

              <li><ul class="nav nav-list collapse in dashboard-menu1">
                    <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 研发部 (6) <span  onClick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display: none"></span></a></li>


                    <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 商务部 (4) <span  onClick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display: none"></span></a></li>
                    <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 管理层 (5) <span  onClick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display: none"></span></a></li>
                    <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 面试人员 (0) <span  onClick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display: none"></span></a></li>
                    <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> OA (2) <span  onClick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display: none"></span></a></li>
                </ul></li>

                    <li><a  class="treea nav-header"><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 华南理工大学(10) <span onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></span></a></li>
                    <li><ul class="nav nav-list collapse in dashboard-menu">
                        <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> B3 (6) <span onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></span></a></li>
                        <li><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> B1 (4) <span onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></span></a></li>
                       
                    </ul></li>
                </ul>



              </div>

           </div>
            <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="buttonmenu">
      <button type="button" id="add" class="btn btn-info">添加员工</button>
      <button type="button" id="delete" class="btn btn-danger">删除员工</button>
    </div>
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%"> 
        <thead>
            <tr>
                <th>姓名</th>
                <th>性别</th>
                <th>职位</th>
                <th>手机</th>
                <th>邮箱</th>
                <th>状态</th>
            </tr>
        </thead>
        
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
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
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
         </div><!-- div content -->

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
               <center><span class="glyphicon glyphicon-exclamation-sign"></span>  提示</center>
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

<!-- deletemodal -->
<div class="modal small fade" id="suredelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">删除员工</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>你确定要删除这条记录信息吗？<br>删除之后不能恢复。</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">取消</button>
            <button class="btn btn-danger" id="yesdelete" data-dismiss="modal">删除</button>
        </div>
      </div>
    </div>
</div>
<!-- deletemodal -->



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
<input type="hidden" value="userslist.php" id="currenturl">
<script type="text/javascript">
$(function() {
            var url = $("#currenturl").val();
            if(url=="userslist.php"){
              $(".sidebar-nav  li:eq(0) .glyphicon-menu-right").hide();
             
            }
        });

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
            var scrollX = document.documentElement.scrollLeft || document.body.scrollLeft;
            var scrollY = document.documentElement.scrollTop || document.body.scrollTop;
            var x = e.pageX || e.clientX + scrollX ;
            var y = e.pageY || e.clientY + scrollY;
            //alert('x: ' + x + '\ny: ' + y);
           // return { 'x': x, 'y': y };
           // var e = event || window.event;
           //   var pointx=e.clientX-200;
           // var pointy=e.clientY+320;
          //alert(pointx+" "+pointy);
            $(".tanchuang").css({ left: x-245, top:y+320 }); 
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
          if($node.parent().parent().next().find("ul").first().length<1){
            var menu_ul = '<li><ul class="nav nav-list collapse in "></ul></li>';
            $node.parent().parent().after(menu_ul);
          }
          //alert($node.parent().next().find("ul").first().length);
          //var menuul = '<ul class="nav nav-list collapse in "></ul>'
          //$(this).append(menuli) ;
          //alert($node.prev().text());
          var menuli ='<li ><a><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> testt(0) <span onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></span></a></li>';
        // //$("ul.firstmenu ul").append(menuli) ;
       $node.parent().parent().next().find("ul").first().append(menuli);
        $('ul.firstmenu li a').hover(function(){
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
              $("#suredelete").modal("show");
              $('#yesdelete').click( function () {
                table.row('.selected').remove().draw( false );
              });
              
            }
          });
    } );

    $(function(){
  
      $("#adddeptmenu").click(function(){

        var menuli ='<li><a  class="treea nav-header"><span class="glyphicon glyphicon-list" onclick="slidefun(this)"></span> 华南理工大学(10) <span onclick="showaddmenu(this)" class="glyphicon glyphicon-plus-sign adddept" style="display:none;"></span></a></li>';
        $("ul.firstmenu").append(menuli) ;
        $('ul.firstmenu li a').hover(function(){
                  $(this).children(".adddept").show();
                 },function(){
                        $(this).children(".adddept").hide();
            });
      });

      $('ul.firstmenu li a').hover(function(){
                  $(this).children("span.adddept").show();
                 },function(){
                        $(this).children(".adddept").hide();
          });

    //        $("ul.firstmenu li").on("mouseover",function(){
    //     $(this).children("i.adddept").show();
    // }).on("mouseout",function(){
    //    $(this).children("i.adddept").hide();
    // });
      
   
      // $(".adddept").click(function(){
    //            alert(1);
    //         });
      $("#add").click(function(){
        $("#addModal").modal();
      });

    });

        
    </script>
    </body>
    </html>