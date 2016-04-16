$(function(){
	var nihao;
	alert(nihao);
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
					$("ul.firstmenu").append('<li id="'+department[i].id+'"><a  class="treea nav-header"><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span>&nbsp;'+
					 department[i].name+'&nbsp;<span class="glyphicon glyphicon-plus-sign adddept" data-toggle="popover" data-html="true" data-placement="bottom" '
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
						
						var menuli ='<li id="'+department[j].id+'"><a><span class="glyphicon glyphicon-triangle-bottom" onclick="slidefun(this)"></span> '+department[j].name+'  <span class="glyphicon glyphicon-plus-sign adddept"  data-toggle="popover"  data-html="true" data-placement="bottom" data-content="" style="display: none"></span></a></li>';
						
						//alert($(lid).text());
						$(lid).next().find("ul").first().append(menuli);
					}
				}
				
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
      
            var target = $(event.target); // One jQuery object instead of 3  
          
            if (!target.hasClass('adddept')  ){  
                $("[data-toggle='popover']").popover('hide');  
            }  
    }); 
 	$("ul.firstmenu").on("click","li a .adddept",function(){
 		$(this).attr('data-content','<ul class="tanc-menu" > <li><a href="javascript:void(0);" id="addchild" onclick="addchildf(this)">添加子部门</a></li> <li role="presentation" class="divider"></li> <li ><a href="javascript:void(0);" >编辑</a> </li> <li role="presentation" class="divider"></li><li><a href="javascript:void(0);" >删除</a> </li> </ul>'); 
 	
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