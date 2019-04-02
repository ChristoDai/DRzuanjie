$(function(){
     //获取验证码 
     $("button").click(function(){
        $(this).prop('disabled',true);  
       $(this).text("30秒后再次发送");
        var that = $(this);
       var index = 30;
      var timeId =  setInterval(function(){
           index--;
           $(that).text(index+"秒后再次发送");
            if (index==0) {
                clearInterval(timeId)
                $(that).text("获取验证码")
            }
   
       },1000)
       
    });

    //手机号码不正确 无法登陆
    
    var Val={
        isMobile:function(s){return this.test(s,/(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/)},
        isEmail:function(a){var b ="^[-!#$%&'*+\\./0-9=?A-Z^_`a-z{|}~]+@[-!#$%&'*+\\/0-9=?A-Z^_`a-z{|}~]+.[-!#$%&'*+\\./0-9=?A-Z^_`a-z{|}~]+$";
        return this.test(a, b);},
        isNumber:function(s,d){return !isNaN(s.nodeType==1?s.value:s)&&(!d||!this.test(s,"^-?[0-9]*\\.[0-9]*$"))},
        isEmpty:function(s){return !jQuery.isEmptyObject(s)},test:function(s,p){s=s.nodeType==1?s.value:s;return new RegExp(p).test(s)}};
        //上面给你一个常用的验证代码，比较使用
         
        $(".in_for .user").blur(function(){
        var v=$(this).val();
        var n=$(this).next();
        if(!Val.isMobile(v)){
        n.html("<font color='red'>请输入正确的手机号码</font>");
        $
        }else{
        // n.css("display","block")
        n.text("正确");
        n.css("color","green")
        
        }
        });
})