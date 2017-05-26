<?php
/* Smarty version 3.1.30, created on 2017-05-11 07:57:21
  from "C:\wamp\www\deal\template\index\ziliao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5913fd4112d656_15292729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c19e1cf507c5e0db5326305ed018668af9524e' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\ziliao.html',
      1 => 1494482149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5913fd4112d656_15292729 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/ziliao.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
<body>
<div class="box">
    <form action="index.php?f=geren&a=ziliaoInfo" method="post">
        <div class="sbox">账号：<input type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['ziliaoresult']->value[0]['uname'];?>
"></div>
        <div class="sbox">密码：<input type="password" id="upass" value="<?php echo $_smarty_tpl->tpl_vars['ziliaoresult']->value[0]['upass'];?>
"><a class="editpass">点击修改密码</a></div>
        <div class="sbox">昵称：<input type="text" name="nichen" value="<?php echo $_smarty_tpl->tpl_vars['ziliaoresult']->value[0]['nichen'];?>
"></div>
        <div class="sbox">联系电话：<input type="text" name="uphone" value="<?php echo $_smarty_tpl->tpl_vars['ziliaoresult']->value[0]['uphone'];?>
"></div>
        <div class="sbox">QQ号码：<input type="text" name="uqq" value="<?php echo $_smarty_tpl->tpl_vars['ziliaoresult']->value[0]['uqq'];?>
"></div>
        <div class="sbox">
            <input type="file" name="uimg1" id="uimg1"><br>
            <input type="hidden" name="uimg" id="uimg" value="<?php echo $_smarty_tpl->tpl_vars['ziliaoresult']->value[0]['uimg'];?>
">
            <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['ziliaoresult']->value[0]['uid'];?>
">
        </div>
        <div class="img img1" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['ziliaoresult']->value[0]['uimg'];?>
)"></div>
        <div class="sbox"><input type="submit" id="tijiao" value="提交修改"><a href="index.php?f=geren" id="tijiao fanhui">返回个人中心</a></div>
    </form>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    var up1=new upload("index.php?a=addimg","#uimg1",function (text) {
        $(".img1").css("background-image","url("+text+")");
        $("#uimg").val(text);
    })
    up1.upload();
    $(".editpass").click(function () {
        var val=$("#upass").val();
        if(confirm("确认修改吗？")){
            location.href="index.php?f=geren&a=editpass&upass="+val;
        }
    })
<?php echo '</script'; ?>
><?php }
}
