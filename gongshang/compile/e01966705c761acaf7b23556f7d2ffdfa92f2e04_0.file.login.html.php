<?php
/* Smarty version 3.1.30, created on 2017-04-22 15:54:27
  from "C:\wamp\www\gongshangs1\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fb6093676016_00552419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e01966705c761acaf7b23556f7d2ffdfa92f2e04' => 
    array (
      0 => 'C:\\wamp\\www\\gongshangs1\\template\\admin\\login.html',
      1 => 1492086011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fb6093676016_00552419 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/styles.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/login.js"><?php echo '</script'; ?>
>
</head>
<body>
<form action="index.php?m=admin&a=onLogin" method="post">
	<div class="wrapper">
	<div class="dxj_topnav">
		<a href="index.php?m=index" title="返回首页"><div class="xiaohui"></div></a>
	</div>
	<div class="rightbox"></div>
	<div class="dxj_sanniuword"></div>
	<div class="bigbox">
	<div class="panel-lite">
	  <div class="thumbur">
		<div class="icon-lock"></div>
	  </div>
	  <h4>后台用户登录</h4>
	  <div class="form-group">
		<input required="required" class="form-control" autocomplete="off" type="text" value="" name="username"/>
		<label class="form-label">用户名 </label>
	  </div>
	  <div class="form-group">
		<input type="password" required="required" class="form-control" value="" name="password"/>
		<label class="form-label">密　码</label>
	  </div>
	  <div class="form-group">
		<input required="required" class="form-control" type="text" value="" name="code" size="4" use="no">
		<label class="form-label">验证码</label>
		<img src="index.php?m=admin&f=index&a=code" autocomplete="off" alt="验证码" title="点击更换" class="code" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()">
	  </div>
		<!--<img src="index.php?m=admin&f=index&a=code" alt="验证码" title="点击更换" class="code" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()">-->
	   <br/>
	    <button class="floating-btn">登录</button>
	</div>
	</div>
    <ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	</div>
</form>
</body>
</html><?php }
}
