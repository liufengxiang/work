<?php
//	var_dump($_SERVER);
	define("MVC","ok");
	define("ROOT_URL",__DIR__);//当前的根目录
//	echo __DIR__;//当前的根目录
	define("LIBS_URL",ROOT_URL."/libs");//当前的libs目录
	define("PUBLIC_URL",ROOT_URL."/module/public");//当前的module目录
	define("TPL_INDEX_URL",ROOT_URL."/template/index");//前台显示
	define("TPL_ADMIN_URL",ROOT_URL."/template/admin");//后台显示
	define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));//显示当前的主目录的地址
	define("FILE_URL","http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]);//当前的主文件index.php
	//指定当前的css，js，images的路径
	define("CSS_PATH",HTTP_URL."/static/css");
	define("JS_PATH",HTTP_URL."/static/js");
	define("IMG_PATH",HTTP_URL."/static/img");
    define("FONT_PATH",HTTP_URL."/static/font");
    define("UPLOAD_PATH",HTTP_URL."/static/upload");
	//引入文件
	include LIBS_URL."/db.class.php";//引入数据库处理
	include LIBS_URL."/pages.class.php";//引入翻页
	include LIBS_URL."/route.class.php";//引入路径
	include LIBS_URL."/tree.class.php";//引入tree，生成option
	include LIBS_URL."/main.class.php";//smarty的头
	include LIBS_URL."/session.class.php";//session
	include LIBS_URL."/code.class.php";//验证码的处理文件
	include LIBS_URL."/public.class.php";//常用
	require LIBS_URL."/smarty/libs/Smarty.class.php";//引入smarty文件
	//将这个文件调用出来
	$a=new route();
	$a->init();
?>