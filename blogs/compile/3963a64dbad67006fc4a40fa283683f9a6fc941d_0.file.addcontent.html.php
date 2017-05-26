<?php
/* Smarty version 3.1.30, created on 2017-03-09 06:30:49
  from "C:\wamp\www\ajax\mvc\template\admin\addcontent.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0e88947c803_06609155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3963a64dbad67006fc4a40fa283683f9a6fc941d' => 
    array (
      0 => 'C:\\wamp\\www\\ajax\\mvc\\template\\admin\\addcontent.html',
      1 => 1489027283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0e88947c803_06609155 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="index.php?m=admin&f=mains&a=addcontent2" method="post" role="form" style="margin:20px;">
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
        <input type="text" name="sname" class="form-control" placeholder="发布人">
    </div>
    <div class="form-group">
        <label for="name">文章摘要</label>
        <input type="text" name="szai" class="form-control" placeholder="文章摘要">
    </div>
    <div class="form-group">
        <label for="name">发布内容</label>
        <?php echo '<script'; ?>
 id="container" name="scon" type="text/plain" style="width:900px;height:500px;"><?php echo '</script'; ?>
>
    </div>
    <input type="hidden" name="status" value="3">
    <button type="submit" class="btn btn-default">发布</button>
</form>
</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
    var editor = UE.getEditor('container');
<?php echo '</script'; ?>
><?php }
}
