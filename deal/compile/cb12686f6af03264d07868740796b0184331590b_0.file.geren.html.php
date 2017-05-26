<?php
/* Smarty version 3.1.30, created on 2017-05-11 08:37:51
  from "C:\wamp\www\deal\template\index\geren.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591406bf123f36_70106574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb12686f6af03264d07868740796b0184331590b' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\geren.html',
      1 => 1494484669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_591406bf123f36_70106574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/geren.css">
<div class="box">
    <div class="mybox">
        <div class="img" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['result']->value['uimg'];?>
)"></div>
        <a class="uname"><?php echo $_smarty_tpl->tpl_vars['result']->value['nichen'];?>
</a>
        <div class="bianjiziliao"><a href="index.php?f=geren&a=ziliao&uid=<?php echo $_smarty_tpl->tpl_vars['result']->value['uid'];?>
">编辑资料</a></div>
    </div>
    <div class="biaoti">
        <div class="biaotili">
            <span></span><br>
            <a>我的购买</a>
        </div>
        <div class="biaotili">
            <span></span><br>
            <a>我的卖出</a>
        </div>

    </div>
    <div class="neirong">
        <?php if (count($_smarty_tpl->tpl_vars['wresult1']->value) == 0) {?>
        <h4>暂无购买商品</h4>
        <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wresult1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="ddbox">
            <div class="ddimg" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['wimg1'];?>
);"></div>
            <div class="ddtext">
                <div class="ddname">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value['wname'];?>

                </div>
                <div class="ddtime">发布时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['wtime'];?>
</div>
            </div>
            <div class="ddjia">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['wmuch'];?>
</div>
            <div class="ddstate">订单状态<br>交易成功</div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
    </div>
    <div class="neirong" style="display: none">
        <?php if (count($_smarty_tpl->tpl_vars['wresult']->value) == 0) {?>
        <h4>暂无卖出商品</h4>
        <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wresult']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="ddbox">
            <div class="ddimg" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['wimg1'];?>
);"></div>
            <div class="ddtext">
                <div class="ddname">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value['wname'];?>

                </div>
                <div class="ddtime">发布时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['wtime'];?>
</div>
            </div>
            <div class="ddjia">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['wmuch'];?>
</div>
            <div class="ddstate">订单状态<br><?php if ($_smarty_tpl->tpl_vars['v']->value['wstate'] == 0) {?>待审核<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['wstate'] == 1) {?>审核未通过<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['wstate'] == 2) {?>未卖出<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['wstate'] == 3) {?>已出售<?php } else {
}?></div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(".biaotili").click(function () {
        $(".neirong").css("display","none").eq($(this).index()).css("display","block");
    })
<?php echo '</script'; ?>
><?php }
}
