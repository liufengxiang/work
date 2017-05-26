<?php
	header("Content-Type:text/html;charset=utf-8");
	class sql{
		public $localname="sqld.duapp.com";//服务器名称
		public $sqlname="uPSrbHnuINGfZacyFkpE";//数据库名称
		public $tablename="";//数据表名称
		public $content;//结果
		private $username="0474ed60be254fae9570d7389e698257";
		private $pass="8a620920b91c421b9a7432dd7ed1afac";
		public $fileds;//创建一个对象
		public $field="";//创建一个字段
		//构造函数
		function sql($tablename){
			$this->tablename=$tablename;
			//$mysql=new mysqli("localhost","root","","class");
			$this->content=new mysqli($this->localname,$this->username,$this->pass,$this->sqlname,4050);
			if(mysqli_connect_errno($this->content)){
				echo "连接失败！";
				exit;
			}
			//$mysql->query("set names utf8");
			$this->content->query("set names utf8");
			$this->fileds["filed"]="*";
			$this->fileds["where"]=$this->fileds["order"]=$this->fileds["limit"]="";
		}
		//查询数据
		function select($str=""){
			$str=$str===""?"select ".$this->fileds["filed"]." from ".$this->tablename.$this->fileds["where"].$this->fileds["order"].$this->fileds["limit"]:$str;
			$result=$this->content->query($str);
			$arr=Array();
			while($row=$result->fetch_assoc()){
				$arr[]=$row;
			}
			return $arr;
		}
		//删除数据
		function delete($str=""){
			$str=$str===""?"delete from ".$this->tablename.$this->fileds["where"]:$str;
			$result=$this->content->query($str);
			return $this->content->affected_rows;
		}
		//修改数据
		//update stu set name="likai",age=3 where id=23
		function update($str=""){
			$str=$str===""?"update ".$this->tablename." set ".$this->field.$this->fileds["where"]:$str;
			$result=$this->content->query($str);
			return $this->content->affected_rows;
		}
		//添加数据
		//insert into stu (name,age) values ('junjie','12')
		function insert($str=""){
			$str=$str===""?"insert into ".$this->tablename.$this->field:$str;
			$result=$this->content->query($str);
			return $this->content->affected_rows;
		}
		//where 条件函数
		function where($str=""){
			$str=empty($str)?"":" where ".$str;
			$this->fileds["where"]=$str;
			return $this;
		}
		//* 要查询的值
		function chaxun($str=""){
			$str=empty($str)?"*":$str;
			$this->fileds["filed"]=$str;
			return $this;
		}
		//order 排序
		function order($str=""){
			$str=empty($str)?"":" order by ".$str;
			$this->fileds["order"]=$str;
			return $this;
		}
		//截取
		function limit($str=""){
			$str=empty($str)?"":" limit ".$str;
			$this->fileds["order"]=$str;
			return $this;
		}
		//字段    添加时，用;隔开。。。。修改时，用,隔开
		function field($str=""){
			if(strpos($str,";")){
				$arr=explode(";",$str);//将字符串转为数组
				$key=$zhi="";
				foreach($arr as $a=>$b){
					$arr2=explode("=",$b);
					$key.=$arr2[0].",";
					$zhi.=$arr2[1].",";
				}
				$key=substr($key,0,-1);
				$zhi=substr($zhi,0,-1);
				$str="(".$key.") values (".$zhi.")";
			}
			$this->field=" ".$str." ";
			return $this;
		}
	}

?>