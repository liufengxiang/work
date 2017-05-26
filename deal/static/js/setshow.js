$(function () {
    var up1=new upload("index.php?a=addimg","#wimg1",function (text) {
        $(".img1").css("background-image","url("+text+")");
        $("#wwimg1").val(text);
    })
    up1.upload();
    var up2=new upload("index.php?a=addimg","#wimg2",function (text) {
        $(".img2").css("background-image","url("+text+")");
        $("#wwimg2").val(text);
    })
    up2.upload();
    var up3=new upload("index.php?a=addimg","#wimg3",function (text) {
        $(".img3").css("background-image","url("+text+")");
        $("#wwimg3").val(text);
    })
    up3.upload();

    $(".tijiao").click(function () {
        if($("#wname").val()==""){
            alert("请填写物品名称！");
            return;
        }
        if($("#wshow").val()==""){
            alert("请填写物品描述！");
            return;
        }
        if($("#wmuch").val()==""){
            alert("请填写物品价格！");
            return;
        }
        $("form").submit();
    })
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