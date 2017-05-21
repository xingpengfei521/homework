$.ajax({
    type:"POST",
    url:"http://datainfo.duapp.com/shopdata/getclass.php",
    dataType:"json",
    success:function(data){
        for(var i =0;i < data.length;i++){
            $div = $("<div>");
            // $img = data[i].icon;
            // $name = data[i].className;
            $div.html("<a href='#'><ul class='classify'><li>"+data[i].className+"</li><span> > </span></ul></a>");
            $(".content").append($div);
        };
    }

});
// var li = document.getElementsByTagName('li');
// var ul = document.getElementsByClassName('.ending');
// for(var i = 0;i < ul.length;i++){
//     this.style.background = "rgb(212,19,123)";
// }
