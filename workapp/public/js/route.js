/*
* 地址  路由
* */
angular.module("Route",["ngRoute"])
.config(["$routeProvider",function(route){
        route.when("/",{
            // 首页
            templateUrl:"/tpl/main.html",
            controller:"main"
        }).when("/list",{
            templateUrl:"/tpl/list.html",
            controller:"list"
        }).when("/phone",{
            // 通讯录
            templateUrl:"/tpl/phone.html",
            controller:"phone"
        }).when("/todo",{
            // 待办事项
            templateUrl:"/tpl/todo.html",
            controller:"todo"
        }).when("/todocon",{
            templateUrl:"/tpl/todocon.html",
            controller:"todocon"
        }).when("/todoinfo/:id",{
            templateUrl:"/tpl/todoinfo.html",
            controller:"todoinfo"
        }).when("/logs",{
            // 日志
            templateUrl:"/tpl/logs.html",
            controller:"logs"
        }).when("/newlogs",{
            templateUrl:"/tpl/newlogs.html",
            controller:"newlogs"
        }).when("/sendlogs",{
            templateUrl:"/tpl/sendlogs.html",
            controller:"sendlogs"
        }).when("/sendInfo/:sendid",{
            templateUrl:"/tpl/sendInfo.html",
            controller:"sendInfo"
        }).when("/havelogs",{
            templateUrl:"/tpl/havelog.html",
            controller:"havelog"
        }).when("/haveInfo/:lid",{
            templateUrl:"/tpl/haveInfo.html",
            controller:"haveInfo"
        }).when("/set",{
            // 设置
            templateUrl:"/tpl/set.html",
            controller:"set"
        }).when("/setuser",{
            templateUrl:"/tpl/setuser.html",
            controller:"setuser"
        }).when("/dataview",{
            templateUrl:"/tpl/dataview.html",
            controller:"dataview"
        })
}])