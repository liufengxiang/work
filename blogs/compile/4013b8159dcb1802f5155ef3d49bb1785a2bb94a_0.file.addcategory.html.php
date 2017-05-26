<?php
/* Smarty version 3.1.30, created on 2017-03-07 09:34:03
  from "C:\wamp\www\ajax\mvc\template\admin\addcategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be707b439ca2_33401253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4013b8159dcb1802f5155ef3d49bb1785a2bb94a' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\admin\\addcategory.html',
      1 => 1488875639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be707b439ca2_33401253 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="index.php?m=admin&f=mains&a=addcategory2" role="form" method="post" style="margin: 20px">
    <div class="form-group">
        <label for="name">选择列表</label>
        <select name="pid" class="form-control">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

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
