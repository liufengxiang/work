<?php
/* Smarty version 3.1.30, created on 2017-05-03 04:09:11
  from "C:\wamp\www\deal\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59093bc7cefad4_15553090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc9154ca5c5bb568296d3738e6458aaca21beec2' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\notice.html',
      1 => 1493777175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59093bc7cefad4_15553090 (Smarty_Internal_Template $_smarty_tpl) {
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
    <a href="index.php?f=login" class="btn btn-warning">登录</a>
    <a class="btn btn-danger quxiaodenglu">取消</a>
</div>
<?php }
}
