<?php
/* Smarty version 3.1.30, created on 2017-05-11 11:42:26
  from "C:\wamp\www\blogs\template\admin\lookcontent.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591432021cef85_32454969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e4ee655dce0364d0fd9c6bdcb3889117c70949' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\admin\\lookcontent.html',
      1 => 1488880323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591432021cef85_32454969 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="text/html;charset=utf-8">
    <title>Title</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/utf8-php/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/utf8-php/ueditor.all.js"><?php echo '</script'; ?>
>
<body>
<form action="index.php?m=admin&f=mains&a=xiugaicontent" method="post" role="form" style="margin:20px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'k', false, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value => $_smarty_tpl->tpl_vars['k']->value) {
?>
    <h3 style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['k']->value['stitle'];?>
</h3>
    <div style="text-indent: 2em"><?php echo $_smarty_tpl->tpl_vars['k']->value['scon'];?>
</div>
    <br><br><br>
    <div class="form-group">
        <label for="name">是否审核</label>
        <label class="checkbox-inline">
            <input type="radio" name="status" <?php if ($_smarty_tpl->tpl_vars['k']->value['status'] == 0) {?>checked<?php }?> value="0" >未审核
        </label>
        <label class="checkbox-inline">
            <input type="radio" name="status" <?php if ($_smarty_tpl->tpl_vars['k']->value['status'] == 1) {?>checked<?php }?> value="1">审核中
        </label>
        <label class="checkbox-inline">
            <input type="radio" name="status" <?php if ($_smarty_tpl->tpl_vars['k']->value['status'] == 2) {?>checked<?php }?> value="2">审核未通过
        </label>
        <label class="checkbox-inline">
            <input type="radio" name="status" <?php if ($_smarty_tpl->tpl_vars['k']->value['status'] == 3) {?>checked<?php }?> value="3">审核通过
        </label>
    </div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
">
    <button type="submit" class="btn btn-default">提交审核</button>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</form>
</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
    var ue = UE.getEditor('container');
    ue.setDisabled();
<?php echo '</script'; ?>
><?php }
}
