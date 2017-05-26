$(function () {
    var now=0;
    var t=setInterval(function () {
        now+=1;
        if(now>=3){
            now=0;
        }
        $(".imgli").css("opacity","0").eq(now).animate({opacity:1},1000);
        $(".btn span").css("background","rgba(0,0,0,.5)").eq(now).css("background","#EA6F5A");
    },3000)

    $(".fenleili").click(function () {
        // padding: 5px;border-bottom-style: solid;
        $(".fenleili").css({"padding":"0","padding-left":"30px","border-bottom-style":"dashed"}).eq($(this).index()).css({"padding":"5px","border-bottom-style":"solid"});
        $(".titlebox").css("display","none").eq($(this).index()).css("display","block");
    })
})