<?php
/* Smarty version 3.1.30, created on 2017-03-24 02:10:07
  from "C:\wamp\www\blogs\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d471efb4b633_41113770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51b0918e4615ec7faa75964f42dd821e7a4d80b7' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\index\\notice.html',
      1 => 1489048782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d471efb4b633_41113770 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .tsdl{
        display:none;
        position: fixed;
        width: 300px;
        box-sizing: border-box;
        padding:50px;
        height: 200px;
        text-align: center;
        top: 50%;
        left: 50%;
        background:#fff;
        box-shadow: 0 0 20px 0 rgba(0,0,0,.5);
        margin-top: -100px;
        border-radius: 10px;
        margin-left: -150px;
    }
</style>
<div class="tsdl">
    您还没有登录哦！<br><br><br>
    <a href="index.php?a=login" class="btn btn-warning">登录</a>
    <a class="btn btn-danger quxiaodenglu">取消</a>
</div>
<?php }
}
