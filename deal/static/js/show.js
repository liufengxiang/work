$(function () {
    var now=0;
    var t=setInterval(move,5000);
    function move() {
        now++;
        if(now>=$(".img").length){
            now=0;
        }
        $(".img").animate({opacity:0},1000).eq(now).animate({opacity:1});
    }





    //留言
    /*
     *  url
     * uname2
     * cid 文章id
     * pid 级别
     * mcon 内容
     *
     * */
    $(".liuyanbtn").click(function () {
        if($.trim($(".liuyancon").val())==""){
            alert("您的内容为空哦");
        }else {
            $.ajax({
                url: "index.php?f=show&a=liuyan",
                type: "post",
                data: {
                    url: location.href,
                    uname2: $(".liuyanbtn").attr("uname2"),
                    cid: $(".liuyanbtn").attr("cid"),
                    mcon: $(".liuyancon").val(),
                    mtime:getNowTime()
                },
                success: function (e) {
                    if (e == "yes") {
                        //1。操作成功
                        $(".czcgbox").css("display", "block");
                        var t = setTimeout(function () {
                            $(".czcgbox").css("display", "none");
                        }, 1000);
                        //3.克隆
                        var liuyanclone=$(".liuyan").eq(0).clone(true);
                        liuyanclone.css("display","block");
                        //4.信息
                        liuyanclone.find(".lymessage a").html($(".liuyanbtn").attr("uname2"));//谁留言
                        //留言时间
                        liuyanclone.find(".lymessage span").html(getNowTime());
                        liuyanclone.find(".lycon").html($(".liuyancon").val());//留言内容
                        //当前条数加1
                        $(".liuyanbox h3 span").html(parseInt($(".liuyanbox h3 span").html())+1)


                        $(".liuyanqu").prepend(liuyanclone);

                        //2. 清空留言区
                        $(".liuyancon").val("");

                    } else if (e == "no") {
                        $(".tsdl").css("display", "block");
                    }
                }
            })
        }
    })
    //回复1
    /*
     *  url
     *  uname2  $(this).siblings(".lymessage").find("a").html();
     *  cid      $(".liuyanbtn").attr("cid"),
     *  pid         上一条的id    $(this).parent().attr("pid")
     *  mcon         tijiao1.siblings(".huifu1con").val()
     *  utime  不用穿
     *
     * */
    $(".tijiao1").click(function () {
        var tijiao1=$(this);
        if($.trim($(this).parent().find(".huifu1con").val())==""){
            alert("请填写内容");
            return;
        }
        $.ajax({
            url:"index.php?f=show&a=huifu1",
            type:"post",
            data:{
                url:location.href,
                uname2:tijiao1.siblings(".lymessage").find("a").html(),
                cid:$(".liuyanbtn").attr("cid"),
                pid:tijiao1.parent().attr("pid"),
                mcon:tijiao1.siblings(".huifu1con").val(),
                mtime:getNowTime()
            },
            success: function (e) {
                if (e == "yes") {
                    //1。操作成功
                    $(".czcgbox").css("display", "block");
                    var t = setTimeout(function () {
                        $(".czcgbox").css("display", "none");
                    }, 1000);
                    //3.克隆
                    var lysonclone=$(".lyson").eq(0).clone(true);
                    lysonclone.css("display","block");
                    //4.信息
                    lysonclone.find("p a").html($(".liuyanbtn").attr("uname1"));//谁留言
                    //留言时间
                    lysonclone.children("span:eq(0)").html(getNowTime());
                    lysonclone.find("p span").html(tijiao1.siblings(".huifu1con").val());//留言内容


                    tijiao1.parent().append(lysonclone);

                    //2. 清空留言区
                    $(".huifu1con").val("");

                } else if (e == "no") {
                    $(".tsdl").css("display", "block");
                }
            }
        })
    })


    //取消登录
    $(".quxiaodenglu").click(function () {
        $(".tsdl").css("display","none");
    })
    //回复1
    $(".huifu1").click(function(){
        $(this).parents(".liuyan").find(".tijiao1").slideToggle(100);
        $(this).parents(".liuyan").find(".huifu1con").slideToggle(100);
        if($(this).get(0).nodeName=="SPAN"){
            $(this).parents(".liuyan").find(".huifu1con").val("@"+$(this).siblings("p").find("a").html()+"：")
        }else{
            $(this).parents(".liuyan").find(".huifu1con").val("");
        }
    })
    //取消留言
    $(".quxiaoliuyan").click(function () {
        $(".liuyancon").val("");
    })



    //获取当前时间
    function getNowTime() {
        var date = new Date();
        var seperator1 = "-";
        var seperator2 = ":";
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
            + " " + date.getHours() + seperator2 + date.getMinutes()
            + seperator2 + date.getSeconds();
        return currentdate;
    }
})