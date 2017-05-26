<?php
/* Smarty version 3.1.30, created on 2017-05-08 10:43:14
  from "C:\wamp\www\blogs\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59102fa2930518_17923393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02d9062e3f88ad0c9fbe01b7aa26b40b2d1fc879' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\index\\index.html',
      1 => 1494232993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_59102fa2930518_17923393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
<div class="blogs">OUR BLOGS</div>
<div class="bannerbox">
    <div class="banner">
        <div class="img">
            <div class="imgli" style="opacity: 1;background: url(<?php echo IMG_PATH;?>
/banner1.jpg)"></div>
            <div class="imgli" style="background: url(<?php echo IMG_PATH;?>
/banner2.jpg)"></div>
            <div class="imgli" style="background: url(<?php echo IMG_PATH;?>
/banner3.jpg)"></div>
        </div>
        <div class="btn">
            <span style="background: #EA6F5A"></span><span></span><span></span>
        </div>
    </div>
    <div class="sousuo">
        <input type="text"><span>搜索</span>
    </div>
    <div class="fenleibox">
        <div class="fenleili" style="padding: 5px;border-bottom-style: solid;">最新</div>
        <div class="fenleili">最热</div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultfenlei']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
        <div class="fenleili"><?php echo $_smarty_tpl->tpl_vars['a']->value['cname'];?>
</div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>




    <div class="titlebox" style="display: block">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultnew']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="title">
            <a href="index.php?f=lists&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
            <span><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
</span>
            <h4>作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>
</h4>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <div class="titlebox">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resulthot']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
        <div class="title">
            <a href="index.php?f=lists&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value["stitle"];?>
</a>
            <span><?php echo $_smarty_tpl->tpl_vars['b']->value['stime'];?>
</span>
            <h4>作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>
</h4>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
    <div class="titlebox">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
        <div class="title">
            <a href="index.php?f=lists&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value["stitle"];?>
</a>
            <span><?php echo $_smarty_tpl->tpl_vars['d']->value['stime'];?>
</span>
            <h4>作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>
</h4>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>




<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
