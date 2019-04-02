$(function() {
    var on = true;
    for(var i = 0 ; i < 8 ; i++) {
        $(".nav-nav li").eq(i).mouseenter(function () {
            $(this).find("em").stop().animate({
                top : "24px"
            },200);
            $(this).find("span").stop().animate({
                bottom : "24px"
            },200);
            var index = $(this).index() - 1;
            if(index >= 4) {
                $(this).find(".hide-nav").css("left", -index * 137 - 241).stop().slideDown(200);
            } else {
                $(this).find(".hide-nav").css("left", -index * 137).stop().slideDown(200);
            }
            if( on ) {
                $(".logo").addClass("width116");
                on = false;
            }
        }).mouseleave(function() {
            $(this).find("em").stop().animate({
                top : "0"
            },200);
            $(this).find("span").stop().animate({
                bottom : "0"
            },200);
            $(this).find(".hide-nav").stop().slideUp(200);
        })
    }
    $(".logo").mouseenter(function () {
        if(!on) {
            $(this).removeClass("width116");
            on = true;
        }
    })
    
    $(window).on("scroll",function () {
       var scrollY  =  window.pageYOffset;
       if(scrollY > 110) {
           $(".top-nav").addClass("fixed");
        //    $(".logo").children("img").attr("src", "images/logo2.png");
           if( on ) {
                 $(".logo").addClass("width116");
            }
       }
       if(scrollY < 110) {
        $(".top-nav").removeClass("fixed");
        // $(".logo").children("img").attr("src", "images/logo-sanjiao.png").removeClass("width116");
           if( on ) {
                $(".logo").removeClass("width116");
           }
       }
    });

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