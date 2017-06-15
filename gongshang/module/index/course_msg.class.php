<?php
class course_msg extends indexMain{
    function __construct(){
        parent::__construct();
        $this->db=new db("gs_course_msg");
    }
    //留言的时候检查是否用户已登录
    function CheckLeaveWord(){
        $sid=$_GET["sid"];
        $this->session->set("near","index.php?m=index&f=art&a=showlistc&coid='$sid'");
        if($this->session->get("uid")){//如果用户已登录，进行的操作
            $mcon=$_GET["mcon"];
            if($mcon==""){
                $arr["message"]="请输入";
                echo json_encode($arr);
            }else{
                $uid=$this->session->get("uid");
                $result=$this->db->insert("mcon='$mcon';sid='$sid';uid='$uid'");
                if($result>0){
                    $mid=$this->db->insert_id;
                    $arr["mid"]=$this->db->insert_id;
                    $arr["message"]="yes";
                    $result1=$this->db->select("select * from gs_course_msg,gs_user where gs_course_msg.uid=gs_user.uid and gs_course_msg.mid='$mid'");
                    $arr["mtime"]=$result1[0]["mtime"];
                    $arr["mcon"]=$result1[0]["mcon"];
                    $user=$this->db->select("select * from gs_user where uid=".$this->session->get("uid"));
                    $arr["uimage"]=$user[0]["uimage"];
                    $arr["unickname"]=$user[0]["unickname"];
                    echo json_encode($arr);
                }
            }
        }else{
            $arr["message"]="no";
            echo json_encode($arr);
        }
    }
//点赞
    function checkDianZan(){
        $this->session->set("near","index.php?m=index&f=index&a=show2");
        if($this->session->get("uid")){//如果用户已登录，进行的操作
            $uid=$this->session->get("uid");
            $mid=$_GET["mid"];
// 判断用户点赞的评论是否是自己的
            $result3=$this->db->select("select * from gs_course_msg where uid=".$uid);//查评论表中的当前登录用户的评论
            foreach($result3 as $v){
                if($v['mid']==$mid){
                    echo "self";
                    exit;
                }
            }
            //判断当前用户是否对同一评论连续点赞
            $result4=$this->db->select("select * from gs_course_good where uid='$uid' and mid='$mid'");
            if(count($result4)>0){
                echo "dianguo";
                exit;
            }

            $db=new db("gs_course_good");
            $result=$db->insert("uid='$uid';mid='$mid'");
            $result1=$this->db->select("select * from gs_course_good where mid=".$mid);
            $good=count($result1);
            $result2=$this->db->where("mid=".$mid)->update("good=".$good);//修改留言表里的点赞数
            if($result>0){
                if($result2>0){
                    echo "yes";
                }
            }

        }else{
            echo "no";
        }
    }

    function checkdianguo(){
        if($this->session->get("uid")){
            $uid=$this->session->get("uid");
            $result=$this->db->select("select * from gs_course_msg,gs_course_good where gs_course_msg.mid=gs_course_good.mid and gs_course_good.uid=".$uid);
            echo json_encode($result);
        }
    }
//    点击量
    function hit(){
        $nid=$_GET["sid"];
        if($this->db->update("update gs_course set hits=hits+1 where coid=$nid")){
            echo "ok";
        }else{
            echo "no";
        }
    }

}


?>