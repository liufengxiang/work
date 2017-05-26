
window.onload=function(){
	//上传头像
    var imgurl=document.querySelector("#imgurl");
    var btn=document.querySelector("#imgurl_btn");

    var imgobj=new Upload("index.php?m=admin&f=upload&a=addtouxiang","#img_file",".dxj_sctx .img_progress",".dxj_sctx .img img");
    imgobj.uploadStart=function(){
        btn.setAttribute("disabled","disabled");
    }
    imgobj.up(function(e){
        if(e){
            imgurl.value=e;
            btn.removeAttribute("disabled");
        }

    })
   
}

