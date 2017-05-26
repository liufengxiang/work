<?php
/* Smarty version 3.1.30, created on 2017-05-11 10:04:06
  from "C:\wamp\www\blogs\template\index\geren.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59141af6b0ce41_45780023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de673d71edc475fa516d2d35e095c1bf24f91885' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\index\\geren.html',
      1 => 1494489845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_59141af6b0ce41_45780023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/geren.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
<div class="box">
    <div class="mybox">
        <div class="img" style="background-image: url(<?php if ($_smarty_tpl->tpl_vars['uresult']->value['uimg'] != '') {
echo $_smarty_tpl->tpl_vars['uresult']->value['uimg'];
} else {
echo IMG_PATH;?>
/touxiang.jpg<?php }?>)"></div>
        <a class="uname"><?php echo $_smarty_tpl->tpl_vars['zxname']->value;?>
</a>
        <input type="file" id="setimg">
    </div>
    <div class="biaoti">
        <div class="biaotili">
            <span><?php echo $_smarty_tpl->tpl_vars['wodeguanzhu']->value;?>
</span><br>
            <a href="index.php?f=geren&a=wodeguanzhu" target="bottom">我的关注</a>
        </div>
        <div class="biaotili">
            <span><?php echo $_smarty_tpl->tpl_vars['guanzhuwode']->value;?>
</span><br>
            <a href="index.php?f=geren&a=guanzhuwode" target="bottom">关注我的</a>
        </div>
        <div class="biaotili">
            <span><?php echo $_smarty_tpl->tpl_vars['wodewenzhang']->value;?>
</span><br>
            <a href="index.php?f=geren&a=wodewenzhang" target="bottom">我的文章</a>
        </div>
        <div class="biaotili">
            <span><?php echo $_smarty_tpl->tpl_vars['wodeshoucang']->value;?>
</span><br>
            <a href="index.php?f=geren&a=wodeshoucang" target="bottom">我的收藏</a>
        </div>
    </div>
    <div class="neirong">
        <iframe name="bottom" frameborder="0">

        </iframe>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    var up=new upload("index.php?a=addimg","#setimg",function (text) {
        $(".img").css("background-image","url("+text+")");
        $.ajax({
            url:"index.php?f=geren&a=setimg",
            data: "uimg="+text,
            success:function (e) {
                alert("修改成功！");
            }
        })
    })
    up.upload();
<?php echo '</script'; ?>
><?php }
}
