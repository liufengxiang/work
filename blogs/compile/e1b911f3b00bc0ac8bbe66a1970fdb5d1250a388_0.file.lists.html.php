<?php
/* Smarty version 3.1.30, created on 2017-05-11 11:30:01
  from "C:\wamp\www\blogs\template\index\lists.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59142f19e0a599_62870088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1b911f3b00bc0ac8bbe66a1970fdb5d1250a388' => 
    array (
      0 => 'C:\\wamp\\www\\blogs\\template\\index\\lists.html',
      1 => 1494494998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_59142f19e0a599_62870088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/lists.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/lists.js"><?php echo '</script'; ?>
>
<h2><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['stitle'];?>
</h2>
<p class="ertitle">
    <b>发布人：<span><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sname'];?>
</span></b>
    <em>发布时间：<span><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['stime'];?>
</span></em>
</p>
<div class="content">
    <?php echo $_smarty_tpl->tpl_vars['result']->value[0]['scon'];?>

</div>
<div class="chuli">
    <!--是否关注-->
    <?php if (empty($_smarty_tpl->tpl_vars['self']->value) || $_smarty_tpl->tpl_vars['self']->value == "no") {?>
    <button type="button" uname2="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sname'];?>
" class="btn btn-success guanzhu">关注</button>
    <button type="button" style="display: none" class="btn btn-success quxiaoguanzhu">取消关注</button>
    <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
    <button type="button" style="display: none" uname2="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sname'];?>
" class="btn btn-success guanzhu">关注</button>
    <button type="button" class="btn btn-success quxiaoguanzhu">取消关注</button>
    <?php } else {
}?>
    <!--是否收藏-->
    <?php if (empty($_smarty_tpl->tpl_vars['love']->value) || $_smarty_tpl->tpl_vars['love']->value == "no") {?>
    <button type="button" loveshow="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['id'];?>
" class="btn btn-info shoucang">收藏</button>
    <button type="button" style="display: none" class="btn btn-info quxiaoshoucang">取消收藏</button>
    <?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "yes") {?>
    <button type="button" style="display: none" loveshow="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['id'];?>
" class="btn btn-info shoucang">收藏</button>
    <button type="button" class="btn btn-info quxiaoshoucang">取消收藏</button>
    <?php } else {
}?>
    <!--点赞-->
    <?php if (empty($_smarty_tpl->tpl_vars['zan']->value) || $_smarty_tpl->tpl_vars['zan']->value == "no") {?>
    <button type="button" style="background: #999" class="btn btn-danger dianzan">点赞 <span><?php echo $_smarty_tpl->tpl_vars['zanshu']->value;?>
</span>人</button>
    <button type="button" style="display: none" class="btn btn-danger quxiaodianzan">点赞 <span><?php echo $_smarty_tpl->tpl_vars['zanshu']->value;?>
</span>人</button>
    <?php } else { ?>
    <button type="button" style="background: #999;display: none" class="btn btn-danger dianzan">点赞 <span><?php echo $_smarty_tpl->tpl_vars['zanshu']->value;?>
</span>人</button>
    <button type="button" class="btn btn-danger quxiaodianzan">点赞 <span><?php echo $_smarty_tpl->tpl_vars['zanshu']->value;?>
</span>人</button>
    <?php }?>

    <div class="form-group">
        <label for="name"></label>
        <textarea class="form-control liuyancon" rows="3" style="resize: none" ></textarea>
    </div>
    <button type="button" uname1="<?php echo $_smarty_tpl->tpl_vars['se']->value;?>
" uname2="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sname'];?>
" cid="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['id'];?>
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
        <div class="liuyan" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <div class="lymessage">
                <div class="touxiang" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['uimg'];?>
)"></div>
                <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['uname1'];?>
</a>
                <span><?php echo $_smarty_tpl->tpl_vars['v']->value['utime'];?>
</span>
            </div>
            <div class="lycon"><?php echo $_smarty_tpl->tpl_vars['v']->value['mcon'];?>
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
                <p><a href=""><?php echo $_smarty_tpl->tpl_vars['k']->value['uname1'];?>
</a>:<span><?php echo $_smarty_tpl->tpl_vars['k']->value['mcon'];?>
</span></p>
                <span><?php echo $_smarty_tpl->tpl_vars['k']->value['utime'];?>
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
</body>
</html><?php }
}
