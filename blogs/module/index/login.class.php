<?php
	class login extends main{
		//验证码的方法
		//$this.session
		function code(){
			$aa=new code();
			$aa->letterUrl="static/font/Helvetica Bold.ttf";
			$aa->width=80;
			$aa->height=30;
			$aa->output();
			$this->session->set("code",$aa->resultLetter);
		}
		//验证
		function yanzheng(){
			$getcode=p("code");
			$aname=p("user");
			$apass=md5(p("pass"));
			$a=new sql("user");
			$result=$a->select();//查询
			if($this->session->get("code")==$getcode){
				foreach($result as $v){
					if($v["name"]==$aname){
						if($v["password"]==$apass){
							$this->session->set("name",$aname);
							$this->session->set("id",$v["id"]);
							$this->session->set("login","yes");
							if($this->session->get("near")){
								$this->dump($this->session->get("near"),"登录成功");
								exit;
							}
							$this->dump("index.php","登录成功");
							exit;
						}
					}
				}
				$this->dump(FILE_URL."?a=login","用户名或密码错误！");
			}else{
				$this->dump(FILE_URL."?a=login","验证码错误！");
			}
		}
		//注册
		function zhuce(){
			$this->smarty->display("index/zhuce.html");
		}
	}
?>