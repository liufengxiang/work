<?php
/* Smarty version 3.1.30, created on 2017-03-17 16:14:54
  from "C:\wamp\www\ajax\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cbfd6e5e38e7_83934933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8189294fc1330b6b4e72ff8e35967d4932209d77' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\index\\index.html',
      1 => 1489763693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58cbfd6e5e38e7_83934933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
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
<div class="show">
    <div class="imgbox">
        <img src="<?php echo IMG_PATH;?>
/banner-s-1.png" alt="">
        <img src="<?php echo IMG_PATH;?>
/banner-s-2.png" alt="">
        <img src="<?php echo IMG_PATH;?>
/banner-s-3.png" alt="">
        <img src="<?php echo IMG_PATH;?>
/banner-s-4.png" alt="">
    </div>
    <div class="fenleibox">
        <div class="fenleili" style="border-color: #EA6F5A;background:#EA6F5A;color: #fff;">最新</div>
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

</body>
</html><?php }
}
