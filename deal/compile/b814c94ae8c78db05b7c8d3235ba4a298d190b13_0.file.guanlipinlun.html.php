<?php
/* Smarty version 3.1.30, created on 2017-04-26 16:59:30
  from "C:\wamp\www\deal\template\admin\guanlipinlun.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5900b5d25ec4a5_75257451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b814c94ae8c78db05b7c8d3235ba4a298d190b13' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\guanlipinlun.html',
      1 => 1493218769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5900b5d25ec4a5_75257451 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理评论</title>
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
                <th>评论时间</th>
                <th>评论人</th>
                <th>被评论人</th>
                <th>物品id</th>
                <th>评论内容</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["mtime"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["muid1"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["muid2"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["wid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["mshow"];?>
</td>
                <td id="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
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
            location.href="index.php?m=admin&f=cate&a=delpinlun&mid="+$(this).parent().attr("id");
        }
    });
<?php echo '</script'; ?>
><?php }
}
