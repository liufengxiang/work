<?php 
	class index extends main{
		//打开主页面方法
		function init(){
			//分类
			$sqlfenlei=new sql("category");
			$resultfenlei=$sqlfenlei->select();
			$this->smarty->assign("resultfenlei",$resultfenlei);
			//最新
			$sql=new sql("content");
			$resultnew=$sql->where("status=3")->order("stime desc")->select();
			$this->smarty->assign("resultnew",$resultnew);
			//最热
			$resulthot=$sql->where("status=3")->order("liulan")->select();
			$this->smarty->assign("resulthot",$resulthot);
			//分类
			$result=Array();
			for($i=0;$i<count($resultfenlei);$i++){
				$fenlei=$resultfenlei[$i]['cid'];
				$result[]=$sql->where("status=3 and cid='$fenlei'")->select();
			}
			$this->smarty->assign("result",$result);

			if($this->check()){
				$this->smarty->assign("login",$this->session->get("login"));
				$this->smarty->assign("se",$this->session->get("name"));
				$this->smarty->display('index/index.html');//引入文件
			}else{
				$this->smarty->assign("login","");
				$this->smarty->display('index/index.html');
			}
		}
		//登录的方法
		function login(){
			if($this->check()){
				$this->dump("index.php","您已登录！");
			}else{
				$this->smarty->assign("login","");
				$this->smarty->display('index/login.html');
			}
		}
		//注册的方法
		function zhuce(){
			$this->smarty->display("index/zhuce.html");
		}
		//show
		function setshow(){
			if($this->check()){
				$mysql=new mysqli("localhost","root","","blogs");
				$mysql->query("set names utf8");
				$trees=new trees();
				$trees->tree(0,0,$mysql,"category");
				$result=$trees->str;
				$sql=new sql("user");
				$id=$this->session->get("id");
				$sname=$sql->select("select name from user where id='$id'");
				$this->smarty->assign("sname",$sname[0]["name"]);
				$this->smarty->assign("result",$result);
				$this->smarty->display("index/setshow.html");
			}else{
				$this->dump("index.php?a=login","先登录才能发表哦！");
			}
		}
		//exit
		function exits(){
			$this->session->clear();
			$this->dump("index.php","退出成功！");
		}
		//person
		function geren(){
			if($this->check()){
                $name=$this->session->get("name");
			    if(!empty($_GET['zxname'])){
			        $name=p("zxname");
                }
                $db=new sql("user");
			    $uresult=$db->where("name='$name'")->select();
                $this->smarty->assign("uresult",$uresult[0]);
                $this->session->set("zxname",$name);
				//我的关注   关注我的
				$sql1=new sql("guanzhu");
				$result1=$sql1->where("uname='$name'")->select();
				$result2=$sql1->where("uname2='$name'")->select();
				$this->smarty->assign("wodeguanzhu",count($result1));
				$this->smarty->assign("guanzhuwode",count($result2));
				//我的文章
				$sql2=new sql("content");
				$result3=$sql2->where("sname='$name'")->select();
				$this->smarty->assign("wodewenzhang",count($result3));
				//我的收藏
				$sql3=new sql("loves");
				$result4=$sql3->where("lovename='$name'")->select();
				$this->smarty->assign("wodeshoucang",count($result4));
				$this->smarty->assign("login",$this->session->get("login"));
				$this->smarty->assign("se",$this->session->get("name"));
                $this->smarty->assign("zxname",$name);
				$this->smarty->display("index/geren.html");
			}else{
				$this->dump("index.php?a=login","你没有登陆");
			}
		}
        // 添加图片
        function addimg(){
            header("Content-Type:text/html;charset=utf-8");
            $fileInfo=$_FILES["file"];//把文件记录在一个变量
            date_default_timezone_set("Asia/Shanghai");//改变时区
            if(is_uploaded_file($fileInfo["tmp_name"])){//判定有没有这个文件
                $dirname=date("y-m-d");//记录当前时间
                if(!file_exists("static/upload/".$dirname)){//判定有没有当前时间这个文件夹
                    mkdir("static/upload/".$dirname."/",077,true);//创建该文件夹
                }
                $filename=time().$fileInfo["name"];//文件名
                $path="static/upload/".$dirname."/".$filename;
                move_uploaded_file($fileInfo["tmp_name"],$path);//上传该文件
                echo UPLOAD_PATH."/".$dirname."/".$filename;//打印出该文件
            }
        }
	}
?>