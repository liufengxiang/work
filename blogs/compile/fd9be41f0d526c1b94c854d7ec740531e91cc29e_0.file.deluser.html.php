<?php
/* Smarty version 3.1.30, created on 2017-03-07 18:27:02
  from "C:\wamp\www\ajax\mvc\template\admin\deluser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58beed66b975c7_03606129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd9be41f0d526c1b94c854d7ec740531e91cc29e' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\admin\\deluser.html',
      1 => 1488907620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58beed66b975c7_03606129 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<body>
    <table class="table table-striped" style="text-align: center">
        <caption style="text-align: center;font-size: 26px">用户列表</caption>
        <tr>
            <th>id</th>
            <th>用户名</th>
            <th>密码</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['password'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['v']->value['t'] == 1) {
} else { ?><a href="index.php?m=admin&f=mains&a=deluser2&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a><?php }?></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
<p style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
</body>
</html><?php }
}
