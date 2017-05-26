<?php
/* Smarty version 3.1.30, created on 2017-05-11 11:42:11
  from "C:\wamp\www\blogs\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591431f36cf2b0_71166569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0b5382dd93757db61dd4326162f5c0646ebc894' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\admin\\main.html',
      1 => 1489025495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591431f36cf2b0_71166569 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>admin</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/main.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/main.js"><?php echo '</script'; ?>
>
<body style="background-image: url(<?php echo IMG_PATH;?>
/bgmain.jpg)">
	<div class="box">
		<h1 class="title">欢迎来到后台</h1>
		<a href="index.php?m=admin&a=exits" id="close">退出</a>
		<div class="content">
			<div class="left">
				<ul class="cat">
					<li>
						<a class="catli">账户管理</a>
						<ul class="son">
							<li><a href="index.php?m=admin&f=mains&a=adduser" target="right">添加账户</a></li>
							<li><a href="index.php?m=admin&f=mains&a=deluser" target="right">管理账户</a></li>
						</ul>
					</li>
					<li>
						<a class="catli">分类管理</a>
						<ul class="son">
							<li><a href="index.php?m=admin&f=mains&a=addcategory" target="right">添加分类</a></li>
							<li><a href="index.php?m=admin&f=mains&a=guanlicategory" target="right">管理分类</a></li>
						</ul>
					</li>
					<li>
						<a class="catli">内容管理</a>
						<ul class="son">
							<li><a href="index.php?m=admin&f=mains&a=addcontent" target="right">添加内容</a></li>
							<li><a href="index.php?m=admin&f=mains&a=guanlicontent" target="right">管理内容</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="right">
				<iframe src="" frameborder="0" name="right">
				</iframe>
			</div>
		</div>
	</div>
</body>
</html><?php }
}
