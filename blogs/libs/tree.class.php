<?php
	class trees{
		function trees(){
			$this->str="";
		}
		// pid - 数据库  表单
		function tree($pid,$flag,$db,$table,$id=null){
			$idp=null;
			if($id){
				$result1=$db->query("select * from $table where cid=".$id);
				$row1=$result1->fetch_assoc();
				$idp=$row1["pid"];
			}
			$flag=$flag+1;
			$sql="select * from $table where pid=".$pid;
			$result=$db->query($sql);
			while($row=$result->fetch_assoc()){
				$cid=$row["cid"];
				$str=str_repeat("-",$flag);
				if($cid==$idp){
					$this->str.="<option selected value='$cid'>{$str}{$row['cname']}</option>";

				}else if($idp==0&&$cid==$id){
					$this->str.="<option selected value='$idp'>一级分类</option>";
				}else{
					$this->str.="<option value='$cid'>{$str}{$row['cname']}</option>";
				}
				$this->tree($row["cid"],$flag,$db,$table,$id);
			};
		}
		function table($pid,$flag,$db,$table){
			$flag=$flag+1;
			$sql="select * from $table where pid=".$pid;
			$result=$db->query($sql);
			while($row=$result->fetch_assoc()){
				$cid=$row["cid"];
				$this->str.="<tr>";
				$str=str_repeat("-",$flag);
				$this->str.="<td>{$cid}</td>";
				$this->str.="<td>{$row['pid']}</td>";
				$this->str.="<td>{$str}{$row['cname']}</td>";
				$this->str.="<td><a href='index.php?m=admin&f=mains&a=delcategory&id=$cid'>删除</a><a href='index.php?m=admin&f=mains&a=xiugaicategory&id=$cid'>编辑</a></td>";
				$this->str.="</tr>";
				$this->table($row["cid"],$flag,$db,$table);
			};
		}
	}
?>