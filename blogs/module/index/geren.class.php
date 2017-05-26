<?php
class geren extends main{
    //我的关注
    function wodeguanzhu(){
        $name=$this->session->get("zxname");
        if($this->session->get("login")){
            $sql=new sql("guanzhu");
            $result=$sql->where("uname='$name'")->select();
            $this->smarty->assign("result",$result);
            $this->smarty->display("index/wodeguanzhu.html");
        }else{
            $this->dump("index.php?a=login","请您登录！");
        }
    }
    //关注我的
    function guanzhuwode(){
        $name=$this->session->get("zxname");
        if($this->session->get("login")){
            $sql=new sql("guanzhu");
            $result=$sql->where("uname2='$name'")->select();
            $this->smarty->assign("result",$result);
            $this->smarty->display("index/guanzhuwode.html");
        }else{
            $this->dump("index.php?a=login","请您登录！");
        }
    }
    //我的文章
    function wodewenzhang(){
        $name=$this->session->get("zxname");
        if($this->session->get("login")){
            $sql=new sql("content");
            $result=$sql->where("sname='$name'")->select();
            $this->smarty->assign("result",$result);
            $this->smarty->display("index/wodewenzhang.html");
        }else{
            $this->dump("index.php?a=login","请您登录！");
        }
    }
    //我的收藏
    function wodeshoucang(){
        $name=$this->session->get("zxname");
        if($this->session->get("name")){
            $sql=new sql("content");
            $sql1=new sql("loves");
            $where=$sql1->where("lovename='$name'")->select();
            $result=Array();
            for($i=0;$i<count($where);$i++){
                $id=$where[$i]['loveshow'];
                $result[]=$sql->where("id='$id'")->select();
            }
            $this->smarty->assign("result",$result);
            $this->smarty->display("index/wodeshoucang.html");
        }else{
            $this->dump("index.php?a=login","请您登录！");
        }
    }
    // 设置头像
    function setimg(){
        if($this->session->get("login")){
            $name=$this->session->get("name");
            $uimg=p("uimg");
            $db=new sql("user");
            if($db->update("update user set uimg='$uimg' where name='$name'")==1){
                echo 'ok';
                exit;
            }else{
                echo 'no';
            }
        }
    }
}
