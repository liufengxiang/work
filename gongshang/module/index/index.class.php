<?php

    class index extends indexMain{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("gs_user");
        }

        function init(){

			/*
			 * 获取公告数据
			 * */

			$notice=$this->db->select("select * from gs_notice ORDER BY ntime limit 0,4");
            $this->smarty->assign("notice",$notice);

            /*
             * 获取动态数据
             * */
            $newslist=$this->db->select("select * from gs_news order by ntime limit 0,4");
            $this->smarty->assign("newslist",$newslist);

            /*
             * 校企合作数据获取
             */
            $coopdb=new db("gs_cooperation");
            $cooplist=$coopdb->select("select * from gs_cooperation order by ntime limit 0,17");
            $this->smarty->assign("cooplist",$cooplist);
            /*
             * 首页的大赛获奖推荐位
             * */
            $bisailist=$this->db->select("select * from gs_news order by ntime limit 0,4");
            $this->smarty->assign("bisailist",$bisailist);
            
            $this->smarty->display("index/index.html");//登录成功返回主页


        }

    }
