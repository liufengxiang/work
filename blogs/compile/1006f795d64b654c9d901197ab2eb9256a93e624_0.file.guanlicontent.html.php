<?php
/* Smarty version 3.1.30, created on 2017-05-11 11:42:18
  from "C:\wamp\www\blogs\template\admin\guanlicontent.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591431fa965bf6_82181845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1006f795d64b654c9d901197ab2eb9256a93e624' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\admin\\guanlicontent.html',
      1 => 1489223228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591431fa965bf6_82181845 (Smarty_Internal_Template $_smarty_tpl) {
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
<table class="table table-striped">
    <caption style="text-align: center;font-size: 26px">博客列表</caption>
    <tr>
        <th>cid</th>
        <th>标题</th>
        <th>发布人</th>
        <th>发布时间</th>
        <th>审核状态</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'k', false, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value => $_smarty_tpl->tpl_vars['k']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value["id"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value["stitle"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value["sname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value["stime"];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['k']->value["status"] == 0) {?>未审核<?php } elseif ($_smarty_tpl->tpl_vars['k']->value["status"] == 1) {?>审核中<?php } elseif ($_smarty_tpl->tpl_vars['k']->value["status"] == 2) {?>审核未通过<?php } elseif ($_smarty_tpl->tpl_vars['k']->value["status"] == 3) {?>审核通过<?php }?></td>
            <td><a href="index.php?m=admin&f=mains&a=lookcontent&id=<?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
">查看</a>
                <a href="index.php?m=admin&f=mains&a=delcontent&id=<?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
">删除</a></td>
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
