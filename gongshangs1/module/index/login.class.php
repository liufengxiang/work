<?php
class login extends indexMain{
	
	function init(){
        if(!$this->checkLogin()){
            exit;
        }
        $this->smarty->assign("nickname",$_SESSION["unickname"]);
        $this->smarty->display("index/index.html");
    }

	//登录
	function startLogin(){
        if(!isset($_SESSION["user_login"])){
            $this->smarty->display("index/login.html");
        }else{
            $url="index.php?m=index";
            $message="已经登录";
            $this->jump($url,$message);
            exit;
        }
              
    }
	
	//注册
	function reg(){
        $this->smarty->display("index/reg.html");

    }
    
    //验证码
    function code(){
        $image=new code();
        $image->letterUrl="static/font/FZBSFW.TTF";
        $image->output();

        $_SESSION["code"]=$image->resultLetter;
    }
    
    // 检测用户名是否存在
    public function userCheck(){
        $db=new db("gs_user");
        $username=$_GET["username"];
        $result=$db->select("uname");

        foreach($result as $v){
            if($username==$v['uname']){
                echo "false";
                exit;
            }
        }
        echo "true";
        exit;
    }
    
    //用户注册
    public function addReg(){
        $uname=P("username");
        $upass=md5(P("password"));
        $nickname=P("nickname");
        if(empty($nickname)){
            $nickname=$uname;
        }

        $imgurl=HTTP_URL.'/static/index/images/touxiang.jpg';

        $db=new db("gs_user");
        $result=$db->filed("uname='$uname';upass='$upass';unickname='$nickname';uimage='$imgurl'")->insert();

        if($result>0){
            $message="注册成功";
            $url="index.php?m=index&f=login&a=startLogin";
            $this->jump($url,$message);
        }else{
            $message="注册失败";
            $url="index.php?m=index&f=login&a=reg";
            $this->jump($url,$message);
        }

    }
    //检测验证码
    function checkCode(){
        $code=$_GET["code"];
        $code=strtolower($code);
        if($_SESSION["code"]==$code){
            echo "true";
        }else{
            echo "false";
        }
    }
	
	//登录的检测
	function onLogin(){
        $db=new db('gs_user');

        $username=$_POST["username"];
        $password=md5($_POST["password"]);

        $result=$db->select();

        foreach ($result as $k=>$v) {
            if($v['uname']==$username){
                if($v['upass']==$password){
                    $this->session->set("user_login",'yes');
                    $this->session->set("indexUser",$username);
                    $this->session->set("uid",$v['uid']);
                    $this->session->set("nickname",$v['unickname']);
                    $message="登录成功";
                    if($this->session->get("near")){
                        $url=$this->session->get("near");
                    }else{
                        $url="index.php?m=index";
                    }


                    $this->jump($url,$message);
                    return true;
                    exit;
                }
            }
        }

        $message="登录失败";
        $url="index.php?m=index&f=login&a=startLogin";
        $this->jump($url,$message);

        return false;

    }
    //退出登录
    function unLogin(){
        $this->session->clear();

        $url="index.php?m=index";
        $message="退出登录成功";
        $this->jump($url,$message);
    }
}
?>