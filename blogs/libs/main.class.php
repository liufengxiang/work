<?php
	class main{
		//smarty
		function main(){
			$this->smarty=new smarty();
			$this->session=new session();
			$this->smarty->setTemplateDir("template");
			$this->smarty->setCompileDir("compile");
		}
		function check(){
			if($this->session->get("login")=="yes"&&MVC=="ok"){
				return true;
			}
			return false;
		}
		//跳转
		function dump($a,$b){
			$this->smarty->assign("message",$b);
			$this->smarty->assign("url",$a);
			$this->smarty->display(PUBLIC_URL."/tishi.html");
		}
	}
?>