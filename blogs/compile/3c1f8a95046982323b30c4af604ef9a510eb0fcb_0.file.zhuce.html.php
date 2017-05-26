<?php
/* Smarty version 3.1.30, created on 2017-03-11 09:28:18
  from "C:\wamp\www\ajax\mvc\template\index\zhuce.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c3b522a5f535_19930434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c1f8a95046982323b30c4af604ef9a510eb0fcb' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\index\\zhuce.html',
      1 => 1489220896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c3b522a5f535_19930434 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>注册</title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/zhuce.css" />
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/zhuce.js"><?php echo '</script'; ?>
>
	<body style="background: url(<?php echo IMG_PATH;?>
/bgzc.jpg)">
		<div class="box">
			<form action="index.php?f=zhuce&a=sub" role="form" id="form" method="post">
				<h1 class="logo">Register</h1>
				<div class="form-group">
					<label for="name">账号</label>
					<input type="text" class="form-control user" name="user" id="name" placeholder="账户输入">
				</div>
				<div class="form-group">
					<label for="name">密码</label>
					<input type="password" name="pass" class="form-control pass" placeholder="密码输入">
				</div>
				<div class="form-group">
					<label for="name">确认密码</label>
					<input type="password" name="pass2" class="form-control" placeholder="密码输入">
				</div>
				<p style="text-align: center;margin-top: 40px">
					<button type="submit" class="btn btn-default">注册</button>
					<button type="button" onclick="location.assign('index.php?a=login');" id="btn" class="btn btn-default">登录</button>
					<button type="button" onclick="location.assign('index.php');" class="btn btn-default">返回首页</button>
				</p>
				
			</form>
		</div>
	</body>
</html><?php }
}
