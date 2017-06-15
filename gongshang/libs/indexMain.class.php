<?php
class indexMain{
    function __construct(){
        $this->smarty=new Smarty();
        $this->smarty->setCompileDir("compile"); //编译目录 自动生成
        $this->smarty->setTemplateDir("template"); //模板目录
        $this->session=new session();
        $this->db=new db("gs_user");
        //是否从主页进入而且已经登录
        if($this->session->get("user_login")&&!empty(MVC)){
            //如果登录，设置这些属性
            $this->smarty->assign("unickname",$_SESSION["nickname"]); //用户昵称
            $this->smarty->assign("indexUser",$_SESSION["indexUser"]);
            $this->smarty->assign("uid",$_SESSION["uid"]); //用户id
        }
        /*
         * 标题数据的方法
         * */

        $this->getCategory();

        /*
        * 头像
        * */
        $this->getTouxiang();

        /*
        * 底部的院系活动    获取6条数据
        * */
        $this->footer_active_list();
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
        if(!($this->session->get("user_login")&&!empty(MVC))){
            $url="index.php?m=index&f=login&a=startLogin";
            $message="请登录";
            $this->jump($url,$message);
            return false;
        }else{
            return true;
        }
    }

    /*
    * 标题数据
    * */
    function getCategory(){
        $db=new db("gs_category");
        $catP=$db->select("select * from gs_category where pid=0 limit 1,12");
        $catson=$db->select("select * from gs_category where cid>0");

        $this->smarty->assign("catP",$catP);
        $this->smarty->assign("catson",$catson);
    }

    function getTouxiang(){
        /*
        * 头像
        * */
        $db=new db("gs_user");
        $uid=$this->session->get("uid");
        $result=$db->where("uid='$uid'")->select();
        $userImgs=$this->userImg();//头像
        $this->smarty->assign("userImgs",$userImgs);//头像
        $this->smarty->assign("result",$result);
    }

    //用户头像
    function userImg(){
        if(!isset($_SESSION["uid"])||$_SESSION["uid"]=="nologin"){
            $arr=array();
            return $arr;
        }
        $result=$this->db->select("select * from gs_user where uid=".$_SESSION["uid"]);
        $result=$result[0];
        return $result;
    }

    /*
    * 底部的院系活动    获取6条数据
    * */
    function footer_active_list(){

        $db=new db("gs_news");

        $news_active=$db->select("select * from gs_news where nposition=2 order by ntime limit 0,6");
        $this->smarty->assign("news_active",$news_active);
    }

}

