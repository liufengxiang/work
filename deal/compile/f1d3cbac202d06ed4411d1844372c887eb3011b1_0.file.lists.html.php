<?php
/* Smarty version 3.1.30, created on 2017-05-03 08:43:52
  from "C:\wamp\www\deal\template\index\lists.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59097c280601f9_77739414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1d3cbac202d06ed4411d1844372c887eb3011b1' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\lists.html',
      1 => 1493780528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_59097c280601f9_77739414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--main-->
<div class="mainbox">
    <div class="main">
        <ul>
            <li class="fenleimain">分类</li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flresult']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li><a href="index.php?f=lists&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
</div>
<!--main end-->
<div class="show">
    <div class="showcon">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listresult']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <a href="index.php?f=show&wid=<?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
">
                    <div class="showimg" style="background-image: url(<?php if ($_smarty_tpl->tpl_vars['v']->value['wimg1']) {
echo $_smarty_tpl->tpl_vars['v']->value['wimg1'];
} else {
echo IMG_PATH;?>
/imgbg.jpg<?php }?>)"></div>
                    <div class="showmess">
                        <p class="showmess-name"><?php echo $_smarty_tpl->tpl_vars['v']->value['wname'];?>
</p>
                        <div class="showmess-jiage">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['wmuch'];?>
</div>
                    </div>
                </a>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
