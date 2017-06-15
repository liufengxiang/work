<?php
/* Smarty version 3.1.30, created on 2017-04-11 09:28:14
  from "E:\wamp\www\gongshangs1\template\index\bothTishi.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec858e9432c6_68594189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '335cba958793cfefdde83b6b0dfb7ab6d4d5ae99' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs1\\template\\index\\bothTishi.html',
      1 => 1491895693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec858e9432c6_68594189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--通用提示 star-->
<style>
    .zyh_bothtishik{
        width:260px;
        height:200px;
        position: fixed;
        top:0;left:0;right:0;bottom: 0;margin: auto;
        z-index: 100;
        background:#FFF6D9;
        border-radius: 10px;
        text-align: center;
        display: none;
    }
    .zyh_bothtopk{
        width:100%;
        height:50px;
        background: #3197de;
        border-radius: 10px 10px 0 0;
        color:#fff;
        font-size: 18px;
        text-align: center;
        line-height: 50px;
        letter-spacing: 6px;
    }
    .zyh_bothtishik h1{
        font-family: "Microsoft Yahei",Arial;
        font-size: 18px;
        margin-top:40px;
    }
    .zyh_bothqueding{
        width:20%;
        display: block;
        position: absolute;
        left:0;right:0;
        margin: auto;
        bottom:20px;
    }
    .zyh_bothbj{
        width:100%;
        background: #333;
        opacity: 0.5;
        position: fixed;
        top:0;bottom:0;
        z-index: 100;
        display: none;
    }

</style>
<body>

<div class="zyh_bothbj">
</div>
<div class="zyh_bothtishik">
    <div class="zyh_bothtopk">提示信息</div>
    <h1>请登录</h1>
    <div class="btn btn-info zyh_bothqueding">确定</div>
</div>
<!--通用提示 end-->



<?php }
}
