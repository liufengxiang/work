<?php
class mains extends main{

    //添加用户
    function adduser(){
        if($this->session->get("main")=="ok"){
            $this->smarty->display("admin/adduser.html");
        }else{
            $this->dump("index.php?m=admin&a=login","请您登录");
        }
    }
    function adduser2(){
        $name=p("user");
        $pass=md5(p("pass"));
        $sql=new sql("user");
        if($sql->field("name='$name';password='$pass'")->insert()==1){
            $this->dump("index.php?m=admin&f=mains&a=adduser","添加成功！");
        }
    }
    //删除用户
    function deluser(){
        if($this->session->get("main")=="ok"){
            $sql=new sql("user");
            $result=$sql->order("t desc")->select();
            $pages=new pages(count($result),10);
            $page=$pages->out();
            $result=$sql->limit($pages->limit)->order("t desc ")->select();
            $this->smarty->assign("result",$result);
            $this->smarty->assign("page",$page);
            $this->smarty->display("admin/deluser.html");
        }else{
            $this->dump("index.php?m=admin&a=login","请您登录");
        }
    }
    function deluser2(){
        $id=p("id");
        $sql=new sql("user");
        if($sql->where("id='$id'")->delete()==1){
            $this->dump("index.php?m=admin&f=mains&a=deluser","删除成功！");
        }
    }
    //分类添加
    function addcategory(){
        if($this->session->get("main")=="ok"){
            $mysql=new mysqli("localhost","root","","blogs");
            $mysql->query("set names utf8");
            $trees=new trees();
            $trees->tree(0,0,$mysql,"category");
            $result=$trees->str;
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/addcategory.html");
        }else{
            $this->dump("index.php?m=admin&a=login","请登录！");
        }
    }
    function addcategory2(){
        $pid=p("pid");
        $cname=p("cname");
        $sql=new sql("category");
        if($sql->field("pid='$pid';cname='$cname'")->insert()==1){
            $this->dump("index.php?m=admin&f=mains&a=addcategory","添加成功！");
        }
    }
    //分类管理
    function guanlicategory(){
        if($this->session->get("main")=="ok"){
            $mysql=new mysqli("localhost","root","","blogs");
            $mysql->query("set names utf8");
            $trees=new trees();
            $trees->table(0,0,$mysql,"category");
            $result=$trees->str;
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/guanlicategory.html");
        }else{
            $this->dump("index.php?m=admin&a=login","请登录！");
        }
    }
    //分类删除
    function delcategory(){
        $id=p("id");
        $sql=new sql("category");
        if($sql->where("cid='$id'")->delete()==1){
            $this->dump("index.php?m=admin&f=mains&a=guanlicategory","删除成功！");
        }
    }
    //修改分类
    function xiugaicategory(){
        $id=p("id");
        $sql=new sql("category");
        $result=$sql->where("cid='$id'")->select();
        $trees=new trees();
        $mysql=$sql->content;
        $trees->tree(0,0,$mysql,"category",$id);
        $this->smarty->assign("str",$trees->str);
        $this->smarty->assign("result",$result);
        $this->smarty->display("admin/xiugaicategory.html");
    }
    function xiugaicategory2(){
        $pid=p("pid");
        $cname=p("cname");
        $cid=p("cid");
        $sql=new sql("category");
        if($sql->field("pid='$pid',cname='$cname'")->where("cid='$cid'")->update()==1){
            $this->dump("index.php?m=admin&f=mains&a=guanlicategory","修改成功！");
        }
    }
    //添加内容
    function addcontent(){
        if($this->session->get("main")=="ok"){
            $mysql=new mysqli("localhost","root","","blogs");
            $mysql->query("set names utf8");
            $trees=new trees();
            $trees->tree(0,0,$mysql,"category");
            $result=$trees->str;
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/addcontent.html");
        }else{
            $this->dump("index.php?m=admin&a=login","请登录！");
        }
    }
    function addcontent2(){
        $cid=p("cid");
        $stitle=p("stitle");
        $sname=p("sname");
        $stime=date('y-m-d h:i:s',time());
        $szai=p("szai");
        $scon=p("scon");
        $status=p("status");
        $sql=new sql("content");
        if($sql->insert("insert into content (cid,stitle,sname,szai,scon,status) values ('$cid','$stitle','$sname','$szai','$scon','$status')")==1){
            $this->dump("index.php?m=admin&f=mains&a=addcontent","发布成功！");
        }else{
            $this->dump("index.php?m=admin&f=mains&a=addcontent","发布失败！");
        }
    }
    //内容管理
    function guanlicontent(){
        if($this->session->get("main")=="ok"){
            $sql=new sql("content");
            $result=$sql->select();
            $pages=new pages(count($result),10);
            $page=$pages->out();
            $result=$sql->limit($pages->limit)->select();
            $this->smarty->assign("page",$page);
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/guanlicontent.html");
        }else{
            $this->dump("index.php?m=admin&a=login","请登录！");
        }
    }
    //内容查看
    function lookcontent(){
        if($this->session->get("main")=="ok"){
            $id=p("id");
            $sql=new sql("content");
            $result=$sql->where("id='$id'")->select();
            $cid=$result[0]['cid'];
            $namesql=new sql("category");
            $nameresult=$namesql->where("cid='$cid'")->select();
            $cname=$nameresult[0]['cname'];
            $this->smarty->assign("result",$result);
            $this->smarty->assign("cname",$cname);
            $this->smarty->display("admin/lookcontent.html");
        }else{
            $this->dump("index.php?m=admin&a=login","请登录！");
        }
    }
    //审核内容
    function xiugaicontent(){
        $status=p("status");
        $id=p("id");
        $sql=new sql("content");
        if($sql->field("status='$status'")->where("id='$id'")->update()==1){
            $this->dump("index.php?m=admin&f=mains&a=guanlicontent","审核成功！");
        }else{
            $this->dump("index.php?m=admin&f=mains&a=guanlicontent","审核失败！");
        }
    }
    //删除内容
    function delcontent(){
        $id=p("id");
        $sql=new sql("content");
        if($sql->where("id='$id'")->delete()==1){
            $this->dump("index.php?m=admin&f=mains&a=guanlicontent","删除成功！");
        }
    }
}
?>