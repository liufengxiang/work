<?php
/* Smarty version 3.1.30, created on 2017-03-07 11:55:51
  from "C:\wamp\www\ajax\mvc\template\index\setshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be91b750cce0_44106573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aac9f82a25045350a13e016c0b8446190ccf75f5' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\index\\setshow.html',
      1 => 1488884148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be91b750cce0_44106573 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="text/html;charset=utf-8">
    <title>Title</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/utf8-php/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/utf8-php/ueditor.all.js"><?php echo '</script'; ?>
>
<body>
<form action="index.php?f=show&a=sub" method="post" role="form" style="margin:30px;">
    <div class="form-group">
        <label for="name">文章分类</label>
        <select name="cid" class="form-control">
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="name">文章标题</label>
        <input type="text" name="stitle" class="form-control" placeholder="标题输入">
    </div>
    <div class="form-group">
        <label for="name">发布人</label>
        <input type="text" name="sname" readonly class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
" placeholder="标题输入">
    </div>
    <div class="form-group">
        <label for="name">文章摘要</label>
        <input type="text" name="szai" class="form-control" placeholder="文章摘要">
    </div>
    <div class="form-group">
        <label for="name">发布内容</label>
        <?php echo '<script'; ?>
 id="container" name="scon" type="text/plain" style="height:500px;"><?php echo '</script'; ?>
>
    </div>
    <button type="submit" class="btn btn-default">提交发布</button>
    <button type="button" onclick="location.href='index.php'" class="btn btn-default">返回首页</button>
</form>
</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
    var editor = UE.getEditor('container');
<?php echo '</script'; ?>
><?php }
}
