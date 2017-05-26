<?php
/* Smarty version 3.1.30, created on 2017-03-06 19:08:48
  from "C:\wamp\www\ajax\mvc\template\admin\xiugaicategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bda5b0731181_16152538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d00af3f71fcad0c24b169a8a1c8981d4fbfaaf4' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\admin\\xiugaicategory.html',
      1 => 1488823690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bda5b0731181_16152538 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php?m=admin&f=mains&a=xiugaicategory2" method="post">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'k', false, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value => $_smarty_tpl->tpl_vars['k']->value) {
?>
    <select name="pid" id="">
        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

    </select>
    <input type="text" name="cname" value="<?php echo $_smarty_tpl->tpl_vars['k']->value['cname'];?>
">
    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['k']->value['cid'];?>
">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <input type="submit" value="修改">
</form>
</body>
</html><?php }
}
