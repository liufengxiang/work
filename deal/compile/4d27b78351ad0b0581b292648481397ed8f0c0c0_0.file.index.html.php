<?php
/* Smarty version 3.1.30, created on 2017-05-03 05:54:27
  from "C:\wamp\www\deal\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59095473a0bc34_38357658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d27b78351ad0b0581b292648481397ed8f0c0c0' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\index.html',
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
function content_59095473a0bc34_38357658 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!--banner-->
    <div class="bannerbox">
        <div class="banner">
            <ul class="imgbox">
                <li style="left: 0;"><a href="" style="background-image: url(<?php echo IMG_PATH;?>
/banner1.jpg);"></a></li>
                <li><a href="" style="background-image: url(<?php echo IMG_PATH;?>
/banner2.jpg);"></a></li>
                <li><a href="" style="background-image: url(<?php echo IMG_PATH;?>
/banner3.jpg);"></a></li>
            </ul>
            <ul class="tiaobox">
                <li style="display: block">服装鞋帽</li>
                <li>生活闲置</li>
                <li>阅读精品</li>
            </ul>
            <ul class="btnbox">
                <li style="background: #333"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!--banner end-->
    <!--show-->
    <div class="showbox">
        <div class="show">
            <div class="showtit">
                <div class="showtit-text">热门商品</div>
                <div class="tittiao"></div>
                <div class="tittiao"></div>
                <div class="tittiao"></div>
            </div>
            <div class="showcon">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotresult']->value, 'v');
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
    </div>
    <div class="showbox">
        <div class="show">
            <div class="showtit">
                <div class="showtit-text">最新发布</div>
                <div class="tittiao"></div>
                <div class="tittiao"></div>
                <div class="tittiao"></div>
            </div>
            <div class="showcon">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newresult']->value, 'v');
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
    </div>
    <!--show end-->
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
