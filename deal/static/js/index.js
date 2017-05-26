$(function () {
    // banner
    banner();
    function banner() {
        var now=0;
        var next=0;
        var t=setInterval(move,2000);
        function move() {
            next=now+1;
            if(next>=$(".imgbox li").length){
                next=0;
            }
            $(".imgbox li").eq(now).animate({left:"-100%"},1000).end().eq(next).css("left","100%").animate({left:0},1000);
            $(".tiaobox li").css("display","none").eq(next).css("display","block");
            $(".btnbox li").css("background","transparent").eq(next).css("background","#333");
            now=next;
        }




        // 停止
        $(".banner").hover(function () {
            clearInterval(t);
        },function () {
            t=setInterval(move,2000);
        })
    }






})