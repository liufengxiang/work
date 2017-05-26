<?php
/* Smarty version 3.1.30, created on 2017-03-09 02:16:40
  from "C:\wamp\www\ajax\mvc\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0acf8324349_64841044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1499570d96c5bf08c394fdebdc220a1678c8b052' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\admin\\login.html',
      1 => 1489022198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0acf8324349_64841044 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>login</title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/login.css" />
	<body style="background: url(<?php echo IMG_PATH;?>
/bght.jpg)">
		<div class="box">
			<form action="index.php?m=admin&a=yanzheng" role="form" method="post">
				<p class="logo">+blogs</p>
				<div class="form-group">
					<input type="text" class="form-control" name="user" id="name" placeholder="账户输入">
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control" placeholder="密码输入">
				</div>
				<div class="form-group">
					<input type="text" name="code" id="code" class="form-control" placeholder="验证码">
					<img src="index.php?m=admin&a=code" onclick='this.src="index.php?m=admin&a=code&"+Math.random()' alt="" />
				</div>
				<button type="submit" class="btn btn-default">登录</button>
			</form>
		</div>
	</body>
</html><?php }
}
