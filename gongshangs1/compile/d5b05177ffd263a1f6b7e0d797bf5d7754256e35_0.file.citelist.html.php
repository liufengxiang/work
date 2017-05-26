<?php
/* Smarty version 3.1.30, created on 2017-04-07 10:33:17
  from "D:\wamp\www\gongshangs\template\index\citelist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e74ecd57c074_74478704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5b05177ffd263a1f6b7e0d797bf5d7754256e35' => 
    array (
      0 => 'D:\\wamp\\www\\gongshangs\\template\\index\\citelist.html',
      1 => 1491553085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e74ecd57c074_74478704 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css" />
		<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/list.css">	
		<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/fonts/iconfont.css" />	
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>		
		<?php echo '<script'; ?>
 src="<?php echo INDEX_PATH;?>
/js/list.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="right">
			<p class="nav">
				
				<a href="">
					<span class="round"></span>
					首&nbsp;&nbsp;页
				</a>
				<span class="jiantou iconfont icon-dayu-gengduo"></span>
				
				<a href="">
					<span class="round bgcolor"></span>
					院系动态
				</a>
			</p>
			<div class="listbox">
				<h1 class="list_top">列表内容/Directories</h1>
				<ul class="list_bottom">

					<?php if (isset($_smarty_tpl->tpl_vars['noticelist']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticelist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						<div class="box">
							<div class="boxsmall">
								<span class="sanjiao"></span>
							</div>
							<li >
								<a href="index.php?m=index&f=art&a=showartnotice&nid=<?php echo $_smarty_tpl->tpl_vars['v']->value['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["ntitle"];?>
</a><span><?php echo substr($_smarty_tpl->tpl_vars['v']->value['ntime'],0,10);?>
</span>
							</li>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php } elseif (isset($_smarty_tpl->tpl_vars['catlist']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catlist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						<div class="box">
							<div class="boxsmall">
								<span class="sanjiao"></span>
							</div>
							<li >
								<a href="index.php?m=index&f=art&a=showartn_son&nid=<?php echo $_smarty_tpl->tpl_vars['v']->value['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</a><span><?php echo substr($_smarty_tpl->tpl_vars['v']->value['ntime'],0,10);?>
</span>
							</li>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php } elseif (isset($_smarty_tpl->tpl_vars['courselist']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['courselist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						<div class="box">
							<div class="boxsmall">
								<span class="sanjiao"></span>
							</div>
							<li >
								<a target="_top" href="index.php?m=index&f=art&a=showlistc&coid=<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</a><span><?php echo substr($_smarty_tpl->tpl_vars['v']->value['ntime'],0,10);?>
</span>
							</li>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php }?>

				</ul>
				
			</div>



			<div class="page_nav">
				<div class="wrap">
					<ul>


						<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>



					<!--	<li><a class="add iconfont icon-xia" href=""></a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a class="active" href="">4</a></li>
						<li><a href="">5</a></li>
						<li><a class="remove" href="">......</a></li>
						<li><a href="">10</a></li>
						<li><a href="">11</a></li>
						<li><a class="add iconfont icon-you" href=""></a></li>
						<li><span>跳转到</span><span class="pages"><input type="text" ></span><span>页</span></li>
						<li><a  href="">Go</a></li>
-->

					</ul>
				</div>
			</div>

			<?php echo '<script'; ?>
>
				$(function(){
					// 页码样式添加
				    function pages(){
                        var fbox=$(".wrap ul");
                        if(fbox.find("a").length<=3){
                            fbox.css("display","none");
                            return false;
						}
                        fbox.get(0).removeChild(fbox.get(0).childNodes[0]);
                        fbox.find("a").wrap("<li></li>");

                        fbox.find(".startPage").html("").addClass("add iconfont icon-xia");
                        fbox.find(".endPage").html("").addClass("add iconfont icon-you");

                        fbox.find(".nowPage").addClass("active");
					}
                    pages();
                })

			<?php echo '</script'; ?>
>
		</div>
			
	</body>
</html>
<?php }
}
