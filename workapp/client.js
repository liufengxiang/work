var nodegrass=require("nodegrass")
var mysql=require("./mysql.js");
var async=require("async");
var cheerio=require("cheerio");
var read=require("./read");
var cronJob = require("cron").CronJob;
//每秒钟执行一次
new cronJob('* */30 * * * *', function () {
    async.waterfall([
        //获取分类
        function(callback) {
            read.readCategory("http://tech.qq.com/science.htm",function(data){
                // @param   data 处理的参数
                //          item 每一个        cb  看是否成功了
                async.each(data,function(item,cb){
                    mysql.query(`insert into cates (cname,cid,curl) values ('${item.catname}',${item.catid},'${item.caturl}')`,function(){
                        cb(null);
                    })

                })
                // 传递个下一个函数
                callback(null,data)
            })
        },
        function(data,callback) {
            async.eachSeries(data,function(item,cb){
                read.readList(item.caturl,function(data1){
                    async.each(data1,function(item1,cb1){
                        item1.catid=item.catid;
                        mysql.query(`insert into shows (title,info,url,img,cid) values ('${item1.title}','${item1.info}','${item1.url}','${item1.img}',${item1.catid})`,function(){
                            cb1(null);
                        })
                    })
                    cb(null,"爬取成功！");
                })
            })
            callback(null,"获取成功！");
        }
    ], function (err, result) {
        console.log(result);
    });
}, null, true, 'Asia/Chongqing');
