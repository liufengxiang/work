<?php
/* Smarty version 3.1.30, created on 2017-05-11 04:37:56
  from "C:\wamp\www\deal\template\admin\guanlidingdan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5913ce84e37b98_40941003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6aa75b129208f7f38d03ce7abf996e1dbbda9b' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\guanlidingdan.html',
      1 => 1494470273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5913ce84e37b98_40941003 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理订单</title>
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
                <th>订单id</th>
                <th>物品id</th>
                <th>下单人id</th>
                <th>订单时间</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["did"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["wid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["dtime"];?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['v']->value['did'];?>
"><a class='del'>删除</a></td>
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
</html>
<?php echo '<script'; ?>
>
    $(".del").click(function () {
        if(confirm("确定删除吗？")){
            location.href="index.php?m=admin&f=cate&a=deldingdan&did="+$(this).parent().attr("id");
        }
    });
<?php echo '</script'; ?>
><?php }
}
