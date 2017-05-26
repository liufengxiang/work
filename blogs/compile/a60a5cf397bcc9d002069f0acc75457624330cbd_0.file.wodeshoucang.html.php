<?php
/* Smarty version 3.1.30, created on 2017-05-08 05:52:38
  from "C:\wamp\www\blogs\template\index\wodeshoucang.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590feb865851c2_44746764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60a5cf397bcc9d002069f0acc75457624330cbd' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\index\\wodeshoucang.html',
      1 => 1489764907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590feb865851c2_44746764 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <h3 style="font-weight: 400"><a target="_blank" href="index.php?f=lists&id=<?php echo $_smarty_tpl->tpl_vars['v']->value[0]['id'];?>
" style="color:#fff;display: block;text-decoration: none">文章：<?php echo $_smarty_tpl->tpl_vars['v']->value[0]["stitle"];?>
</a></h3>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
