<?php

class art extends indexMain{
    function __construct()
    {
        parent::__construct();
        $this->db=new db("gs_news");
    }


    /***************新闻************************/

    /*
     * 从导航进入show页面
     * */
    function showlistn_nav(){
        $cid=P("cid");

        $pid=$this->db->select("select * from gs_category where cid=$cid");
        $pid=$pid[0]["pid"];

        $catlist=$this->db->select("select * from gs_category where pid=$pid");



        $this->category3($catlist);


        $this->smarty->assign("cid",$cid);
        $this->smarty->display("index/show.html");

    }

    /*
     * 搜索分类列表的三级
     * */
    function category3($catlist){
        $db=new db("gs_category");


        foreach($catlist as $k=>$v){

            if(!isset($catlist[$k]["son"])){
                $catlist[$k]["son"]=array();
            }
            $pid=$v["cid"];
            $cid=$v["cid"];
            $sql="select * from gs_category where pid=$pid and $cid>1";
            $result=$db->select($sql);
            if(!empty($result)){
                $catlist[$k]["son"]=$result;
            };
        }

        $this->smarty->assign("catlist",$catlist);
    }

    /*
     * 进入新闻列表页
     *   点击show左边导航进入list页面
     * */
    function showlistn(){

        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
        }

        if($cid=P("cid")) {
            $catlist = $this->db->select("select * from gs_news where cid=$cid");
            $pages=new pages(count($catlist),5);
            //传入分页
            $this->smarty->assign("pages",$pages->out());
            $catlist=$this->db->select("select * from gs_news where cid=$cid $pages->limit");
        }else{
            $catlist = $this->db->select("select * from gs_news");
            $pages=new pages(count($catlist),5);
            //传入分页
            $this->smarty->assign("pages",$pages->out());
            $catlist=$this->db->select("select * from gs_news $pages->limit");
        }
        //传入分类列表
        $this->smarty->assign("catlist",$catlist);

        $this->smarty->display("index/citelist.html");
    }

    /*
     * 进入新闻分类列表页
     *  从首页列表进入
     * */
    function showartn_index(){
        $nid=P("nid");

        if($nid==false){
            $nids=$this->db->select("select * from gs_news order by cid");

            $nids=$nids[0];

            $nid=$nids['nid'];
        }

        $this->smarty->assign("nid",$nid);

        $cid=$this->db->select("select * from gs_news where nid=$nid");
        $cid=$cid[0]["cid"];
        $this->smarty->assign("cid",$cid);
        $pid=$this->db->select("select * from gs_category where cid=$cid");
        $pid=$pid[0]["pid"];
        $catlist=$this->db->select("select * from gs_category where pid=$pid");
        //传入分类列表
        $this->smarty->assign("catlist",$catlist);


        $this->smarty->display("index/show.html");
    }
    /*
     * 进入新闻分类详情页
     *   通用
     * */
    function showartn_son(){

        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
        }

        $nid=P("nid");
        $newsart=$this->db->select("select * from gs_news where nid=$nid");

        $newsart=$newsart[0];

        /*
         * title 标题
         * etitle 英文标题
         * content 内容
         * time 时间
         * 发布人 name
         * 浏览量 hits
         * 摘要 summary
         *
         * */


        $title=$newsart["title"];
        $etitle=strtoupper($newsart["etitle"]);
        $content=$newsart["con"];
        $time=substr($newsart["ntime"],0,10);
        $hits=$newsart["hits"];
        $summary=$newsart["summary"];
        $name=$newsart["name"];
        $nid=$newsart["nid"];
        $nimgurl=$newsart["nimgurl"];
        $cid=$newsart["cid"];



        $this->smarty->assign("title",$title);
        $this->smarty->assign("etitle",$etitle);
        $this->smarty->assign("content",$content);
        $this->smarty->assign("time",$time);
        $this->smarty->assign("hits",$hits);
        $this->smarty->assign("summary",$summary);
        $this->smarty->assign("name",$name);
        $this->smarty->assign("nid",$nid);
        $this->smarty->assign("nimgurl",$nimgurl);
        $this->smarty->assign("cid",$cid);
        //留言内容

        $result1=$this->db->select("select * from gs_news_msg,gs_user where gs_news_msg.uid=gs_user.uid and sid='$nid' order by gs_news_msg.mtime desc");
        $pages=new pages(count($result1),4);
        $this->smarty->assign("pages",$pages->out());
        $result1=$this->db->select("select * from gs_news_msg,gs_user where gs_news_msg.uid=gs_user.uid and sid='$nid' order by gs_news_msg.mtime desc $pages->limit");


        $this->smarty->assign("result1",$result1);

        $this->smarty->display("index/citeshow.html");
    }

    /*
     * 搜索新闻
     * */
    function searchnewlist(){
        /*
         * 在有分页的情况下保留上次搜索结果信息
         * */
        if(P("pages")!==false){
            if(!isset($_SESSION["search_key"])){
                $search=P("search");
                $_SESSION["search_key_index"]=$search;
            }else{
                $search=$_SESSION["search_key_index"];
            }
        }else{
            $search=P("search");
            $_SESSION["search_key_index"]=$search;
        }

        $db=new db("gs_news");


        $sql="select * from gs_news where title LIKE '%$search%' or summary  LIKE '%$search%' order by ntime ";


        $result=$db->select($sql);

        $pages=new pages(count($result),5);

        $result=$db->select($sql." ".$pages->limit);

        $pages=$pages->out();

        $this->smarty->assign("catlist",$result);
        $this->smarty->assign("pages",$pages);
        $this->smarty->display("index/citelist.html");

    }


    /*
     * 首页动态的more
     * */


/******************公告***************************/

    /*
     * 进入公告列表页
     *
     *      首页公告的more
     * */
    function showlistnotice(){

        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
        }

//        $notice=$this->db->select("select * from gs_notice ORDER BY ntime");
        $this->smarty->assign("notice","公告");
        $this->smarty->display("index/show.html");
    }

    /*
     * 从首页进入公告详情页
     * */
    function showlistnotice_index(){

        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
        }

        $nid=P("nid");

        $this->smarty->assign("nid",$nid);
        $this->smarty->assign("notice","公告");
        $this->smarty->display("index/show.html");
    }

    /*
     * 进入公告列表页
     * */
    function showlistnotice_son(){

        $notice=$this->db->select("select * from gs_notice ORDER BY ntime");

        $pages=new pages(count($notice),2);
        $this->smarty->assign("pages",$pages->out());
        $notice=$this->db->select("select * from gs_notice ORDER BY ntime $pages->limit");




        $this->smarty->assign("noticelist",$notice);
        $this->smarty->display("index/citelist.html");
    }

    /*
     * 进入公告详情页
     * */
    function showartnotice(){
        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
        }

        $nid=P("nid");

        $noticeart=$this->db->select("select * from gs_notice where nid=$nid");
        $noticeart=$noticeart[0];

        $title=$noticeart["ntitle"];
        $etitle="";
        $content=$noticeart["ncon"];
        $time=substr($noticeart["ntime"],0,10);
        $hits="";
        $summary=$noticeart["nsummary"];
        $name=$noticeart["nname"];
        $cimgurl=$noticeart["nfile"];

        $this->smarty->assign("title",$title);
        $this->smarty->assign("etitle",$etitle);
        $this->smarty->assign("content",$content);
        $this->smarty->assign("time",$time);
        $this->smarty->assign("hits",$hits);
        $this->smarty->assign("summary",$summary);
        $this->smarty->assign("name",$name);
        $this->smarty->assign("nid",$nid);
        $this->smarty->assign("nimgurl",$cimgurl);

       $this->smarty->assign("notice","yes");

        $this->smarty->display("index/citeshow.html");

    }

    /*
     * 搜索公告
     * */
    function searchnotice(){
        /*
         * 在有分页的情况下保留上次搜索结果信息
         * */
        if(P("pages")!==false){
            if(!isset($_SESSION["search_key"])){
                $search=P("search");
                $_SESSION["search_key_index"]=$search;
            }else{
                $search=$_SESSION["search_key_index"];
            }
        }else{
            $search=P("search");
            $_SESSION["search_key_index"]=$search;
        }

        $db=new db("gs_notice");


        $sql="select * from gs_notice where ntitle LIKE '%$search%' or nsummary  LIKE '%$search%' order by ntime ";

        $result=$db->select($sql);

        $pages=new pages(count($result),5);
        $this->smarty->assign("pages",$pages->out());
        $result=$db->select($sql." ".$pages->limit);


        $this->smarty->assign("noticelist",$result);
        $this->smarty->display("index/citelist.html");
    }

/*******************精品课程*************************/

    /*
     * 进入精品课程主页
     * */

    function showCourseIndex(){

        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
        }

        // 获取院级精品
        $course1=$this->db->select("select * from gs_course where cposition=1 order by ntime limit 0,6");
        $this->smarty->assign("course1",$course1);

        // 获取校级精品
        $course2=$this->db->select("select * from gs_course where cposition=2 order by ntime limit 0,6");
        $this->smarty->assign("course2",$course2);

        $this->smarty->display("index/list2.html");
    }

    /*
    * 从精品课程首页进入精品课程列表页  也就是从list2进入show2
     *
     *  需要传递coid
    * */
    function showlistc(){
        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
        }

        /*
         * 如果是从list搜索框进入
         * */
        $search_info=P("zmr_sousuo");

        if($search_info){
            $this->smarty->assign("search_info",$search_info);
        }


        /*
         * 取出当前coid的课程
         * */
        $coid=P("coid");
        if($coid!=false){
            $this->smarty->assign("coid",$coid);


            $result=$this->db->select("select * from gs_course where coid=$coid");
            $result=$result[0];
            $this->smarty->assign("colist",$result);
        }


        /*
         * 获取最新课程
         * */
        $newlist=$this->db->select("select * from gs_course order by ntime limit 0,10");

        $this->smarty->assign("newlist",$newlist);

        $this->smarty->display("index/show2.html");
    }

    /*
     * 进入精品课程详情页
     * */
    function showartc(){
        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
        }


        $coid=P("coid");
        $this->smarty->assign("coid",$coid);

        $result=$this->db->select("select * from gs_course where coid=$coid");
        $result=$result[0];

        $this->smarty->assign("course",$result);

//        精品课程留言内容
        $result1=$this->db->select("select * from gs_course_msg,gs_user where gs_course_msg.uid=gs_user.uid and sid='$coid' order by gs_course_msg.mtime desc");
        $pages=new pages(count($result1),4);
        $this->smarty->assign("pages",$pages->out());
        $result1=$this->db->select("select * from gs_course_msg,gs_user where gs_course_msg.uid=gs_user.uid and sid='$coid' order by gs_course_msg.mtime desc  $pages->limit");
        $this->smarty->assign("result1",$result1);



        $this->smarty->display("index/citeshow2.html");
    }

    /*
     * 搜索课程
     * */

    function searchCourse(){
        /*
         * 在有分页的情况下保留上次搜索结果信息
         * */
        if(P("pages")!==false){
            if(!isset($_SESSION["search_key"])){
                $search=P("search");
                $_SESSION["search_key_index"]=$search;
            }else{
                $search=$_SESSION["search_key_index"];
            }
        }else{
            $search=P("search");
            $_SESSION["search_key_index"]=$search;
        }

        $db=new db("gs_course");


        $sql="select * from gs_course where title LIKE '%$search%' or label LIKE '%$search%' or summary  LIKE '%$search%' or teacher LIKE '%$search%' order by ntime";

        $result=$db->select($sql);

        $pages=new pages(count($result),5);

        $this->smarty->assign("pages",$pages->out());

        $result=$db->select($sql." ".$pages->limit);




        $this->smarty->assign("courselist",$result);
        $this->smarty->display("index/citelist.html");
    }

    /*
     * 通过精品课程首页list2的搜索
     *
     *
     * 通过more进入课程详情页
     * */
    function searchCourseIndex(){
        /*
         * 获取最新课程
         * */
        $newlist=$this->db->select("select * from gs_course order by ntime limit 0,10");

        $this->smarty->assign("newlist",$newlist);

        $this->smarty->display("index/show2.html");
    }

    /*
     * 通过精品课程more进入show2后 iframe内容的获取
     * */
    function showCourseList(){
        $sql="select * from gs_course order by hits";
        $result=$this->db->select($sql);


        //分页
        $pages=new pages(count($result),10);

        $this->smarty->assign("pages",$pages->out());

        $result=$this->db->select($sql." ".$pages->limit);


        $this->smarty->assign("courselist",$result);

        $this->smarty->display("index/citelist.html");
    }

    /******************获取合作企业信息**********************/
    function showcoop(){

        $result=$this->db->select("select * from gs_cooperation order by ntime");

        $this->smarty->assign("showcoop",$result);
    }
/****************新闻页 上一篇   下一篇***************************/
//检查是否有上一篇
    function zyh_preCheck(){
       $nid=$_GET["nid"];
       $cid=$_GET["cid"];
       $newsart=$this->db->select("select * from gs_news where nid<$nid and cid=$cid");
       $len=count($newsart);
       if($len==0){
           echo "no";
       }
    }

    function zyh_pre(){
        $nid=$_GET["nid"];
        $cid=$_GET["cid"];
        $newsart=$this->db->select("select * from gs_news where nid<$nid and cid=$cid");
        $len=count($newsart);
        if($len>0){
            foreach($newsart as $k=>$v){
                if($k==$len-1){
                    $aa=$newsart[$k];
                }
            }
            $title=$aa["title"];
            $etitle=strtoupper($aa["etitle"]);
            $content=$aa["con"];
            $time=substr($aa["ntime"],0,10);
            $hits=$aa["hits"];
            $summary=$aa["summary"];
            $name=$aa["name"];
            $nid=$aa["nid"];
            $nimgurl=$aa["nimgurl"];
            $cid=$aa["cid"];
        }else if($len==0){
            $nn=$this->db->select("select * from gs_news where nid=$nid and cid=$cid");
            $title=$nn[0]["title"];
            $etitle=strtoupper($nn[0]["etitle"]);
            $content=$nn[0]["con"];
            $time=substr($nn[0]["ntime"],0,10);
            $hits=$nn[0]["hits"];
            $summary=$nn[0]["summary"];
            $name=$nn[0]["name"];
            $nid=$nn[0]["nid"];
            $nimgurl=$nn[0]["nimgurl"];
            $cid=$nn[0]["cid"];
        }
        $this->smarty->assign("title",$title);
        $this->smarty->assign("etitle",$etitle);
        $this->smarty->assign("content",$content);
        $this->smarty->assign("time",$time);
        $this->smarty->assign("hits",$hits);
        $this->smarty->assign("summary",$summary);
        $this->smarty->assign("name",$name);
        $this->smarty->assign("nid",$nid);
        $this->smarty->assign("nimgurl",$nimgurl);
        $this->smarty->assign("cid",$cid);
        //留言内容
        $result1=$this->db->select("select * from gs_news_msg,gs_user where gs_news_msg.uid=gs_user.uid and sid='$nid' order by gs_news_msg.mtime desc");
        $pages=new pages(count($result1),5);
        $this->smarty->assign("pages",$pages->out());
        $result1=$this->db->select("select * from gs_news_msg,gs_user where gs_news_msg.uid=gs_user.uid and sid='$nid' order by gs_news_msg.mtime desc $pages->limit");
        $this->smarty->assign("result1",$result1);
        $this->smarty->display("index/citeshow.html");
    }
//检查是否有下一篇
    function zyh_nextCheck(){
        $nid=$_GET["nid"];
        $cid=$_GET["cid"];
        $newsart=$this->db->select("select * from gs_news where nid>$nid and cid=$cid");
        $len=count($newsart);
        if($len==0){
            echo "no";
        }
    }
    function zyh_next(){
        $nid=$_GET["nid"];
        $cid=$_GET["cid"];
        $newsart=$this->db->select("select * from gs_news where nid>$nid and cid=$cid");
        $len=count($newsart);
        if($len>0){
            foreach($newsart as $k=>$v){
                if($k==0){
                    $aa=$newsart[$k];
                }
            }
            $title=$aa["title"];
            $etitle=strtoupper($aa["etitle"]);
            $content=$aa["con"];
            $time=substr($aa["ntime"],0,10);
            $hits=$aa["hits"];
            $summary=$aa["summary"];
            $name=$aa["name"];
            $nid=$aa["nid"];
            $nimgurl=$aa["nimgurl"];
            $cid=$aa["cid"];
        }else if($len==0){
            $nn=$this->db->select("select * from gs_news where nid=$nid and cid=$cid");
            $title=$nn[0]["title"];
            $etitle=strtoupper($nn[0]["etitle"]);
            $content=$nn[0]["con"];
            $time=substr($nn[0]["ntime"],0,10);
            $hits=$nn[0]["hits"];
            $summary=$nn[0]["summary"];
            $name=$nn[0]["name"];
            $nid=$nn[0]["nid"];
            $nimgurl=$nn[0]["nimgurl"];
            $cid=$nn[0]["cid"];

        }
        $this->smarty->assign("title",$title);
        $this->smarty->assign("etitle",$etitle);
        $this->smarty->assign("content",$content);
        $this->smarty->assign("time",$time);
        $this->smarty->assign("hits",$hits);
        $this->smarty->assign("summary",$summary);
        $this->smarty->assign("name",$name);
        $this->smarty->assign("nid",$nid);
        $this->smarty->assign("nimgurl",$nimgurl);
        $this->smarty->assign("cid",$cid);
        //留言内容
        $result1=$this->db->select("select * from gs_news_msg,gs_user where gs_news_msg.uid=gs_user.uid and sid='$nid' order by gs_news_msg.mtime desc");
        $pages=new pages(count($result1),4);
        $this->smarty->assign("pages",$pages->out());
        $result1=$this->db->select("select * from gs_news_msg,gs_user where gs_news_msg.uid=gs_user.uid and sid='$nid' order by gs_news_msg.mtime desc $pages->limit");
        $this->smarty->assign("result1",$result1);
        $this->smarty->display("index/citeshow.html");
    }
/*******************************公告上一篇下一篇*******************************************/
//检查是否有上一篇
    function zyh_noticPreCheck(){
        $nid=$_GET["nid"];
        $newsart=$this->db->select("select * from gs_notice where nid<$nid");
        $len=count($newsart);
        if($len==0){
            echo "no";
        }
    }
    function zyh_noticPre(){
        $nid=$_GET["nid"];
        $noticeart=$this->db->select("select * from gs_notice where nid<$nid");
        $len=count($noticeart);
        if($len>0){
            foreach($noticeart as $k=>$v){
                if($k==$len-1){
                    $aa=$noticeart[$k];
                }
            }
            $title=$aa["ntitle"];
            $etitle="";
            $content=$aa["ncon"];
            $time=substr($aa["ntime"],0,10);
            $hits="";
            $summary=$aa["nsummary"];
            $name=$aa["nname"];
            $cimgurl=$aa["nfile"];
            $nid=$aa["nid"];

        }else if($len==0){
            $nn=$this->db->select("select * from gs_notice where nid=$nid");
            $title=$nn[0]["ntitle"];
            $etitle="";
            $content=$nn[0]["ncon"];
            $time=substr($nn[0]["ntime"],0,10);
            $hits="";
            $summary=$nn[0]["nsummary"];
            $name=$nn[0]["nname"];
            $cimgurl=$nn[0]["nfile"];
            $nid=$nn[0]["nid"];
        }
        $this->smarty->assign("title",$title);
        $this->smarty->assign("etitle",$etitle);
        $this->smarty->assign("content",$content);
        $this->smarty->assign("time",$time);
        $this->smarty->assign("hits",$hits);
        $this->smarty->assign("summary",$summary);
        $this->smarty->assign("name",$name);
        $this->smarty->assign("nid",$nid);
        $this->smarty->assign("nimgurl",$cimgurl);
        $this->smarty->assign("notice","yes");
        $this->smarty->display("index/citeshow.html");
    }
    //检查是否有下一篇
    function zyh_noticNextCheck(){
        $nid=$_GET["nid"];
        $newsart=$this->db->select("select * from gs_notice where nid>$nid");
        $len=count($newsart);
        if($len==0){
            echo "no";
        }
    }
    function zyh_noticNext(){
        $nid=$_GET["nid"];
        $noticeart=$this->db->select("select * from gs_notice where nid>$nid");
        $len=count($noticeart);
        if($len>0){
            foreach($noticeart as $k=>$v){
                if($k==0){
                    $aa=$noticeart[$k];
                }
            }
            $title=$aa["ntitle"];
            $etitle="";
            $content=$aa["ncon"];
            $time=substr($aa["ntime"],0,10);
            $hits="";
            $summary=$aa["nsummary"];
            $name=$aa["nname"];
            $cimgurl=$aa["nfile"];
            $nid=$aa["nid"];

        }else if($len==0){
            $nn=$this->db->select("select * from gs_notice where nid=$nid");
            $title=$nn[0]["ntitle"];
            $etitle="";
            $content=$nn[0]["ncon"];
            $time=substr($nn[0]["ntime"],0,10);
            $hits="";
            $summary=$nn[0]["nsummary"];
            $name=$nn[0]["nname"];
            $cimgurl=$nn[0]["nfile"];
            $nid=$nn[0]["nid"];
        }
        $this->smarty->assign("title",$title);
        $this->smarty->assign("etitle",$etitle);
        $this->smarty->assign("content",$content);
        $this->smarty->assign("time",$time);
        $this->smarty->assign("hits",$hits);
        $this->smarty->assign("summary",$summary);
        $this->smarty->assign("name",$name);
        $this->smarty->assign("nid",$nid);
        $this->smarty->assign("nimgurl",$cimgurl);

        $this->smarty->assign("notice","yes");

        $this->smarty->display("index/citeshow.html");

    }




}