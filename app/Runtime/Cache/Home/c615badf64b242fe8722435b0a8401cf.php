<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>评论</title>
	<script type="text/javascript" src="/Public/js/jquery-1.11.3.min.js" ></script>
	<script type="text/javascript" src="/Public/js/comment.js" ></script>
</head>
<body>
<div style='width:640px;;margin:0 auto;'>
  <!--发表评论区begin-->
  <div>
	<div>
		<span style='margin-right:5%;float:right;font-size:14px;'>1000条评论</span>
	</div>
	<div>
		<div>
		<textarea replyid="0" style="border:1px solid blue;width:600px;height: 60px; padding: 10px;"></textarea>
		</div>
		<div class="div-txt-submit" style="">
			<a class="comment-submit" parent_id="0" style="background-color:#63B8FF;float:right;margin-right:5%;margin-top:5px;text-decoration:none;" href="javascript:void(0);"><span style='color:#fff;padding:10px;font-size:14px;'>发表评论</span></a>
		</div>		
	</div>
  </div>
  <!--发表评论区end-->

  <!--评论列表显示区begin-->
  	<!-- <?php echo ($commentlist); ?> -->
  	<div id="allcomment" style="margin-top:30px;">
	  	<div style="width:herit;"><span>全部评论</span></div>
	  	<div style="margin-top:2px;width:herit;height:50px;border-top:1px solid gray;">
	  		<ul class="comment-list" style="list-style:none;padding-left:0;">
	  		<!--一级评论列表begin-->
	  			<li>	  				
	  				<div >
	  					<div style="background-color:pink;width:40px;">
  							<img class="head-pic" style="width:40px;height:40px;" src="/Public/images/headpic1.jpg" alt="">	
  						</div>
						<div style="position:relative;top:0px;left:40px;top:-40px;width:600px;">
							<div style="padding-left:5px;" class="cm-header">
	  						<span>简毅</span>
	  						<span>2015-05-10 12:12</span>
	  						</div>
							<div style="padding-left:5px;" class="cm-content">
		  						<p>
		  							联盟当中实力最强的还是属于马刺，骑士，灰熊之类的。快船打马刺，最后一刻绝杀，成就了保罗英雄。若那一球不进，打加时，体能跟不上的快船打能赢的可能性有多大？马刺是公认的强队，是试金石。
		  						</p>
							</div>
		  					<div style="padding-bottom:15px;text-align:right;border-bottom: 1px dotted #CCC;" class="cm-footer;">
		  						<!-- <a class="comment-reply" comment_id="1" parent_id="0" style="text-decoration:none;" href="javascript:void(0);">回复</a> -->
		  						<a class="comment-reply" comment_id="1"  parent_id="0" style="text-decoration:none;" href="javascript:void(0);">回复</a>
		  					</div>	
						</div>	  					  						  				
	  				</div>
	  			</li>


	  			<li>	  				
	  				<div >
	  					<div style="background-color:pink;width:40px;">
  							<img class="head-pic" style="width:40px;height:40px;" src="" alt="">	
  						</div>
						<div style="position:relative;top:0px;left:40px;top:-40px;width:600px;">
							<div style="padding-left:5px;" class="cm-header">
	  						<span>简毅</span>
	  						<span>2015-05-10 12:12</span>
	  						</div>
							<div style="padding-left:5px;" class="cm-content">
		  						<p>
		  							联盟当中实力最强的还是属于马刺，骑士，灰熊之类的。快船打马刺，最后一刻绝杀，成就了保罗英雄。若那一球不进，打加时，体能跟不上的快船打能赢的可能性有多大？马刺是公认的强队，是试金石。
		  						</p>
							</div>
		  					<div style="padding-bottom:15px;text-align:right;border-bottom: 1px dotted #CCC;" class="cm-footer;">
		  						<a class="comment-reply" comment_id="2"  parent_id="0" style="text-decoration:none;" href="javascript:void(0);">回复</a>
		  						<!-- <div class="div-reply-txt" style="padding:3px;width:98%" replyid="2">
		  							<textarea class="txt-reply" replyid="2" style="width: 100%; height: 60px;"></textarea>			  							
									<a class="comment-submit"  parent_id="2" style="font-size:14px;text-decoration:none;background-color:#63B8FF;" href="javascript:void(0);">
		  								提交回复
		  							</a>										  							
		  						</div> -->
								
		  					</div>	
						</div>	  					  						  				
	  				</div>

					<!--二级评论begin-->
					<ul style="list-style:none;background-color:#FAFAFA;padding-left:0;margin-left:40px;" class="children">					 
						<li>	  				
			  				<div >
			  					<div style="background-color:pink;width:40px;">
		  							<img class="head-pic" style="width:40px;height:40px;" src="" alt="">	
		  						</div>
								<div style="position:relative;top:0px;left:40px;top:-40px;width:560px;">
									<div style="padding-left:5px;" class="cm-header">
			  						<span>简毅</span>
			  						<span>2015-05-10 12:12</span>
			  						</div>
									<div style="padding-left:5px;" class="cm-content">
				  						<p>
				  							联盟当中实力最强的还是属于马刺，骑士，灰熊之类的。快船打马刺，最后一刻绝杀，成就了保罗英雄。若那一球不进，打加时，体能跟不上的快船打能赢的可能性有多大？马刺是公认的强队，是试金石。
				  						</p>
									</div>
				  					<div style="padding-bottom:15px;border-bottom: 1px dotted #CCC;" class="cm-footer;">
				  						<!-- <a class="comment-reply" comment_id="3" parent_id="2" style="background-color:#63B8FF;margin-left:90%;" href="javascript:void(0);">回复</a> -->
				  						<a class="comment-reply reply-child" comment_id="3"  parent_id="0" style="text-decoration:none;margin-left:90%;" href="javascript:void(0);">回复</a>
				  					</div>	
								</div>	  					  						  				
			  				</div>
	  					</li>

						<li>	  				
			  				<div >
			  					<div style="background-color:pink;width:40px;">
		  							<img class="head-pic" style="width:40px;height:40px;" src="" alt="">	
		  						</div>
								<div style="position:relative;top:0px;left:40px;top:-40px;width:560px;">
									<div style="padding-left:5px;" class="cm-header">
			  						<span>简毅</span>
			  						<span>2015-05-10 12:12</span>
			  						</div>
									<div style="padding-left:5px;" class="cm-content">
				  						<p>
				  							联盟当中实力最强的还是属于马刺，骑士，灰熊之类的。快船打马刺，最后一刻绝杀，成就了保罗英雄。若那一球不进，打加时，体能跟不上的快船打能赢的可能性有多大？马刺是公认的强队，是试金石。
				  						</p>
									</div>
				  					<div style="padding-bottom:15px;border-bottom: 1px dotted #CCC;" class="cm-footer;">
				  						<!-- <a class="comment-reply" comment_id="4" parent_id="2" style="background-color:#63B8FF;margin-left:90%;" href="javascript:void(0);">回复</a> -->
				  						<a class="comment-reply reply-child" comment_id="4"  parent_id="0" style="text-decoration:none;margin-left:90%;" href="javascript:void(0);">回复</a>
				  					</div>	
								</div>	  					  						  				
			  				</div>

			  				<!--三级评论begin-->
			  				<ul  style="background-color:#FFFFE0;list-style:none;padding-left:0;margin-left:40px;" class="children-children">					 		
								<li>	  				
					  				<div >
					  					<div style="background-color:pink;width:40px;">
				  							<img class="head-pic" style="width:40px;height:40px;" src="" alt="">	
				  						</div>
										<div style="position:relative;top:0px;left:40px;top:-40px;width:520px;">
											<div style="padding-left:5px;" class="cm-header">
					  						<span>简毅</span>
					  						<span>2015-05-10 12:12</span>
					  						</div>
											<div style="padding-left:5px;" class="cm-content">
						  						<p>
						  							联盟当中实力最强的还是属于马刺，骑士，灰熊之类的。快船打马刺，最后一刻绝杀，成就了保罗英雄。若那一球不进，打加时，体能跟不上的快船打能赢的可能性有多大？马刺是公认的强队，是试金石。
						  						</p>
											</div>
						  					<!-- <div class="comment-reply" comment_id="5" parent_id="4" style="padding-bottom:15px;text-align:right;border-bottom: 1px dotted #CCC;" class="cm-footer;">
						  						<a style="background-color:#63B8FF;" href="javascript:void(0);">回复</a>
						  					</div>	 -->
										</div>	  					  						  				
					  				</div>
			  					</li>
								
								<li>	  				
					  				<div >
					  					<div style="background-color:pink;width:40px;">
				  							<img class="head-pic" style="width:40px;height:40px;" src="" alt="">	
				  						</div>
										<div style="position:relative;top:0px;left:40px;top:-40px;width:520px;">
											<div style="padding-left:5px;" class="cm-header">
					  						<span>简毅</span>
					  						<span>2015-05-10 12:12</span>
					  						</div>
											<div style="padding-left:5px;" class="cm-content">
						  						<p>
						  							联盟当中实力最强的还是属于马刺，骑士，灰熊之类的。快船打马刺，最后一刻绝杀，成就了保罗英雄。若那一球不进，打加时，体能跟不上的快船打能赢的可能性有多大？马刺是公认的强队，是试金石。
						  						</p>
											</div>
						  					<!-- <div class="comment-reply" comment_id="6" parent_id="4" style="padding-bottom:15px;text-align:right;border-bottom: 1px dotted #CCC;" class="cm-footer;">
						  						<a style="background-color:#63B8FF;" href="javascript:void(0);">回复</a>
						  					</div>	 -->
										</div>	  					  						  				
					  				</div>
			  					</li>

	  						</ul>
	  						<!--三级评论end-->
	  					</li>
					
					</ul>	
					<!--二级评论end-->

	  			</li>

	  			

	  			

	  				  		
	  		</ul>
	  		<!--一级评论列表end-->
	  	</div>		
  	</div>
  <!--评论列表显示区end-->
</div>	
</body>
</html>