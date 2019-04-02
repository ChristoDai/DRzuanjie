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
                $(this).find(".hide-nav").css("left", -index * 115 - 241).stop().slideDown(200);
            } else {
                $(this).find(".hide-nav").css("left", -index * 115).stop().slideDown(200);
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
    
    // $(window).on("scroll",function () {
    //    var scrollY  =  window.pageYOffset;
    //    if(scrollY > 110) {
    //        $(".top-nav").addClass("fixed");
    //     //    $(".top-nav").stop().show();
    //     //    $("#main").css("marginTop",200);
    //     //    $(".logo").children("img").attr("src", "images/logo2.png");
    //        if( on ) {
    //              $(".logo").addClass("width116");
    //         }
    //    }
    //    if(scrollY < 110) {
    //     $(".top-nav").removeClass("fixed");
    //     // $("#main").css("marginTop",0);
    //     // $(".logo").children("img").attr("src", "images/logo-sanjiao.png").removeClass("width116");
    //        if( on ) {
    //             $(".logo").removeClass("width116");
    //        }
    //    }
    // })


    $(window).scroll(function (){
        var current = $('html,body').scrollTop();
        if(current > 200) {
            $('#dr_slide').fadeIn(400);
        } else {
            $('#dr_slide').fadeOut(400);
        }
    })
    $('.backTop a').click(function(e){
        e.preventDefault;
        $('html,body').animate({
            scrollTop : 0
      },500)
    })
    $('.control').mouseenter(function (){
        var index = $(this).index();
        $(this).addClass('on').siblings().removeClass('on');
        $('.control-hide').eq(index).stop().fadeIn(100).animate({
            zIndex : 1,
            right : 50,
            opacity : 1
        },400)
        $(this).mouseleave(function(){
            $(this).removeClass('on');
            $('.control-hide').eq(index).stop().fadeOut(200,function(){
                $(this).css({
                    right : 0,
                    opacity : 0,
                    zIndex : -1
                })
            });
        })
    })

})