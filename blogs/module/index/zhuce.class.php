<?php
	class zhuce extends main{
		//检测名字
		function usercf(){
			$name=$_POST["user"];
			$sql=new sql("user");
			$result=$sql->select();
			foreach($result as $v){
				if($v["name"]==$name){
					echo 'false';
					exit;
				}
			}
			echo 'true';
		}
		//sub提交
		function sub(){
			$user=p("user");
			$pass=md5(p("pass"));
			$sql=new sql("user");
			if($sql->field("name='$user';password='$pass'")->insert()){
				$this->dump("index.php?a=login","注册成功！请登录");
			}
		}
	}
	
?>