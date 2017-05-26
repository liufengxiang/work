<?php
/* Smarty version 3.1.30, created on 2017-04-26 10:56:20
  from "C:\wamp\www\deal\template\admin\addcategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590060b4ad39a7_60576124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535706ac360f60a6c12a28778e93261c4e5cd229' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\addcategory.html',
      1 => 1493196979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590060b4ad39a7_60576124 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加分类</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<body>
<form action="index.php?m=admin&f=cate&a=addcategory2" role="form" method="post" style="margin: 20px">
    <div class="form-group">
        <label for="name">选择列表</label>
        <select name="pid" class="form-control">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="name">分类名称</label>
        <input type="text" class="form-control" name="cname" placeholder="请输入分类名称">
    </div>
    <button type="submit" class="btn btn-default">添加</button>
</form>
</body>
</html><?php }
}
