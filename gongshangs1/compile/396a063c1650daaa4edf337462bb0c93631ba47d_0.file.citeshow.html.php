<?php
/* Smarty version 3.1.30, created on 2017-04-13 12:58:36
  from "E:\wamp\wamp\www\gongshangs1\template\index\citeshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef59dc113a05_67425747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '396a063c1650daaa4edf337462bb0c93631ba47d' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\gongshangs1\\template\\index\\citeshow.html',
      1 => 1492049414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef59dc113a05_67425747 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a href="index.php" target="_top">
                <span class="round"></span>
                首&nbsp;&nbsp;页
            </a>
            <span class="jiantou iconfont icon-dayuhao"></span>
            <?php if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>
            <a href="index.php?m=index&f=art&a=showlistnotice_son">
                <span class="round"></span>
                院系动态
            </a>
            <?php } else { ?>
            <a href="index.php?m=index&f=art&a=showlistn&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">
                <span class="round"></span>
                院系动态
            </a>
            <?php }?>
            <span class="jiantou iconfont icon-dayuhao"></span>
            <a href="javascript:;">
                <span class="round bgcolor"></span>
                新闻详情
            </a>
        </p>
    </div>
    <!--内容 star-->
    <div class="zyh_box">
        <div class="zyh_titlebox">
            <div class="zyh_title" sid="<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
">
                <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['etitle']->value;?>
</p>
            </div>
        </div>
        <div class="zyh_time">
            <span>时间：<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</span>
            <span>编辑：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
            <?php if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>
            <?php } else { ?>
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
                <?php if ($_smarty_tpl->tpl_vars['nimgurl']->value) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['nimgurl']->value;?>
" alt="">
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div>
    </div>
    <!--内容结束-->
    <!--上一篇 star-->
    <?php if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>
            <!--公告页-->
    <div class="zyh_pagesbox" nid="<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
">
        <a href="index.php?m=index&f=art&a=zyh_noticPre&nid=<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
" class="zyh_pre" id="noticPre">
            <div class="zyh_prezi">
                <span class="zyh_left iconfont icon-xiaoyuhao"></span>
                <div class="zyh_right">
                    <span>上一篇</span>
                    <span>LAST</span>
                </div>
            </div>
        </a>
        <a href="index.php?m=index&f=art&a=zyh_noticNext&nid=<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
" class="zyh_next" id="noticNext">
            <div class="zyh_prezi">
                <div class="zyh_right">
                    <span>下一篇</span>
                    <span>NEXT</span>
                </div>
                <span class="zyh_left iconfont icon-dayuhao"></span>
            </div>
        </a>
    </div>
    <?php } else { ?>
            <!--新闻页-->
    <div class="zyh_pagesbox" nid="<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
" cid="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">
        <a href="index.php?m=index&f=art&a=zyh_pre&nid=<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" class="zyh_pre"  id="zyh_preClick">
            <div class="zyh_prezi">
                <span class="zyh_left iconfont icon-xiaoyuhao"></span>
                <div class="zyh_right">
                    <span>上一篇</span>
                    <span>LAST</span>
                </div>
            </div>
        </a>
        <a href="index.php?m=index&f=art&a=zyh_next&nid=<?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" class="zyh_next" id="zyh_nextClick" >
            <div class="zyh_prezi">
                <div class="zyh_right">
                    <span>下一篇</span>
                    <span>NEXT</span>
                </div>
                <span class="zyh_left iconfont icon-dayuhao"></span>
            </div>
        </a>
    </div>
    <?php }?>
    <!--上一篇 end-->
    <?php if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>
    <?php } else { ?>
    <!--学生评论 star-->
    <!--隐藏 star-->
    <div class="zyh_pinglunone" style="display: none">
        <div class="zyh_lycon">
            <div class="zyh_lyleft">
                <div class="zyh_touxiang">
                    <img src="" alt="">
                </div>
            </div>
            <div class="zyh_lyright">
                <div class="zyh_lyrighttop">
                    <div class="zyh_stuname"><span style="font-size: 16px;
color:#040404;"></span><b> ABOUT </b><span>RESTAURANT</span></div>
                    <div class="zyh_lytime"></div>
                </div>
                <p class="zyh_pingluncon"></p>
                <p class="zyh_dianzan"><span>0</span>人已点赞<i class="iconfont icon-xin"></i></p>
            </div>
        </div>
    </div>
    <!--隐藏 end-->
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
                <?php if (count($_smarty_tpl->tpl_vars['result1']->value) < 1) {?>
                <div class="zyh_nopinlun" style="width:100%;height:60px;text-align: center;font-size:20px;line-height: 60px;">还没有评论哦！期待您的评论！</div>
                <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
                <div class="zyh_lycon">
                    <div class="zyh_lyleft">
                        <div class="zyh_touxiang">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uimage'];?>
" alt="">
                        </div>
                    </div>
                    <div class="zyh_lyright">
                        <div class="zyh_lyrighttop">
                            <div class="zyh_stuname"><span style="font-size: 16px;
color:#040404;"><?php echo $_smarty_tpl->tpl_vars['v1']->value['unickname'];?>
</span><b> ABOUT </b><span>RESTAURANT</span></div>
                            <div class="zyh_lytime"><?php echo $_smarty_tpl->tpl_vars['v1']->value['mtime'];?>
</div>
                        </div>
                        <p class="zyh_pingluncon"><?php echo $_smarty_tpl->tpl_vars['v1']->value['mcon'];?>
</p>
                        <p class="zyh_dianzan" uid="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid'];?>
">
                            <span><?php echo $_smarty_tpl->tpl_vars['v1']->value['good'];?>
</span>人已点赞<i class="iconfont icon-xin" mid="<?php echo $_smarty_tpl->tpl_vars['v1']->value['mid'];?>
"></i>
                            <img src='<?php echo INDEX_PATH;?>
/images/show/xin.png' alt=''>
                        </p>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php }?>
            </div>
        </div>
    </div>
    <!--学生评论 end-->
    <!--分页 star-->
 <div class="zyh_pagebox">
    <div class="page_nav">
        <div class="wrap">
            <ul>
                <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

                <!--<li><a class="add iconfont icon-xia" href=""></a></li>-->
                <!--<li><a href="">1</a></li>-->
                <!--<li><a href="">2</a></li>-->
                <!--<li><a href="">3</a></li>-->
                <!--<li><a class="active" href="">4</a></li>-->
                <!--<li><a href="">5</a></li>-->
                <!--<li><a class="remove" href="">......</a></li>-->
                <!--<li><a href="">10</a></li>-->
                <!--<li><a href="">11</a></li>-->
                <!--<li><a class="add iconfont icon-you" href=""></a></li>-->
                <li>
                    <span>跳转到</span>
                    <span class="pages"><input type="text"></span>
                    <span>页</span>
                </li>
                <li><a  href="javascript:;" class="zyh_GO">Go</a></li>
            </ul>

        </div>
    </div>
 </div>
    <!--分页 end-->
    <!--留言框 star-->
    <div class="zyh_lyk">
        <textarea name="" id="" cols="30" rows="10" id="zyh_lynrk"></textarea>
        <div class="zyh_btnbox">
            <div class="zyh_btn">
                <input type="submit" value="提    交" class="zyh_tjbtn">
                <input type="reset" value="取    消" class="zyh_qxbtn">
            </div>
            <div class="zyh_zishu">您还可以输入<b>200</b>个字</div>
        </div>
    </div>
    <!--留言框 end-->
    <?php }?>
</div>
	</body>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo INDEX_PATH;?>
/js/leaveWords.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function(){
            // 页码样式添加
            var yeshu;
            function pages(){
                var fbox=$(".wrap ul");
                yeshu=$(".wrap ul>span:nth-child(2)").html();
                $(".wrap ul>span").remove();
                $(".wrap ul>#home").remove();
                $(".wrap ul>#last").remove();
                if(fbox.find("a").length<=4){
                    fbox.css("display","none");
                    return false;
                }
                fbox.find("a").wrap("<li></li>");
                fbox.find("#up").html("").addClass("add iconfont icon-xia");
                fbox.find("#next").html("").addClass("add iconfont icon-you");
            }
            pages();
            $(".zyh_GO").click(function(){
                if($.trim($(".pages input").val())==""){
                    //请输入要跳转的页数
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothbj").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").find("h1").html("请输入要跳转的页数");
                    return;
                }
               var pag=$(".pages input").val()-1;
               if(yeshu<pag+1){
                   $('#iframe', parent.document).parent().parent().siblings(".zyh_bothbj").css("display","block");
                   $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").css("display","block");
                   $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").find("h1").html("没有这么多分页");
                   return;
               }
               var hre=$(".wrap ul li:first-child").find("a").attr("href");
               var newhre=hre.slice(0,-7);
               $(".zyh_GO").attr("href",newhre+"pages="+pag);
            })
        })

    <?php echo '</script'; ?>
>
</html>
<?php }
}
