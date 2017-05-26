<?php
/* Smarty version 3.1.30, created on 2017-05-02 12:18:39
  from "C:\wamp\www\deal\template\admin\shenshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59085cff0dc882_56798423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9bbe8e5c3891cafc63c770d02fe9a341a477006' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\shenshow.html',
      1 => 1493695654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59085cff0dc882_56798423 (Smarty_Internal_Template $_smarty_tpl) {
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
<body style="background: transparent">
<form action="index.php?m=admin&f=cate&a=shenshowend" method="post">
    <div class="form-group">
        <label for="wname">商品名称</label>
        <input type="text" class="form-control" disabled value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['wname'];?>
" name="wname" id="wname" placeholder="商品名称">
    </div>
    <div class="form-group">
        <label for="wshow">商品描述</label>
        <textarea class="form-control" name="wshow" disabled placeholder="请输入商品描述" resize="none" rows="5"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['wshow'];?>
</textarea>
    </div>
    <div class="form-group" style="overflow: hidden">
        <label for="img" style="display: block">添加物品图片</label>
        <input type="hidden" name="wwimg1" id="wwimg1">
        <input type="hidden" name="wwimg2" id="wwimg2">
        <input type="hidden" name="wwimg3" id="wwimg3">
        <div class="img img1"  style="background-image: url(<?php if ($_smarty_tpl->tpl_vars['result']->value[0]['wimg1']) {
echo $_smarty_tpl->tpl_vars['result']->value[0]['wimg1'];
} else {
echo IMG_PATH;?>
/imgbg.jpg<?php }?>)"></div>
        <div class="img img2" style="background-image: url(<?php if ($_smarty_tpl->tpl_vars['result']->value[0]['wimg2']) {
echo $_smarty_tpl->tpl_vars['result']->value[0]['wimg2'];
} else {
echo IMG_PATH;?>
/imgbg.jpg<?php }?>)"></div>
        <div class="img img3" style="background-image: url(<?php if ($_smarty_tpl->tpl_vars['result']->value[0]['wimg3']) {
echo $_smarty_tpl->tpl_vars['result']->value[0]['wimg3'];
} else {
echo IMG_PATH;?>
/imgbg.jpg<?php }?>)"></div>
    </div>
    <div class="form-group">
        <label for="price">商品价格</label>
        <div class="input-group" style="width: 300px">
            <div class="input-group-addon">￥</div>
            <input type="number" class="form-control" disabled value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['wmuch'];?>
" name="wmuch" id="wmuch" placeholder="price">
            <div class="input-group-addon">.00</div>
        </div>
    </div>
    <div class="form-group">
        <label for="price">审核意见</label><br>
        <input type="radio" name="wstate"  <?php if ($_smarty_tpl->tpl_vars['result']->value[0]['wstate'] == 0) {?>checked<?php } else {
}?> value="0">未审核
        <input type="radio" name="wstate"  <?php if ($_smarty_tpl->tpl_vars['result']->value[0]['wstate'] == 1) {?>checked<?php } else {
}?> value="1">审核未通过
        <input type="radio" name="wstate"  <?php if ($_smarty_tpl->tpl_vars['result']->value[0]['wstate'] == 2) {?>checked<?php } else {
}?> value="2">审核通过
    </div>
    <input type="hidden" name="wid" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['wid'];?>
">
    <button class="btn btn-success">审核</button>
</form>
</body>
</html><?php }
}
