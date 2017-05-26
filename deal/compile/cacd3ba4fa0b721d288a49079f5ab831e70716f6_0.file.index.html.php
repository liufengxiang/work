<?php
/* Smarty version 3.1.30, created on 2017-04-26 16:58:43
  from "C:\wamp\www\deal\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5900b5a3df5d52_82416012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cacd3ba4fa0b721d288a49079f5ab831e70716f6' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\index.html',
      1 => 1493218332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5900b5a3df5d52_82416012 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>大学生二手交易系统后台</title>
</head>
<style>
    @font-face {
        font-family: 'iconfont';
        src: url('<?php echo FONT_PATH;?>
/admin/iconfont.eot');
        src: url('<?php echo FONT_PATH;?>
/admin/iconfont.eot?#iefix') format('embedded-opentype'),
        url('<?php echo FONT_PATH;?>
/admin/iconfont.woff') format('woff'),
        url('<?php echo FONT_PATH;?>
/admin/iconfont.ttf') format('truetype'),
        url('<?php echo FONT_PATH;?>
/admin/iconfont.svg#iconfont') format('svg');
    }
</style>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/default.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin.js"><?php echo '</script'; ?>
>
<body>
    <!--top-->
    <div class="topbox">
        <div class="top">
            <div class="topleft">
                <b>大学生二手交易平台后台</b>
            </div>
            <div class="topright">
                <a class="returnindex" href="index.php">进入前台</a>
                <span><i class="iconfont">&#xe6c5;</i>您好！<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,欢迎您登录</span>
                <a href="index.php?m=admin&a=exitadmin"><i class="iconfont">&#xe63b;</i></a>
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
                            <li><a href="index.php?m=admin&f=cate&a=xiugaiapass" target="right"><i class="iconfont">&#xe724;</i>修改密码</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['atype']->value == 1) {?>
                            <li><a href="index.php?m=admin&f=cate&a=guanliadmin" target="right"><i class="iconfont">&#xe724;</i>所有管理员</a></li>
                            <?php } else {
}?>
                        </ul>
                    </li>
                    <li>
                        <i class="iconfont">&#xe612;</i>
                        <a href="index.php?m=admin&f=cate&a=guanliuser" target="right"><i class="iconfont">&#xe69b;</i>用户管理</a>
                    </li>
                    <li>
                        <i class="iconfont">&#xe729;</i>
                        <a href="javascript:;"><i class="iconfont">&#xe661;</i>分类管理</a>
                        <ul class="son">
                            <li><a href="index.php?m=admin&f=cate&a=addcategory" target="right"><i class="iconfont">&#xe724;</i>添加分类</a></li>
                            <li><a href="index.php?m=admin&f=cate&a=guanlicategory" target="right"><i class="iconfont">&#xe724;</i>管理分类</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="iconfont">&#xe729;</i>
                        <a href="javascript:;"><i class="iconfont">&#xe63c;</i>二手物品管理</a>
                        <ul class="son">
                            <li><a href="index.php?m=admin&f=cate&a=addshow" target="right"><i class="iconfont">&#xe724;</i>添加二手物品</a></li>
                            <li><a href="index.php?m=admin&f=cate&a=guanlishow" target="right"><i class="iconfont">&#xe724;</i>管理二手物品</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="iconfont">&#xe612;</i>
                        <a href="index.php?m=admin&f=cate&a=guanlidingdan" target="right"><i class="iconfont">&#xe60b;</i>订单管理</a>
                    </li>
                    <li>
                        <i class="iconfont">&#xe612;</i>
                        <a href="index.php?m=admin&f=cate&a=guanlipinlun" target="right"><i class="iconfont">&#xe717;</i>留言评论管理</a>
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
