<?php
/* Smarty version 3.1.30, created on 2017-05-08 05:52:39
  from "C:\wamp\www\blogs\template\index\wodewenzhang.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590feb87306f56_53757136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0ef3005373ad453e9a6092a1d749597ec7db78' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\index\\wodewenzhang.html',
      1 => 1489765019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590feb87306f56_53757136 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3 style="font-weight: 400"><a href="index.php?f=lists&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank" style="color:#fff;display: block;text-decoration: none">文章：<?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></h3>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
