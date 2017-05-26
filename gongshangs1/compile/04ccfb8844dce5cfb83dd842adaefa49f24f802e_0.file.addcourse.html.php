<?php
/* Smarty version 3.1.30, created on 2017-04-11 05:56:36
  from "E:\wamp\www\gongshangs1\template\admin\addcourse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec53f4a13709_89559909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04ccfb8844dce5cfb83dd842adaefa49f24f802e' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs1\\template\\admin\\addcourse.html',
      1 => 1491547043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec53f4a13709_89559909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加课程</title>
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
<form action="index.php?m=admin&f=art&a=addcourseInfo" method="post" id="form" >
    <div class="form-group">
        <label for="title">课程名称：</label>
        <input type="text" name="title" class="form-control" id="title" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="etitle">课程英文名称：</label>
        <input type="text" name="etitle" class="form-control" id="etitle" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="">课程首页推荐位：</label>
        <label class="state">
            <input type="radio" name="cposition" value="1" > 院级精品
        </label>
        <label class="state">
            <input type="radio" name="cposition" value="2" > 校级精品
        </label>
        <label class="state">
            <input type="radio" name="cposition" value="3"  checked > 其他
        </label>
    </div>
    <div class="form-group">
        <label for="name">发布人：</label>
        <input type="text" name="name" class="form-control" value="计算机信息工程学院" id="name" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="teacher">课程主讲人：</label>
        <input type="text" name="teacher" class="form-control" value="计算机信息工程学院" id="teacher" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="tzhicheng">课程主讲人职称：</label>
        <input type="text" name="tzhicheng" class="form-control" id="tzhicheng" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="label">课程分类（标签）：</label>
        <input type="text" name="label" class="form-control" id="label" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="summary">课程摘要：</label>
        <textarea class="form-control" rows="4" name="summary" id="summary"></textarea>
    </div>
    <div class="form-group">
        <label for="editor_id">视频和内容：</label>
        <textarea id="editor_id" name="editor_id" style="width:100%;height:300px;">
        </textarea>
    </div>
    <!--上传主讲人照片 开始-->
    <div class="zyh_zjrzp">
        <a href="javascript:;" class="zyh_file">上传主讲人照片
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
    <!--上传主讲人照片 结束-->
    <!--上传主课程照片 开始-->
    <div class="zyh_kczp">
        <a href="javascript:;" class="zyh_file2">上传课程照片
            <input type="file" name="file2" class="zyh_files2" />
        </a>
        <div class="zyh_imgs2">
            <img src="" alt="" class="zyh_img2"/>
            <div class="zyh_jindu2">
                <div class="zyh_progress2"></div>
            </div>
        </div>
    </div>

    <input type="hidden" name="imgurl2" id="zyh_imgurl2"/>
    <!--上传主课程照片 结束-->
    <button id="fat-btn" class="btn btn-primary" data-loading-text="Loading..." type="submit">
        提交
    </button>
</form>
</body>
<?php echo '<script'; ?>
 src="<?php echo ADMIN_PATH;?>
/js/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

    KindEditor.ready(function (K) {
        window.editor = K.create('#editor_id');
    });

    /*************上传主讲人头像  开始*****************/
    window.onload=function() {
        var obj1 = new upload("index.php?&m=admin&f=art&a=upload1", ".zyh_files", ".zyh_progress", ".zyh_img");
        var imgurl = document.querySelector("#zyh_imgurl");
        obj1.up(function (q) {
            if (q) {
                imgurl.value = q;
            }
        });

        /*************上传主讲人头像  结束*****************/
        /*************上传主课程图片  开始*****************/
        var obj2 = new upload("index.php?&m=admin&f=art&a=upload1", ".zyh_files2", ".zyh_progress2", ".zyh_img2");
        var imgurl2 = document.querySelector("#zyh_imgurl2");
        obj2.up(function (q) {
            if (q) {
                imgurl2.value = q;
            }
        });
        /*************上传主课程图片  结束*****************/


        $.validator.addMethod("etitle", function (value, element, params) {
            var etitle = /^[0-9a-zA-Z\s]*$/;
            return this.optional(element) || (etitle.test(value));
        }, "请输入纯英文");
        $("#form").validate({
            rules: {
                title: {
                    required: true
                },
                etitle: {
                    etitle: true,
                    maxlength: 255
                },
                summary: {
                    maxlength: 255
                },
                name: {
                    maxlength: 50
                }
            },
            messages: {
                title: {
                    required: "请输入标题"
                },
                etitle: {
                    maxlength: "最多输入255个字符"
                },
                summary: {
                    maxlength: "最多输入255个字"
                },
                name: {
                    maxlength: "最多输入50个字"
                }
            }
        })
    }
<?php echo '</script'; ?>
>
</html><?php }
}
