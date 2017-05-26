var express=require("express");
var router=express.Router();
var path=require("path");
var mysql=require("../mysql");
var md5=require("../md5");
// 是否登录
var middle=function(req,res,next) {
    if(!req.session.admin){
        res.redirect("/admin/login");
    }else{
        next();
    }
}
// 登录
router.get("/login",function (req,res) {
    res.render("admin/login");
})
// 主页
router.get("/",middle,function(req,res){
    res.render("admin/index",{name:req.session.admin.aname});
})
// 登录验证
router.get("/loginInfo",function (req,res) {
    var uname=req.query.uname;
    var upass=md5(req.query.upass);
    mysql.query("select * from user",function(error,result){
        if(error){
            console.log(error);
        }else{
            var flag=true;
            for(var i=0;i<result.length;i++){
                var rows=result[i];
                if(rows.uname===uname){
                    if(rows.upass==upass){
                        if(rows.uroot==1){
                            flag = false;
                            var user = {
                                aname: uname,
                                login: "yes"
                            }
                            req.session.admin = user;
                            res.redirect("/admin");
                            res.end();
                            break;
                        }
                    }
                }
            }
            if(flag){
                res.redirect("/admin/login");
                res.end();
            }
        }
    });
})
// 退出登录
router.get("/exitadmin",function (req,res) {
    req.session.admin=null;
    res.redirect("/admin/login");
})
// 添加用户
router.get("/adduser",function (req,res) {
    res.render("admin/adduser");
})
// 添加用户成功
router.get("/adduserInfo",function (req,res) {
    var uname=req.query.uname;
    var xingming=req.query.xingming;
    var upass=md5(req.query.upass);
    var uroot=req.query.uroot;
    mysql.query(`insert into user (uname,xingming,upass,uroot) values ('${uname}','${xingming}','${upass}','${uroot}')`,function (err,result) {
        res.redirect("/admin/adduser");
        res.end();
    })
})
// 管理用户
router.get("/guanliuser",function (req,res) {
    mysql.query("select * from user order by uroot desc",function (err,result) {
        res.render("admin/guanliuser",{result:result});
    })

})
// 删除用户
router.get("/deluser",function (req,res) {
    var uid=req.query.uid;
    mysql.query("delete from user where uid="+uid,function (err,result) {
        res.redirect("/admin/guanliuser");
    })

})
// 获取内容
router.get("/showCon",middle,function(req,res){
    // 获取到前台穿过来了页码
    var page=parseInt(req.query.page)||0;
    var num=10; // 一页显示几条数据
    let lastpage=(page-1)<0?0:(page-1);
    let nextpage=page+1;
    // 查询出当前的所有内容
    mysql.query("select * from shows limit "+page*num +", "+num,function(error,result){
        res.render("admin/showCon",{result:result,lastpage:lastpage,nextpage:nextpage});
    });
})

// 添加电话
router.get("/addphone",function (req,res) {
    res.render("admin/addphone");
})
// 添加电话成功
router.get("/addphoneInfo",function (req,res) {
    var pname=req.query.pname;
    var pphone=req.query.pphone;
    mysql.query(`insert into phone (pname,pphone) values ('${pname}','${pphone}')`,function (err,result) {
        res.redirect("/admin/addphone");
        res.end();
    })
})
// 管理电话
router.get("/guanliphone",function (req,res) {
    mysql.query("select * from phone order by pid desc",function (err,result) {
        res.render("admin/guanliphone",{result:result});
    })

})
// 删除电话
router.get("/delphone",function (req,res) {
    var pid=req.query.pid;
    mysql.query("delete from phone where pid="+pid,function (err,result) {
        res.redirect("/admin/guanliphone");
    })
})
// 管理信息
router.get("/guanlimessage",function (req,res) {
    // 获取到前台穿过来了页码
    var page=parseInt(req.query.page)||0;
    var num=10; // 一页显示几条数据
    let lastpage=(page-1)<0?0:(page-1);
    let nextpage=page+1;
    // 查询出当前的所有内容
    mysql.query("select * from logs limit "+page*num +", "+num,function(error,result){
        res.render("admin/guanlimessage",{result:result,lastpage:lastpage,nextpage:nextpage});
    });
})
// 删除消息
router.get("/delmessage",function (req,res) {
    var lid=req.query.lid;
    mysql.query("delete from logs where lid="+lid,function (err,result) {
        res.redirect("/admin/guanlimessage");
    })
})


module.exports=router;