<?php
class show extends indexMain{
    function init(){
        $wid=P("wid");
        $db=new db("wupin");
        $result=$db->where("wid='$wid'")->select();
        $wliulan=$result[0]['wliulan']+1;
        $db->where("wid='$wid'")->update("wliulan='$wliulan'");
        $this->smarty->assign("showresult",$result);
        $uid=$result[0]['uid'];
        $udb=new db("user");
        $uresult=$udb->where("uid='$uid'")->select();
        $this->smarty->assign("uresult",$uresult);
        //留言
        $lysql=new db("pinlun");
        $lyresult=$lysql->select("select * from pinlun,user where pinlun.muid1=user.uid and pinlun.wid='$wid' order by pinlun.mtime desc");
        //儿子
        for($i=0;$i<count($lyresult);$i++){
            $mpid=$lyresult[$i]['mid'];
            $lyresult[$i]['son']=$lysql->select("select * from pinlun,user where pinlun.muid1=user.uid and pinlun.mpid='$mpid' order by pinlun.mtime desc");
        }
        $this->smarty->assign("lyresult",$lyresult);
        // 登录
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $this->smarty->assign("indexlogin",$this->session->get("indexlogin"));
        }
        $this->smarty->assign("result",$this->session->get("indexresult"));
        // 分类
        $fldb=new db("fenlei");
        $flresult=$fldb->select();
        $this->smarty->assign("flresult",$flresult);
        $this->smarty->display("index/show.html");
    }

    //留言
    function liuyan(){
        $this->session->set("near",P("url"));
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $uname1=$this->session->get("indexresult")['uid'];
            $uname2=P("uname2");
            $cid=P("cid");
            $pid=0;
            $mcon=P("mcon");
            $mtime=P("mtime");
            $sql=new db("pinlun");
            if($sql->insert("muid1='$uname1';muid2='$uname2';wid='$cid';mpid='$pid';mshow='$mcon';mtime='$mtime'")==1){
                echo "yes";
            }
        }else{
            echo "no";
        }
    }

    //回复1
    function huifu1(){
        $this->session->set("near",P("url"));
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $uname1=$this->session->get("indexresult")['uid'];
            $uname2=P("uname2");
            $cid=P("cid");
            $pid=P("pid");
            $mcon=P("mcon");
            $mtime=P("mtime");
            $sql=new db("pinlun");
            if($sql->insert("muid1='$uname1';muid2='$uname2';wid='$cid';mpid='$pid';mshow='$mcon';mtime='$mtime'")==1){
                echo "yes";
            }
        }else{
            echo "no";
        }
    }



    // 下订单
    function goumai(){
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $wid=P("wid");
            $uid=$this->session->get("indexresult")['uid'];
            $wdb=new db("wupin");
            if($wdb->where("wid='$wid'")->update("wstate=3")==1){
                $db=new db("dingdan");
                if($db->insert("uid='$uid';wid='$wid'")==1){
                    $this->jump("index.php?f=geren","订单成功！");
                    exit;
                }
            }
        }else{
            $this->jump("index.php?f=login","您还没有登录哦");
        }
    }
}