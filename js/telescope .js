$.fn.extend({
	fdj:function(){
		var box = $("#box");
		box.mouseenter(function(){
			if(!$(this).data("span")){
				$(this).data("span","<span></span>").data("div","<div id='box1'><img src ='img/nature2.jpg'/></div>");
				$(this).append($(this).data("span"));
				$("body").append($(this).data("div"));
			}
		})
		box.mousemove(function(event){
		var l = event.clientX-$(this).offset().left-50;
		var t = event.clientY-$(this).offset().top-50;
		if(l<0)l = 0;
		if(t<0)t = 0;
		if(l>=$(this).innerWidth()-$("span").width()){
			l = $(this).innerWidth()-$("span").width()
		}
		if(t>=$(this).innerHeight()-$("span").height()){
			t = $(this).innerHeight()-$("span").height()
		}
		x = -l/($(this).innerWidth()-$("span").width())*($("#box1 img").width()-$("#box1").width())
		y = -t/($(this).innerHeight()-$("span").height())*($("#box1 img").height()-$("#box1").height())
		$("span").css({
			"left":l,
			"top":t
		})
		$("#box1 img").css({
			"left":x,
			"top":y
		})
		box.mouseleave(function(){
			if($(this).data("span")){
				$(this).removeData("span");
				$("span").remove();
			}
			$("#box1").remove();
		})
	})
	}
})
