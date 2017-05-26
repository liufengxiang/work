angular.module("Controllers",[])
// 主页  切换样式
.controller("index",["$scope",function($scope){
    $scope.active="one";
    $scope.change=function(name){
        $scope.active=name;
    }
}])
// 主页  轮播  新闻标题
.controller("main",["$scope","$http",function($scope,$http){
    // 设置轮播样式
    var swiper = new Swiper('.swiper-container',{
        pagination : '.swiper-pagination',
        scrollbar:'.swiper-scrollbar',
        effect : 'fade'
    });
    // 获取新闻标题等
    $http({url:"/indexData"}).then(function(data){
       $scope.data=data.data;
       // console.log($scope.data);
    })
}])
// 新闻详情页
.controller("list",["$scope","$location","$http",function($scope,$location,$http){
    $http({url:"/getCon",params:{url:Object.keys($location.$$search)[0]},responseType:"text"}).then(function(e){
        $scope.data=e.data;
        // console.log($scope.data);
        document.querySelector(".con").innerHTML=($scope.data);
    })
}])
// 电话  联系方式
.controller("phone",["$scope","$http",function($scope,$http){
    $http({url:"/getPhone"}).then(function (data) {
        $scope.data=data.data;
    })
}])
// 待办事项  事件列表  删除事件
.controller("todo",["$scope","$http",function($scope,$http){
    $scope.data=localStorage.data?JSON.parse(localStorage.data):[];
    // 删除事项
    $scope.del=function (id) {
        $scope.data.forEach(function (val,index) {
            if(val.id==id){
                $scope.data.splice(index,1);
            }
        })
        localStorage.data=JSON.stringify($scope.data);
    }
    setTimeout(function () {
        // 待办事项
        var list=$(".mui-navigate-right");
        var currentLeft=0;
        // 删除按钮
        touch.on(".mui-navigate-right","dragstart",function(e){
            currentLeft= parseInt($(this).css("left"))?parseInt($(this).css("left")):0;
        })
        touch.on(".mui-navigate-right","drag",function(e){
            if(e.direction=="left") {
                var left=currentLeft+e.x;
                if(left<-50){
                    left=-50
                }
                console.log(left);
                $(this).css("left",left);
            }else if(e.direction=="right"){
                var left=currentLeft+e.x;
                if(left>0){
                    left=0
                }
                console.log(left);
                $(this).css("left",left);
            }
        })

    },1000)
}])
// 添加事件，事项
.controller("todocon",["$scope","$http",function($scope,$http){
    $scope.data=localStorage.data?JSON.parse(localStorage.data):[];
    $scope.con="";
    $scope.add=function () {
        var obj={};
        obj.id=getId($scope.data);
        var d=new Date();
        var str = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
        obj.time=str;
        obj.con=$scope.con;
        $scope.data.push(obj);
        localStorage.data=JSON.stringify($scope.data);
    }
    function getId(arr) {
        if(arr.length==0){
            return 1;
        }else{
            var id=arr[0].id;
            arr.forEach(function (val,index) {
                if(val.id>id){
                    id=val.id;
                }
            })
            return id+1;
        }
    }
}])
// 编辑事项
.controller("todoinfo",["$scope","$http","$routeParams",function($scope,$http,$routeParams){
    $scope.data=localStorage.data?JSON.parse(localStorage.data):[];
    var id=$routeParams.id;
    $scope.data.forEach(function (val,index) {
        if(val.id==id){
            $scope.con=val.con;
        }
    })
    $scope.up=function () {
        $scope.data.forEach(function (val,index) {
            if(val.id==id){
                val.con=$scope.con;
            }
        })
        localStorage.data=JSON.stringify($scope.data);
    }
}])
//----------  日志  ------------
.controller("logs",["$scope",function ($scope) {

}])
//新建日志
.controller("newlogs",["$scope","$http",function ($scope,$http) {
    $http({url:"/logs/logUser"}).then(function (data) {
        $scope.user=data.data;
    })
    $scope.jieid="";
    $scope.title="";
    $scope.con="";
    $scope.sendLog=function () {
        $http({url:"/logs/addLog",params:{jieid:$scope.jieid,title:$scope.title,con:$scope.con}}).then(function (data) {
            if(data.data=="ok"){
                $scope.jieid="";
                $scope.title="";
                $scope.con="";
            }else{
                alert("添加失败，请重新添加");
            }
        })
    }
}])
//已发日志
.controller("sendlogs",["$scope","$http",function($scope,$http){
    $http({url:"/logs/sendLogs"}).then(function (data) {
        $scope.info=data.data;
    })
}])
//已发日志详情
.controller("sendInfo",["$scope","$http","$routeParams",function ($scope,$http,$routeParams) {
    $http({url:"/logs/sendInfo",params:{lid:$routeParams.sendid}}).then(function (data) {
        $scope.info=data.data;
    })
}])
//查看所有接收日志
.controller("havelog",["$scope","$http",function($scope,$http){
    //进页面默认查询
    $http({url:"/logs/selectdu"}).then(function(data){
        $scope.du=data.data;
    })
    $http({url:"/logs/selectun"}).then(function(data){
        $scope.un=data.data;
    })
    //点击所有
    $scope.allFun=function(){
        $http({url:"/logs/selectdu"}).then(function(data){
            $scope.du=data.data;
        })

        $http({url:"/logs/selectun"}).then(function(data){
            $scope.un=data.data;
        })
    }

    $scope.duFun=function(){
        $http({url:"/logs/selectdu"}).then(function(data){
            $scope.du=data.data;
            $scope.un=[];
        })
    }

    $scope.unFun=function(){
        $http({url:"/logs/selectun"}).then(function(data){
            $scope.un=data.data;
            $scope.du=[];
        })
    }
}])
//已收日志详情
.controller("haveInfo",["$scope","$http","$routeParams",function ($scope,$http,$routeParams) {

    $http({url:"/logs/haveInfo",params:{lid:$routeParams.lid}}).then(function (data) {
        $scope.info=data.data;
    })
}])
//----------  设置  -----------
.controller("set",["$scope",function ($scope) {

}])
//获取用户名等信息，修改密码页面
.controller("setuser",["$scope","$http",function ($scope,$http) {
    $http({url:"/setuser"}).then(function (data) {
        $scope.uname=data.data[0].uname;
    })
    $scope.upassold="";
    $scope.upass1="";
    $scope.upass2="";
    $scope.con="";
    $scope.send=function () {
        if ($scope.upass1 != $scope.upass2) {
            $scope.upassold = "";
            $scope.upass1 = "";
            $scope.upass2 = "";
            $scope.isshow = true;
            $scope.con = "两次密码输入内容不同";
            setTimeout(function () {
                $scope.isshow = false;
                $scope.$apply();
            }, 1000)

        } else {
            //可以监听旧密码发起ajax两次密码的比较也可以监听判断
            $http({
                url: "/setuserIn",
                params: {uname: $scope.uname, upass: $scope.upass1, upassold: $scope.upassold}
            }).then(function (e) {
                console.log(e.data);
                if (e.data == "no") {
                    $scope.upassold = "";
                    $scope.upass1 = "";
                    $scope.upass2 = "";
                    $scope.isshow = true;
                    $scope.con = "操作失败"
                    setTimeout(function () {
                        $scope.isshow = false;
                        $scope.$apply();
                    }, 1000)
                } else if (e.data == "ok") {
                    location.href = "/login";
                }
            })
        }
    }
}])
//好友热度
.controller("dataview",["$scope","$http",function($scope,$http){
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));
    // 指定图表的配置项和数据
    var option = {
        title: {
            text: '好友热度'
        },
        tooltip: {},
        legend: {
            data:['热度']
        },
        xAxis: {
            data: ['admin','likai','zhangsan','lisi']
        },
        yAxis: {},
        series: [{
            name: '热度',
            type: 'scatter',
            data: [2,4,3,9]
        }]
    };
    myChart.setOption(option);
}])