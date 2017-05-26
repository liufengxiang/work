var express = require('express');
var router = express.Router();
var path=require("path");
var nodegrass=require("nodegrass");
var mysql=require("../mysql");
var async=require("async");
function middle(req,res,next) {
     if(!req.session.user){
         res.redirect("/login");
         res.end();
     }else{
        next();
     }
}
//发送信息获取用户名
router.get('/logUser', middle,function(req, res, next) {
    var uid=req.session.user.uid;
    mysql.query("select * from user",function (error,result) {
        if(!error){
            var newarr=[];
           for(var i=0;i<result.length;i++){
                if(result[i].uid!=uid){
                    newarr.push(result[i]);
                }
           }
           res.send(newarr);
        }
    })
});
//发送信息
router.get("/addLog",middle,function (req,res,next) {
    let faid=req.session.user.uid;
    let jieid=req.query.jieid;
    let title=req.query.title;
    let con=req.query.con;
    let state=1;
    mysql.query(`insert into logs (faid,jieid,title,con,state) values (${faid},${jieid},'${title}','${con}',${state})`,function (error,result) {
        if(result.affectedRows>0) {
            res.send("ok");
        }
    })
})
//查看已经发送的信息，列表页
router.get("/sendLogs",middle,function (req,res,next) {
    let faid = req.session.user.uid;
    async.waterfall([
        function(callback) {
            mysql.query("select * from logs where faid=" + faid, function (error, result) {
                callback(null, result);
            })
        },
        function(arg1,callback) {
            var arr=[];
            async.forEachOfSeries(arg1,function(value,key,cb){
                mysql.query("select xingming,uname from user where uid="+value.jieid,function (err,res) {
                    arr.push(res);
                    cb(null);
                })
            },function (err) {//只接受一个错的参数
                if(err){
                    console.log(err);
                }else{
                    callback(null,arr);
                }
            })
        },
        function (uname,callback) {
            mysql.query("select * from logs where faid=" + faid, function (error, result) {
                async.forEachOfSeries(result,function(value,key,cb){
                    result[key].uname=uname[key][0].uname;
                    result[key].xingming=uname[key][0].xingming;
                    cb(null);
                },function (err) {//只接受一个错的参数
                    if(err){
                        console.log(err);
                    }else{
                        callback(null, result);
                    }
                })

            })
        }
    ], function (err, result) {
        if(!err){
            res.send(result);
        }
    })
})
//已发日志详情页
router.get("/sendInfo",middle,function (req,res,next) {
    let lid=req.query.lid;
    async.waterfall([
        function(callback) {
            mysql.query("select * from logs where lid=" + lid, function (error, result) {
                callback(null, result);
            })
        },
        function(arg1,callback) {
            var arr=[];
            async.forEachOfSeries(arg1,function(value,key,cb){
                mysql.query("select uname from user where uid="+value.jieid,function (err,res) {
                    arr.push(res);
                    cb(null);
                })
            },function (err) {//只接受一个错的参数
                if(err){
                    console.log(err);
                }else{
                    callback(null,arr);
                }
            })
        },
        function (uname,callback) {
            mysql.query("select * from logs where lid=" + lid, function (error, result) {
                async.forEachOfSeries(result,function(value,key,cb){
                    result[key].uname=uname[key][0].uname;
                    cb(null);
                },function (err) {//只接受一个错的参数
                    if(err){
                        console.log(err);
                    }else{
                        // console.log(result,"re");
                        callback(null, result);
                    }
                })

            })
        },
        function (result,callback) {
                var dataa=result[0].ltime;
                var d=new Date();
                var str = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
                result[0].ltime=str;
                callback(null,result);
        }
    ], function (err, result) {
        if(!err){
            res.send(JSON.stringify(result));
        }
    })
})
//接收日志未读：1
router.get("/selectdu",middle,function (req,res,next) {
    let jieid = req.session.user.uid;
    async.waterfall([
        function(callback) {
            mysql.query("select * from logs where jieid=" + jieid +" and state=1 ", function (error, result) {
                callback(null, result);
            })
        },
        function(arg1,callback) {
            var arr=[];
            async.forEachOfSeries(arg1,function(value,key,cb){
                mysql.query("select uname from user where uid="+value.faid,function (err,res) {
                    arr.push(res);
                    cb(null);
                })
            },function (err) {//只接受一个错的参数
                if(err){
                    console.log(err);
                }else{
                    callback(null,arr);
                }
            })
        },
        function (uname,callback) {
            mysql.query("select * from logs where jieid=" + jieid+" and state=1 ", function (error, result) {
                async.forEachOfSeries(result,function(value,key,cb){
                    result[key].uname=uname[key][0].uname;
                    cb(null);
                },function (err) {//只接受一个错的参数
                    if(err){
                        console.log(err);
                    }else{
                        callback(null, result);
                    }
                })

            })
        }
    ], function (err, result) {
        if(!err){
            res.send(JSON.stringify(result));
        }
    })
})
//日志已读：2
router.get("/selectun",middle,function (req,res,next) {
    let jieid = req.session.user.uid;
    async.waterfall([
        function(callback) {
            mysql.query("select * from logs where jieid=" + jieid +" and state=2 ", function (error, result) {
                callback(null, result);
            })
        },
        function(arg1,callback) {
            var arr=[];
            async.forEachOfSeries(arg1,function(value,key,cb){
                mysql.query("select uname from user where uid="+value.faid,function (err,res) {
                    arr.push(res);
                    cb(null);
                })
            },function (err) {//只接受一个错的参数
                if(err){
                    console.log(err);
                }else{
                    callback(null,arr);
                }
            })
        },
        function (uname,callback) {
            mysql.query("select * from logs where jieid=" + jieid +"  and state=2", function (error, result) {
                async.forEachOfSeries(result, function (value, key, cb) {
                    result[key].uname = uname[key][0].uname;
                    cb(null);
                }, function (err) {//只接受一个错的参数
                    if (err) {
                        console.log(err);
                    } else {
                        callback(null, result);
                    }
                })
            })
        }
    ], function (err, result) {
        if(!err){
            res.send(JSON.stringify(result));
        }
    })
})
//已发日志详情页
router.get("/haveInfo",middle,function (req,res,next) {
    let lid=req.query.lid;
    console.log(lid);
    async.waterfall([
        function(callback) {
            mysql.query("select * from logs where lid=" + lid, function (error, result) {
                mysql.query("update logs set state=2 where lid="+lid,function () {

                    callback(null, result);
                })
            })
        },
        function(arg1,callback) {
            var arr=[];
            async.forEachOfSeries(arg1,function(value,key,cb){
                mysql.query("select uname from user where uid="+value.faid,function (err,res) {
                    arr.push(res);
                    cb(null);
                })
            },function (err) {//只接受一个错的参数
                if(err){
                    console.log(err);
                }else{
                    callback(null,arr);
                }
            })
        },
        function (uname,callback) {

            mysql.query("select * from logs where lid=" + lid, function (error, result) {
                async.forEachOfSeries(result,function(value,key,cb){
                    result[key].uname=uname[key][0].uname;
                    cb(null);
                },function (err) {//只接受一个错的参数
                    if(err){
                        console.log(err);
                    }else{
                        // console.log(result,"re");
                        callback(null, result);
                    }
                })

            })
        },
        function (result,callback) {
            var dataa=result[0].ltime;
            var dt = new Date(dataa);
            var d=new Date();
            var str = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
            result[0].ltime=str;
            callback(null,result);
        }
    ], function (err, result) {
        if(!err){
            res.send(JSON.stringify(result));
        }
    })
})
module.exports = router;