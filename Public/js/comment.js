$(function(){

	//点击提交评论内容
	$('body').delegate('.comment-submit','click',function(){	
		var content = $.trim($(this).parent().prev().children("textarea").val());//根据布局结构获取当前评论内容
		$(this).parent().prev().children("textarea").val("");//获取完内容后清空输入框
		if(""==content){
			alert("评论内容不能为空!");		
		}else{
			var cmdata = new Object();
			cmdata.parent_id = $(this).attr("parent_id");//上级评论id
			cmdata.content = content;
			cmdata.nickname = "游客";//测试用数据
			cmdata.head_pic = "/Public/images/default.jpg";//测试用数据				
			var replyswitch = $(this).attr("replyswitch");//获取回复开关锁属性
			$.ajax({
				type:"POST",
				url:"/index.php/home/index/addComment",
				data:{
					comment:JSON.stringify(cmdata)				
				},
				dataType:"json",			
				success:function(data){
					if(typeof(data.error)=="undefined"){
						$(".comment-reply").next().remove();//删除已存在的所有回复div	
						//更新评论总数						
						$(".comment-num").children("span").html(data.num+"条评论");
						//显示新增评论
						var newli = "";						
						if(cmdata.parent_id == "0"){
						 //发表的是一级评论时，添加到一级ul列表中						 
						 newli = "<li comment_id='"+data.id+"'><div ><div><img class='head-pic'  src='"+data.head_pic+"' alt=''></div><div class='cm'><div  class='cm-header'><span>"+data.nickname+"</span><span>"+data.create_time+"</span></div><div class='cm-content'><p>"+data.content+"</p></div><div class='cm-footer'><a class='comment-reply' comment_id='"+data.id+"'  href='javascript:void(0);'>回复</a></div></div></div><ul class='children'></ul></li>";							
							$(".comment-ul").prepend(newli);
						}else{
						 //否则添加到对应的孩子ul列表中							 
						 	if('off'==replyswitch){//检验出回复关闭锁存在，即三级评论不再提供回复功能						 	
						 		newli = "<li comment_id='"+data.id+"'><div ><div><img class='head-pic'  src='"+data.head_pic+"' alt=''></div><div class='children-cm'><div  class='cm-header'><span>"+data.nickname+"</span><span>"+data.create_time+"</span></div><div class='cm-content'><p>"+data.content+"</p></div><div class='cm-footer'></div></div></div><ul class='children'></ul></li>";
						 	}else{//二级评论的回复按钮要添加回复关闭锁属性					 	
						 		newli = "<li comment_id='"+data.id+"'><div ><div><img class='head-pic'  src='"+data.head_pic+"' alt=''></div><div class='children-cm'><div  class='cm-header'><span>"+data.nickname+"</span><span>"+data.create_time+"</span></div><div class='cm-content'><p>"+data.content+"</p></div><div class='cm-footer'><a class='comment-reply' comment_id='"+data.id+"'  href='javascript:void(0);' replyswitch='off' >回复</a></div></div></div><ul class='children'></ul></li>";
						 	}						 	
						 	$("li[comment_id='"+data.parent_id+"']").children("ul").prepend(newli);
						}

					}else{
						//有错误信息
						alert(data.error);
					}
					
				}
			});
		}
		

	});

	

	//点击"回复"按钮显示或隐藏回复输入框
	$("body").delegate(".comment-reply","click",function(){
		if($(this).next().length>0){//判断出回复div已经存在,去除掉
		 	$(this).next().remove();
		 }else{//添加回复div
		 	$(".comment-reply").next().remove();//删除已存在的所有回复div	
		 	//添加当前回复div
		 	var parent_id = $(this).attr("comment_id");//要回复的评论id
		 	
		 	var divhtml = "";
		 	if('off'==$(this).attr("replyswitch")){//二级评论回复后三级评论不再提供回复功能,将关闭属性附加到"提交回复"按钮"
		 		divhtml = "<div class='div-reply-txt' style='width:98%;padding:3px;' replyid='2'><div><textarea class='txt-reply' replyid='2' style='width: 100%; height: 60px;'></textarea></div><div style='margin-top:5px;text-align:right;'><a class='comment-submit'  parent_id='"+parent_id+"' style='font-size:14px;text-decoration:none;background-color:#63B8FF;' href='javascript:void(0);' replyswitch='off' >提交回复</a></div></div>";
		 	}else{
		 		divhtml = "<div class='div-reply-txt' style='width:98%;padding:3px;' replyid='2'><div><textarea class='txt-reply' replyid='2' style='width: 100%; height: 60px;'></textarea></div><div style='margin-top:5px;text-align:right;'><a class='comment-submit'  parent_id='"+parent_id+"' style='font-size:14px;text-decoration:none;background-color:#63B8FF;' href='javascript:void(0);'>提交回复</a></div></div>";
		 	}		 	
			$(this).after(divhtml);
		 }
	});

})