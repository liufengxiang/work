<?php
    class upload extends indexMain{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("gs_user");
        }


        function addtouxiang(){

            $result=$this->db->select("select * from gs_info");
            $row=$result[0];

            $url=$row["host"]."/".$row['imgfile']."/";

            $time=time();

            if(is_uploaded_file($_FILES["file"]["tmp_name"])){
                if(!file_exists(ROOT_URL."/static/upload")){
                    mkdir(ROOT_URL."/static/upload");
                }
                $dirname=date("y-m");
                if(!file_exists(ROOT_URL."/static/upload/".$dirname)){
                    mkdir(ROOT_URL."/static/upload/".$dirname);
                }

                $filename=$time.iconv("GBK","UTF-8",$_FILES["file"]["name"]);

                move_uploaded_file($_FILES["file"]["tmp_name"],ROOT_URL."/static/upload/".$dirname."/".$filename);
                echo "http://".$url.$dirname."/".$filename;

            }

        }

        function addtouxiangInfo(){
            $imgurl=P("imgurl");
            $uid=P("uid");

            $result=$this->db->where("uid=$uid")->update("uimage='$imgurl'");
            if($result>0){
                $message="头像上传成功";
                $url="index.php?m=index";
                $this->jump($url,$message);
            }else{
                $message="头像上传失败";
                $url="index.php?m=index";
                $this->jump($url,$message);
            }
        }
     
    }


