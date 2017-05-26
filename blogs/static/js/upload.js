/*
 * 
 * 调用方法
 * var up=new upload("bb.php","input",".inner",function);
 * up.upload();
 * 0	后台的地址php
 * 1 	文件上传器  input
 * 2	进度条
 * 3	图片的缓存
 * 
 * 
 * php中写的内容
 * $name=$_FILES["file"]["name"];
	$url="aa/".$name;
	if(is_uploaded_file($_FILES["file"]["tmp_name"])){
		move_uploaded_file($_FILES["file"]["tmp_name"],$url);
	}
 * 
 */
function upload(url,selecter,success){
	var selecter=selecter||{};//传进来的input 即上传文件器
	if(typeof(selecter)=="string"){
		this.obj=document.querySelector(selecter);
	}else if(selecter.nodeName=="INPUT"){
		this.obj=selecter;
	}
	// var progressObj=progressObj||{};//进度条
	// if(typeof(progressObj)=="string"){
	// 	this.progressObj=document.querySelector(progressObj);
	// }else if(progressObj.nodeName=="DIV"){
	// 	this.progressObj=progressObj;
	// }
//	var imgObj=imgObj||{};//图片缓存
//	if(typeof(imgObj)=="string"){
//		this.imgObj=document.querySelector(imgObj);
//	}else if(imgObj.nodeName=="IMG"){
//		this.imgObj=imgObj;
//	}
	this.success=success;
	this.url=url;//后台地址
	this.data;//获取input中的数据
	this.types;//即文件类型
	this.size=1024*1024*20;//预设的文件最大值
	this.type=["jpg","jpeg","png","gif"];//预设的文件类型
}
upload.prototype={
	//主函数
	upload:function(){
		if(this.url){
			this.getCon();//运行获取内容
		}else{
			alert("请输入正确的地址");
		}
	},
	//获取内容
	getCon:function(){
		var that=this;
		this.obj.onchange=function(){
			that.data=this.files[0];//获取第一个file文件
			var index=that.data.name.lastIndexOf(".")+1;//后缀名下标
			that.types=that.data.name.substr(index);//后缀名
			that.ajax();//执行ajax
		}
	},
	//判定符合条件
	check:function(){
		var flag=true;//开关
		for(var i=0;i<this.type.length;i++){
			if(this.type[i]==this.types){
				flag=false;//判定是否有该类型
				break;
			}
		}
		if(flag){
			alert("文件格式不对！");
			return false;
		}
		if(this.data.size>this.size){
			alert("文件过大!");
			return false;
		}
		return true;
	},
	//调用ajax
	ajax:function(){
		var that=this;
		if(this.check()){
			var formobj=new FormData();//创建表单
			formobj.append("file",this.data);
			var ajax=new XMLHttpRequest();
			ajax.open("post",this.url);//url 
			ajax.send(formobj);
			// ajax.upload.onprogress=function(e){
			// 	var loaded=e.loaded;
			// 	var total=e.total;
			// 	var scale=loaded/total*100;
			// 	that.progressObj.style.width=scale.toFixed(2)+"%";
			// 	that.progressObj.style.backgroundColor="greenyellow";
			// 	that.progressObj.innerHTML=scale.toFixed(2)+"%";
			// }
			ajax.onload=function(){
				that.success(ajax.response);
			}
			//图片的缓存
//			var read=new FileReader();
//			read.readAsDataURL(that.data);//将文件的url解析给read
//			read.onload=function(e){
//				that.imgObj.src=e.target.result;//将图片文件复制给src
//			}
		}
	}
}