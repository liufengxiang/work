<?php
/* Smarty version 3.1.30, created on 2017-03-09 09:41:30
  from "C:\wamp\www\ajax\mvc\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c1153a0aabf6_91226265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f17e6c2ef9fdd2d112098feb1809a5c488f176c8' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\index\\notice.html',
      1 => 1489048782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c1153a0aabf6_91226265 (Smarty_Internal_Template $_smarty_tpl) {
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
