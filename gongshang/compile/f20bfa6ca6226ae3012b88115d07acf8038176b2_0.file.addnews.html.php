<?php
/* Smarty version 3.1.30, created on 2017-04-14 03:54:27
  from "E:\wamp\wamp\www\gongshangs1\template\admin\addnews.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f02bd3a355b5_75917413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f20bfa6ca6226ae3012b88115d07acf8038176b2' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\gongshangs1\\template\\admin\\addnews.html',
      1 => 1491547555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f02bd3a355b5_75917413 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加内容</title>
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
<form action="index.php?m=admin&f=art&a=addnewsInfo" method="post" id="form" >
    <div class="form-group">
        <label for="title">内容标题：</label>
        <input type="text" name="title" class="form-control" id="title" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="etitle">内容英文标题：</label>
        <input type="text" name="etitle" class="form-control" id="etitle" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="">新闻首页推荐位：</label>
        <label class="state">
            <input type="radio" name="nposition" value="1"> 大赛获奖
        </label>
        <label class="state">
            <input type="radio" name="nposition" value="2"> 院部活动
        </label>
        <label class="state">
            <input type="radio" name="nposition" value="3" checked > 其他
        </label>
    </div>
    <div class="form-group">
        <label for="cid">内容分类：</label>
        <select class="form-control" name="cid" id="cid">
            <!--<option value="0">请选择</option>-->
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="name">发布人：</label>
        <input type="text" name="name" class="form-control" id="name" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="summary">摘要：</label>
        <textarea name="summary" class="form-control" id="summary" cols="30" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="editor_id">内容：</label>
        <textarea id="editor_id" name="editor_id" style="width:100%;height:300px;">
        </textarea>
    </div>

    <!--上传照片 开始-->
    <div class="zyh_zjrzp">
        <a href="javascript:;" class="zyh_file">上传新闻图片
            <input type="file" name="file" class="zyh_files" />
        </a>
        <div class="zyh_imgs">
            <img src="" alt="" class="zyh_img"/>
            <div class="zyh_jindu">
                <div class="zyh_progress"></div>
            </div>
        </div>
    </div>
    <!--隐藏域，保存上传之后图片的地址，当点提交的时候再往数据库中保存-->
    <input type="hidden" name="imgurl1" id="zyh_imgurl"/>
    <!--上传照片 结束-->

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
