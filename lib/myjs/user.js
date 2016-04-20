$(function(){
	
	$.ajax({
		url:"data.json",
		//url : "http://www.netnook.cn:8080/ssh_test/wxqy/getDepartments.action",
		//dataType:'jsonp',
		//jsonp:'callback',

		success : function(data) {
			var department = data.department;
			
			var maxlevel=1;
			

			for(var i=0;i<department.length;i++){
				if(department[i].level==1){
					
					$("ul.firstmenu").append('<li id="'+department[i].id+'" data-level="'+department[i].level+'" data-parentid="'+department[i].parentid+'"><a  class="treea nav-header"><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span>&nbsp;<span class="deptname">'+
					 department[i].name+'&nbsp;</span><span class="glyphicon glyphicon-plus-sign adddept" data-toggle="popover" data-trigger="focus" data-html="true" data-placement="bottom" '
					 +'data-content="" style="display: none"></span> </a></li>');
				}
				if(maxlevel<department[i].level)maxlevel=department[i].level;
			}
			for(var i=2;i<=maxlevel;i++){
				for(var j=0;j<department.length;j++){
					if(department[j].level==i){
						var lid="ul.firstmenu li#"+department[j].parentid;
						if($(lid).next().find("ul").first().length<1){
							var menu_ul = '<li><ul class="nav ul-list collapse in "></ul></li>';
							$(lid).after(menu_ul);
						}
						
						var menuli ='<li id="'+department[j].id+'" data-level="'+department[i].level+'" data-parentid="'+department[i].parentid+'"><a><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span> <span class="deptname">'+department[j].name+'&nbsp;</span><span class="glyphicon glyphicon-plus-sign adddept"  data-toggle="popover"  data-html="true" data-placement="bottom" data-trigger="focus" data-content="" style="display: none"></span></a></li>';
						
						//alert($(lid).text());
						$(lid).next().find("ul").first().append(menuli);
					}
				}	
			}
			if($(".firstmenu").height()>500){
             	$(".department").css("overflow","scroll");
    		}
		},
		error:function(XMLHttpRequest, textStatus, errorThrown) {
		       alert(XMLHttpRequest.status);
		       alert(XMLHttpRequest.readyState);
		       alert(textStatus);
	     },
	});

    //为动态生成的li设置鼠标事件
	$("ul.firstmenu ").on("mouseover","li a", function() {
		//alert($(this).first().html());
		$(this).find("span.adddept").show(); 
      	//$(this).children("a span.adddept").show();
 	});
 	$("ul.firstmenu").on("mouseout","li a", function() {
      	$(this).find("span.adddept").hide(); 
 	});
  

    //显示子菜单栏操作
 	$('body').on('click', function(event) {  
      
            var target = $(event.target);   
          
            if (!target.hasClass('adddept')  ){  
                $("[data-toggle='popover']").popover('hide');  
            }  
    }); 
    //一级菜单点击事件
    $("ul.firstmenu").on("click","li .treea .adddept",function(){
 		$(this).attr('data-content','<ul class="tanc-menu-1"><li><a href="javascript:void(0);"  onclick="addchildf(this)">添加子部门</a></li></ul>'); 
 	
 		$(this).parents("li").siblings("li").find("[data-toggle='popover']").popover("hide");//阻止多个弹出框，多次点击只显示一个
 	
 		$(this).popover('show');  
 		//event.stopPropagation();	
 	});
 	//二级及一下菜单的点击事件
 	$("ul.firstmenu").on("click","li ul li a .adddept",function(){
 		$(this).attr('data-content','<ul class="tanc-menu" > <li><a href="javascript:void(0);"  onclick="addchildf(this)">添加子部门</a></li> <li role="presentation" class="divider"></li> <li ><a href="javascript:void(0);" onclick="editchildf(this)">编辑</a> </li> <li role="presentation" class="divider"></li><li><a href="javascript:void(0);" onclick="deletechildf(this)">删除</a> </li> </ul>'); 
 	
 		$(this).parents("li").siblings("li").find("[data-toggle='popover']").popover("hide");//阻止多个弹出框，多次点击只显示一个
 	
 		$(this).popover('show');  
 		//event.stopPropagation();	
 	});

 	//点击动态生成的li a操作
 	$("ul.firstmenu").on("click","li a",function(){
 		
 		//$(this).css("background","#d2d2dd");
 		$(this).addClass("a_active");
 		$(this).parents("li").siblings("li").find("a").removeClass("a_active");
 	});
 	
 	
	
});
var dept_id;
var dept_name;
var dept_parentid;
var dept_level;

function addchildf(obj){
	dept_id = $(obj).parents("li:eq(1)").attr("id");
	//dept_name = $(obj).parents("a:eq(0)").children(".deptname").text().trim();
	dept_level = $(obj).parents("li:eq(1)").attr("data-level");
	dept_parentid = $(obj).parents("li:eq(1)").attr("data-parentid");
	$("input#deptname").val("");
	$('#addchildModal').modal();
}
function editchildf(obj){
	var deptname = $(obj).parents("a:eq(0)").children(".deptname").text().trim();
	$('#editchildModal').modal();
	$('#editchildModal .deptname').val(deptname);
	
}
function deletechildf(obj){
	$("#deletechildModal").modal();
	//location.reload();
}

$(function(){
	$(".selectleader").click(function(){
		var modalid = "#"+$(this).parents("div.modal").attr("id");
		$(modalid).modal("hide");
		$("#selectleaderModal").modal();
	});
	$(".slcancel").click(function(){
		$("#selectleaderModal").modal('hide');
		$('#editchildModal').modal();
	});
	$(".leadlabel strong").click(function(){
		$(this).parent().remove();
		$(this).remove();
	});
	$("input#deptname").focus(function(){
		$(".error").hide();
	});
	$("#addchildModal .submit").click(function(){
		dept_name = $("#addchildModal #deptname").val();

		//alert(dept_id+" "+dept_name+" "+dept_level+" "+dept_parentid);
		if(dept_name==""){
			$(".error").text("部门名称不能为空").show();
		}
		else{
			dept_name="test";
			$.ajax({
			
				url:"http://localhost:8080/ssh_test1/manager/createDepart.action",
				type:"get",
				data:{
					name:dept_name,
					parentid:dept_parentid,
					level:dept_level
				},
				success:function(data){
					alert(data);
				},
			});
			//$(".error").text("部门名称已被使用").show();
		}

	});
	//添加人员
	$("#add").click(function(){
		// $("#employername").val("");
		// $('#radio1').removeAttr('checked'); 
		// $("#radio2").removeAttr('checked');
		// $("input:checkbox").attr("checked", false);
		// $("#sdeptname").val("");
		
        $("#addModal").modal();
    });
    $(".emcancel,#addModal .close").click(function(){
    	$(".add_employer_form").find(":input").not(":button,:submit,:reset,:hidden").val("").removeAttr("checked").removeAttr("selected");
    	$("#selectdeptModal input:checkbox").attr("checked", false);
    });
    // $("#selectdeptModal .close").click(function(){
    // 	$(".add_employer_form").find(":input").not(":button,:submit,:reset,:hidden").val("").removeAttr("checked").removeAttr("selected");
    // 	$("#selectdeptModal input:checkbox").attr("checked", false);
    // });
	//选择部门

	$(".selectdept").click(function(){
		$("#addModal").modal('hide');
		$("#selectdeptModal").modal();
	});
	$(".sdcancel,#selectdeptModal .close").click(function(){
		$("#addModal").modal("show");
		$("#selectdeptModal").modal("hide");
	});
	$(".sdconfirm").click(function(){
		var dept = "";
		$('input[type=checkbox]:checked').each(function(){
			
            dept+=$(this).val()+"  "; 
        });
        $("#selectdeptModal").modal("hide");
        $("#addModal").modal("show");
        $("#sdeptname").val(dept);
		
	});
	$(".modal-menu li a").click(function(){
		if($(this).children("input:checkbox").prop("checked")){
			$(this).children("input:checkbox").prop("checked", false);

		}
		else{
			$(this).children("input:checkbox").prop("checked", true);
		}
		
	});

});