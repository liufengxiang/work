<?php
/* Smarty version 3.1.30, created on 2017-04-07 11:36:51
  from "E:\wamp\www\gongshangs\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e75db3b80a77_69256601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8e570a1aa60adcd3eb7c6e8aa6de2e6be69d709' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs\\template\\index\\header.html',
      1 => 1491484856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e75db3b80a77_69256601 (Smarty_Internal_Template $_smarty_tpl) {
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
			<img src="<?php echo INDEX_PATH;?>
/images/cite/logo.png" alt="">
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
		         <li><a href="index.php?m=index&f=login&a=startLogin">登录</a></li>
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





		<!--
		<li>
			<a href="javascript:;">师资队伍<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">师资概况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">科学研究<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">教科研课题情况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">专业建设<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">师资概况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">精品课程<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li>
					<a href="">课程目录</a>
					<ul class="l-sonson">
						<li><a href="">教学大纲</a></li>
						<li><a href="">教学大纲</a></li>
						<li><a href="">教学大纲</a></li>
						<li><a href="">教学大纲</a></li>
					</ul>
				</li>
				<li><a href="">实践教学</a></li>
				<li><a href="">课程资源</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">实验室建设<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">师资概况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">大赛获奖<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">师资概况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">校企合作<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">师资概况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">党建工作<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">师资概况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">学生工作<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">师资概况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">群团建设<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">师资概况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">规章制度<img src="<?php echo INDEX_PATH;?>
/images/cite/xjt.png" alt=""></a>
			<ul class="l-son">
				<li><a href="">师资概况</a></li>
				<li><a href="">专业带头人</a></li>
				<li><a href="">教学名师</a></li>
			</ul>
		</li>
		-->
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
