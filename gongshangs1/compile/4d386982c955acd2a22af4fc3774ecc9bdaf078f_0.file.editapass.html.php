<?php
/* Smarty version 3.1.30, created on 2017-04-11 08:31:16
  from "E:\wamp\www\gongshangs1\template\admin\editapass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec783429eb59_47256470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d386982c955acd2a22af4fc3774ecc9bdaf078f' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs1\\template\\admin\\editapass.html',
      1 => 1491400119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec783429eb59_47256470 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>修改密码</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/../admin/css/addcategory.css" />
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="zmr_box">
		<table class="table table-striped">
			<thead>
				<th>旧密码</th>
				<th>新密码</th>
				<th>确认密码</th>
				<th>操作</th>
			</thead>
			<tbody>		
				<tr>
					<td class='neirong01'>旧密码：<input type='password' id='oldapass' /></td>
					<td class='neirong01'>新密码：<input type='password' id='newapass' /></td>
					<td class='neirong01'>确认密码：<input type='password' id='querenapass' /></td>
					<td><div class='tijiao' href=''>提交</div></td>
				</tr>
			</tbody>
		</table>
	</div>	
</body>
</html>
<?php echo '<script'; ?>
>
//确认提交
var aid=<?php echo $_smarty_tpl->tpl_vars['aid']->value;?>
;
var jiance=<?php echo $_smarty_tpl->tpl_vars['jiance']->value;?>
;
$("table").on("click",".tijiao",function(){
	var oldapass=$("#oldapass").val()
	var newapass=$("#newapass").val()
	var querenapass=$("#querenapass").val()
	if(jiance.test(newapass)&&newapass==querenapass){
		location.href="index.php?m=admin&&a=editapassinfo&&aid="+aid+"&&oldapass="+oldapass+"&&newapass="+newapass;	
	}else{
	    alert("请输入6~10位以字母开头的密码");
	}
})
<?php echo '</script'; ?>
><?php }
}
