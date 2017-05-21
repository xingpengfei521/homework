$.ajax({
    type:"POST",
    url:"http://datainfo.duapp.com/shopdata/getGoods.php",
    dataType:"jsonp",
    success:function(data){
        for(var i = 0; i< data.length;i++){
            var img = data[i].goodsListImg;
            $div = $("<div>");
            $num = data[i].discount == 0 ? data[i].price : parseInt(data[i].price / (data[i].discount / 10));
            $div.html("<div class='content'><div class='contentLeft'><a href='#'><img src="+img+"></a></div><div class='contentRight'><a href='#'><p>"+ data[i].goodsName+"</p></a><p class='p1'>"+data[i].price+"</p><span>"+$num+ "</span><p class='p2'>"+data[i].discount+"折</p><div class='shopping'><a href='#'><img src="+'img/index.png'+"></a></div></div></div>");
            //console.log($div);
            $(".content2").append($div);
        }
    }
});

