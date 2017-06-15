<?php
/* Smarty version 3.1.30, created on 2017-04-07 10:31:27
  from "D:\wamp\www\gongshangs\template\index\show2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e74e5fea7d61_22366049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6825a1bffbd3b7c97ee2ec3c0e6d3aad7144bb0' => 
    array (
      0 => 'D:\\wamp\\www\\gongshangs\\template\\index\\show2.html',
      1 => 1491553518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_58e74e5fea7d61_22366049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
	<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/default.css">
	<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/list.css">
	<?php echo '<script'; ?>
 src="<?php echo INDEX_PATH;?>
/js/list.js"><?php echo '</script'; ?>
>
<!--包中间内容的盒子  start-->
<div class="cyy-contentbox">

	<!--左边的盒子  start-->
	<div class="cyy-leftbox">
		<!--精品课程讲师 start-->
		<div class="catlist">
			<div class="caption no_btm_border">
				<p>课程负责人</p>
				<div>
					<span></span>
					Course Director
					<span></span>
				</div>
			</div>
			<div class="teacher">
				<div class="imgbox">
					<img src="<?php echo $_smarty_tpl->tpl_vars['colist']->value['timgurl'];?>
" alt="">
				</div>
				<h5><b>主讲人：</b><?php echo $_smarty_tpl->tpl_vars['colist']->value["teacher"];?>
</h5>
				<h5><b>职称：</b><?php echo $_smarty_tpl->tpl_vars['colist']->value["tzhicheng"];?>
</h5>
			</div>
		</div>
		<!--精品课程讲师 end-->		
		<dl class="catlist">
			<dt class="caption">
				<p>最新课程</p>
				<div>
					<span></span>
					Site Navigation
					<span></span>
				</div>
			</dt>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newlist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<dd class="catname">
				<a href="index.php?m=index&f=art&a=showartc&coid=<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['coid'] == $_smarty_tpl->tpl_vars['coid']->value) {?>class="now"<?php }?> target="con_right">
					<b></b>
					<?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>

					<i class="now">&gt;</i>
				</a>
			</dd>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</dl>
		<!--文字列表导航 end-->
		<input type="hidden" class="coid" value=<?php echo $_smarty_tpl->tpl_vars['coid']->value;?>
>
		<!--搜索框 start-->
		<div class="searchbox">
			<!--<form >-->
				<input type="text" class="search" name="search" />
				<input type="submit" class="search-btn" value=""/>
			<!--</form>-->
		</div>
		<!--搜索框 start-->
	</div>
	<!--左边的盒子  end-->
	<!--右边的盒子  start-->
	<div class="cyy-rightbox">
		<iframe src="" frameborder="0" name="con_right" id="iframe" scrolling="no" frameborder="0">
		</iframe>
	</div>
	<!--右边的盒子  end-->
</div>
<!--包中间内容的盒子  end-->

<?php echo '<script'; ?>
>

    function showfunction(){
        var iframe=$("#iframe");
        var src="index.php?m=index&f=art&a=showartc&coid="+$(".coid").eq(0).val();

            iframe.get(0).src=src;
    }
    showfunction();

    function search(){
        var iframe=$("#iframe");
        $(".searchbox .search-btn").eq(0).click(function(){
            var search=$(".searchbox .search").eq(0).val();

            var url="index.php?m=index&f=art&a=searchCourse&search="+search;

            iframe.get(0).src=url;

        });
    }
    search();
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }
}
