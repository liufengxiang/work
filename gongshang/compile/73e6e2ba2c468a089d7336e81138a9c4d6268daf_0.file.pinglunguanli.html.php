<?php
/* Smarty version 3.1.30, created on 2017-04-11 08:42:03
  from "E:\wamp\www\gongshangs1\template\admin\pinglunguanli.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec7abb761534_68784048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73e6e2ba2c468a089d7336e81138a9c4d6268daf' => 
    array (
      0 => 'E:\\wamp\\www\\gongshangs1\\template\\admin\\pinglunguanli.html',
      1 => 1491892915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec7abb761534_68784048 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
</head>
<style>
		table{
		width: 800px;
		margin: 0 auto;
		border-radius: 10px;
		overflow: hidden;
	}
	th{
		background: #3E95E8;
		height: 50px;
		font-size: 16px;
		color: #fff;
	}
	th,td{
		text-align: center;
	}
	.del{
		padding: 5px 10px;
		border-radius: 5px;
		background: #3E95E8;
		color: #fff;
	}
	td a:hover{
		text-decoration: none;
		color: #fff;
		box-shadow: 0 0 5px rgba(0,0,0,.5);
	}
	.pagesbox{
		height: 40px;
		line-height:40px;
		margin-top:20px;
		text-align:center;
		border-top:1px solid #3e95e9;
	}
	.pagesbox a{
		color:#333;
		text-decoration: none;
		padding:4px 10px;
		border-radius:3px;
		margin:0 2px;
	}
	.pagesbox a:hover,.pagesbox a.active{
		background:#3e95e9;
		color:#fff;
	}
	.pagesbox a.startPage,.pagesbox a.endPage{
		border:1px solid transparent;
	}
	.pagesbox a.startPage:hover,.pagesbox a.endPage:hover{
		text-decoration: none;
		background:#fff;
		color:#3e95e9;
		border:1px solid #3e95e9;
	}
	.sousuo{
		height: 40px;
		width: 380px;
		border:2px solid #3e95e9;
		overflow: hidden;
		border-radius: 20px;
		margin-bottom: 20px;
		position: relative;
	}
	#search{
		border: 0;width: 300px;
		height: 40px;
		box-sizing: border-box;
		padding: 0 20px;
		position: absolute;
		top:-2px;
		left: -2px;
	}
	#sousuo{
		background: #3e95e9;
		width: 80px;
		height: 40px;
		border: 0;
		position: absolute;
		right: 0;
		color: #fff;
		font-size: 16px;
		top: -2px;
		margin: 0;
	}

</style>
<body>
	<form action="index.php?m=admin&&a=pinglunsousuo" method="post">
		<div class="sousuo">
			<input type="text" name="search" id="search">
			<button id="sousuo" type="submit">搜索</button>
		</div>
	</form>
	<table class="table table-striped">
		<thead>
			<th>留言内容</th>
			<th>操作</th>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<tr>
			<td style="width: 80%"><?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>
</td>
			<td>
				<a href='index.php?m=admin&&a=delpinglun&&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value["mid"];?>
' class='del'>删除评论</a>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</tbody>
	</table>
	<div class="pagesbox">
		<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

	</div>
</body>
</html>
<?php }
}
