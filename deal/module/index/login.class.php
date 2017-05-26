<?php
class login extends main{
	function init(){
	    if($this->session->get("indexlogin")&&!empty(MVC)){
            $this->jump("index.php","您已登录！");
            exit;
        }else{
            $this->smarty->display("index/login.html");
        }
    }
    //验证码
    function code(){
        $image=new code();
        $image->letterUrl="static/font/admin/FZBSFW.TTF";
        $image->output();
        $_SESSION["code"]=$image->resultLetter;
    }
    // 生成用户
    function setuser(){
        $db=new db("user");
        $pass=md5(123123);
        echo $db->insert("uname='likai';upass='$pass'");
    }
    // 登录验证
    function onLogin(){
        $user=P("user");
        $pass=md5(P("pass"));
        $code=P("code");
        $codes=$this->session->get("code");
        if($codes==$code){
            $db=new db("user");
            $result=$db->select();
            foreach ($result as $k=>$v){
                if($v["uname"]==$user&&$v["upass"]==$pass){
                    $this->session->set("indexlogin","yes");
                    $this->session->set("indexresult",$v);
                    if($this->session->get("near")){
                        $this->jump($this->session->get("near"),"登录成功");
                        exit;
                    }
                    $this->jump("index.php","登陆成功！");
                    exit;
                }
            }
            $this->jump("index.php?f=login","账号或密码错误！");
            exit;
        }else{
            $this->jump("index.php?f=login","验证码错误！");
        }
    }
    // 退出
    function tui(){
        $this->session->clear();
        $this->jump("index.php","退出登录成功！");
    }
    // 注册
    function reg(){
        $this->smarty->display("index/reg.html");
    }
    // 检测用户名是否存在
    public function userCheck(){
        $db=new db("user");
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
    //用户注册
    function addReg(){
        $uname=P("username");
        $upass=md5(P("password"));
        $nickname=P("nickname");
        if(empty($nickname)){
            $nickname=$uname;
        }
        $imgurl=IMG_PATH.'/touxiang.jpg';
        $db=new db("user");
        $result=$db->filed("uname='$uname';upass='$upass';nichen='$nickname';uimg='$imgurl'")->insert();
        if($result>0){
            $message="注册成功!请登录";
            $url="index.php?m=index&f=login";
            $this->jump($url,$message);
        }else{
            $message="注册失败";
            $url="index.php?m=index&f=login&a=reg";
            $this->jump($url,$message);
        }

    }
}
?>