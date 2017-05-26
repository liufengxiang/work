<?php
/* Smarty version 3.1.30, created on 2017-05-11 11:42:15
  from "C:\wamp\www\blogs\template\admin\adduser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591431f736c323_37661136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfccf92fd4c7d01432a2c506d54a83489508eb1' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\admin\\adduser.html',
      1 => 1488874951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591431f736c323_37661136 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<body>
<form action="index.php?m=admin&f=mains&a=adduser2" role="form" method="post" style="margin: 20px">
    <div class="form-group">
        <label for="name">用户名</label>
        <input type="text" name="user" class="form-control" placeholder="请输入用户名" >
    </div>
    <div class="form-group">
        <label for="name">密码</label>
        <input type="text" class="form-control" name="pass" placeholder="请输入密码">
    </div>
    <button type="submit" class="btn btn-default">添加</button>
</form>
</body>
</html><?php }
}
