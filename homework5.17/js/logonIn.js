$(function(){
    $("#submit").on('click',function(){
        $text = $("#accout").val();
        $password = $("#password").val();
        $.ajax({
            type:"POST",
            url:"http://datainfo.duapp.com/shopdata/userinfo.php",
            data:{status:"login",userID:$text,password:$password},
            dataType:"json",
            success:function(data){
                if(data==2){
                    $("#output").text("用户名密码不符!");
                }else{
                    $("#output").text("用户名不存在!");
                }
            }
        })
    });
});