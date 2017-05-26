<?php
/* Smarty version 3.1.30, created on 2017-05-02 04:56:28
  from "C:\wamp\www\deal\template\admin\guanlishow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5907f55c94db11_54259926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c73ce15fb2ec5cc29335dcbb16b58b451f32d77' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\guanlishow.html',
      1 => 1493693787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5907f55c94db11_54259926 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理物品</title>
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
                <th>物品名称</th>
                <th>物品分类</th>
                <th>物品价格</th>
                <th>物品所有人</th>
                <th>当前状态</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["wname"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["wmuch"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["wstate"];?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
"><a href="index.php?m=admin&f=cate&a=shenshow&wid=<?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
">审核</a><a class='del'>删除</a></td>
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
            location.href="index.php?m=admin&f=cate&a=delshow&wid="+$(this).parent().attr("id");
        }
    });
<?php echo '</script'; ?>
><?php }
}
