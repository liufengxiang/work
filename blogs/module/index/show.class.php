<?php
    class show extends main{
        //提交发布
        function sub(){
            if($this->check()){
                $cid=p("cid");
                $stitle=p("stitle");
                $sname=p("sname");
                $szai=p("szai");
                $scon=p("scon");
                $sql=new sql("content");
                if($sql->insert("insert into content (cid,stitle,sname,szai,scon) values ('$cid','$stitle','$sname','$szai','$scon')")==1){
                    $this->dump("index.php","发布成功！");
                }else{
                    $this->dump("index.php","发布失败！");
                }
            }else{
                $this->dump("index.php","对不起，请先登录！");
            }
        }


    }
?>