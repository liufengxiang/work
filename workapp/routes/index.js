var express=require("express");
var path=require("path");
var mysql=require("../mysql");
var nodegrass=require("nodegrass");
var md5=require("../md5");
var router=express.Router();
// 是否登录
var middle=function(req,res,next) {
    if(!req.session.user){
        res.redirect("/login");
    }else{
        next();
    }
}
//欢迎页
router.get("/welcome",function(req,res){
    res.render("welcome");
})
// 首页
router.get("/",middle,function(req,res){
       res.render("index");
    })
// 退出登录
router.get("/exitindex",function (req,res) {
    req.session.user=null;
    res.redirect("/login");
})
// 查询数据
router.get("/indexData",function(req,res){
        mysql.query("select * from shows where cid=2 order by sid",function(error,result){
            res.send(result);
        });
})
//所有tpl中的网页
router.get("/tpl/:name",function(req,res){
    // process() 主目录
    res.sendFile(path.join(process.argv[1].slice(0,process.argv[1].lastIndexOf("\\")),"public/tpl/"+req.params.name))
})
// 获取所有内容   使用nodegrass爬取
router.get("/getCon",function(req,res){
    var url=req.query.url;
    // console.log(url);
    nodegrass.get(url,function(body){
        //console.log(body);
        res.send(body);
    },"gbk");
})
// 获取电话号码
router.get("/getPhone",function (req,res) {
    mysql.query("select * from phone",function(error,result){
        res.send(result);
    });
})
// -------  设置 -----
// 设置用户名显示
router.get("/setuser",middle,function(req,res){
    var uid=req.session.user.uid;
    mysql.query("select * from user where uid="+uid,function(error,result){
        res.send(result);
    });
})
//修改密码
router.get("/setuserIn",middle,function(req,res){
    var uid=req.session.user.uid;
    var uname=req.query.uname;
    var upass=md5(req.query.upass||"");
    var upassold=md5(req.query.upassold||"");
    mysql.query("select upass from user where uid="+uid,function(error,result){
        if(result[0].upass==upassold){

            mysql.query(`update user set upass='${upass}' where uid=${uid}`,function(error){
                if(!error) {
                    req.session.user=null;
                    res.send("ok");
                }else{
                    console.log(error);
                }
            })

        }else{
            res.send("no");
        }
    })
})

//退出登录
router.get("/logout",function(req,res){
    req.session.user=null;
    res.redirect("/login");
    res.end();
});

//好友热度
router.get("/hot",function(req,res){
    var uid=req.session.user.uid;
    mysql.query("select * from logs where jieid="+uid,function(error,result){
        res.send(JSON.stringify(result));
    })
});

// 发射
module.exports=router;