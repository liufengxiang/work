<?php
/* Smarty version 3.1.30, created on 2017-05-11 06:01:25
  from "C:\wamp\www\deal\template\admin\addadmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5913e21597c1b4_27970769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8acd0945fd947fce8832523d1415accd35234c47' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\admin\\addadmin.html',
      1 => 1494475283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5913e21597c1b4_27970769 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>添加管理员</title>
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
<form action="index.php?m=admin&f=cate&a=addadminInfo" method="post">
    <div><span>账号：</span><input type="text" name="aname"></div>
    <div><span>密码：</span><input type="text" name="apass"></div>
    <div><span>确认密码：</span><input type="text" name="apass2"></div>
    <button type="button" class="submit">提交</button>
</form>
</body>
<?php echo '<script'; ?>
>
    var form=document.forms[0];
    var olduser=form.aname;
    var user1=form.apass;
    var user2=form.apass2;
    var submits=document.querySelector(".submit");
    submits.onclick=function () {
        if(olduser.value==""){
            alert("请输入账号！");
        }else if(user1.value==""||user2.value==""){
            alert("请输入密码！");
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
