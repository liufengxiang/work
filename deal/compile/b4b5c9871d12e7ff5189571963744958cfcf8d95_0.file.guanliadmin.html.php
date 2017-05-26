<?php
/* Smarty version 3.1.30, created on 2017-05-11 06:01:24
  from "C:\wamp\www\deal\template\admin\guanliadmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5913e2148b4364_25597576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4b5c9871d12e7ff5189571963744958cfcf8d95' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\guanliadmin.html',
      1 => 1494475056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5913e2148b4364_25597576 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>所有管理员</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/tablebox.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="box">
    <form action="index.php?m=admin&f=cate&a=addadmin" method="post">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>管理员账号</th>
                    <th>管理员密码</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>添加新的管理员</td>
                    <td></td>
                    <td><a href="index.php?m=admin&f=cate&a=addadmin" class='add'>添加</a></td>
                </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value["aname"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value["apass"];?>
</td>
                    <td id="<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
"><a class='del'>删除</a></td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </form>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
$(".del").click(function () {
    if(confirm("确定删除管理员吗？")){
        location.href="index.php?m=admin&f=cate&a=deladmin&aid="+$(this).parent().attr("id");
    }
})
<?php echo '</script'; ?>
><?php }
}
