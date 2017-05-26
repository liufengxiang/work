<?php
/* Smarty version 3.1.30, created on 2017-04-07 11:59:12
  from "E:\wamp\www\gongshangs\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e762f0920253_60053624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd58848714a4c49f030436a60a744496d866b38' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs\\template\\index\\reg.html',
      1 => 1491451431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e762f0920253_60053624 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">-->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/reg.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/reg.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="topnav">
	<div class="navbox">
		<a class="navleft">
			<img src="<?php echo INDEX_PATH;?>
/images/logo.png" alt="" height="40"/>
		</a>
		<span class="logname">山西工商学院，计算机信息工程学院欢迎你！</span>
	</div>
</div>
<div class="niu"></div>
<div class="sbox">
	<div class="sniu"></div>
	<div class="kj"></div>
</div>
<div class="bigbox">
<form action="index.php?m=index&f=login&a=addReg" method="post" id="form">
	<div class="boxs">
    <div class="topc"></div>
    <div class="box">
    	<div class="top">
	    	<h1 class="login">注 册</h1>
	        <div class="form-group aaa">
	            <input type="text" placeholder="账 号" class="form-control" id="username" name="username" autocomplete="off">
	        </div>
	        <div class="form-group">
                <input type="text" placeholder="昵 称" class="form-control" id="nickname" name="nickname" autocomplete="off">
            </div>
	        <div class="form-group">
	            <input type="password" placeholder="密 码" class="form-control" id="Password1" name="password" autocomplete="off">
	        </div>
	        <div class="form-group">
	            <input type="password" placeholder="确 认 密 码" class="form-control" id="Password2" name="password2" autocomplete="off">
	        </div>
	        <div class="form-group">
	            <div class="yanzheng">
	              <input type="text" id="code" class="form-control" placeholder="验 证 码" name="code">
	              <img src="index.php?m=index&f=login&a=code" alt="验证码" title="点击更换" class="code"
	                 onclick="this.src='index.php?m=index&f=login&a=code&'+Math.random()">
	            </div>
	            </div>
        </div>	
        <p class="register">
        	<a href="index.php?m=index&f=login&a=startLogin" class="reg">登 录</a>
        	<input type="submit" class="btn btn-default" id="dlbtn" value="请注册">
        </p>
        <p class="index"><a  href="index.php?m=index" class="unlogin ">主 页 </a></p>
    </div>
    </div>
</form>			
</div>		
</body>

</html>
<?php }
}
