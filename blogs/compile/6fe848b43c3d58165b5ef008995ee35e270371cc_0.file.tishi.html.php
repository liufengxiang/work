<?php
/* Smarty version 3.1.30, created on 2017-03-10 10:39:07
  from "C:\wamp\www\ajax\mvc\module\public\tishi.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c2743b245cd4_36638849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fe848b43c3d58165b5ef008995ee35e270371cc' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\module\\public\\tishi.html',
      1 => 1489114270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c2743b245cd4_36638849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/tishi.css" />
	<body style="background-image: url(<?php echo IMG_PATH;?>
/bg.jpg)">
		<div>
			<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
			<p><span>3</span>秒之后自动跳转</p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击跳到下一页</a>
		</div>
	</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/tishi.js"><?php echo '</script'; ?>
><?php }
}
