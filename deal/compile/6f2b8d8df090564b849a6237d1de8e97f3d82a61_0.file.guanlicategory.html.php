<?php
/* Smarty version 3.1.30, created on 2017-04-26 15:26:35
  from "C:\wamp\www\deal\template\admin\guanlicategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5900a00b9a3d02_21332750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f2b8d8df090564b849a6237d1de8e97f3d82a61' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\guanlicategory.html',
      1 => 1493202125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5900a00b9a3d02_21332750 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理分类</title>
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
<table class="table table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>pid</th>
            <th>分类名称</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

    </tbody>
</table>
</body>
</html>
<?php echo '<script'; ?>
>
    $(".del").click(function () {
        for(var i=0;i<$(".del").length;i++){
            console.log($(".del"))
        }
        if(confirm("确定删除分类吗？")){
            location.href="index.php?m=admin&f=cate&a=delcategory&cid="+$(this).parent().attr("id");
        }
    });
<?php echo '</script'; ?>
><?php }
}
