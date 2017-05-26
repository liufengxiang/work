<?php
/* Smarty version 3.1.30, created on 2017-04-30 09:50:53
  from "C:\wamp\www\deal\template\index\setshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5905975d931cb1_28009973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5683154f73809803bb1edb0957c05b1a5e3467c8' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\setshow.html',
      1 => 1493538606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5905975d931cb1_28009973 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发布物品</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/setshow.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/setshow.js"><?php echo '</script'; ?>
>
<body>
<form action="index.php?a=setshowInfo" method="post">
    <div class="form-group">
        <label for="wname">商品名称</label>
        <input type="text" class="form-control" name="wname" id="wname" placeholder="商品名称">
    </div>
    <div class="form-group">
        <label for="cid">商品分类</label>
        <select name="cid" class="form-control">
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="wshow">商品描述</label>
        <textarea class="form-control" name="wshow" placeholder="请输入商品描述" resize="none" rows="5"></textarea>
    </div>
    <div class="form-group" style="overflow: hidden">
        <label for="img" style="display: block">添加物品图片</label>
        <input type="file" name="wimg1" id="wimg1" style="display: inline-block">
        <input type="file" name="wimg2" id="wimg2" style="display: inline-block">
        <input type="file" name="wimg3" id="wimg3" style="display: inline-block"><br>
        <input type="hidden" name="wwimg1" id="wwimg1">
        <input type="hidden" name="wwimg2" id="wwimg2">
        <input type="hidden" name="wwimg3" id="wwimg3">
        <div class="img img1" style="background-image: url(<?php echo IMG_PATH;?>
/imgbg.jpg)"></div>
        <div class="img img2" style="background-image: url(<?php echo IMG_PATH;?>
/imgbg.jpg)"></div>
        <div class="img img3" style="background-image: url(<?php echo IMG_PATH;?>
/imgbg.jpg)"></div>
    </div>
    <div class="form-group">
        <label for="price">商品价格</label>
        <div class="input-group" style="width: 300px">
            <div class="input-group-addon">￥</div>
            <input type="number" class="form-control" name="wmuch" id="wmuch" placeholder="price">
            <div class="input-group-addon">.00</div>
        </div>
    </div>
    <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
    <button type="button" class="btn btn-success tijiao">发布商品</button>
</form>
</body>
</html><?php }
}
