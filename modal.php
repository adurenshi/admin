<?php


?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <style type="text/css">
    .modal-sidebar-nav .ul-list{
      margin-left: 15px;
     }
    

    
    ul.modal-menu{
        padding: 1em 1em 1em 1em;
        text-align: left;
        list-style: none;  
    }
    ul.modal-menu li a{
      color: #222;
      padding: 0.5em 1em;
    }

    input[type=checkbox]{
      width: 15px;
      height: 15px;
    }

    </style>
    </head>
<body>
<!-- 添加人员 -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">添加人员</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal add_employer_form">
          <div class="form-group">
            <label for="recipient-name" class="col-sm-3 control-label"><span class="text-danger">*</span>姓名:</label>
             <div class="col-sm-7">
              <input type="text" class="form-control" id="employername" placeholder="请输入姓名">
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
          <input type="radio"  id="radio1" value="男"> 男
          </label>
          <label class="radio-inline">
             <input type="radio"  id="radio2" value="女"> 女
          </label></div>
    </div>

     <div class="form-group">
            <label for="message-text" class="col-sm-3 control-label"><span class="text-danger">*</span>选择部门:</label>
             <div class="col-sm-7">
            <button type="button" class="btn btn-info selectdept">选择部门</button></div>
          </div>
    <div class="form-group">
            <label for="message-text" class="col-sm-3 control-label"></label>
             <div class="col-sm-7">
            <input type="text" class="form-control" id="sdeptname" readOnly="true"></textarea></div>
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
        <button type="button" class="btn btn-default emcancel" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary">提交</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->

<!-- 选择部门-->
<div class="modal fade" id="selectdeptModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true" >
   <div class="modal-dialog " >
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               选择部门
            </h4>
         </div>
         <div class="modal-body">
            <div class="modal-sidebar-nav ">
              <ul class="modal-menu nav">
                <li><a  class=""><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span> <input type="checkbox" value="一级部门"> 一级部门 </a></li>
                <li><ul class=" nav ul-list collapse in ">
                    <li><a><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span> <input type="checkbox" value="研发部"> 研发部 (6) </a></li>


                    <li><a><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span> <input type="checkbox" value="商务部"> 商务部 (4) </a></li>
                    <li><a><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span> <input type="checkbox" value="管理层"> 管理层 (5)</a></li>
                    <li><a><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span> <input type="checkbox" value="测试test"> 测试test(5)</a></li>
                    <li><a><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span> <input type="checkbox" value="应用层"> 应用层 (5)</a></li>
                    
                </ul></li>
              </ul>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default sdcancel" 
               data-dismiss="modal">取消
            </button>
           <button type="button" class="btn btn-success sdconfirm">确定</button>
         </div>
      </div><!-- /.modal-content -->
      </div>
</div><!-- /.modal --> 

<!-- 选择上级 -->
<div class="modal fade" id="selectleaderModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               选择人员
            </h4>
         </div>
         <div class="modal-body">
            <div class="sidebar-nav- ">
             
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default slcancel" 
               data-dismiss="modal">取消
            </button>
           <button type="button" class="btn btn-success slconfirm">确定</button>
         </div>
      </div><!-- /.modal-content -->
      </div>
</div><!-- /.modal --> 

<!-- 添加子部门 -->
<div class="modal fade" id="addchildModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <center>添加部门</center>
            </h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label  class="col-sm-offset-1 col-sm-2 control-label"><span class="text-danger">* </span>部门名称</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="deptname" placeholder="请输入部门名称">
                  </div>
                  <span class="text-danger error" style="font-size: 12px;display: none;"></span>
              </div>
              <!-- <div class="form-group">
                <label  class="col-sm-offset-1 col-sm-2 control-label">选择上级</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="i" placeholder="">
                </div>
              </div> -->
              
             
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
            </button>
           <button type="button" class="btn btn-success submit">提交</button>
         </div>
      </div><!-- /.modal-content -->
      </div>
</div><!-- /.modal --> 

<!-- 编辑子部门 -->
<div class="modal fade" id="editchildModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <center>编辑部门</center>
            </h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label  class=" col-sm-3 control-label"><span class="text-danger">* </span>部门名称</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control deptname" id="" placeholder="请输入部门名称">
                </div>
              </div>
              <div class="form-group">
                <label  class=" col-sm-3 control-label">设置部门负责人</label>
                <div class="col-sm-8">
                  <button type="button" class="btn btn-info selectleader">选择上级</button></div>
                </div> 
                <div class="form-group">
                 <div class="col-sm-offset-3 col-sm-8">
                    <div class="leaderchoose"><span class="leadlabel">durenshi<strong>x</strong></span>

      <span class="leadlabel">test<strong>x</strong></span>
      <span class="leadlabel">test2<strong>x</strong></span>
      <span class="leadlabel">test3<strong>x</strong></span>
      <span class="leadlabel">test4<strong>x</strong></span>


                    </div>
                    </div>
                </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
            </button>
           <button type="button" class="btn btn-success">提交</button>
         </div>
      </div><!-- /.modal-content -->
      </div>
</div><!-- /.modal --> 

<!-- 删除子部门 -->
<div class="modal  fade" id="deletechildModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><center>删除部门</center></h4>
        </div>
        <div class="modal-body">
            <h3 class="error-text"><i class="fa fa-warning modal-icon"></i><b>你确定要删除该部门？</b><br><br>删除部门将删除该部门对应的所有内容，请谨慎操作。</h3>

        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">取消</button>
            <button class="btn btn-danger" id="yesdelete" data-dismiss="modal">删除</button>
        </div>
      </div>
    </div>
</div>
<!-- deletemodal -->


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


    </body>

    </html>