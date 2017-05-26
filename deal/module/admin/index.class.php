<?php
class index extends main{
    //后台登录检测
    function init(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $this->jump("index.php?m=admin&a=main","您已登录！");
        }else{
            $this->smarty->display("admin/login.html");
        }
    }
    // 生成超级管理员
    function setadmin(){
        $db=new db("admin");
        $pass=md5(123123);
        echo $db->insert("aname='admin';apass='$pass';atype='1'");
    }
    // 验证码
    function code(){
        $code=new code();
        $code->letterUrl="static/font/admin/FZBSFW.TTF";
        $code->output();
        $this->session->set("code",$code->resultLetter);
    }
    // 验证
    function yanzheng(){
        $user=P("user");
        $pass=md5(P("pass"));
        $code=P("code");
        $codes=$this->session->get("code");
        if($codes==$code){
            $db=new db("admin");
            $result=$db->select();
            foreach ($result as $k=>$v){
                if($v["aname"]==$user&&$v["apass"]==$pass){
                    $this->session->set("adminlogin","yes");
                    $this->session->set("name",$user);
                    $this->session->set("aid",$v["aid"]);
                    $this->session->set("apass",$v["apass"]);
                    $this->session->set("atype",$v["atype"]);
                    $this->jump("index.php?m=admin&a=main","登陆成功！");
                    exit;
                }else{
                    $this->jump("index.php?m=admin","账号或密码错误！");
                }
            }
        }else{
            $this->jump("index.php?m=admin","验证码错误！");
        }
    }
    // 进入主页
    function main(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $adminlogin=$this->session->get("adminlogin");
            $name=$this->session->get("name");
            $atype=$this->session->get("atype");
            $this->smarty->assign("adminlogin",$adminlogin);
            $this->smarty->assign("name",$name);
            $this->smarty->assign("atype",$atype);
            $this->smarty->display("admin/index.html");
        }else{
            $this->jump("index.php?m=admin","请以正确的方式进入后台");
        }
    }
    // 退出登录
    function exitadmin(){
        $this->session->clear();
        $this->jump("index.php?m=admin","退出成功！");
    }
}