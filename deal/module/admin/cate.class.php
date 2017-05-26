<?php
class cate extends main{
    // 修改密码
    function xiugaiapass(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $apass=$this->session->get("apass");
            $aid=$this->session->get("aid");
            $this->smarty->assign("aid",$aid);
            $this->smarty->assign("apass",$apass);
            $this->smarty->display("admin/xiugaiapass.html");
        }
    }
    // 修改密码处理
    function xiugaiapass2(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $aid=$this->session->get("aid");
            $oldpass=md5(P("olduser"));
            $newpass=md5(P("user1"));
            $db=new db("admin");
            $result=$db->where("aid='$aid'")->select();
            if($result[0]["apass"]==$oldpass){
                $db->update("update admin set apass='$newpass' where aid=$aid");
                $this->jump("index.php?m=admin&f=cate&a=xiugaiapass","修改成功！");
            }else{
                $this->jump("index.php?m=admin&f=cate&a=xiugaiapass","您输入的旧密码不正确！");
            }
        }
    }
    // 管理管理员
    function guanliadmin(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $db=new db("admin");
            $result=$db->where("atype=0")->order("aid desc")->select();
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/guanliadmin.html");
        }
    }
    // 添加管理员
    function addadmin(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $this->smarty->display("admin/addadmin.html");
        }
    }
    function addadminInfo(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $aname=P("aname");
            $apass=md5(P("apass"));
            $db=new db("admin");
            $result=$db->where("aname='$aname'")->select();
            if(count($result)==0){
                if($db->insert("insert into admin (aname,apass) values ('$aname','$apass')")==1){
                    $this->jump("index.php?m=admin&f=cate&a=guanliadmin","添加成功！");
                }
            }else{
                $this->jump("index.php?m=admin&f=cate&a=guanliadmin","用户名已存在！");
            }
        }
    }
    // 删除管理员
    function deladmin(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $aid=P("aid");
            $db=new db("admin");
            if($db->where("aid='$aid'")->delete()==1){
                $this->jump("index.php?m=admin&f=cate&a=guanliadmin","删除成功！");
                exit;
            }else{
                $this->jump("index.php?m=admin&f=cate&a=guanliadmin","删除失败！");
            }
        }
    }
    // 管理用户
    function guanliuser(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $db=new db("user");
            $result=$db->order("uid desc")->select();
            $pages=new pages(count($result),8);
            $pages=$pages->out();
            $this->smarty->assign("result",$result);
            $this->smarty->assign("page",$pages);
            $this->smarty->display("admin/guanliuser.html");
        }
    }
    // 删除用户
    function deluser(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $uid=P("uid");
            $db=new db("user");
            if($db->where("uid='$uid'")->delete()==1){
                $this->jump("index.php?m=admin&f=cate&a=guanliuser","删除成功!");
                exit;
            }else{
                $this->jump("index.php?m=admin&f=cate&a=guanliuser","删除失败!");
            }
        }
    }
    // 添加分类
    function addcategory(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $db=new db("fenlei");
            $tree=new trees();
            $tree->tree(0,0,"fenlei",$db);
            $this->smarty->assign("tree",$tree->str);
            $this->smarty->display("admin/addcategory.html");
        }
    }
    // 添加分类
    function addcategory2(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $pid=p("pid");
            $cname=p("cname");
            $sql=new db("fenlei");
            if($sql->insert("pid='$pid';cname='$cname'")==1){
                $this->jump("index.php?m=admin&f=cate&a=addcategory","添加成功！");
            }
        }
    }
    // 管理分类
    function guanlicategory(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $db=new db("fenlei");
            $tree=new trees();
            $tree->table(0,0,"fenlei",$db);
            $this->smarty->assign("result",$tree->str);
            $this->smarty->display("admin/guanlicategory.html");
        }
    }
    // 删除分类
    function delcategory(){
        $cid=P("cid");
        $db=new db("fenlei");
        if($db->where("cid='$cid'")->delete()==1){
            $this->jump("index.php?m=admin&f=cate&a=guanlicategory","删除成功！");
        }else{
            $this->jump("index.php?m=admin&f=cate&a=guanlicategory","删除失败！");
        }
    }
    // 编辑分类
    function xiugaicategory(){
        $cid=P("cid");
        $db=new db("fenlei");
        $cresult=$db->where("cid='$cid'")->select();
        $tree=new trees();
        $tree->tree(0,0,"fenlei",$db,$cid);
        $this->smarty->assign("tree",$tree->str);
        $this->smarty->assign("cresult",$cresult);
        $this->smarty->display("admin/editcategory.html");
    }
    // 修改完成
    function editcategory(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $pid=p("pid");
            $cname=p("cname");
            $cid=p("cid");
            $sql=new db("fenlei");
            if($sql->where("cid='$cid'")->update("pid='$pid',cname='$cname'")==1){
                $this->jump("index.php?m=admin&f=cate&a=guanlicategory","修改成功！");
            }
        }
    }
    // 添加物品
    function addshow(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $db=new db("fenlei");
            $tree=new trees();
            $tree->tree(0,0,"fenlei",$db);
            $this->smarty->assign("tree",$tree->str);
            $this->smarty->display("admin/setshow.html");
        }
    }
    // 发布商品成功
    function setshowInfo(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $wname=P("wname");
            $cid=P("cid");
            $wshow=P("wshow");
            $wmuch=P("wmuch");
            $wimg1=P("wwimg1");
            $wimg2=P("wwimg2");
            $wimg3=P("wwimg3");
            $uid=0;
            $wstate=2;
            $db=new db("wupin");
            if($db->insert("wstate='$wstate';wname='$wname';cid='$cid';wshow='$wshow';wmuch='$wmuch';wimg1='$wimg1';wimg2='$wimg2';wimg3='$wimg3';uid='$uid'")==1){
                $this->jump("index.php?m=admin&f=cate&a=guanlishow","添加成功！");
            }else{
                $this->jump("index.php?m=admin&f=cate&a=addshow","添加失败，请重新输入！");
            }
        }else{
            $this->jump("index.php?m=admin&a=login","请先登录！");
        }
    }
    // 管理物品
    function guanlishow(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $db=new db("wupin");
            $result=$db->order("wid desc")->select();
            $pages=new pages(count($result),8);
            $pages=$pages->out();
            $this->smarty->assign("page",$pages);
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/guanlishow.html");
        }
    }
    // 审核物品
    function shenshow(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $wid=P("wid");
            $db=new db("wupin");
            $result=$db->where("wid='$wid'")->select();
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/shenshow.html");
        }
    }
    // 审核物品完成
    function shenshowend(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $wstate=P("wstate");
            $wid=P("wid");
            $db=new db("wupin");
            $result=$db->where("wid='$wid'")->update("wstate='$wstate'");
            if($result==1){
                $this->jump("index.php?m=admin&f=cate&a=guanlishow","审核完成！");
            }
        }
    }
    // 删除物品
    function delshow(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $wid=P("wid");
            $db=new db("wupin");
            if($db->where("wid='$wid'")->delete()==1){
                $this->jump("index.php?m=admin&f=cate&a=guanlishow","删除成功！");
                exit;
            }else{
                $this->jump("index.php?m=admin&f=cate&a=guanlishow","删除失败！");
            }
        }
    }
    // 管理订单
    function guanlidingdan(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $db=new db("dingdan");
            $result=$db->order("did desc")->select();
            $pages=new pages(count($result),8);
            $pages=$pages->out();
            $this->smarty->assign("page",$pages);
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/guanlidingdan.html");
        }
    }
    // 删除订单
    function deldingdan(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $did=P("did");
            $db=new db("dingdan");
            if($db->where("did='$did'")->delete()==1){
                $this->jump("index.php?m=admin&f=cate&a=guanlidingdan","删除成功！");
                exit;
            }else{
                $this->jump("index.php?m=admin&f=cate&a=guanlidingdan","删除失败！");
            }
        }
    }
    // 管理评论
    function guanlipinlun(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $db=new db("pinlun");
            $result=$db->order("mid desc")->select();
            $pages=new pages(count($result),8);
            $pages=$pages->out();
            $this->smarty->assign("page",$pages);
            $this->smarty->assign("result",$result);
            $this->smarty->display("admin/guanlipinlun.html");
        }
    }
    // 删除评论
    function delpinlun(){
        if($this->session->get("adminlogin")&&!empty(MVC)){
            $mid=P("mid");
            $db=new db("pinlun");
            if($db->where("mid='$mid'")->delete()==1){
                $this->jump("index.php?m=admin&f=cate&a=guanlipinlun","删除成功！");
                exit;
            }else{
                $this->jump("index.php?m=admin&f=cate&a=guanlipinlun","删除失败！");
            }
        }
    }
}