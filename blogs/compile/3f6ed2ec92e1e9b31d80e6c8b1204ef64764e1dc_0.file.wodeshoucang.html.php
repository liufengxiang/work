<?php
/* Smarty version 3.1.30, created on 2017-03-17 16:35:13
  from "C:\wamp\www\ajax\mvc\template\index\wodeshoucang.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc02311bb1e3_03495317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f6ed2ec92e1e9b31d80e6c8b1204ef64764e1dc' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\index\\wodeshoucang.html',
      1 => 1489764907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cc02311bb1e3_03495317 (Smarty_Internal_Template $_smarty_tpl) {
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
