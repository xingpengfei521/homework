var bodyParser = require('body-parser');
var urlencode = bodyParser.urlencoded({extended:false});
var item = [{name:"bobo"},{name:"nanyang"},{name:"mengxiang"}];
// module.exports = function(app){
//     app.get("/todo",function(req,res){
//         res.render("index",{item:item});
//     });
//     app.post("/todo",urlencode,function(req,res){
//         console.log(req.body);
//         item.push(req.body);
//         res.json(item);
//     });
//     app.delete("/todo/:item",function(req,res){
//         item = item.filter(function(todo){
//             var data = todo.name!== req.params.item;
//             return data;
//         })
//         res.json(item);
//     })
// };
//引入模块
var mongoose = require('mongoose');
mongoose.connect("mongodb://input:123456@ds125060.mlab.com:25060/tododb");
var todoSchema = new mongoose.Schema({
    name:String
});
var Todo = mongoose.model("Todo",todoSchema);
module.exports = function(app){
    app.get("/todo",function(req,res){
        Todo.find({},function(err,data){
            if(err) throw err;
            res.render("index",{item:data});
        });
    });
    app.post("/todo",urlencode,function(req,res){
        Todo(req.body).save(function(err,data){
            if(err) throw err;
            res.json(data);
        });
    });
    app.delete("/todo/:item",function(req,res){
        Todo.find({name:req.params.item}).remove(function(err,data){
            if(err) throw err;
            res.json(data);
        })
    })
}