<?php
/* Smarty version 3.1.30, created on 2017-05-08 05:52:40
  from "C:\wamp\www\blogs\template\index\wodeguanzhu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590feb88e75539_60023775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fa361789ffad2c6b5868a704d1541a346a8b8cc' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\index\\wodeguanzhu.html',
      1 => 1489764864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590feb88e75539_60023775 (Smarty_Internal_Template $_smarty_tpl) {
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
