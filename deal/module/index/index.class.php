<?php
class index extends indexMain{
    function init(){
        // 登录信息
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $this->smarty->assign("indexlogin",$this->session->get("indexlogin"));
        }
        $this->smarty->assign("result",$this->session->get("indexresult"));
        // 物品
        $db=new db("wupin");
        $hotresult=$db->where("wstate=2")->order("wliulan desc")->limit("0,10")->select();
        $this->smarty->assign("hotresult",$hotresult);
        $newresult=$db->where("wstate=2")->order("wtime desc")->limit("0,10")->select();
        $this->smarty->assign("newresult",$newresult);
        // 分类
        $fldb=new db("fenlei");
        $flresult=$fldb->select();
        $this->smarty->assign("flresult",$flresult);
        $this->smarty->display("index/index.html");
    }
    // 发布商品
    function setshow(){
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $this->smarty->assign("uid",P("id"));
            $db=new db("fenlei");
            $tree=new trees();
            $tree->tree(0,0,"fenlei",$db);
            $this->smarty->assign("tree",$tree->str);
            $this->smarty->display("index/setshow.html");
        }else{
            $this->jump("index.php?f=login","请先登录！");
        }
    }
    // 发布商品成功
    function setshowInfo(){
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $wname=P("wname");
            $cid=P("cid");
            $wshow=P("wshow");
            $wmuch=P("wmuch");
            $wimg1=P("wwimg1");
            $wimg2=P("wwimg2");
            $wimg3=P("wwimg3");
            $uid=P("uid");
            $db=new db("wupin");
            if($db->insert("wname='$wname';cid='$cid';wshow='$wshow';wmuch='$wmuch';wimg1='$wimg1';wimg2='$wimg2';wimg3='$wimg3';uid='$uid'")==1){
                $this->jump("index.php","添加成功！请等待审核！");
            }else{
                $this->jump("index.php?a=setshow","添加失败，请重新输入！");
            }
        }else{
            $this->jump("index.php?m=admin","请先登录！");
        }
    }
    // 添加图片
    function addimg(){
        header("Content-Type:text/html;charset=utf-8");
        $fileInfo=$_FILES["file"];//把文件记录在一个变量
        date_default_timezone_set("Asia/Shanghai");//改变时区
        if(is_uploaded_file($fileInfo["tmp_name"])){//判定有没有这个文件
            $dirname=date("y-m-d");//记录当前时间
            if(!file_exists("static/upload/".$dirname)){//判定有没有当前时间这个文件夹
                mkdir("static/upload/".$dirname."/",077,true);//创建该文件夹
            }
            $filename=time().$fileInfo["name"];//文件名
            $path="static/upload/".$dirname."/".$filename;
            move_uploaded_file($fileInfo["tmp_name"],$path);//上传该文件
            echo UPLOAD_PATH."/".$dirname."/".$filename;//打印出该文件
        }
    }
    // 个人中心
    function geren(){
        if($this->session->get("indexlogin")&&!empty(MVC)){
            $this->smarty->assign("id",P("id"));
            $this->smarty->display("index/geren.html");
        }else{
            $this->jump("index.php?f=login","请先登录！");
        }
    }
}