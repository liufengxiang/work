<?php
/* Smarty version 3.1.30, created on 2017-04-07 10:31:28
  from "D:\wamp\www\gongshangs\template\index\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e74e602f6ad3_94489770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ac9f13bffa204937730ca42775e70b12c6b4fd' => 
    array (
      0 => 'D:\\wamp\\www\\gongshangs\\template\\index\\footer.html',
      1 => 1491550242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e74e602f6ad3_94489770 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/footer.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo INDEX_PATH;?>
/js/footer.js"><?php echo '</script'; ?>
>
<!-- yuanbu -->
<div class="yuanbubox">
	<div class="yuanbu">
		<div class="yuanbutit">
			<div class="dxj_title">
				<div class="dxj_dongtai">
					<div class="dxj_dongtai_top">
						<span class="one">Institute</span>
						<img src="<?php echo INDEX_PATH;?>
/images/cite/ggdt_03.png" alt="" />
						<span class="two">Activety</span>
					</div>
					<div class="dxj_dongtai_bottom">
						<img class="one" src="<?php echo INDEX_PATH;?>
/images/cite/l_03.png" alt="" />
						 <span class="g">院部</span><span class="d">活动</span>
						<img class="two" src="<?php echo INDEX_PATH;?>
/images/cite/r_05.png" alt="" />
					</div>
				</div>
			</div>
		</div>
		<div class="l-yuan">
			<ul>
				<!--后台的indexMain.class.php获取的数据

				图片  nimgurl

				-->
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_active']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<li>
					<a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['v']->value['nid'];?>
">
						<div class="l-yuan-img"></div>
						<div class="l-yuan-text">
							<div class="l-yuan-name"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</div>
							<div class="l-yuan-time"><?php echo substr($_smarty_tpl->tpl_vars['v']->value['ntime'],0,10);?>
</div>
							<div class="l-yuan-show"><?php echo $_smarty_tpl->tpl_vars['v']->value['summary'];?>
</div>
							<div class="l-yuan-btn"><a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['v']->value['nid'];?>
">MORE</a></div>
						</div>
						<div class="l-zhezhao">
							<h1><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h1>
							<h2><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h2>
							<h3><?php echo substr($_smarty_tpl->tpl_vars['v']->value['ntime'],0,10);?>
</h3>
							<hr width="60%">
							<p><?php echo $_smarty_tpl->tpl_vars['v']->value['summary'];?>
</p>
						</div>
					</a>
				</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<!--			<li>
					<a href="">
						<div class="l-yuan-img"></div>
						<div class="l-yuan-text">
							<div class="l-yuan-name">学院活动名称</div>
							<div class="l-yuan-time">2017/03/26</div>
							<div class="l-yuan-show">院部活动动态滚动图片以及活动的简介等一些内容</div>
							<div class="l-yuan-btn"><a href="">MORE</a></div>
						</div>
						<div class="l-zhezhao">
							<h1>活动名称大标题</h1>
							<h2>小标题</h2>
							<h3>2017-03-26</h3>
							<hr width="60%">
							<p>院部活动动态滚动图片以及活动的简介等一些内容等一些内容</p>
							<p>活动动态滚动图片以及活动的简介等一些内容</p>
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="l-yuan-img"></div>
						<div class="l-yuan-text">
							<div class="l-yuan-name">学院活动名称</div>
							<div class="l-yuan-time">2017/03/26</div>
							<div class="l-yuan-show">院部活动动态滚动图片以及活动的简介等一些内容</div>
							<div class="l-yuan-btn"><a href="">MORE</a></div>
						</div>
						<div class="l-zhezhao">
							<h1>活动名称大标题</h1>
							<h2>小标题</h2>
							<h3>2017-03-26</h3>
							<hr width="60%">
							<p>院部活动动态滚动图片以及活动的简介等一些内容等一些内容</p>
							<p>活动动态滚动图片以及活动的简介等一些内容</p>
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="l-yuan-img"></div>
						<div class="l-yuan-text">
							<div class="l-yuan-name">学院活动名称</div>
							<div class="l-yuan-time">2017/03/26</div>
							<div class="l-yuan-show">院部活动动态滚动图片以及活动的简介等一些内容</div>
							<div class="l-yuan-btn"><a href="">MORE</a></div>
						</div>
						<div class="l-zhezhao">
							<h1>活动名称大标题</h1>
							<h2>小标题</h2>
							<h3>2017-03-26</h3>
							<hr width="60%">
							<p>院部活动动态滚动图片以及活动的简介等一些内容等一些内容</p>
							<p>活动动态滚动图片以及活动的简介等一些内容</p>
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="l-yuan-img"></div>
						<div class="l-yuan-text">
							<div class="l-yuan-name">学院活动名称</div>
							<div class="l-yuan-time">2017/03/26</div>
							<div class="l-yuan-show">院部活动动态滚动图片以及活动的简介等一些内容</div>
							<div class="l-yuan-btn"><a href="">MORE</a></div>
						</div>
						<div class="l-zhezhao">
							<h1>活动名称大标题</h1>
							<h2>小标题</h2>
							<h3>2017-03-26</h3>
							<hr width="60%">
							<p>院部活动动态滚动图片以及活动的简介等一些内容等一些内容</p>
							<p>活动动态滚动图片以及活动的简介等一些内容</p>
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="l-yuan-img"></div>
						<div class="l-yuan-text">
							<div class="l-yuan-name">学院活动名称</div>
							<div class="l-yuan-time">2017/03/26</div>
							<div class="l-yuan-show">院部活动动态滚动图片以及活动的简介等一些内容</div>
							<div class="l-yuan-btn"><a href="">MORE</a></div>
						</div>
						<div class="l-zhezhao">
							<h1>活动名称大标题</h1>
							<h2>小标题</h2>
							<h3>2017-03-26</h3>
							<hr width="60%">
							<p>院部活动动态滚动图片以及活动的简介等一些内容等一些内容</p>
							<p>活动动态滚动图片以及活动的简介等一些内容</p>
						</div>
					</a>
				</li>
-->
			</ul>
			<div class="l-yuanlrbtn">
				<div class="l-yuan-left">
					<img src="<?php echo INDEX_PATH;?>
/images/cite/zbtn.png" alt="">
				</div>
				<div class="l-yuan-right">
					<img src="<?php echo INDEX_PATH;?>
/images/cite/ybtn.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- yuanbu end -->
<!-- footer -->
	<div class="footerbox">
		<p>Copyright © 2005---2012 山西工商学院 All Rights Reserved</p>
		<p>山西省太原市坞城南路99号  （山西大学南3000米） 全国免费咨询电话:400-656-1986</p>
		<p>非经营性互联网信息服务审批号    (晋)ICP备05005595号</p>
	</div>
<!-- footer end -->
</body>
</html><?php }
}
