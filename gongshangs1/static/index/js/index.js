$(document).ready(function(){
 //3d旋转轮播
 function bannerd(){
 	var $a=$(".dxj_btns a");
	var $s=$(".btn_c");
	var $dxj_li=$(".dxj_lis li");
	var cArr=["p2","p1","p7","p6","p5","p4","p3"];
	var index=0;
	$(".dxj_next").click(
		function(){
		nextimg();show();
		}
	)
	$(".dxj_prev").click(
		function(){
		previmg();show();
		}
	)
	//上一张
	function previmg(){
		cArr.unshift(cArr[6]);
		cArr.pop();
    
		$($dxj_li).each(function(i,e){
			$(e).removeClass().addClass(cArr[i]);
		})
		index--;
		if (index<0) {
			index=6;
		}
		show();

	}
	
	//下一张
	function nextimg(){
		cArr.push(cArr[0]);
		cArr.shift();
		$($dxj_li).each(function(i,e){
			$(e).removeClass().addClass(cArr[i]);
		})
		index++;
		if (index>6) {
			index=0;
		}
	    show();
	}

//通过底下按钮点击切换
$a.each(function(){
	$(this).hover(function(){
		clearInterval(timer);
		var myindex=$(this).index();
		var b=myindex-index;
		if(b==0){
			return;
		}
		else if(b>0) {

			var newarr=cArr.splice(0,b);
			cArr=$.merge(cArr,newarr);
			$($dxj_li).each(function(i,e){
			$(e).removeClass().addClass(cArr[i]);
			})
			index=myindex;
			show();
		}
		else if(b<0){

			cArr.reverse();
			var oldarr=cArr.splice(0,-b)
			cArr=$.merge(cArr,oldarr);
			cArr.reverse();
			$($dxj_li).each(function(i,e){
			$(e).removeClass().addClass(cArr[i]);
			})
			index=myindex;
			show();
		}
	},function(){
		timer=setInterval(nextimg,4000);
	})

})

//改变底下按钮的背景色
function show(){
   $($s).eq(index).addClass("firsts").parent().siblings().children().removeClass("firsts");
}
			
	//点击class为p2的元素触发上一张照片的函数
	$(document).on("click",".p2",function(){
		previmg();
		return false;//返回一个false值，让a标签不跳转
	});
	
	//点击class为p4的元素触发下一张照片的函数
	$(document).on("click",".p4",function(){
		nextimg();
		return false;
	});
	//点击class为p3的元素触发视频
	$(document).on("click",".p3",function(){  //4 3 2 1 0 6 5
//		console.log($(".p3").index())
         clearInterval(timer);
		 $(".radio_zhezhao").show();
		 $(".radio_zhezhao video").hide();
		 $(".radio_zhezhao video").eq(-index).show();
//		 console.log($(".radio_zhezhao video").get(index))
	});
	
//			鼠标移入box时清除定时器
	$(".dxj_imgbox").mouseover(function(){
		clearInterval(timer);
	})
	
//			鼠标移出box时开始定时器
	$(".dxj_imgbox").mouseleave(function(){
		timer=setInterval(nextimg,4000);
	})
	
//			进入页面自动开始定时器
	timer=setInterval(nextimg,4000);

    
}
bannerd();
//底部合作选项卡
function xxk(){
	$(".dxj_hz_btn a").hover(function(){
		$(".dxj_hz").css({display:"none"}).eq($(this).index()).css({display:"block"});
		$(".dxj_hz_btn a").removeClass("first").eq($(this).index()).addClass("first");
	})
}
xxk();
//视频
function radio(){
	$(".guanbi").click(function(){
		$(".radio_zhezhao").hide();
//      $("video").pause();
	})
}radio();
//大赛获奖
function jiang(){
	$(".dxj_list_con").each(function(index){
		$(".dxj_list_con").eq(index).hover(function(){
		  $(".dxj_saishi2").eq(index).css({transform:"translate(257px,-350px)"})
	    },function(){
	      $(".dxj_saishi2").eq(index).css({transform:"translate(0px,0px)"})
	    })
	})
}
jiang();

})


