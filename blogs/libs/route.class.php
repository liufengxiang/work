<?php
	header("Content-Type:text/html;charset=utf8");
	class route{
		protected static $f;//文件//类
		protected static $m;//文件夹
		protected static $a;//方法
		function init(){
			self::$f=isset($_GET["f"])?$_GET["f"]:"index";//文件//类
			self::$m=isset($_GET["m"])?$_GET["m"]:"index";//文件夹
			self::$a=isset($_GET["a"])?$_GET["a"]:"init";//方法
			$file="module/".self::$m."/".self::$f.".class.php";
			if(is_file($file)){
				include $file;
				if(class_exists(self::$f)){
					$obj=self::$f;
					$d=new $obj();
					if(method_exists($d,self::$a)){
						$fun=self::$a;
						$d->$fun();
					}else{
						echo self::$a."方法不存在！";
					}
				}else{
					echo self::$f."类不存在!";
				}
			}else{
				echo $file."文件不存在!";
			}
		}
	}
//	$a=new route();
//	$a->init();
?>