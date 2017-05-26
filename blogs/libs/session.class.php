<?php
	class session{
		function session(){
			session_start();
		}
		//设置
		function set($k,$v){
			if(is_array($k)){
				foreach($k as $a=>$b){
					$_SESSION[$a]=$b;
				}
			}else{
				$_SESSION[$k]=$v;
			}
		}
		//删除
		function del($k){
			unset($_SESSION[$k]);
		}
		
		//清除
		function clear(){
			foreach($_SESSION as $k=>$v){
				unset($_SESSION[$k]);
			}
		}
		//获取
		function get($k){
			return isset($_SESSION[$k])?$_SESSION[$k]:null;
		}
	}
//	$s=new session();
//	$arr=Array("aa"=>"bb","cc"=>"dd");
//	$s->set($arr,"bb");
//	$s->clear();
//	if($s->get("cc")){
//		echo $s->get("cc");
//	}
?>