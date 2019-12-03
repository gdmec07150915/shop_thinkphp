<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>简单会员注册验证表单</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta charset="utf-8" />
  <style type="text/css">
		body{
			font:14px/28px "微软雅黑";
		}
		.contact *:focus{outline :none;}
		.contact{
			width: 700px;
			height: auto;
			background: #f6f6f6;
			margin: 40px auto;
			padding: 10px;
		}
		.contact ul {
			width: 650px;
			margin: 0 auto;
		}
		.contact ul li{
			border-bottom: 1px solid #dfdfdf;
			list-style: none;
			padding: 12px;
		}
		.contact ul li label {
			width: 120px;
			display: inline-block;
			float: left;
		}
		.contact ul li input[type=text],.contact ul li input[type=password]{
			width: 220px;
			height: 25px;
			border :1px solid #aaa;
			padding: 3px 8px;
			border-radius: 5px;
		}
		.contact ul li input:focus{
			border-color: #c00;

		}
		.contact ul li input[type=text]{
			transition: padding .25s;
			-o-transition: padding  .25s;
			-moz-transition: padding  .25s;
			-webkit-transition: padding  .25s;
		}
		.contact ul li input[type=password]{
			transition: padding  .25s;
			-o-transition: padding  .25s;
			-moz-transition: padding  .25s;
			-webkit-transition: padding  .25s;
		}
		.contact ul li input:focus{
			padding-right: 70px;
		}
		.btn{
			position: relative;
			left: 300px;
		}
		.tips{
			color: rgba(0, 0, 0, 0.5);
			padding-left: 10px;
		}
		.tips_true,.tips_false{
			padding-left: 10px;
		}
		.tips_true{
			color: green;
		}
		.tips_false{
			color: red;
		}
  </style>

</head>
<body>
	<div class="contact" >
		<div style="text-align:center;">
	<h1>用户注册</h1>
</div>

		<form name="form1" action="/shop/index/home/user/register" method="post">
			<ul>
				<li>
					<label>姓名：</label>
					<input type="text" name="user_name" placeholder="请输入用户名"  onblur="checkna()" value="<?php echo ($Info["user_name"]); ?>" /><span class="tips" id="divname" style="color:red;"><?php echo ($errorInfo["user_name"]); ?></span>
					<!-- <?php echo ($errorInfo["user_name"]); ?>不知道为什么添加默认值|default:""就报错了 -->
				</li>
				<li>
					<label>密码：</label>
					<input type="password" name="user_password" placeholder="请输入你的密码" onBlur="checkpsd1()" /><span class="tips" id="divpassword1" style="color:red;"><?php echo ($errorInfo["user_password"]); ?></span>
				</li>
				<li>
					<label>确认密码：</label>
					<input type="password" name="user_password2" placeholder="请再次输入你的密码" onBlur="checkpsd2()" /><span class="tips" id="divpassword2" style="color:red;"><?php echo ($errorInfo["user_password2"]); ?></span>
				</li>
				<li>
					<label>电子邮箱：</label>
					<input type="text" name="user_email" placeholder="请输入你的邮箱" onBlur="checkmail()" value="<?php echo ($Info["user_email"]); ?>" /><span class="tips" id="divmail" style="color:red;"><?php echo ($errorInfo["user_email"]); ?></span>
				</li>
			</ul>
			<b class="btn"><input type="submit" value="提交"/>
			<input type="reset" value="取消"/></b>
		</form>
	</div>

</body>
</html>