<?php
class art extends main{
    function __construct(){
        parent::__construct();
        $this->db=new db("gs_notice");
    }
    /*
    * 新闻
    * */
    // 跳转到添加新闻页面
    function addnews(){
        $db=new db("gs_category");
        $tree=new trees();
        $tree->tree(0,0,"gs_category",$db);
        $this->smarty->assign("tree",$tree->str);
        $this->smarty->display("admin/addnews.html");
    }
    // 添加新闻页提交的数据放入数据库
    function addnewsInfo(){
        $db=new db("gs_news");
        $title=P("title");  //文章标题
        $etitle=P("etitle");  //文章标题
        $cid=P("cid");  //分类id
        $name=P("name");  //发布人
        $summary=P("summary");  //摘要
        $con=P("editor_id");  //内容
        $nimgurl=P("imgurl1"); // 上传新闻图片
        $nposition=P("nposition"); // 首页推荐位 1表示大赛获奖，2表示院部活动，3表示其他


        if(empty($name)){
            $name="山西工商学院";
        }
        $summary=str_ireplace(" ","",$summary);
        if(empty($summary)){
            $summary=$title;
        }
        $result=$db->insert("insert into gs_news (title,etitle,name,summary,con,cid,nimgurl,nposition) values ('$title','$etitle','$name','$summary','$con',$cid,'$nimgurl',$nposition)");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=addnews","恭喜您！添加成功");
        }else{
            echo "添加失败";
        }
    }
    //  搜索出新闻内容。并将信息传入管理页
    function shownews(){

        /*
         * 卸载上次保留的搜索数据
         * */
        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
            unset($_SESSION["search_startdate"]);
            unset($_SESSION["search_enddate"]);
        }


        $db=new db("gs_news");

        $sql="select * from gs_news,gs_category where gs_news.cid=gs_category.cid";
        $result=$db->select($sql);
        /*
         * 分页 出现两条
         * */
        $pages=new pages(count($result),10);
        $res=$db->select("select * from gs_news,gs_category where gs_news.cid=gs_category.cid order by gs_news.cid $pages->limit");
        $pages=$pages->out();
        /*
         * 标题 title
         * 内容 con
         * 时间 ntime
         * 发布人 name
         * 摘要 summary
         * 点击量 hits
         * */
        $this->smarty->assign("pages",$pages);
        $this->smarty->assign("news",$res);
        $this->smarty->display("admin/shownews.html");
    }
    // 删除新闻
    function delnews(){
        $db=new db("gs_news");
        $nid=P("nid");
        $result=$db->delete("nid=$nid");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=shownews","恭喜您！添加成功");
        }else{
            var_dump($result);
            echo "删除失败";
        }
    }
    // 跳转到新闻修改页
    function editnews(){
        $db=new db("gs_news");
        $nid=P("nid");
        $result=$db->where("nid='$nid'")->select();
        $result=$result[0];
        $tree=new trees();
        $tree->treeCur(0,0,"gs_category",$db,$result['cid']);
        $this->smarty->assign("tree",$tree->str);
        $this->smarty->assign("news",$result);
        $this->smarty->display("admin/editnews.html");
    }
    // 修改新闻页提交的数据放入数据库
    function editnewsInfo(){
        $db=new db("gs_news");
        $nid=P("nid");
        $title=P("title");  //文章标题
        $etitle=P("etitle");  //文章标题
        $cid=P("cid");  //分类id
        $name=P("name");  //发布人
        $summary=P("summary");  //摘要
        $con=P("editor_id");  //内容
        $nimgurl=P("imgurl1"); // 上传新闻图片
        $nposition=P("nposition"); // 首页推荐位 1表示大赛获奖，2表示院部活动，3表示其他

        if(empty($name)){
            $name="山西工商学院";
        }
        $summary=str_ireplace(" ","",$summary);
        if(empty($summary)){
            $summary=$title;
        }
        $result=$db->update("update gs_news set title='$title',etitle='$etitle',name='$name',summary='$summary',con='$con',cid=$cid,nimgurl='$nimgurl',nposition=$nposition where nid=$nid");
        if($result>0){
            echo "修改成功";
        }else{
            echo "修改失败";
        }
    }
    // 搜索新闻内容
    function searchnews(){
        $db=new db("gs_news");


        /*
         * 在有分页的情况下保留上次搜索结果信息
         * */
        if(P("pages")!==false){
            if(!isset($_SESSION["search_key"])){
                $search=P("search");
                $startdate=strtotime(P("startdate"));
                $enddate=strtotime(P("enddate"));
                $_SESSION["search_key"]=$search;
                $_SESSION["search_startdate"]=$startdate;
                $_SESSION["search_enddate"]=$enddate;
            }else{
                $search=$_SESSION["search_key"];
                $startdate=$_SESSION["search_startdate"];
                $enddate=$_SESSION["search_enddate"];
            }
        }else{
            $search=P("search");
            $startdate=strtotime(P("startdate"));
            $enddate=strtotime(P("enddate"));
            $_SESSION["search_key"]=$search;
            $_SESSION["search_startdate"]=$startdate;
            $_SESSION["search_enddate"]=$enddate;
        }


        if($startdate==false){
            $sql="select * from gs_news,gs_category where ( gs_news.title  LIKE '%$search%' or gs_news.summary  LIKE '%$search%' or gs_category.cname LIKE '%$search%') and  gs_news.cid=gs_category.cid";
        }else if($enddate==false){
            $sql="select * from gs_news,gs_category where  UNIX_TIMESTAMP(ntime) >= $startdate and ( gs_news.title  LIKE '%$search%' or gs_news.summary  LIKE '%$search%' or gs_category.cname LIKE '%$search%') and  gs_news.cid=gs_category.cid";
        }else{
            $sql="select * from gs_news,gs_category where  UNIX_TIMESTAMP(ntime)>=$startdate and UNIX_TIMESTAMP(ntime)<=$enddate and ( gs_news.title  LIKE '%$search%' or gs_news.summary  LIKE '%$search%' or gs_category.cname LIKE '%$search%') and  gs_news.cid=gs_category.cid";
        }
        /*
         * 搜索标准：
         *  新闻名称
         *  新闻摘要
         *  分类名称
         *
         * */
        $result=$db->select("select * from gs_news,gs_category where ( gs_news.title  LIKE '%$search%' or gs_news.summary  LIKE '%$search%' or gs_category.cname LIKE '%$search%') and  gs_news.cid=gs_category.cid");
        $pages=new pages(count($result),10);
        $res=$db->select("select * from gs_news,gs_category where ( gs_news.title  LIKE '%$search%' or gs_news.summary  LIKE '%$search%' or gs_category.cname LIKE '%$search%') and  gs_news.cid=gs_category.cid order by gs_news.cid $pages->limit");
        $pages=$pages->out();
        $this->smarty->assign("pages",$pages);
        $this->smarty->assign("news",$res);
        $this->smarty->display("admin/shownews.html");
    }
    /*
     * 精品课程
     * */
    // 精品课程添加页
    function addcourse(){
        $this->smarty->display("admin/addcourse.html");
    }
    // 精品课程提交到数据库中
    function addcourseInfo(){
        $db=new db("gs_course");
        $title=P("title");  //文章标题
        $etitle=P("etitle");  //文章标题
        $label=P("label");  //标签名称
        $name=P("name");  //发布人
        $summary=P("summary");  //摘要
        $con=P("editor_id");  //内容
        $teacher=P("teacher");  //课程主讲人
        $timgurl=P("imgurl1");  //主讲人照片
        $cimgurl=P("imgurl2");  //课程图片
        $tzhicheng=P("tzhicheng"); // 主讲人职称

        $cposition=P("cposition");//课程推荐位


        // 设置发布人的默认值
        if(empty($name)){
            $name="计算机信息工程学院";
        }
        // 设置摘要的默认值
        $summary=str_ireplace(" ","",$summary);
        if(empty($summary)){
            $summary=$title;
        }
        // 设置发布人的名称
        if(empty($teacher)){
            $teacher="计算机信息工程学院";
        }


        $result=$db->insert("insert into gs_course (title,etitle,name,summary,con,label,teacher,timgurl,cimgurl,tzhicheng,cposition) values ('$title','$etitle','$name','$summary','$con','$label','$teacher','$timgurl','$cimgurl','$tzhicheng','$cposition')");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=addcourse","恭喜您！添加成功");
        }else{
            echo "添加失败";
        }
    }
    //  搜索出精品课程内容。并将信息传入管理页
    function showcourse(){

        /*
         * 卸载上次保留的搜索数据
         * */
        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
            unset($_SESSION["search_startdate"]);
            unset($_SESSION["search_enddate"]);
        }

        $db=new db("gs_course");
        $result=$db->select("select * from gs_course");
        $pages=new pages(count($result),10);
        $res=$this->db->select("select * from gs_course order by ntime $pages->limit");
        $pages=$pages->out();

        /*
         * 标题 title
         * 英文标题 etitle
         * 时间 ntime
         * 发布人 name
         * 摘要 summary
         * 点击量 hits
         * */

        $this->smarty->assign("pages",$pages);
        $this->smarty->assign("course",$res);
        $this->smarty->display("admin/showcourse.html");
    }
    // 删除精品课程
    function delcourse(){
        $db=new db("gs_course");
        $coid=P("coid");
        $result=$db->delete("coid=$coid");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=showcourse","恭喜您！删除成功");
        }else{
//            var_dump($result);
            echo "删除失败";
        }
    }
    // 修改精品课程
    function editcourse(){
        $db=new db("gs_course");
        $coid=P("coid");
        $result=$db->where("coid='$coid'")->select();
        $result=$result[0];
        $this->smarty->assign("course",$result);
        $this->smarty->display("admin/editcourse.html");
    }
    // 将修改后的精品课程更新到数据库
    function editcourseInfo(){
        $db=new db("gs_course");
        $coid=P("coid");
        $title=P("title");  //文章标题
        $etitle=P("etitle");  //文章标题
        $label=P("label");  //课程标签
        $name=P("name");  //发布人
        $summary=P("summary");  //摘要
        $con=P("editor_id");  //内容


        $teacher=P("teacher");  //课程主讲人
        $timgurl=P("imgurl1");  //主讲人照片
        $cimgurl=P("imgurl2");  //课程图片
        $tzhicheng=P("tzhicheng"); // 主讲人职称
        $cposition=P("cposition");//课程推荐位

        if(empty($name)){
            $name="山西工商学院";
        }
        $summary=str_ireplace(" ","",$summary);
        if(empty($summary)){
            $summary=$title;
        }

        // 设置发布人的名称
        if(empty($teacher)){
            $teacher="计算机信息工程学院";
        }

        $result=$db->update("update gs_course set title='$title',etitle='$etitle',name='$name',summary='$summary',con='$con',label='$label',teacher='$teacher',timgurl='$timgurl',cimgurl='$cimgurl',tzhicheng='$tzhicheng',cposition='$cposition' where coid=$coid");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=showcourse","恭喜您！修改成功");
        }else{
            var_dump($result);
            echo "修改失败";
        }
    }
    // 精品课程搜索
    function searchcourse(){
        $db=new db("gs_course");

        if(P("pages")!==false){
            if(!isset($_SESSION["search_key"])){
                $search=P("search");
                $startdate=strtotime(P("startdate"));
                $enddate=strtotime(P("enddate"));
                $_SESSION["search_key"]=$search;
                $_SESSION["search_startdate"]=$startdate;
                $_SESSION["search_enddate"]=$enddate;
            }else{
                $search=$_SESSION["search_key"];
                $startdate=$_SESSION["search_startdate"];
                $enddate=$_SESSION["search_enddate"];
            }
        }else{
            $search=P("search");
            $startdate=strtotime(P("startdate"));
            $enddate=strtotime(P("enddate"));
            $_SESSION["search_key"]=$search;
            $_SESSION["search_startdate"]=$startdate;
            $_SESSION["search_enddate"]=$enddate;
        }


        if($startdate==false){
            $sql="select * from gs_course where (label LIKE '%$search%' or title  LIKE '%$search%' or summary LIKE '%$search%' or teacher LIKE '%$search%' )";
        }else if($enddate==false){
            $sql="select * from gs_course where  UNIX_TIMESTAMP(ntime) >= $startdate and (label LIKE '%$search%' or title  LIKE '%$search%' or summary LIKE '%$search%' or teacher LIKE '%$search%' )";
        }else{
            $sql="select * from gs_course where  UNIX_TIMESTAMP(ntime)>=$startdate and UNIX_TIMESTAMP(ntime)<=$enddate and (label LIKE '%$search%' or title  LIKE '%$search%' or summary LIKE '%$search%' or teacher LIKE '%$search%' )";
        }

        $result=$db->select($sql);


        $pages=new pages(count($result),10);

        $res=$this->db->select($sql." order by ntime $pages->limit");

        $pages=$pages->out();

        $this->smarty->assign("pages",$pages);
        $this->smarty->assign("course",$res);
        $this->smarty->display("admin/showcourse.html");

    }
    /*
    * 学院公告
    * */
    // 跳转到添加公告文章页面
    function addnotice(){
        $this->smarty->display("admin/addnotice.html");
    }
    // 添加的公告文章内容放入数据库的函数
    function addnoticeInfo(){
        $ntitle=P("ntitle");  //文章标题
        $nname=P("nname");  //发布人
        $nsummary=P("nsummary");  //摘要
        $ncon=P("editor_id");  //内容
        if(empty($nname)){
            $nname="山西工商学院";
        }
        $nsummary=str_ireplace(" ","",$nsummary);
        if(empty($nsummary)){
            $nsummary=$ntitle;
        }
        $result=$this->db->insert("insert into gs_notice (ntitle,nname,nsummary,ncon) values ('$ntitle','$nname','$nsummary','$ncon')");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=addnotice","恭喜您！添加成功");
        }else{
            echo "添加失败";
        }
    }
    //  搜索出公告内容。并将信息传入管理页
    function shownotice(){

        /*
         * 卸载上次保留的搜索数据
         * */
        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
            unset($_SESSION["search_startdate"]);
            unset($_SESSION["search_enddate"]);
        }


        $result=$this->db->select();
        $pages=new pages(count($result),10);
        $res=$this->db->select("select * from gs_notice order by ntime $pages->limit");
        $pages=$pages->out();
        /*
         * 标题 ntitle
         * 内容 ncon
         * 时间 ntime
         * 发布人 nname
         * 摘要 nsummary
         * */
        $this->smarty->assign("pages",$pages);
        $this->smarty->assign("notice",$res);
        $this->smarty->display("admin/shownotice.html");
    }
    // 跳转到删除公告文章页面
    function delnotice(){
        $nid=P("nid");
        $result=$this->db->delete("nid=$nid");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=shownotice","恭喜您！删除成功");
        }else{
            var_dump($result);
            echo "删除失败";
        }
    }
    // 跳转到公告修改页
    function editnotice(){
        $nid=P("nid");
        $result=$this->db->where("nid=$nid")->select();
        $result=$result[0];
        $this->smarty->assign("notice",$result);
        $this->smarty->display("admin/editnotice.html");
    }
    // 修改的公告文章内容放入数据库的函数
    function editnoticeInfo(){
        $nid=P("nid");
        $ntitle=P("ntitle");  //文章标题
        $nname=P("nname");  //发布人
        $nsummary=P("nsummary");  //摘要
        $ncon=P("editor_id");  //内容
        if(empty($nname)){
            $nname="山西工商学院";
        }
        $nsummary=str_ireplace(" ","",$nsummary);
        if(empty($nsummary)){
            $nsummary=$ntitle;
        }
        $result=$this->db->update("update gs_notice set ntitle='$ntitle',nname='$nname',nsummary='$nsummary',ncon='$ncon' where nid=$nid");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=shownotice","恭喜您！修改成功");
        }else{
            echo "修改失败";
        }
    }
    //搜索
    function searchnotice(){

        /*
         * 在有分页的情况下保留上次搜索结果信息
         * */
        if(P("pages")!==false){
            if(!isset($_SESSION["search_key"])){
                $search=P("search");
                $startdate=strtotime(P("startdate"));
                $enddate=strtotime(P("enddate"));
                $_SESSION["search_key"]=$search;
                $_SESSION["search_startdate"]=$startdate;
                $_SESSION["search_enddate"]=$enddate;
            }else{
                $search=$_SESSION["search_key"];
                $startdate=$_SESSION["search_startdate"];
                $enddate=$_SESSION["search_enddate"];
            }
        }else{
            $search=P("search");
            $startdate=strtotime(P("startdate"));
            $enddate=strtotime(P("enddate"));
            $_SESSION["search_key"]=$search;
            $_SESSION["search_startdate"]=$startdate;
            $_SESSION["search_enddate"]=$enddate;
        }

        $search=P("search");
        $result=$this->db->select("select * from gs_notice where ntitle LIKE '%$search%' or nsummary  LIKE '%$search%'");
        /*
         * 分页
         * */
        $pages=new pages(count($result),10);
        $res=$this->db->select("select * from gs_notice where ntitle LIKE '%$search%' or nsummary  LIKE '%$search%' order by ntime $pages->limit");
        $pages=$pages->out();
        $this->smarty->assign("pages",$pages);
        $this->smarty->assign("notice",$res);
        $this->smarty->display("admin/shownotice.html");
    }

    /***************校企合作******************/

    // 添加校企合作
    function addcoop(){

        $this->smarty->display("admin/addcoop.html");
    }
    // 将校企合作信息放入数据库
    function addcoopInfo(){
        $coname=P("coname");  //企业名称
        $name=P("name");  //发布人
        $state=P("state");  //合作状态，合作状态为1代表合作中，2代表取消合作
        $cotime=P("cotime");  //合作日期
        $link=P("link");  //企业链接
        $introduce=P("introduce");  //合作日期
        $logoimg=P("imgurl1");  //企业logo


        if(empty($name)){
            $name="计算机信息工程学院";
        }

        $result=$this->db->insert("insert into gs_cooperation  (coname,name,state,cotime,link,introduce,logoimg) values ('$coname','$name',$state,'$cotime','$link','$introduce','$logoimg')");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=addcoop","恭喜您！添加成功");
        }else{
            echo "添加失败";
        }

    }

    // 查看所有校企合作信息
    function showcoop(){

        /*
         * 卸载上次保留的搜索数据
         * */
        if(isset($_SESSION["search_key"])){
            unset($_SESSION["search_key"]);
            unset($_SESSION["search_startdate"]);
            unset($_SESSION["search_enddate"]);
        }


        $result=$this->db->select("select * from gs_cooperation");
        $pages=new pages(count($result),10);
        $res=$this->db->select("select * from gs_cooperation order by ntime $pages->limit");
        $pages=$pages->out();
        /*
         * coname  企业名称
         * ntime   发表日期
         * cotime   合作日期
         * link   企业官网链接
         * state  合作状态
         * name  发布人
         * */
        $this->smarty->assign("pages",$pages);
        $this->smarty->assign("coop",$res);

        $this->smarty->display("admin/showcoop.html");
    }

    // 搜索所有校企合作信息
    function searchcoop(){

        /*
         * 在有分页的情况下保留上次搜索结果信息
         * */
        if(P("pages")!==false){
            if(!isset($_SESSION["search_key"])){
                $search=P("search");
                $startdate=strtotime(P("startdate"));
                $enddate=strtotime(P("enddate"));
                $_SESSION["search_key"]=$search;
                $_SESSION["search_startdate"]=$startdate;
                $_SESSION["search_enddate"]=$enddate;
            }else{
                $search=$_SESSION["search_key"];
                $startdate=$_SESSION["search_startdate"];
                $enddate=$_SESSION["search_enddate"];
            }
        }else{
            $search=P("search");
            $startdate=strtotime(P("startdate"));
            $enddate=strtotime(P("enddate"));
            $_SESSION["search_key"]=$search;
            $_SESSION["search_startdate"]=$startdate;
            $_SESSION["search_enddate"]=$enddate;
        }

        $search=P("search");
        $result=$this->db->select("select * from gs_cooperation where coname LIKE '%$search%'");
        /*
         * 分页
         * */
        $pages=new pages(count($result),10);
        $res=$this->db->select("select * from gs_cooperation where coname LIKE '%$search%' order by ntime $pages->limit");
        $pages=$pages->out();

        $this->smarty->assign("pages",$pages);
        $this->smarty->assign("coop",$res);
        $this->smarty->display("admin/showcoop.html");
    }

    // 删除校企合作信息
    function delcoopInfo(){
        $coid=P("coid");

        $db=new db("gs_cooperation");
        $result=$db->delete("coid=$coid");
        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=showcoop","恭喜您！删除成功");
        }else{
//            var_dump($result);
            echo "删除失败";
        }
    }

    // 进入修改校企合作信息页面
    function editcoop(){
        $coid=P("coid");
        $result=$this->db->select("select * from gs_cooperation where coid=$coid");
        $result=$result[0];
        $this->smarty->assign("coop",$result);

        $this->smarty->display("admin/editcoop.html");
    }

    // 修改校企合作信息
    function editcoopInfo(){
        $coid=P("coid");

        $coname=P("coname");  //企业名称
        $name=P("name");  //发布人
        $state=P("state");  //合作状态，合作状态为1代表合作中，2代表取消合作
        $cotime=P("cotime");  //合作日期
        $link=P("link");  //企业链接
        $introduce=P("introduce");  //合作日期
        $logoimg=P("imgurl1");  //企业logo


        if(empty($name)){
            $name="计算机信息工程学院";
        }
        $result=$this->db->update("update gs_cooperation set coname='$coname',name='$name',state='$state',cotime='$cotime',link='$link',introduce='$introduce',logoimg='$logoimg' where coid=$coid");

        if($result>0){
            $this->jump("index.php?m=admin&f=art&a=showcoop","恭喜您！修改成功");
        }else{
            echo "添加失败";
        }

    }



    /**************上传图片*********************/
    //    上传主讲人照片和课程图片
    function upload1(){
        date_default_timezone_set("Asia/Shanghai");
        $time=time();
        $showtime=date("Y-m-d");
        if(is_uploaded_file($_FILES["file"]["tmp_name"])){
            $name=$_FILES["file"]["name"];
            if(!file_exists("upload/".$showtime)){
                $wenjian=mkdir("upload/".$showtime,0777,true);
            }
            $url="upload/".$showtime."/".$time.$name;
            move_uploaded_file($_FILES["file"]["tmp_name"],$url);
            echo HTTP_URL."/upload/".$showtime."/".$time.$name;
        }
    }

}