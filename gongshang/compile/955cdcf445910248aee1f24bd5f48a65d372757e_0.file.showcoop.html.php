<?php
/* Smarty version 3.1.30, created on 2017-04-14 03:54:52
  from "E:\wamp\wamp\www\gongshangs1\template\admin\showcoop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f02bec722772_51083509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955cdcf445910248aee1f24bd5f48a65d372757e' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\gongshangs1\\template\\admin\\showcoop.html',
      1 => 1491790079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f02bec722772_51083509 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻管理</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
<style>
    html{
        width: 1032px;
    }
    table{
        width: 800px;
        margin: 0 auto;
        border-radius: 10px;
        overflow: hidden;
    }
    th{
        background: #3E95E8;
        height: 50px;
        font-size: 16px;
        color: #fff;
    }
    th,td{
        text-align: center;
    }
    .btns{
        padding: 5px 10px;
        border-radius: 5px;
        background: #3E95E8;
        color: #fff;
    }
    td a:hover{
        text-decoration: none;
        color: #fff;
        box-shadow: 0 0 5px rgba(0,0,0,.5);
    }
    .pagesbox{
        height: 40px;
        line-height:40px;
        margin-top:20px;
        text-align:center;
        border-top:1px solid #3e95e9;
    }
    .pagesbox a{
        color:#333;
        text-decoration: none;
        padding:4px 10px;
        border-radius:3px;
        margin:0 2px;
    }
    .pagesbox a:hover,.pagesbox a.nowPage{
        background:#3e95e9;
        color:#fff;
    }
    .pagesbox a.startPage,.pagesbox a.endPage{
        border:1px solid transparent;
    }
    .pagesbox a.startPage:hover,.pagesbox a.endPage:hover{
        text-decoration: none;
        background:#fff;
        color:#3e95e9;
        border:1px solid #3e95e9;
    }
    .sousuo{
        height: 40px;
        width: 380px;
        border:2px solid #3e95e9;
        overflow: hidden;
        border-radius: 20px;
        margin-bottom: 20px;
        position: relative;
    }
    #search{
        border: 0;width: 300px;
        height: 40px;
        box-sizing: border-box;
        padding: 0 20px;
        position: absolute;
        top:-2px;
        left: -2px;
    }
    #sousuo{
        background: #3e95e9;
        width: 80px;
        height: 40px;
        border: 0;
        position: absolute;
        right: 0;
        color: #fff;
        font-size: 16px;
        top: -2px;
        margin: 0;
    }
</style>
<body>
<form action="index.php?m=admin&f=art&a=searchcoop" method="post">
    <div class="sousuo">
        <input type="text" name="search" id="search">
        <button id="sousuo" type="submit">搜索</button>
    </div>
    <!--指定日期搜索（日期格式：xxxx-xx-xx 或者 xxxx/xx/xx）<br/>-->
    <!--指定起始日期：<input type="text" name="startdate"><br/>-->
    <!--指定结束日期：<input type="text" name="enddate"><br/>-->
</form>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>企业名称</th>
                <th>发表日期</th>
                <th>合作日期</th>
                <th>企业官网链接</th>
                <th>合作状态</th>
                <th>发布人</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coop']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["coname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ntime"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cotime"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["link"];?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['v']->value["state"] == 1) {?>
                合作中
                <?php } else { ?>
                取消合作
                <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</td>
            <td>
                <a class="btns" href="index.php?m=admin&f=art&a=editcoop&coid=<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
">修改</a>
                <a class="btns" href="index.php?m=admin&f=art&a=editcoop&coid=<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
">删除</a>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
<div class="pagesbox">
    <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

</div>
</body>
</html><?php }
}
