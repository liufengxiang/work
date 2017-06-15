<?php
/* Smarty version 3.1.30, created on 2017-04-07 10:33:06
  from "D:\wamp\www\gongshangs\template\index\citeshow2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e74ec2b7d554_98704073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a157ad8886982e826c080ac3d0117bae7889238a' => 
    array (
      0 => 'D:\\wamp\\www\\gongshangs\\template\\index\\citeshow2.html',
      1 => 1491553985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e74ec2b7d554_98704073 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
		<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/xwshow.css">
		<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/fonts/iconfont.css" />	
	</head>
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
                精品课程
            </a>
            <span class="jiantou iconfont icon-dayuhao"></span>
            <a href="">
                <span class="round bgcolor"></span>
                课程详情
            </a>
        </p>
    </div>
    <!--内容 star-->
    <div class="zyh_box">
        <div class="zyh_con">
            <div class="zyh_zhuti">
                <h2><?php echo $_smarty_tpl->tpl_vars['course']->value["title"];?>
</h2>
                <p>COURSE <span>TITLE</span></p>
                <div class="zyh_hengline"></div>
            </div>
            <div class="zyh_imagebox">
                <div class="zyh_image">
                    <img src="<?php echo INDEX_PATH;?>
/images/show/11.PNG" alt="">
                </div>
                <div class="zyh_zhezhao">
                    <div class="zyh_zznr">
                        <div class="zyh_zztop">
                            <h1><?php echo $_smarty_tpl->tpl_vars['course']->value["title"];?>
</h1>
                            <?php if (!empty($_smarty_tpl->tpl_vars['course']->value["etitle"])) {?>
                            <h2><?php echo $_smarty_tpl->tpl_vars['course']->value["etitle"];?>
</h2>
                            <?php } elseif (!empty($_smarty_tpl->tpl_vars['course']->value["label"])) {?>
                            <h2><?php echo $_smarty_tpl->tpl_vars['course']->value["label"];?>
</h2>
                            <?php }?>
                        </div>
                        <p>summary</p>
                    </div>
                </div>
            </div>
            <div class="zyh_detail">
                <?php echo $_smarty_tpl->tpl_vars['course']->value["con"];?>

            </div>
        </div>
    </div>
    <!--内容结束-->
    <!--学生评论 star-->
    <div class="zyh_kc">

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
