<?php
header("content-type:text/html;charset=utf8");
    class pages{
        public $total;//一共有多少条信息
        public $pageNum;//一页能放几条
        public $current;//当前是第几页
        public $pageNums;//能放几页
        public $param;//地址栏默认的参数
        public $limit;//显示限定有几个1234
        function pages($total,$pageNum=2,$param="pages"){
            $this->total=$total;
            $this->pageNum=$pageNum;
            $this->pageNums=ceil($this->total/$this->pageNum);
            $this->param=$param;
        }
        function out(){
            $this->current=isset($_GET[$this->param])?$_GET[$this->param]:0;//当前的第几页
            $url=isset($_GET[$this->param])?substr($_SERVER["REQUEST_URI"],0,strrpos($_SERVER["REQUEST_URI"],"=")+1):$_SERVER["REQUEST_URI"]."&pages=";//地址
            $str="<span>一共有".$this->total."条&nbsp;&nbsp;</span>";
            $str.="<span>一共".$this->pageNums."页&nbsp;&nbsp;</span>";

            $str.="&nbsp;&nbsp;<a href='{$url}0' id='first'>首页</a>";//首页

            $up=$this->current-1<0?0:$this->current-1;
            $str.="&nbsp;&nbsp;<a href='{$url}{$up}' id='up'>上一页</a>";//上一页

            $start=$this->current-3<0?0:$this->current-3;//开始显示

            //结束显示
            if($this->current-3<0){
                $end=$this->pageNums<6?$this->pageNums:6;
            }else{
                $end=$this->current+3>$this->pageNums?$this->pageNums:$this->current+3;
            }
            for($i=$start;$i<$end;$i++){
                $n=$i+1;
                if($i==$this->current){
                    $style="color:red";
                }else{
                    $style="color:blue";
                }
                $str.="&nbsp;&nbsp;<a href='{$url}{$i}' style='{$style}'>".$n."</a>";
            }
            $next=$this->current+1>$this->pageNums-1?$this->pageNums-1:$this->current+1;
            $str.="&nbsp;&nbsp;<a href='{$url}{$next}' id='next'>下一页</a>";//下一页

            $last=$this->pageNums-1;
            $str.="&nbsp;&nbsp;<a href='{$url}{$last}' id='last'>尾页</a>";//尾页

            //当前页和总页数；
            $this->limit=$this->current*$this->pageNum.",".$this->pageNum;

            return $str;
        }
    }
//$pages=new pages(10);
//echo $pages->out();
//echo $pages->limit;
?>