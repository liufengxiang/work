<?php
/* Smarty version 3.1.30, created on 2017-05-11 11:42:17
  from "C:\wamp\www\blogs\template\admin\guanlicategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591431f91d9bd9_00902444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007990030cbf9d1c6c64be7c4c05f9eeb1167eca' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\admin\\guanlicategory.html',
      1 => 1488875330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591431f91d9bd9_00902444 (Smarty_Internal_Template $_smarty_tpl) {
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
    <caption style="text-align: center;font-size: 26px">分类列表</caption>
    <tr>
        <th>id</th>
        <th>pid</th>
        <th>分类名称</th>
        <th>操作</th>
    </tr>
    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

</table>
</body>
</html><?php }
}
