<?php
/* Smarty version 3.1.30, created on 2017-04-11 11:09:21
  from "E:\wamp\www\gongshangs1\template\admin\editnews.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec9d415fd1a6_92714918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098576e075354ab22b7f2488dc15a9ce03aa6920' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs1\\template\\admin\\editnews.html',
      1 => 1491547754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec9d415fd1a6_92714918 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改内容</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<?php echo '<script'; ?>
 charset="utf-8" src="<?php echo JS_PATH;?>
/kindeditor-4.1.7/kindeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="utf-8" src="<?php echo JS_PATH;?>
/kindeditor-4.1.7/lang/zh_CN.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo INDEX_PATH;?>
/css/zyh-uplooadimg.css">
<body>
<form action="index.php?m=admin&f=art&a=editnewsInfo" method="post" id="form" >
    <div class="form-group">
        <label for="title">内容标题：</label>
        <input type="text" name="title" class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="etitle">内容英文标题：</label>
        <input type="text" name="etitle" class="form-control" id="etitle" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['etitle'];?>
" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="">新闻首页推荐位：</label>
        <label class="state">
            <input type="radio" name="nposition" value="1" <?php if ($_smarty_tpl->tpl_vars['news']->value['nposition'] == 1) {?> checked <?php }?> > 大赛获奖
        </label>
        <label class="state">
            <input type="radio" name="nposition" value="2"<?php if ($_smarty_tpl->tpl_vars['news']->value['nposition'] == 2) {?> checked <?php }?> > 院部活动
        </label>
        <label class="state">
            <input type="radio" name="nposition" value="3"  checked <?php if ($_smarty_tpl->tpl_vars['news']->value['nposition'] == 3) {?> checked <?php }?> > 其他
        </label>
    </div>
    <div class="form-group">
        <label for="cid">内容分类：</label>
        <select class="form-control" name="cid" id="cid">
            <option value="0">请选择</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="name">发布人：</label>
        <input type="text" name="name" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['name'];?>
" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="summary">摘要：</label>
        <input type="text" name="summary" class="form-control" id="summary" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['summary'];?>
" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="editor_id">内容：</label>
        <br/>
        <textarea id="editor_id" name="editor_id" style="width:100%;height:300px;">
            <?php echo $_smarty_tpl->tpl_vars['news']->value['con'];?>

        </textarea>
    </div>

    <!--上传照片 开始-->
    <div class="zyh_zjrzp">
        <a href="javascript:;" class="zyh_file">上传新闻图片
            <input type="file" name="file" class="zyh_files" />
        </a>
        <div class="zyh_imgs">
            <img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['nimgurl'];?>
" alt="" class="zyh_img"/>
            <div class="zyh_jindu">
                <div class="zyh_progress"></div>
            </div>
        </div>
    </div>
    <!--隐藏域，保存上传之后图片的地址，当点提交的时候再往数据库中保存-->
    <input type="hidden" name="imgurl1" id="zyh_imgurl"/>
    <!--上传照片 结束-->

    <input type="hidden" name="nid" value=<?php echo $_smarty_tpl->tpl_vars['news']->value['nid'];?>
>
    <button id="fat-btn" class="btn btn-primary" data-loading-text="Loading..."
            type="submit"> 提交
    </button>
</form>
</body>
<?php echo '<script'; ?>
 src="<?php echo ADMIN_PATH;?>
/js/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id');
    });

    window.onload=function(){

        /*************上传logo  开始*****************/
        var obj1 = new upload("index.php?&m=admin&f=art&a=upload1", ".zyh_files", ".zyh_progress", ".zyh_img");
        var imgurl = document.querySelector("#zyh_imgurl");
        obj1.up(function (q) {
            if (q) {
                imgurl.value = q;
            }
        });

        /*************上传logo  结束*****************/
        /*************表单验证*****************/

        $.validator.addMethod("etitle",function(value,element,params){
                var etitle = /^[0-9a-zA-Z\s]*$/;
                return this.optional(element)||(etitle.test(value));
            },"请输入纯英文");
        $("#form").validate({
            rules:{
                title:{
                    required:true
                },
                etitle:{
                    etitle:true,
                    maxlength:255
                },
                summary:{
                    maxlength:255
                },
                name:{
                    maxlength:50
                }
            },
            messages:{
                title:{
                    required:"请输入标题"
                },
                etitle:{
                    maxlength:"最多输入255个字符"
                },
                summary:{
                    maxlength:"最多输入255个字"
                },
                name:{
                    maxlength:"最多输入50个字"
                }
            }
        })

    }
<?php echo '</script'; ?>
>
</html><?php }
}
