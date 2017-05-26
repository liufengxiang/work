<?php
/* Smarty version 3.1.30, created on 2017-04-28 16:35:01
  from "C:\wamp\www\deal\template\admin\xiugaiapass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59035315b70824_55282395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab4055787f0c7237be0b87c3e1ee56a36a2c9855' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\xiugaiapass.html',
      1 => 1493122131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59035315b70824_55282395 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>修改密码</title>
</head>
<style>
    div{
        width: 500px;
        height: 50px;
        line-height: 50px;
    }
    span{
        display: block;
        float: left;
        width: 180px;
        height: 100%;
    }
    input{
        width: 260px;
        height: 34px;
        box-sizing: border-box;
        padding: 0 10px;
    }
    button{
        padding: 8px 20px;
        margin-top: 20px;
        margin-left: 20px;
        background: #FCD83E;
        border-radius: 3px;
        border: 0;
        outline: none;
        transition: all .5s;
        font-size: 16px;
    }
    button:hover{
        box-shadow: 0 5px 5px rgba(0,0,0,.5);
    }
</style>
<body>
<form action="index.php?m=admin&f=cate&a=xiugaiapass2" method="post">
    <div><span>请输入旧密码：</span><input type="text" name="olduser"></div>
    <div><span>请输入新密码：</span><input type="text" name="user1"></div>
    <div><span>请确认密码：</span><input type="text" name="user2"></div>
    <button type="button" class="submit">提交</button>
</form>
</body>
<?php echo '<script'; ?>
>
    var form=document.forms[0];
    var olduser=form.olduser;
    var user1=form.user1;
    var user2=form.user2;
    var submits=document.querySelector(".submit");
    submits.onclick=function () {
        if(olduser.value==""){
            alert("请输入旧密码！");
        }else if(user1.value==""||user2.value==""){
            alert("请输入新密码！");
        }else if(user1.value!=user2.value){
            alert("两次密码输入不一样！");
        }else{
            form.submit();
        }
    }
<?php echo '</script'; ?>
>
</html><?php }
}
