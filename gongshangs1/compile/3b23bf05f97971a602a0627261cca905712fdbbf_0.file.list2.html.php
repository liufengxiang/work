<?php
/* Smarty version 3.1.30, created on 2017-04-13 07:49:41
  from "E:\wamp\www\gongshangs1\template\index\list2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef1175876de8_65043365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b23bf05f97971a602a0627261cca905712fdbbf' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs1\\template\\index\\list2.html',
      1 => 1492062580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_58ef1175876de8_65043365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
	#zyh_submit{
		width:100%;
		height:100%;
		border:0;
		background: transparent;
		cursor: pointer;
	}
</style>
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_PATH;?>
/css/list2.css"/>
		<?php echo '<script'; ?>
 src="<?php echo INDEX_PATH;?>
/js/list2.js"><?php echo '</script'; ?>
>		
		<!--jplist页面 最外 盒子-->
		<div class="zmr_jplist">
			<!--搜索框-->
			<form action="index.php?m=index&f=art&a=showlistc" method="post">
				<div class="zmr_sousuo">
					<div class="zmr_sousuo_inp"><input type="text" id="zmr_sousuo" name="zmr_sousuo" value="" placeholder="请输入您想搜索的课程名称" /></div>
					<div class="zmr_sousuo_bg"><input type="submit" id="zyh_submit" value=""></div>
				</div>
			</form>
			
			<!--floor01-->
			<div class="zmr_floor">
				<div class="zmr_floor_t"></div>
				<div class="zmr_floor_list" >
					<!--6个盒子开始-->
					<?php $_smarty_tpl->_assignInScope('i', 0);
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['course1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
					<div class="zmr_floor_list_s <?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value%3 == 2) {?>zmr_floor_list_lr<?php }?>">
						<!--移入效果开始-->
						<a href="index.php?m=index&f=art&a=showlistc&coid=<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
">
							<div>课程名称：<?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</div>
							<div>主讲人：<?php echo $_smarty_tpl->tpl_vars['v']->value["teacher"];?>
</div>
							<div>职称：<?php echo $_smarty_tpl->tpl_vars['v']->value["tzhicheng"];?>
</div>
							<div></div>
							<div><?php echo $_smarty_tpl->tpl_vars['v']->value["summary"];?>
</div>
							<div></div>
							<div>详细信息</div>
						</a>
						<!--移入效果结束-->
						<div class="zmr_floor_list_simg">
							<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cimgurl'];?>
" alt="" />
						</div>
						<div class="zmr_floor_list_sd zmr_hyin">课程名称：<?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</div>
						<div class="zmr_floor_list_zi zmr_hyin">
							<div class="zmr_floor_list_zi_t">
								<ul>
									<li><span>主讲人：</span><?php echo $_smarty_tpl->tpl_vars['v']->value["teacher"];?>
</li>
									<li><span>职称：</span><?php echo $_smarty_tpl->tpl_vars['v']->value["tzhicheng"];?>
</li>
								</ul>
							</div>
							<div class="zmr_floor_list_zi_b"><?php echo $_smarty_tpl->tpl_vars['v']->value["summary"];?>
</div>
						</div>
						<div class="zmr_floor_list_jiao"></div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<!--第二个-->
					<!--6个盒子结束-->
				</div>
				<div class="zmr_more"><a href="#">MORE</a></div>
			</div>
			<!--floor02-->
            <div class="zmr_floor">
				<div class="zmr_floor_t zmr_floor_t02"></div>
				<div class="zmr_floor_list">
					<!--6个盒子开始-->

					<?php $_smarty_tpl->_assignInScope('j', 0);
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['course2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

					<div class="zmr_floor_list_s <?php echo $_smarty_tpl->tpl_vars['j']->value++;?>
 <?php if ($_smarty_tpl->tpl_vars['j']->value%3 == 2) {?>zmr_floor_list_lr<?php }?>">
						<!--移入效果开始-->
						<a href="index.php?m=index&f=art&a=showlistc&coid=<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
">
							<div>课程名称：<?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</div>
							<div>主讲人：<?php echo $_smarty_tpl->tpl_vars['v']->value["teacher"];?>
</div>
							<div>职称：<?php echo $_smarty_tpl->tpl_vars['v']->value["tzhicheng"];?>
</div>
							<div></div>
							<div><?php echo $_smarty_tpl->tpl_vars['v']->value["summary"];?>
</div>
							<div></div>
							<div>详细信息</div>
						</a>
						<!--移入效果结束-->
						<div class="zmr_floor_list_simg">
							<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cimgurl'];?>
" alt="" />
						</div>
						<div class="zmr_floor_list_sd zmr_hyin">课程名称：<?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</div>
						<div class="zmr_floor_list_zi zmr_hyin">
							<div class="zmr_floor_list_zi_t">
								<ul>
									<li><span>主讲人：</span><?php echo $_smarty_tpl->tpl_vars['v']->value["teacher"];?>
</li>
									<li><span>职称：</span><?php echo $_smarty_tpl->tpl_vars['v']->value["tzhicheng"];?>
</li>
								</ul>
							</div>
							<div class="zmr_floor_list_zi_b"><?php echo $_smarty_tpl->tpl_vars['v']->value["summary"];?>
</div>
						</div>
						<div class="zmr_floor_list_jiao"></div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<!--<div class="zmr_floor_list_s ">
						&lt;!&ndash;移入效果开始&ndash;&gt;
						<a href="">
							<div>课程名称：计算机工程</div>
							<div>主讲人：王老师</div>
							<div>职称：特级教师</div>
							<div></div>
							<div>此门课程的稍微详细一些的文字介绍，内容大约控制在一两段文字。</div>
							<div>此门课程的稍微详细一些的文字介绍，内容大约控制在一两段文字。此门课程的稍微详细一些的文字介绍，内容大约控制在一两段文字。</div>
							<div>查看详情</div>
							<div></div>
						</a>
						&lt;!&ndash;移入效果结束&ndash;&gt;
						<div class="zmr_floor_list_simg">
							<img src="<?php echo INDEX_PATH;?>
/images/list2/校企合作 共赢未来.png" alt="" />
						</div>
						<div class="zmr_floor_list_sd zmr_hyin">课程名称：计算机工程</div>
						<div class="zmr_floor_list_zi zmr_hyin">
							<div class="zmr_floor_list_zi_t">
								<ul>
									<li><span>主讲人：</span>王老师</li>
									<li><span>职称：</span>特级教师</li>
								</ul>
							</div>
							<div class="zmr_floor_list_zi_b">此门课程的简单内容介绍，不宜过长，最多两行最多两行</div>
						</div>
						<div class="zmr_floor_list_jiao"></div>
					</div>-->
					<!--6个盒子结束-->
				</div>
				<div class="zmr_more"><a href="#">MORE</a></div>
			</div>
		</div>
		
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
<?php }
}
