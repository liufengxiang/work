<?php
/* Smarty version 3.1.30, created on 2017-04-11 11:59:01
  from "E:\wamp\www\gongshangs1\template\admin\addcoop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eca8e50a7318_17915977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13656f7d03401bd17d5d447ff23f5431141e4885' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs1\\template\\admin\\addcoop.html',
      1 => 1491543895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eca8e50a7318_17915977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加合作企业</title>
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
<form action="index.php?m=admin&f=art&a=addcoopInfo" method="post" id="form" >
    <div class="form-group">
        <label for="coname">企业名称：</label>
        <input type="text" name="coname" class="form-control" id="coname" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="">合作状态：</label>
        <label class="state">
            <input type="radio" name="state"  value="1" checked> 合作中
        </label>
        <label class="state">
            <input type="radio" name="state"  value="2"> 取消合作
        </label>
    </div>
    <div class="form-group">
        <label for="name">发布人：</label>
        <input type="text" name="name" class="form-control" value="计算机信息工程学院" id="name" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="cotime">合作日期：</label>
        <input type="text" name="cotime" class="form-control" id="cotime" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="link">企业链接：</label>
        <input type="text" name="link" class="form-control" id="link" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="editor_id">企业介绍：</label>
        <textarea id="editor_id" name="introduce" style="width:100%;height:300px;">
        </textarea>
    </div>
    <!--上传照片 开始-->
    <div class="zyh_zjrzp">
        <a href="javascript:;" class="zyh_file">上传企业logo
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



        $.validator.addMethod("etitle",function(value,element,params){
            var etitle = /^[0-9a-zA-Z\s]*$/;
            return this.optional(element)||(etitle.test(value));
        },"请输入纯英文");
        $("#form").validate({
            rules:{
                coname:{
                    required:true
                },
                cotime:{
                    required:true
                },
                link:{
                    required:true
                },
                name:{
                    maxlength:50
                }
            },
            messages:{
                coname:{
                    required:"请输入标题"
                },
                cotime:{
                    required:"请输入合作日期"
                },
                link:{
                    required:"请输入企业链接"
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
