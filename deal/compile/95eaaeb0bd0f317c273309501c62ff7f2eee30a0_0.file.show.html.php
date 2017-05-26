<?php
/* Smarty version 3.1.30, created on 2017-05-11 09:10:25
  from "C:\wamp\www\deal\template\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59140e619f4a60_95861635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95eaaeb0bd0f317c273309501c62ff7f2eee30a0' => 
    array (
      0 => 'C:\\wamp\\www\\deal\\template\\index\\show.html',
      1 => 1494486624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_59140e619f4a60_95861635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/show.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/show.js"><?php echo '</script'; ?>
>
<div class="show-box">
    <div class="showtop">
        <div class="show-uname"><?php if ($_smarty_tpl->tpl_vars['showresult']->value[0]['uid'] == 0) {?>官方发布<?php } else {
echo $_smarty_tpl->tpl_vars['uresult']->value[0]['nichen'];
}?></div>
        <div class="show-dianji">点击量：<?php echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wliulan'];?>
</div>
        <div class="show-time">发布时间：<?php echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wtime'];?>
</div>
        <div class="show-iphone">联系电话：<?php if ($_smarty_tpl->tpl_vars['showresult']->value[0]['uid'] == 0) {?>18435179664<?php } else {
echo $_smarty_tpl->tpl_vars['uresult']->value[0]['uphone'];
}?></div>
    </div>
    <div class="show-center">
        <div class="show-img">
            <div class="img img1"  style="background-image: url(<?php if ($_smarty_tpl->tpl_vars['showresult']->value[0]['wimg1']) {
echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wimg1'];
} else {
echo IMG_PATH;?>
/imgbg.jpg<?php }?>)"></div>
            <div class="img img2" style="background-image: url(<?php if ($_smarty_tpl->tpl_vars['showresult']->value[0]['wimg2']) {
echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wimg2'];
} else {
echo IMG_PATH;?>
/imgbg.jpg<?php }?>)"></div>
            <div class="img img3" style="background-image: url(<?php if ($_smarty_tpl->tpl_vars['showresult']->value[0]['wimg3']) {
echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wimg3'];
} else {
echo IMG_PATH;?>
/imgbg.jpg<?php }?>)"></div>
        </div>
        <div class="show-message">
            <h1 class="show-name"><?php echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wname'];?>
</h1>
            <div class="show-pirce">商品价格： <span>￥<?php echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wmuch'];?>
.00</span></div>
            <div class="show-show">详细介绍： <br><?php echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wshow'];?>
</div>
            <div class="show-goumai"><a href="index.php?f=show&a=goumai&wid=<?php echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wid'];?>
">立即购买</a></div>
        </div>
    </div>
    <div class="form-group">
        <label for="name"></label>
        <textarea class="form-control liuyancon" rows="3" style="resize: none" ></textarea>
    </div>
    <button type="button" uname1="<?php echo $_smarty_tpl->tpl_vars['showresult']->value[0]['uid'];?>
" uname2="<?php echo $_smarty_tpl->tpl_vars['result']->value['uid'];?>
" cid="<?php echo $_smarty_tpl->tpl_vars['showresult']->value[0]['wid'];?>
"  class="btn btn-warning liuyanbtn">留言</button>
    <button type="button" class="btn btn-danger quxiaoliuyan">取消</button>





    <div class="liuyanbox">
        <h3>一共有 <span><?php echo count($_smarty_tpl->tpl_vars['lyresult']->value);?>
</span>条留言</h3>
        <!--原版留言-->
        <div class="liuyan" style="display: none" >
            <div class="lymessage">
                <div class="touxiang"></div>
                <a href="">XXX</a>
                <span>2000-10-10</span>
            </div>
            <div class="lycon">你说话真有意思</div>

            <!--儿子-->
            <div class="lyson" style="display: none">
                <p><a href="">XXX</a><span>你可说</span></p>
                <span>2011-1-1</span><span class="btn btn-default huifu1">回复</span>
                <textarea class="form-control huifu2con" rows="3"  ></textarea>
            </div>
        </div>
        <!--原版留言结束-->
        <div class="liuyanqu"></div>




        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lyresult']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="liuyan" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">
            <div class="lymessage">
                <div class="touxiang" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['uimg'];?>
)"></div>
                <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['v']->value['nichen'];?>
</a>
                <span><?php echo $_smarty_tpl->tpl_vars['v']->value['mtime'];?>
</span>
            </div>
            <div class="lycon"><?php echo $_smarty_tpl->tpl_vars['v']->value['mshow'];?>
</div>
            <button type="button" class="btn btn-default huifu1">回复</button>
            <button type="button" style="display: none" class="btn btn-default tijiao1">提交</button>
            <textarea class="form-control huifu1con" rows="3"  ></textarea>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['son'], 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
?>
            <div class="lyson">
                <p><a href=""><?php echo $_smarty_tpl->tpl_vars['k']->value['nichen'];?>
</a>:<span><?php echo $_smarty_tpl->tpl_vars['k']->value['mshow'];?>
</span></p>
                <span><?php echo $_smarty_tpl->tpl_vars['k']->value['mtime'];?>
</span><span class="btn btn-default huifu1">回复</span>
                <textarea class="form-control huifu2con" rows="3"  ></textarea>
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
</div>
<?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="czcgbox">
    <div class="czcg">操作成功</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
