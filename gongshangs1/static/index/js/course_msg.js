$(function(){
    //检测当前登录用户是否有点赞过的评论
   $.ajax({
        url: "index.php?m=index&f=course_msg&a=checkdianguo",
        dataType:"json",
        success:function(e){
            for(var i in e){
                if(e.length>0){
                    $(".zyh_dianzan img").prev(".icon-xin[mid="+e[i]['mid']+"]").next().css("display","block");
                }else{
                    $(".zyh_dianzan img").prev(".icon-xin[mid="+e[i]['mid']+"]").next().css("display","none");
                }
            }
        }
    })
    //检测留言框的字数
    document.onkeyup=document.onkeypress=function(){
        var value=$(".zyh_lyk textarea").val();
        var len=$(".zyh_lyk textarea").val().length;
        if(len<=200){
            $(".zyh_zishu b").html(200-len);
        }else{
            $(".zyh_lyk textarea").val($(".zyh_lyk textarea").val().substr(0,200));
        }
    }
    //单击留言按钮
    $(".zyh_tjbtn").click(function(){
        var sid=$(".zyh_zztop").attr("sid");
        var mcon=$.trim($(".zyh_lyk textarea").val());
        $.ajax({
            url:"index.php?m=index&f=course_msg&a=CheckLeaveWord",
            data:{
                sid:sid,
                mcon:mcon,
            },
            dataType:"json",
            success:function(e){
                if(e["message"]=="no"){
                    //弹出框，提示用户进行登录
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_tishik").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bj").css("display","block");
                }else if(e["message"]=="yes"){
                    //清除没有留言的提示
                    if($(".zyh_nopinlun")){
                        $(".zyh_nopinlun").remove()
                    }
                    //移除本页面最后一个
                    if($(".zyh_liyancon .zyh_lycon").length==4){
                        $(".zyh_liyancon .zyh_lycon:last-child").remove();
                    }
                    //撑开iframe
                    var oldH=$('#iframe', parent.document).parent().children("#iframe").get(0).style.height;
                    if($(".zyh_liyancon .zyh_lycon").length<3||parseInt(oldH)<2433){
                        var newH=parseInt(oldH)+126;
                        $('#iframe', parent.document).parent().children("#iframe").css("height",newH);
                    }
                    //数据库插入成功以后要做的事情
                    //清空留言框的内容
                    $(".zyh_lyk textarea").val("");
                    // //克隆 留言的html结构
                    var zyh_lycon =$(".zyh_lycon:eq(0)").clone(true);
                    if($(".zyh_liyancon").find(".zyh_lycon").get().length==0){
                        $(zyh_lycon).appendTo(".zyh_liyancon");
                    }else{
                        $(".zyh_liyancon .zyh_lycon:eq(0)").before(zyh_lycon);
                    }
                    // //要改掉留言里面的内容
                    zyh_lycon.find(".zyh_touxiang img").attr("src",e["uimage"]);
                    zyh_lycon.find(".zyh_stuname span:eq(0)").html(e["unickname"]);
                    zyh_lycon.find(".zyh_lytime").html(e["mtime"]);
                    zyh_lycon.find(".zyh_pingluncon").html(e["mcon"]);
                    zyh_lycon.find(".zyh_dianzan .icon-xin").attr("mid",e["mid"]);
                    //提示评论成功
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothbj").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").find("h1").html("评论成功");

                }else if(e["message"]=="请输入"){
                    //提示输入留言内容
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothbj").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").find("h1").html("请输入评论内容");
                }
            }
        })
    })
    //取消留言
    $(".zyh_qxbtn").click(function(){
        $(".zyh_lyk textarea").val("");
        $(".zyh_zishu b").html(200);
    })
    //取消登录
    $('#iframe', parent.document).parent().parent().siblings(".zyh_tishik").find(".zyh_quxiao").click(function(){
        $('#iframe', parent.document).parent().parent().siblings(".zyh_tishik").css("display","none");
        $('#iframe', parent.document).parent().parent().siblings(".zyh_bj").css("display","none");
    })

    //点赞
    $(".zyh_dianzan .icon-xin").click(function(){
        var mid=$(this).attr("mid");
        $.ajax({
            url: "index.php?m=index&f=course_msg&a=checkDianZan",
            data:{
                mid:mid
            },
            success:function(e){
                if(e=="no"){
                    //弹出框，提示用户进行登录
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_tishik").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bj").css("display","block");
                }else if(e=="yes"){
                    var val=$(".zyh_pinglun .zyh_dianzan span").next(".icon-xin[mid="+mid+"]").prev().html();
                    $(".zyh_pinglun .zyh_dianzan span").next(".icon-xin[mid="+mid+"]").prev().html(parseInt(val)+1);
                    $(".zyh_dianzan img").prev(".icon-xin[mid="+mid+"]").next().css("display","block");
                }else if(e=="self"){
                    //提示不能赞自己的评论
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothbj").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").find("h1").html("不能赞自己的评论");
                }else if(e=="dianguo"){
                    $(".zyh_dianzan img").prev(".icon-xin[mid="+mid+"]").next().css("display","block");
                    //提示已经点过赞了
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothbj").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").css("display","block");
                    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").find("h1").html("您已经点过赞了");
                }
            }
        })
    })
    //通用提示确定按钮
    $('#iframe', parent.document).parent().parent().siblings(".zyh_bothtishik").find(".zyh_bothqueding").click(function(){
        $(this).parent(".zyh_bothtishik").prev().css("display","none");
        $(this).parent(".zyh_bothtishik").css("display","none");
        $(this).prev().html("");
    })

    /* 点击量 */
    $.ajax({
        url:"index.php?m=index&f=course_msg&a=hit",
        data:{
            sid:$(".zyh_zztop").attr("sid")
        }
        //页面中暂时没有点击量
        // success:function(e){
        //     if(e=="ok"){
        //         $(".zyh_hitnum").html($(".zyh_hitnum").html()*1+1);
        //     }
        // }
    })

})
