var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var ejs=require("ejs");
var cookieParser = require('cookie-parser');
var session = require('express-session');
var bodyParser = require('body-parser');
var login=require("./routes/login.js");
var index=require("./routes/index.js");
var admin=require("./routes/admin.js");
var logs=require("./routes/logs.js");
var app = express();
// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');


app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.use(express.static(path.join(__dirname, 'public')));

// session
app.use(session({
    secret: 'keyboard cat',
    resave: false,
    saveUninitialized: true
}))

// 进入登录
app.use("/login",login);


// 进入前台
app.use("/",index);
app.use("/admin",admin);
app.use("/logs",logs);


app.listen(18080,function(){
  console.log("开启服务");
});
