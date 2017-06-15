<?php
    class main{
        function __construct(){
            $this->session=new session();
            $this->smarty=new Smarty();
            $this->smarty->setCompileDir("compile");
            $this->smarty->setTemplateDir("template");
        }
        /*
         * 跳转
         * */
        function jump($url,$message){
            $this->smarty->assign("url",$url);
            $this->smarty->assign("message",$message);
            $this->smarty->display("admin/message.html");
        }
        /*
         * 检测登录
         * */
        function checkLogin(){
            if(!($this->session->get("is_login")&&!empty(MVC))){
                return false;
            }else{
                return true;
            }
        }
    }