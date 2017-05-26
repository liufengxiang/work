<?php
/* Smarty version 3.1.30, created on 2017-04-10 12:54:02
  from "C:\wamp\www\gongshangs1\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eb644a6310c0_83254534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45aae4957a58157c67d4901e56ee45aa7f1bc50b' => 
    array (
      0 => 'C:\\wamp\\www\\gongshangs1\\template\\admin\\index.html',
      1 => 1491821639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eb644a6310c0_83254534 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>计算机信息工程学院后台</title>
</head>
<style>
    @font-face {
        font-family: 'iconfont';
        src: url('<?php echo ADMIN_PATH;?>
/font/iconfont.eot');
        src: url('<?php echo ADMIN_PATH;?>
/font/iconfont.eot?#iefix') format('embedded-opentype'),
        url('<?php echo ADMIN_PATH;?>
/font/iconfont.woff') format('woff'),
        url('<?php echo ADMIN_PATH;?>
/font/iconfont.ttf') format('truetype'),
        url('<?php echo ADMIN_PATH;?>
/font/iconfont.svg#iconfont') format('svg');
    }
</style>
<link rel="stylesheet" href="<?php echo ADMIN_PATH;?>
/css/default.css">
<link rel="stylesheet" href="<?php echo ADMIN_PATH;?>
/css/index.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo ADMIN_PATH;?>
/js/index.js"><?php echo '</script'; ?>
>
<body>
    <!--top-->
    <div class="topbox">
        <div class="top">
            <div class="topleft">
                <img src="<?php echo ADMIN_PATH;?>
/images/logo.png" alt="">
                <b>计算机信息工程学院管理系统</b>
            </div>
            <div class="topright">
                <a class="returnindex" href="<?php echo FILE_URL;?>
">跳到首页</a>
                <span><i class="iconfont">&#xe6c5;</i>您好！<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
,欢迎您登录</span>
                <a href="index.php?m=admin&a=unLogin"><i class="iconfont">&#xe63b;</i></a>
            </div>
        </div>
    </div>
    <!--top end-->
    <!--main-->
    <div class="mainbox">
        <div class="main">
            <div class="center">
                <ul class="fu">
                    <li>
                        <i class="iconfont">&#xe729;</i>
                        <a href="javascript:;"><i class="iconfont">&#xe62d;</i>admin</a>
                        <ul class="son">
                            <li><a href="index.php?m=admin&a=editapass" target="right"><i class="iconfont">&#xe724;</i>修改密码</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['atype']->value == 1) {?>
                            <li><a href="index.php?m=admin&a=guanliauser" target="right"><i class="iconfont">&#xe724;</i>所有管理员</a></li>
                            <?php } else { ?>
                            <?php }?>
                        </ul>
                    </li>
                    <li>
                        <i class="iconfont">&#xe612;</i>
                        <a href="index.php?m=admin&a=deluser" target="right"><i class="iconfont">&#xe69b;</i>用户管理</a>
                    </li>
                    <li>
                        <i class="iconfont">&#xe612;</i>
                        <a href="index.php?m=admin&a=addcategory" target="right"><i class="iconfont">&#xe661;</i>分类管理</a>
                    </li>
                    <li>
                        <i class="iconfont">&#xe729;</i>
                        <a href="javascript:;"><i class="iconfont">&#xe63c;</i>学院内容</a>
                        <ul class="son">
                            <li><a href="index.php?m=admin&f=art&a=addnews" target="right"><i class="iconfont">&#xe724;</i>添加内容</a></li>
                            <li><a href="index.php?m=admin&f=art&a=shownews" target="right"><i class="iconfont">&#xe724;</i>管理内容</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="iconfont">&#xe729;</i>
                        <a href="javascript:;"><i class="iconfont">&#xe60b;</i>精品课程</a>
                        <ul class="son">
                            <li><a href="index.php?m=admin&f=art&a=addcourse" target="right"><i class="iconfont">&#xe724;</i>添加课程</a></li>
                            <li><a href="index.php?m=admin&f=art&a=showcourse" target="right"><i class="iconfont">&#xe724;</i>管理课程</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="iconfont">&#xe729;</i>
                        <a href="javascript:;"><i class="iconfont">&#xe717;</i>学院公告</a>
                        <ul class="son">
                            <li><a href="index.php?m=admin&f=art&a=addnotice" target="right"><i class="iconfont">&#xe724;</i>新增公告</a></li>
                            <li><a href="index.php?m=admin&f=art&a=shownotice" target="right"><i class="iconfont">&#xe724;</i>公告管理</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="iconfont">&#xe729;</i>
                        <a href="javascript:;"><i class="iconfont">&#xe717;</i>校企合作</a>
                        <ul class="son">
                            <li><a href="index.php?m=admin&f=art&a=addcoop" target="right"><i class="iconfont">&#xe724;</i>新增合作</a></li>
                            <li><a href="index.php?m=admin&f=art&a=showcoop" target="right"><i class="iconfont">&#xe724;</i>合作管理</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="iconfont">&#xe729;</i>
                        <a href="javascript:;" target="right"><i class="iconfont">&#xe717;</i>评论管理</a>
                        <ul class="son">
                            <li><a href="index.php?m=admin&a=pinglunguanli" target="right"><i class="iconfont">&#xe724;</i>内容评论管理</a></li>
                            <li><a href="index.php?m=admin&a=kechengpinglun" target="right"><i class="iconfont">&#xe724;</i>课程评论管理</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="show">
            <iframe src="" frameborder="0" name="right"></iframe>
        </div>
    </div>
    <!--main end-->
</body>
</html><?php }
}
