<?php
	class index extends main{
		function init(){
//			$smarty = new Smarty;//生成类
//			$smarty->template_dir = 'template/';//主文件目录
//			$smarty->compile_dir = 'compile/';//编译目录
			if($this->session->get("main")=="ok"){
				$this->smarty->display('admin/main.html');//引入文件
			}else{
				$this->smarty->assign("name","");
				$this->dump("index.php?m=admin&a=login","请以正确的方式进入后台！");
			}
		}
		//验证码的方法
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
			$getcode=strtolower(p("code"));
			$aname=p("user");
			$apass=p("pass");
			$a=new sql("user");
			$result=$a->select();//查询
			if($this->session->get("code")==$getcode){
				foreach($result as $v){
					if($v["t"]==1) {
						if ($v["name"] == $aname) {
							if ($v["password"] == $apass) {
								$this->session->set("main", "ok");
								$this->dump("index.php?m=admin", "登陆成功！");
								exit;
							}
						}
					}
				}
				$this->dump(FILE_URL."?m=admin&a=login","您的账户不符合要求！");
			}else{
				$this->dump(FILE_URL."?m=admin&a=login","验证码错误！");
			}
		}
		//进入主页
		function login(){
			if($this->session->get("main")=="ok"){
				$this->smarty->display('admin/main.html');//引入文件
				exit;
			}
			$this->smarty->display("admin/login.html");
		}
		//退出
		function exits(){
			$this->session->del("main");
			$this->dump("index.php?m=admin&a=login","退出成功！");
		}
	}
?>