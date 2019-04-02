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
    })
})