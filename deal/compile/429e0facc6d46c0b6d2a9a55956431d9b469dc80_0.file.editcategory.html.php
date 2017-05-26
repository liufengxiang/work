<?php
/* Smarty version 3.1.30, created on 2017-05-11 05:42:34
  from "C:\wamp\www\deal\template\admin\editcategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5913ddaa25eca5_64836804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '429e0facc6d46c0b6d2a9a55956431d9b469dc80' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\editcategory.html',
      1 => 1494474141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5913ddaa25eca5_64836804 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改分类</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<body>
<form action="index.php?m=admin&f=cate&a=editcategory" role="form" method="post" style="margin: 20px">
    <div class="form-group">
        <label for="name">选择列表</label>
        <select name="pid" class="form-control">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="name">分类名称</label>
        <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cresult']->value[0]['cid'];?>
">
        <input type="text" class="form-control" name="cname" value="<?php echo $_smarty_tpl->tpl_vars['cresult']->value[0]['cname'];?>
" placeholder="请输入分类名称">
    </div>
    <button type="submit" class="btn btn-default">提交</button>
</form>
</body>
</html><?php }
}
