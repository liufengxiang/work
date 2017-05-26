<?php
/* Smarty version 3.1.30, created on 2017-04-07 10:46:01
  from "D:\wamp\www\gongshangs\template\index\citeshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e751c9e016d6_45814755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '703026d45db34c726814d0093b1a697c3f67670a' => 
    array (
      0 => 'D:\\wamp\\www\\gongshangs\\template\\index\\citeshow.html',
      1 => 1491476651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e751c9e016d6_45814755 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
	<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/xwshow.css">
	<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/fonts/iconfont.css" />	
	<body>
		<div class="zyh_bigbox">
    <div class="zyh_top">
        <p class="nav">
            <a href="">
                <span class="round"></span>
                首&nbsp;&nbsp;页
            </a>
            <span class="jiantou iconfont icon-dayuhao"></span>
            <a href="">
                <span class="round"></span>
                院系动态
            </a>
            <span class="jiantou iconfont icon-dayuhao"></span>
            <a href="">
                <span class="round bgcolor"></span>
                新闻详情
            </a>
        </p>
    </div>
    <!--内容 star-->
    <div class="zyh_box">
        <div class="zyh_titlebox">
            <div class="zyh_title">
                <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <?php if ($_smarty_tpl->tpl_vars['etitle']->value != '') {?>
                <p><?php echo $_smarty_tpl->tpl_vars['etitle']->value;?>
</p>
                <?php }?>
            </div>
        </div>
        <div class="zyh_time">
            <span>时间：<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</span>
            <span>编辑：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['hits']->value !== '') {?>
            <span>浏览量：<?php echo $_smarty_tpl->tpl_vars['hits']->value;?>
</span>
            <?php }?>

        </div>
        <div class="zyh_zhaiyao">
            <p>摘要：<?php echo $_smarty_tpl->tpl_vars['summary']->value;?>
</p>
        </div>
        <div class="zyh_con">
            <div class="zyh_zhuti">
                <h2><span>院系</span>活动</h2>
                <p>COLLEGE <span>ACTIVITIES</span></p>
                <div class="zyh_hengline"></div>
            </div>
            <div class="zyh_detail">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div>
    </div>
    <!--内容结束-->
    <!--上一篇 star-->
    <div class="zyh_pagesbox">
        <a href="" class="zyh_pre">
            <div class="zyh_prezi">
                <span class="zyh_left iconfont icon-xiaoyuhao"></span>
                <div class="zyh_right">
                    <span>上一篇</span>
                    <span>LAST</span>
                </div>
            </div>
        </a>
        <a href="" class="zyh_next">
            <div class="zyh_prezi">
                <div class="zyh_right">
                    <span>下一篇</span>
                    <span>NEXT</span>
                </div>
                <span class="zyh_left iconfont icon-dayuhao"></span>
            </div>
        </a>
    </div>
    <!--上一篇 end-->
    <!--学生评论 star-->
    <div class="zyh_pinglun">

        <div class="dxj_title">
            <div class="dxj_dongtai">
                <div class="dxj_dongtai_top">
                    <span class="one">Student</span>
                    <img src="<?php echo INDEX_PATH;?>
/images/show/ggdt_03.png" alt="" />
                    <span class="two">Review</span>
                </div>
                <div class="dxj_dongtai_bottom">
                    <img class="one" src="<?php echo INDEX_PATH;?>
/images/show/l_03.png" alt="" />
                    <span class="g">学生</span><span class="d">评论</span>
                    <img class="two" src="<?php echo INDEX_PATH;?>
/images/show/r_03.png" alt="" />
                </div>
            </div>
        </div>
        <div class="zyh_liuyan">
            <div class="zyh_lytop">
                <div class="zyh_lytopL">
                    <div class="zyh_lytopR">
                        <div class="zyh_X">相 / 关 / 评 / 论</div>
                        <div class="zyh_A"><b>ABOUT</b> RESTAURANT</div>
                    </div>

                </div>
            </div>
            <div class="zyh_liyancon">
                <div class="zyh_lycon">
                    <div class="zyh_lyleft">
                        <div class="zyh_touxiang">
                            <img src="<?php echo INDEX_PATH;?>
/images/show/tou.jpg" alt="">
                        </div>
                    </div>
                    <div class="zyh_lyright">
                        <div class="zyh_lyrighttop">
                            <div class="zyh_stuname">张宇辉 <b>ABOUT </b><span>RESTAURANT</span></div>
                            <div class="zyh_lytime">2017/03/02</div>
                        </div>
                        <p class="zyh_pingluncon">摘要：计算机信息工程学院网站建设的主要目标是体现学院办学特色和师资优势，展示学院办学实力，学院办学条件，教学成果，展示师生的风采，提供面向老师、学生、家长的全方位综合资讯服务体系。摘要：计算机信息工程学院网站建设的主要目标是体现学院办学特色和师资优势，展示学院办学实力，学院办学条件，教学成果，展示师生。成果，展示师生</p>
                        <p class="zyh_dianzan"><span>542</span>人已点赞<i class="iconfont icon-xin"></i></p>
                    </div>
                </div>
                <div class="zyh_lycon">
                    <div class="zyh_lyleft">
                        <div class="zyh_touxiang">
                            <img src="<?php echo INDEX_PATH;?>
/images/show/tou.jpg" alt="">
                        </div>
                    </div>
                    <div class="zyh_lyright">
                        <div class="zyh_lyrighttop">
                            <div class="zyh_stuname">张宇辉 <b>ABOUT </b><span>RESTAURANT</span></div>
                            <div class="zyh_lytime">2017/03/02</div>
                        </div>
                        <p class="zyh_pingluncon">摘要：计算机信息工程学院网站建设的主要目标是体现学院办学特色和师资优势，展示学院办学实力院办学特色和师资优势，展示学院办学实力院办学特色和师资优势，展示学院办学实力</p>
                        <p class="zyh_dianzan"><span>542</span>人已点赞<i class="iconfont icon-xin"></i></p>
                    </div>
                </div>
                <div class="zyh_lycon">
                    <div class="zyh_lyleft">
                        <div class="zyh_touxiang">
                            <img src="<?php echo INDEX_PATH;?>
/images/show/tou.jpg" alt="">
                        </div>
                    </div>
                    <div class="zyh_lyright">
                        <div class="zyh_lyrighttop">
                            <div class="zyh_stuname">张宇辉 <b>ABOUT </b><span>RESTAURANT</span></div>
                            <div class="zyh_lytime">2017/03/02</div>
                        </div>
                        <p class="zyh_pingluncon">摘要：计算机信息工程学院网站建设的主要目标是体现学院办学特色和师资优势，展示学院办学实力，学院办学条件，教学成果，展示师生的风采，提供面向老师、学生、家长的全方位综合资讯服务体系。摘要：计算机信息工程学院网站建设的主要目标是体现学院办学特色和师资优势，展示学院办学实力，学院办学条件，教学成果，展示师生。成果，展示师生</p>
                        <p class="zyh_dianzan"><span>542</span>人已点赞<i class="iconfont icon-xin"></i></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--学生评论 end-->
    <!--分页 star-->
    <div class="page_nav">
        <div class="wrap">
            <ul>
                <li><a class="add iconfont icon-xia" href=""></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a class="active" href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a class="remove" href="">......</a></li>
                <li><a href="">10</a></li>
                <li><a href="">11</a></li>
                <li><a class="add iconfont icon-you" href=""></a></li>
                <li>
                    <span>跳转到</span>
                    <span class="pages"><input type="text" ></span>
                    <span>页</span>
                </li>
                <li><a  href="">Go</a></li>
            </ul>

        </div>
    </div>
    <!--分页 end-->
    <!--留言框 star-->
    <div class="zyh_lyk">
        <form action="">
            <textarea name="" id="" cols="30" rows="10" ></textarea>
            <div class="zyh_btnbox">
                <div class="zyh_btn">
                    <input type="submit" value="提    交" class="zyh_tjbtn">
                    <input type="reset" value="取    消" class="zyh_qxbtn">
                </div>
                <div class="zyh_zishu">您还可以输入<b>200</b>个字</div>
            </div>
        </form>

    </div>
    <!--留言框 end-->

</div>			
		
	</body>
</html>
<?php }
}
