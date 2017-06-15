$(document).ready(function(){
	$(".dxj_utx,.dxj_close").click(function(){
		$(".dxj_zhao").toggle();
		$(".dxj_sctx").toggle(500);		
	})

    banner();
    function banner(){
        var t=setInterval(move,5000);
        var now=0;
        var next=0;
        function move(){
            next=now+1;
            if(next>$(".l-img").length-1){
                next=0;
            }
            $(".l-img").eq(now).animate({left:"-100%"},1000).end().eq(next).css("left","100%").animate({left:0},1000);
            $(".l-btn span").removeClass("l-firstbtn").eq(next).addClass("l-firstbtn");
            now=next;
        }
        //按钮点击事件
        $(".l-btn span").click(function(){
            if($(this).index()>now){
                $(".l-img").eq(now).animate({left:"-100%"},1000).end().eq($(this).index()).css("left","100%").animate({left:0},1000);
            }else if($(this).index()<now){
                $(".l-img").eq(now).animate({left:"100%"},1000).end().eq($(this).index()).css("left","-100%").animate({left:0},1000);
            }
            $(".l-btn span").removeClass("l-firstbtn").eq($(this).index()).addClass("l-firstbtn");
            now=$(this).index();
        })
        //移入停止事件
        $(".bannerbox").hover(function(){
            clearInterval(t);
        },function(){
            t=setInterval(move,5000);
        })
    }
})