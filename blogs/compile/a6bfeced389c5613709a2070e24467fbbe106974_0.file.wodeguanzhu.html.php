<?php
/* Smarty version 3.1.30, created on 2017-03-17 16:34:25
  from "C:\wamp\www\ajax\mvc\template\index\wodeguanzhu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc0201b4b2f7_67815615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6bfeced389c5613709a2070e24467fbbe106974' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\index\\wodeguanzhu.html',
      1 => 1489764864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cc0201b4b2f7_67815615 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3 style="font-weight: 400"><a target="_blank" href="index.php?a=geren&zxname=<?php echo $_smarty_tpl->tpl_vars['v']->value['uname2'];?>
" style="color:#fff;display: block;text-decoration: none">粉丝：<?php echo $_smarty_tpl->tpl_vars['v']->value["uname2"];?>
</a></h3>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
