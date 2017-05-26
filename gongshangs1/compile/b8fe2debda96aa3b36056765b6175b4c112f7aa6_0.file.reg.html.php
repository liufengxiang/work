<?php
/* Smarty version 3.1.30, created on 2017-04-13 12:56:00
  from "E:\wamp\wamp\www\gongshangs1\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef594059e684_34163179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8fe2debda96aa3b36056765b6175b4c112f7aa6' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\gongshangs1\\template\\index\\reg.html',
      1 => 1492060239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef594059e684_34163179 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">-->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/reg.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/reg.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="lktop">
	<a href="<?php echo FILE_URL;?>
"><img src="<?php echo INDEX_PATH;?>
/images/logo1.png" title="返回首页" alt=""></a>
</div>
<div class="bigbox" style="height: 460px;padding: 40px">
	<form action="index.php?m=index&f=login&a=addReg" method="post" id="form">
		<div class="lable">
		<input type="text" placeholder="请填写您的账号" class="form-control" id="username" name="username" autocomplete="off">
		</div>
		<div class="lable">
		<input type="text" placeholder="请填写您的姓名" class="form-control" id="nickname" name="nickname" autocomplete="off">
		</div>
		<div class="lable">
		<input type="password" placeholder="请输入密码" class="form-control" id="Password1" name="password" autocomplete="off">
		</div>
		<div class="lable">
		<input type="password" placeholder="确认密码" class="form-control" id="Password2" name="password2" autocomplete="off">
		</div>
		<div class="yanzheng lable" id="regs">
			<input type="text" id="code" class="form-control" placeholder="验 证 码" name="code">
			<img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code" onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">
		</div>
		<input type="submit" class="btn btn-default" id="dlbtn" value="注册">
		<p>已经有账号？请<a href="index.php?m=index&f=login&a=startLogin" class="reg">登录</a></p>
	</form>
</div>		
</body>
</html><?php }
}
