<?php
/* Smarty version 3.1.30, created on 2017-04-07 11:36:51
  from "E:\wamp\www\gongshangs\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e75db3a69de1_46278143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ec457c3bb8163c475ff907060f9c5e653b935e' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs\\template\\index\\index.html',
      1 => 1491554312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_58e75db3a69de1_46278143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/index.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/shangchuan.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo INDEX_PATH;?>
/js/index.js"><?php echo '</script'; ?>
>	
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
        <input type="submit" class="btn btn-default select" id="imgurl_btn" value="保存头像">
    </form>	
    </div>
    <div class="dxj_tishi">这里可以更换自己喜欢的头像哦</div>
    <div class="dxj_jiantou"></div>
</div>
<!--上传头像结束-->
<!--公告动态开始-->
<div class="dxj_content">
	<div class="dxj_title">
		<div class="dxj_dongtai">
			<div class="dxj_dongtai_top">
				<span class="one">Bulletin</span>
				<img src="<?php echo INDEX_PATH;?>
/images/index/ggdt_03.png" alt="" />
				<span class="two">Dynamics</span>
			</div>
			<div class="dxj_dongtai_bottom">
				<img class="one" src="<?php echo INDEX_PATH;?>
/images/index/l_03.png" alt="" />
				 <span class="g">公告</span><span class="d">动态</span>
				<img class="two" src="<?php echo INDEX_PATH;?>
/images/index/r_05.png" alt="" />
			</div>
		</div>
	</div>
    <div class="dxj_gonggao">
    	<img src="<?php echo INDEX_PATH;?>
/images/index/gg_03.png" alt="" />
    	<span>公告</span>
		<?php if (isset($_smarty_tpl->tpl_vars['notice']->value[0]["ntitle"])) {?>
    	<div class="dxj_info">
    		<div class="dxj_con">
	    		<h3><a href="index.php?m=index&f=art&a=showlistnotice_index&nid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[0]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[0]["ntitle"];?>
</a></h3>
	    		<p><a href="index.php?m=index&f=art&a=showlistnotice_index&nid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[0]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[0]["nsummary"];?>
</a></p>
    		</div>
    		<div class="dxj_rbtn">></div>
    	</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['notice']->value[1]["ntitle"])) {?>
    	<div class="dxj_infos">
    		<div class="dxj_con a">
	    		<h3><a href="index.php?m=index&f=art&a=showlistnotice_index&nid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[1]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[1]["ntitle"];?>
</a></h3>
	    		<p><a href="index.php?m=index&f=art&a=showlistnotice_index&nid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[1]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[1]["nsummary"];?>
</a></p>
    		</div>
    		<div class="dxj_rbtn dxj_rbtns b1">></div>
    	</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['notice']->value[2]["ntitle"])) {?>
    	<div class="dxj_infos">
    		<div class="dxj_con b">
	    		<h3><a href="index.php?m=index&f=art&a=showlistnotice_index&nid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[2]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[2]["ntitle"];?>
</a></h3>
	    		<p><a href="index.php?m=index&f=art&a=showlistnotice_index&nid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[2]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[2]["nsummary"];?>
</a></p>
    		</div>
    		<div class="dxj_rbtn dxj_rbtns b2">></div>
    	</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['notice']->value[3]["ntitle"])) {?>
    	<div class="dxj_infos bline">
    		<div class="dxj_con c">
	    		<h3><a href="index.php?m=index&f=art&a=showlistnotice_index&nid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[3]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[3]["ntitle"];?>
</a></h3>
	    		<p><a href="index.php?m=index&f=art&a=showlistnotice_index&nid=<?php echo $_smarty_tpl->tpl_vars['notice']->value[3]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[3]["nsummary"];?>
</a></p>
    		</div>
    		<div class="dxj_rbtn dxj_rbtns b3">></div>
    	</div>
		<?php }?>
    </div>
    <div class="dxj_more"><a href="index.php?m=index&f=art&a=showlistnotice">MORE   +</a></div>
    <div class="dxj_dt">
    	<img src="<?php echo INDEX_PATH;?>
/images/index/gg_03.png" alt="" />
    	<span>动态</span>
		<?php if (isset($_smarty_tpl->tpl_vars['newslist']->value[0]["title"])) {?>
    	<div class="dxj_info">
    		<div class="dxj_con">
	    		<h3><a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['newslist']->value[0]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['newslist']->value[0]["title"];?>
</a></h3>
	    		<p><a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['newslist']->value[0]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['newslist']->value[0]["summary"];?>
</a></p>
    		</div>
    		<div class="dxj_rbtn">></div>
    	</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['newslist']->value[1]["title"])) {?>
    	<div class="dxj_infos">
    		<div class="dxj_con a">
	    		<h3><a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['newslist']->value[1]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['newslist']->value[1]["title"];?>
</a></h3>
	    		<p><a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['newslist']->value[1]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['newslist']->value[1]["summary"];?>
</a></p>
    		</div>
    		<div class="dxj_rbtn dxj_rbtns b1">></div>
    	</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['newslist']->value[2]["title"])) {?>
    	<div class="dxj_infos">
    		<div class="dxj_con b">
	    		<h3><a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['newslist']->value[2]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['newslist']->value[2]["title"];?>
</a></h3>
	    		<p><a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['newslist']->value[2]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['newslist']->value[2]["summary"];?>
</a></p>
    		</div>
    		<div class="dxj_rbtn dxj_rbtns b2">></div>
    	</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['newslist']->value[3]["title"])) {?>
    	<div class="dxj_infos bline">
    		<div class="dxj_con c">
	    		<h3><a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['newslist']->value[3]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['newslist']->value[3]["title"];?>
</a></h3>
	    		<p><a href="index.php?m=index&f=art&a=showartn_index&nid=<?php echo $_smarty_tpl->tpl_vars['newslist']->value[3]['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['newslist']->value[3]["summary"];?>
</a></p>
    		</div>
    		<div class="dxj_rbtn dxj_rbtns b3">></div>
    	</div>
		<?php }?>
    </div>
    <div class="dxj_more dxj_mores"><a href="index.php?m=index&f=art&a=showartn_index">MORE   +</a></div>
</div>	
<!--公告动态结束-->
<!--专业介绍开始-->
<div class="dxj_zhuanyebox">
<div class="dxj_zhuanye">
	<div class="dxj_title">
		<div class="dxj_dongtai">
			<div class="dxj_dongtai_top">
				<span class="one">Major</span>
				<img src="<?php echo INDEX_PATH;?>
/images/index/ggdt_03.png" alt="" />
				<span class="two">Introduce</span>
			</div>
			<div class="dxj_dongtai_bottom">
				<img class="one" src="<?php echo INDEX_PATH;?>
/images/index/l_03.png" alt="" />
				 <span class="g">专业</span><span class="d">介绍</span>
				<img class="two" src="<?php echo INDEX_PATH;?>
/images/index/r_05.png" alt="" />
			</div>
		</div>
	</div>   
    
    <div class="dxj_imgbox">
			
		<div class="dxj_listd">
		<ul class="dxj_lis">
			<li class="p7"><a href="#"><img src="<?php echo INDEX_PATH;?>
/images/index/1.png" class="img" alt="" /></a></li>
			<li class="p6"><a href="#"><img src="<?php echo INDEX_PATH;?>
/images/index/2.png" class="img" alt="" /></a></li>
			<li class="p5"><a href="#"><img src="<?php echo INDEX_PATH;?>
/images/index/3.png" class="img" alt="" /></a></li>
			<li class="p4"><a href="#"><img src="<?php echo INDEX_PATH;?>
/images/index/44.jpg" class="img" alt="" /></a></li>
			<li class="p3"><a href="#"><img src="<?php echo INDEX_PATH;?>
/images/index/55.jpg" class="img" alt="" /></a></li>
			<li class="p2"><a href="#"><img src="<?php echo INDEX_PATH;?>
/images/index/66.jpg" class="img" alt="" /></a></li>
			<li class="p1"><a href="#"><img src="<?php echo INDEX_PATH;?>
/images/index/77.jpg" class="img" alt="" /></a></li>
		</ul>
		</div>
		
		<a href="javascript:;" class="dxj_prev dxj_btnd"><</a>
		<a href="javascript:;" class="dxj_next dxj_btnd">></a>
		<div class="dxj_morea"><a href="">MORE   +</a></div>
	</div>
    
    
</div>
    <div class="dxj_zhuanye_b">
    	<a href=""><img src="<?php echo INDEX_PATH;?>
/images/index/bz.jpg" alt="" /> </a>
    	<div class="dxj_btns">
    		<a href="javascript:;"><span class="btn_c firsts"></span></a>
    		<a href="javascript:;"><span class="btn_c"></span></a>
    		<a href="javascript:;"><span class="btn_c"></span></a>
    		<a href="javascript:;"><span class="btn_c"></span></a>
    		<a href="javascript:;"><span class="btn_c"></span></a>
    		<a href="javascript:;"><span class="btn_c"></span></a>
    		<a href="javascript:;"><span class="btn_c"></span></a>
    	</div>
    </div>
</div>
<!--专业介绍结束-->
<!--大赛获奖开始-->

<!--大赛获奖的数据 $bisailist

背景图片写行内样式

	title  标题
	 summary 摘要
	 name  发布人
	 nimgurl  新闻图片

-->

<div class="dxj_jiang">
	<div class="dxj_title">
		<div class="dxj_dongtai">
			<div class="dxj_dongtai_top">
				<span class="one">Contest</span>
				<img src="<?php echo INDEX_PATH;?>
/images/index/ggdt_03.png" alt="" />
				<span class="two">Winning</span>
			</div>
			<div class="dxj_dongtai_bottom">
				<img class="one" src="<?php echo INDEX_PATH;?>
/images/index/l_03.png" alt="" />
				 <span class="g">大赛</span><span class="d">获奖</span>
				<img class="two" src="<?php echo INDEX_PATH;?>
/images/index/r_05.png" alt="" />
			</div>
		</div>
	</div>
    <div class="dxj_jiang_list">
    	<div class="dxj_list">
    		<a class="l_img" href=""><img src="<?php echo INDEX_PATH;?>
/images/index/jp_10.png" alt="" /></a>
    		<div class="dxj_saishi">
    			<div class="dxj_list_con">
    				<h2>
    					大赛名称 / 
    				    <span>WINNING</span>
    				</h2>
	    			<h4>标题</h4>
	    			<p>公告文字介绍信息公告文字介绍信息</p>
	    			<p>公告文字介绍信息公告文字介绍信息</p>
	    			<p>2017/03/27</p>
    			</div>
    			<div class="dxj_mores"><a href="">MORE</a></div>
    			<div class="dxj_sanjiao"></div>
    		</div>
    	</div>
    	<div class="dxj_list r_left">
    		<a class="l_img" href=""><img src="<?php echo INDEX_PATH;?>
/images/index/jp_10.png" alt="" /></a>
    		<div class="dxj_saishi">
    			<div class="dxj_list_con">
    				<h2>
    					大赛名称 / 
    				    <span>WINNING</span>
    				</h2>
	    			<h4>标题</h4>
	    			<p>公告文字介绍信息公告文字介绍信息</p>
	    			<p>公告文字介绍信息公告文字介绍信息</p>
	    			<p>2017/03/27</p>
    			</div>
    			<div class="dxj_mores"><a href="">MORE</a></div>
    			<div class="dxj_sanjiao"></div>
    		</div>
    	</div>
    	<div class="dxj_list b_bottom">
    		<a class="l_img" href=""><img src="<?php echo INDEX_PATH;?>
/images/index/jp_10.png" alt="" /></a>
    		<div class="dxj_saishi">
    			<div class="dxj_list_con">
    				<h2>
    					大赛名称 / 
    				    <span>WINNING</span>
    				</h2>
	    			<h4>标题</h4>
	    			<p>公告文字介绍信息公告文字介绍信息</p>
	    			<p>公告文字介绍信息公告文字介绍信息</p>
	    			<p>2017/03/27</p>
    			</div>
    			<div class="dxj_mores"><a href="">MORE</a></div>
    			<div class="dxj_sanjiao"></div>
    		</div>
    	</div>
    	<div class="dxj_list r_left">
    		<a class="l_img" href=""><img src="<?php echo INDEX_PATH;?>
/images/index/jp_10.png" alt="" /></a>
    		<div class="dxj_saishi">
    			<div class="dxj_list_con">
    				<h2>
    					大赛名称 / 
    				    <span>WINNING</span>
    				</h2>
	    			<h4>标题</h4>
	    			<p>公告文字介绍信息公告文字介绍信息</p>
	    			<p>公告文字介绍信息公告文字介绍信息</p>
	    			<p>2017/03/27</p>
    			</div>
    			<div class="dxj_mores"><a href="">MORE</a></div>
    			<div class="dxj_sanjiao"></div>
    		</div>
    	</div>
    </div>
</div>
<!--大赛获奖结束-->
<!--校企合作开始-->
<div class="dxj_hezuobox">
	<div class="dxj_hezuo">
		<div class="dxj_title">
		<div class="dxj_dongtai">
			<div class="dxj_dongtai_top">
				<span class="one">School</span>
				<img src="<?php echo INDEX_PATH;?>
/images/index/ggdt_03.png" alt="" />
				<span class="two">Enterprise</span>
			</div>
			<div class="dxj_dongtai_bottom">
				<img class="one" src="<?php echo INDEX_PATH;?>
/images/index/l_03.png" alt="" />
				 <span class="g">校企</span><span class="d">合作</span>
				<img class="two" src="<?php echo INDEX_PATH;?>
/images/index/r_05.png" alt="" />
			</div>
		</div>
	</div>
		<!--数据在 $showcoop
			logoimg   企业logo
			coname  企业名称
			link   企业官网链接
		-->
	    <div class="dxj_hz first">
	    	<a class="hz hz_1" href=""><img src="" alt="" />1</a>
	    	<a class="hz hz_2" href=""><img src="" alt="" />2</a>
	    	<a class="hz hz_3" href=""><img src="" alt="" />3</a>
	    	<a class="hz hz_4" href=""><img src="" alt="" />4</a>
	    	<a class="hz hz_5" href=""><img src="" alt="" />5</a>
	    	<a class="hz hz_6" href=""><img src="" alt="" />6</a>
	    </div>
	    <div class="dxj_hz">
	    	<a class="hz hz_1" href=""><img src="" alt="" />a</a>
	    	<a class="hz hz_2" href=""><img src="" alt="" />b</a>
	    	<a class="hz hz_3" href=""><img src="" alt="" />c</a>
	    	<a class="hz hz_4" href=""><img src="" alt="" />d</a>
	    	<a class="hz hz_5" href=""><img src="" alt="" />e</a>
	    	<a class="hz hz_6" href=""><img src="" alt="" />f</a>
	    </div>
	    <div class="dxj_hz">
	    	<a class="hz hz_1" href=""><img src="" alt="" />a1</a>
	    	<a class="hz hz_2" href=""><img src="" alt="" />b1</a>
	    	<a class="hz hz_3" href=""><img src="" alt="" />c1</a>
	    	<a class="hz hz_4" href=""><img src="" alt="" />d1</a>
	    	<a class="hz hz_5" href=""><img src="" alt="" />e1</a>
	    	<a class="hz hz_6" href=""><img src="" alt="" />f1</a>
	    </div>
	    <div class="dxj_hz_btn">
	    	<a class="first" href="javascript:;"></a>
	    	<a href="javascript:;"></a>
	    	<a class="a_r" href="javascript:;"></a>
	    </div>
	    <p class="dxj_inf">我校与众多省内外企业达成合作，学生可以在公司实习，为步入社会打好基础</p>
	    <p class="dxj_inf dxj_infs">Our school and a large number of enterprises in the province to achieve cooperation, students can practice in the company, to lay a good foundation for the community</p>
	    <div class="dxj_more_hz"><a href="">MORE  +</a></div>
	</div>
    <div class="dxj_bj"><img src="" alt="" /></div>
</div>
<!--校企合作结束-->
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
<?php }
}
