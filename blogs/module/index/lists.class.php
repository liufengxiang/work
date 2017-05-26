<?php

class lists extends main{
    function init(){
        $id = p("id");
        $sql = new sql("content");
        //点赞
        $sql3=new sql("zan");
        $result = $sql->where("id='$id'")->select();
        if($this->session->get("login")) {

            $name=$this->session->get("name");
            if ($name == $result[0]['sname']) {
                $this->smarty->assign("self", "self");//关注
                $this->smarty->assign("love", "self");//收藏
                $this->smarty->assign("zan", "self");//收藏
            } else {
                //关注
                $sql1=new sql("guanzhu");
                $result1 = $sql1->where("uname='$name'")->select();
                $flag = true;
                foreach ($result1 as $v) {
                    if ($v["uname2"] == $result[0]["sname"]) {
                        $flag = false;
                    }
                }
                if ($flag) {
                    $this->smarty->assign("self", "no");
                } else {
                    $this->smarty->assign("self", "yes");
                }

                //收藏
                $sql2=new sql("loves");
                $result2=$sql2->where("lovename='$name'")->select();
                $flag2=true;
                foreach($result2 as $v1){
                    if($v1["loveshow"]==$result[0]["id"]){
                        $flag2=false;
                    }
                }
                if ($flag2) {
                    $this->smarty->assign("love", "no");
                } else {
                    $this->smarty->assign("love", "yes");
                }

                //点赞
                $result3=$sql3->where("zanname='$name'")->select();
                $flag3=true;
                foreach($result3 as $v2){
                    if($v2["zancon"]==$result[0]["id"]){
                        $flag3=false;
                    }
                }
                if ($flag3) {
                    $this->smarty->assign("zan", "no");
                } else {
                    $this->smarty->assign("zan", "yes");
                }




            }
        }  //点赞人数
        $zancon=$result[0]["id"];
        $zanshu=$sql3->where("zancon='$zancon'")->select();
        $this->smarty->assign("zanshu",count($zanshu));
        //点击数
        $liulan=$result[0]['liulan']+1;
        $sql->update("update content set liulan='$liulan' where id='$id'");
        //留言
        $lysql=new sql("liuyan");
        $lyresult=$lysql->select("select * from liuyan,user where liuyan.pid=0 and liuyan.cid='$id' and liuyan.uname1=user.name order by liuyan.utime desc");
        //儿子
        for($i=0;$i<count($lyresult);$i++){
            $pid=$lyresult[$i]['id'];
            $lyresult[$i]['son']=$lysql->order("utime asc")->where("pid='$pid'")->select();
        }
        $this->smarty->assign("lyresult",$lyresult);





        $this->smarty->assign("result",$result);
        $this->smarty->assign("login",$this->session->get("login"));
        $this->smarty->assign("se",$this->session->get("name"));
        $this->smarty->display('index/lists.html');//引入文件
    }
    //关注
    function guanzhu(){
        $this->session->set("near",p("url"));
        if($this->session->get("login")){
            $uname=$this->session->get("name");
            $uname2=p("uname2");
            $sql=new sql("guanzhu");
            if($sql->insert("insert into guanzhu (uname,uname2) values ('$uname','$uname2')")==1){
                echo "ok";
            }
        }else{
                echo "no";
            }
    }
    //取消关注
    function quxiaoguanzhu(){
        $uname=$this->session->get("name");
        $uname2=p("uname2");
        $sql=new sql("guanzhu");
        if($sql->where("uname='$uname' and uname2='$uname2'")->delete()==1){
            echo "ok";
        }
    }
    //收藏
    function shoucang(){
        $this->session->set("near",p("url"));
        if($this->session->get("login")){
            $lovename=$this->session->get("name");
            $loveshow=p("loveshow");
            $sql=new sql("loves");
            if($sql->field("lovename='$lovename';loveshow='$loveshow'")->insert()==1){
                echo "ok";
            }
        }else{
            echo "no";
        }
    }
    //点赞
    function dianzan(){
        $this->session->set("near",p("url"));
        if($this->session->get("login")){
            $zanname=$this->session->get("name");
            $zancon=p("zancon");
            $sql=new sql("zan");
            if($sql->field("zanname='$zanname';zancon='$zancon'")->insert()==1){
                echo "ok";
            }
        }else{
            echo "no";
        }
    }
    //取消点赞
    function quxiaodianzan(){
        $zanname=$this->session->get("name");
        $zancon=p("zancon");
        $sql=new sql("zan");
        if($sql->where("zanname='$zanname' and zancon='$zancon'")->delete()==1){
            echo "ok";
        }
    }
    //取消收藏
    function quxiaoshoucang(){
        $lovename=$this->session->get("name");
        $loveshow=p("loveshow");
        $sql=new sql("loves");
        if($sql->where("lovename='$lovename' and loveshow='$loveshow'")->delete()==1){
            echo "ok";
        }
    }
    //留言
    function liuyan(){
        $this->session->set("near",p("url"));
        if($this->session->get("login")){
            $uname1=$this->session->get("name");
            $uname2=p("uname2");
            $cid=p("cid");
            $pid=0;
            $mcon=p("mcon");
            $sql=new sql("liuyan");
            if($sql->field("uname1='$uname1';uname2='$uname2';cid='$cid';pid='$pid';mcon='$mcon'")->insert()==1){
                echo "yes";
            }
        }else{
            echo "no";
        }
    }

    //回复1
    function huifu1(){
        $this->session->set("near",p("url"));
        if($this->session->get("login")){
            $uname1=$this->session->get("name");
            $uname2=p("uname2");
            $cid=p("cid");
            $pid=p("pid");
            $mcon=p("mcon");
            $sql=new sql("liuyan");
            if($sql->field("uname1='$uname1';uname2='$uname2';cid='$cid';pid='$pid';mcon='$mcon'")->insert()==1){
                echo "yes";
            }
        }else{
            echo "no";
        }
    }
}