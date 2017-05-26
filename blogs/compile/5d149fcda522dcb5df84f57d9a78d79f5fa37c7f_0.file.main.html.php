<?php
/* Smarty version 3.1.30, created on 2017-03-09 03:11:38
  from "C:\wamp\www\ajax\mvc\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0b9da23e356_15396225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d149fcda522dcb5df84f57d9a78d79f5fa37c7f' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\admin\\main.html',
      1 => 1489025495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0b9da23e356_15396225 (Smarty_Internal_Template $_smarty_tpl) {
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
