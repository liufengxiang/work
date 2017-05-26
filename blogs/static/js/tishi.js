var spans=document.getElementsByTagName('span')[0];
var a=document.querySelector("a");
var href=a.getAttribute("href");
var a=3;
var t=setInterval(function(){
	a--;
	if(a<=0){
		location.href=href;//跳回table界面
	}
	spans.innerHTML=a;
},1000)