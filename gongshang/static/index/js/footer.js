$(function(){

yuanbu();
function yuanbu(){
	var t=setInterval(move,5000);
	var w=$(".l-yuan").width()/4;
	var n=0;
	function move(){
		$(".l-yuan ul").animate({marginLeft:-w},1000,function(){
			var one=$(".l-yuan ul li").eq(0);
			$(".l-yuan ul li").eq(0).remove();
			$(".l-yuan ul").append(one);
			$(".l-yuan ul").css("margin-left","0");
		});
	}

	//鼠标移入停止
	$(".l-yuan").hover(function(){
		clearInterval(t);
	},function(){
		t=setInterval(move,5000);
	})

	//左右点击
	$(".l-yuan-left").click(function(){
		$(".l-yuan ul").prepend($(".l-yuan ul li").eq($(".l-yuan ul li").length-1));
		$(".l-yuan ul").css("margin-left",-w+"px").animate({marginLeft:0},1000);
	})
	$(".l-yuan-right").click(function(){
		$(".l-yuan ul").animate({marginLeft:-w},1000,function(){
			var one=$(".l-yuan ul li").eq(0);
			$(".l-yuan ul li").eq(0).remove();
			$(".l-yuan ul").append(one);
			$(".l-yuan ul").css("margin-left","0");
		});
	})
}



})