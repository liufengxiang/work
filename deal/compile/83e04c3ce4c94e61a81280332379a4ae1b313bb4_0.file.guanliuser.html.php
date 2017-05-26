<?php
/* Smarty version 3.1.30, created on 2017-04-26 12:02:45
  from "C:\wamp\www\deal\template\admin\guanliuser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59007045d3c110_80784729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83e04c3ce4c94e61a81280332379a4ae1b313bb4' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\guanliuser.html',
      1 => 1493200963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59007045d3c110_80784729 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理用户</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/tablebox.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<body>
<div class="box">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>用户名</th>
                <th>昵称</th>
                <th>联系电话</th>
                <th>qq</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["nichen"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uphone"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uqq"];?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><a class="del">删除</a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
    <div style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</div>
</body>
<?php echo '<script'; ?>
>
    $(".del").click(function () {
        if(confirm("确定删除该用户吗？")){
            location.href="index.php?m=admin&f=cate&a=deluser&uid="+$(this).parent().attr("id");
        }
    });
<?php echo '</script'; ?>
>
</html><?php }
}
