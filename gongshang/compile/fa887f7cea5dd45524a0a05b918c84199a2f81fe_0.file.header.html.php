<?php
/* Smarty version 3.1.30, created on 2017-04-13 16:37:39
  from "E:\wamp\wamp\www\gongshangs1\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef8d33af2bf3_22790055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa887f7cea5dd45524a0a05b918c84199a2f81fe' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\gongshangs1\\template\\index\\header.html',
      1 => 1492088315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef8d33af2bf3_22790055 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/header.css">
	<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/fonts/iconfont.css" />
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/shangchuan.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/header.js"><?php echo '</script'; ?>
>
</head>
<body>
<!-- top -->
	<div class="topbox">
		<div class="top">
			<a href="<?php echo FILE_URL;?>
"><img src="<?php echo INDEX_PATH;?>
/images/cite/logo.png" alt=""></a>
			<span>计算机信息工程学院</span>
			<div class="dxj_denglu">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
	            <?php if (count($_smarty_tpl->tpl_vars['userImgs']->value) > 0) {?>
	               <div class="dxj_utx"><img src="<?php echo $_smarty_tpl->tpl_vars['userImgs']->value['uimage'];?>
" title="更换头像"></div>       
	            <?php }?>
	        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
          
	        <ul>
		        <?php if (empty($_smarty_tpl->tpl_vars['unickname']->value)) {?>
		         <li><a href="index.php?m=index&f=login&a=startLogin">登录</a>&nbsp;&nbsp;|</li>
		         <li><a href="index.php?m=index&f=login&a=reg">注册</a></li>
		        <?php } else { ?>
		         <li class="users">你好！<?php echo $_smarty_tpl->tpl_vars['unickname']->value;?>
</li>
		         <li><a href="index.php?m=index&f=login&a=unlogin">退出登录</a></li>
		        <?php }?>
	        </ul>      
			</div>		
		</div>
	</div>
<!--上传头像开始-->
<div class="dxj_zhao"></div>
<div class="dxj_sctx">
	<div class="dxj_lan">
		更换头像
		<div class="dxj_close">×</div>
	</div>
	<div class="dxj_s_info">
		<form action="index.php?m=admin&f=upload&a=addtouxiangInfo" method="post">
			<a href="javascript:;" class="choose"><input type="file" name="file" class="change" id="img_file" multiple="multiple">自定义头像</a>
			<div class="box">
				<div class="img"><img src="" alt=""></div>
				<div class="img_progress"></div>
			</div>
			<input type="hidden" name="imgurl" id="imgurl">
			<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
			<input type="submit" disabled="disabled" class="btn btn-default select" id="imgurl_btn" value="保存头像">
		</form>
	</div>
	<div class="dxj_tishi">这里可以更换自己喜欢的头像哦</div>
	<div class="dxj_jiantou"></div>
</div>
<!--上传头像结束-->
<!-- top end -->
<!-- main -->
<div class="mainbox">
	<ul class="main">
		<li style="border-color:#fff;font-size:16px;">
			<a href="index.php">首页<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
		</li>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catP']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<li>
			<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catson']->value, 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['v1']->value["pid"] == $_smarty_tpl->tpl_vars['v']->value["cid"]) {?>
						<?php if ($_smarty_tpl->tpl_vars['v1']->value["cname"] == "课程资源") {?>
						<li><a href="index.php?m=index&f=art&a=showCourseIndex"><?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>
</a></li>
						<?php } else { ?>
						<li><a href="index.php?m=index&f=art&a=showlistn_nav&cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>
</a></li>
						<?php }?>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</ul>
		</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
</div>
<!-- main end -->
<!-- banner -->
<div class="bannerbox">
	<div class="banner">
		<div class="l-img" style="left:0;"></div>
		<div class="l-img"></div>
		<div class="l-img"></div>
		<div class="l-img"></div>
		<div class="l-img"></div>
	</div>
	<div class="l-btn">
		<span class="l-firstbtn"></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<!-- banner end --><?php }
}
