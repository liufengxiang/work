<?php
/* Smarty version 3.1.30, created on 2017-04-14 08:19:10
  from "E:\wamp\wamp\www\gongshangs1\template\index\show2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f069de1a6313_69872615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2a664db36b10dc4aac2ad08e10d133d3567470e' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\gongshangs1\\template\\index\\show2.html',
      1 => 1492150544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/loginPrompt.html' => 1,
    'file:index/bothTishi.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_58f069de1a6313_69872615 (Smarty_Internal_Template $_smarty_tpl) {
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
					<?php if (isset($_smarty_tpl->tpl_vars['colist']->value)) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['colist']->value['timgurl'];?>
" alt="">
					<?php }?>
				</div>
				<h5><b>主讲人：</b><?php if (isset($_smarty_tpl->tpl_vars['colist']->value)) {
echo $_smarty_tpl->tpl_vars['colist']->value["teacher"];
}?></h5>
				<h5><b>职称：</b><?php if (isset($_smarty_tpl->tpl_vars['colist']->value)) {
echo $_smarty_tpl->tpl_vars['colist']->value["tzhicheng"];
}?></h5>
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
" <?php if (isset($_smarty_tpl->tpl_vars['coid']->value)) {
if ($_smarty_tpl->tpl_vars['v']->value['coid'] == $_smarty_tpl->tpl_vars['coid']->value) {?>class="now"<?php }
}?> target="con_right">
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
		<input type="hidden" class="coid" <?php if (isset($_smarty_tpl->tpl_vars['colist']->value)) {?>value=<?php echo $_smarty_tpl->tpl_vars['coid']->value;
}?>>
		<!--搜索框 start-->

		<!--从list2搜索框进入-->
		<input type="hidden" class="search_info" name="search_info" <?php if (!empty($_smarty_tpl->tpl_vars['search_info']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_info']->value;?>
"<?php }?>>

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
<?php $_smarty_tpl->_subTemplateRender("file:index/loginPrompt.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:index/bothTishi.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>

	// 一进入本页面跳转iframe
    function showfunction(){
        var iframe=$("#iframe");
        if(!$(".coid").eq(0).val()){
            // 如果没有传入coid那么进入列表页
            var src="index.php?m=index&f=art&a=showCourseList";
		}else{
            // 如果传入coid进入详情页
            var src="index.php?m=index&f=art&a=showartc&coid="+$(".coid").eq(0).val();
		}

            iframe.get(0).src=src;
    }
    showfunction();

    function search(){
        var iframe=$("#iframe");

        if($(".search_info").eq(0).val()){
            iframe.get(0).src="index.php?m=index&f=art&a=searchCourse&search="+$(".search_info").eq(0).val();
		}


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
