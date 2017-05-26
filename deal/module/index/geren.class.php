<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/3
 * Time: 11:11
 */
class geren extends indexMain{
    function init(){
        if($this->session->get("indexlogin")&&!empty(MVC)){
            // 登录信息
            if($this->session->get("indexlogin")&&!empty(MVC)){
                $this->smarty->assign("indexlogin",$this->session->get("indexlogin"));
            }
            // 登录人
            $uid=$this->session->get("indexresult")['uid'];
            // 自己的物品
            $wdb=new db("wupin");
            $wuresult=$wdb->where("uid='$uid'")->select();
            // 自己购买的物品
            $ddb=new db("dingdan");
            $dresult=$ddb->where("uid='$uid'")->select();
            $arr=[];
            foreach ($dresult as $k=>$v){
                $wid=$v['wid'];
                array_push($arr,$wdb->where("wid='$wid'")->select()[0]);
            }
            $this->smarty->assign("wresult",$wuresult);
            $this->smarty->assign("wresult1",$arr);
            $this->smarty->assign("result",$this->session->get("indexresult"));
            $this->smarty->display("index/geren.html");
        }
    }
    function ziliao(){
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $uid=P("uid");
            $db=new db("user");
            $ziliaoresult=$db->where("uid='$uid'")->select();
            $this->smarty->assign("ziliaoresult",$ziliaoresult);
            $this->smarty->display("index/ziliao.html");
        }
    }
    function ziliaoInfo(){
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $nichen=P("nichen");
            $uphone=P("uphone");
            $uqq=P("uqq");
            $uimg=P("uimg");
            $uid=P("uid");
            $db=new db("user");
            if($db->where("uid='$uid'")->update("nichen='$nichen',uphone='$uphone',uqq='$uqq',uimg='$uimg'")==1){
                $this->jump("index.php?f=geren","修改成功，请重新登录！");
                exit;
            }else{
                $this->jump("index.php?f=geren","未作任何修改！");
            }
        }
    }
    function editpass(){
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $upass=md5(P("upass"));
            $uid=$this->session->get("indexresult")['uid'];
            $db=new db("user");
            if($db->where("uid='$uid'")->update("upass='$upass'")==1){
                $this->session->clear();
                $this->jump("index.php?f=login","密码修改成功，请重新登录！");
            }
        }
    }
}