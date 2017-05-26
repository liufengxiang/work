<?php
class lists extends indexMain{
    function init(){
        $cid=P("cid");
        $db=new db("wupin");
        $result=$db->where("cid='$cid' and wstate=2")->select();
        $this->smarty->assign("listresult",$result);
        // 分类
        $fldb=new db("fenlei");
        $flresult=$fldb->select();
        $this->smarty->assign("flresult",$flresult);
        // 登录
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $this->smarty->assign("indexlogin",$this->session->get("indexlogin"));
        }
        $this->smarty->assign("result",$this->session->get("indexresult"));
        $this->smarty->display("index/lists.html");
    }
    function sousuo(){
        $search=P("show");
        $db=new db("wupin");
        $result=$db->select("select * from fenlei,wupin where ( wupin.wname  LIKE '%$search%' or fenlei.cname LIKE '%$search%') and  fenlei.cid=wupin.cid");
        $this->smarty->assign("listresult",$result);
        // 分类
        $fldb=new db("fenlei");
        $flresult=$fldb->select();
        $this->smarty->assign("flresult",$flresult);
        // 登录
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $this->smarty->assign("indexlogin",$this->session->get("indexlogin"));
        }
        $this->smarty->assign("result",$this->session->get("indexresult"));
        $this->smarty->display("index/lists.html");
    }
}