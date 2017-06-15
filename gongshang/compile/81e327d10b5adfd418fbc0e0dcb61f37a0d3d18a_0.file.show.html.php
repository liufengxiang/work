<?php
/* Smarty version 3.1.30, created on 2017-04-13 12:58:35
  from "E:\wamp\wamp\www\gongshangs1\template\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef59db7c44a4_29687340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e327d10b5adfd418fbc0e0dcb61f37a0d3d18a' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\gongshangs1\\template\\index\\show.html',
      1 => 1491905897,
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
function content_58ef59db7c44a4_29687340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
	<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/default.css">
	<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/list.css">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo INDEX_PATH;?>
/js/list.js"><?php echo '</script'; ?>
>
<!--包中间内容的盒子  start-->
<div class="cyy-contentbox">

	<!--左边的盒子  start-->
	<div class="cyy-leftbox">
		<!--文字列表导航 start-->
		<dl class="catlist">
			<dt class="caption">
				<p>计算机工程学院导航</p>
				<div>
					<span></span>
					Site Navigation
					<span></span>
				</div>
			</dt>
			<!--判断如果是公告列表页-->
			<?php if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>
			<dd class="catname">
				<a href="index.php?m=index&f=art&a=showlistnotice_son" class="now" target="con_right">
					<b></b>
					公告
					<i class="now">&gt;</i>
				</a>
				<input type="hidden" class="notice_id" value=<?php if (isset($_smarty_tpl->tpl_vars['nid']->value)) {?>"<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
"<?php } else { ?>"no"<?php }?>>
				<input type="hidden" class="tag" value="公告">
			</dd>
			<?php } else { ?>
			<!--新闻列表页-->
			<input type="hidden" class="tag" value="新闻">
			<input type="hidden" class="nid" value=<?php if (isset($_smarty_tpl->tpl_vars['nid']->value)) {?>"<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
"<?php } else { ?>"no"<?php }?>>
			<input type="hidden" class="cid" value=<?php if (isset($_smarty_tpl->tpl_vars['cid']->value)) {?>"<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
"<?php } else { ?>"no"<?php }?>>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catlist']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
			<dd class="catname">
				<?php if ($_smarty_tpl->tpl_vars['v']->value["cname"] == "课程资源") {?>
				<a href="index.php?m=index&f=art&a=showCourseIndex" <?php if ($_smarty_tpl->tpl_vars['v']->value['cid'] == $_smarty_tpl->tpl_vars['cid']->value) {?> class="now" <?php }?> >
				<?php } else { ?>
				<a href="index.php?m=index&f=art&a=showlistn&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cid'] == $_smarty_tpl->tpl_vars['cid']->value) {?> class="now" <?php }?> target="con_right">
				<?php }?>

				<b></b>
				<?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

				<i>&gt;</i>
				</a>

				<?php if (!empty($_smarty_tpl->tpl_vars['catlist']->value[$_smarty_tpl->tpl_vars['k']->value]["son"])) {?>
					<div class="catlist3">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catlist']->value[$_smarty_tpl->tpl_vars['k']->value]["son"], 'v3');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v3']->value) {
?>
						<a href="index.php?m=index&f=art&a=showlistn&cid=<?php echo $_smarty_tpl->tpl_vars['v3']->value['cid'];?>
 " <?php if ($_smarty_tpl->tpl_vars['v3']->value['cid'] == $_smarty_tpl->tpl_vars['cid']->value) {?> class="now" <?php }?>  target="con_right" ><?php echo $_smarty_tpl->tpl_vars['v3']->value["cname"];?>
</a>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>
				<?php }?>

			</dd>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


			<?php }?>

		</dl>
		<!--文字列表导航 end-->
		<!--搜索框 start-->
		<div class="searchbox">
			<!--<form >-->
				<input type="text" class="search" name="search" />
				<input type="button" class="search-btn" value=""/>
			<!--</form>-->
		</div>
		<!--搜索框 start-->
		<!--图片列表导航 start-->
		<!--<div class="catlist">
			<div class="caption">
				<p>学院风采</p>
				<div>
					<span></span>
					College Style
					<span></span>
				</div>
			</div>
			<ul class="imgcatlist">
				<li>
					<div class="imgbox">
						<a href="#" target="con_right">
							<img src="" alt="">
						</a>
					</div>
					<h4>
						<a href="#" target="con_right">学校活动及环境描述</a>
					</h4>
					<div class="info">
						<span class="good">
							<i></i> 200
						</span>
						<span class="time">
							<i></i>2017.3.17
						</span>
					</div>
				</li>
				<li>
					<div class="imgbox">
						<a href="#" target="con_right">
							<img src="" alt="">
						</a>
					</div>
					<h4>
						<a href="#" target="con_right">学校活动及环境描述</a>
					</h4>
					<div class="info">
						<span class="good">
							<i></i> 200
						</span>
						<span class="time">
							<i></i>2017.3.17
						</span>
					</div>
				</li>
			</ul>
		</div>-->
		<!--图片列表导航 end-->

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

	// 判断跳转到show页面的时候iframe里边应该显示的内容
	function showfunction(){
        var iframe=$("#iframe");
        if($(".tag").eq(0).val()=="公告"){
            var src;
            if($(".notice_id").eq(0).val()!="no"){
                src="index.php?m=index&f=art&a=showartnotice&nid="+$(".notice_id").eq(0).val();
            }else{
                src="index.php?m=index&f=art&a=showlistnotice_son";
            }

            iframe.get(0).src=src;
        }else if($(".tag").eq(0).val()=="新闻"){
            var src;
            if($(".nid").eq(0).val()!="no"){
                src="index.php?m=index&f=art&a=showartn_son&nid="+$(".nid").eq(0).val();
            }else if($(".cid").eq(0).val()!="no"){
                src="index.php?m=index&f=art&a=showlistn&cid="+$(".cid").eq(0).val();
            }else{
                src="index.php?m=index&f=art&a=showlistnotice_son";
            }
            iframe.get(0).src=src;
        }
	}
    showfunction();

	function search(){
        var iframe=$("#iframe");
	    $(".searchbox .search-btn").eq(0).click(function(){
	        var search=$(".searchbox .search").eq(0).val();

	        var url="index.php?m=index&f=art&a=";

	        if($(".nid").eq(0).val()!="no"){
	            var nid=$(".nid").eq(0).val();
	            url+="searchnotice&search="+search;
			}else if($(".cid").eq(0).val()!="no"){
	            var cid=$(".cid").eq(0).val();
	            url+="searchnewlist&cid="+cid+"&search="+search;
			}

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
