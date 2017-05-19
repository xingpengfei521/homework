//app搭建服务器,并且配置文件信息
var express = require('express');
var app = express();
var todoController = require("./controller/todoController");
//配置ejs视图引擎
app.set("view engine","ejs");
app.use(express.static('./public'));
todoController(app);
app.listen(4000);