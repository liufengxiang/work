<?php
/* Smarty version 3.1.30, created on 2017-03-15 16:27:55
  from "C:\wamp\www\ajax\mvc\template\index\geren.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c95d7b624c80_71559618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3fcf4e08bbcc5caa5d6ffe49f3f69c2198a2fa3' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\index\\geren.html',
      1 => 1489591656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c95d7b624c80_71559618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/geren.css">
<div class="box">
    <div class="mybox">
        <a href="" class="touxiang"><img src="<?php echo IMG_PATH;?>
/bg.jpg" height="100%" alt=""></a>
        <a href="" class="uname"><?php echo $_smarty_tpl->tpl_vars['zxname']->value;?>
</a>
    </div>
    <div class="biaoti">
        <div class="biaotili">
            <span><?php echo $_smarty_tpl->tpl_vars['wodeguanzhu']->value;?>
</span><br>
            <a href="index.php?f=geren&a=wodeguanzhu" target="bottom">我的关注</a>
        </div>
        <div class="biaotili">
            <span><?php echo $_smarty_tpl->tpl_vars['guanzhuwode']->value;?>
</span><br>
            <a href="index.php?f=geren&a=guanzhuwode" target="bottom">关注我的</a>
        </div>
        <div class="biaotili">
            <span><?php echo $_smarty_tpl->tpl_vars['wodewenzhang']->value;?>
</span><br>
            <a href="index.php?f=geren&a=wodewenzhang" target="bottom">我的文章</a>
        </div>
        <div class="biaotili">
            <span><?php echo $_smarty_tpl->tpl_vars['wodeshoucang']->value;?>
</span><br>
            <a href="index.php?f=geren&a=wodeshoucang" target="bottom">我的收藏</a>
        </div>
    </div>
    <div class="neirong">
        <iframe name="bottom" frameborder="0">

        </iframe>
    </div>
</div>
</body>
</html><?php }
}
