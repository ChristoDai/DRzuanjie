$(function() {
    var index = 0;
    var timerid;
    $(".banner-imgList li").eq(0).show();
    var arrBg = ['#435664','#6392a3','#222222','#654a53','#525252'];
    $('.top-nav').css('background','#435664');

    $(".banner-tab li").on("mouseenter",function () {
        clearInterval(timerid);
        var i = $(this).index();
        index = i;
        $(this).addClass("on").siblings().removeClass("on");
        $('.top-nav').css('background',arrBg[index]);
        $(".banner-imgList li").eq(i).stop().fadeIn(800).siblings().stop().fadeOut(800);
    }).mouseleave(function () {
        clearInterval(timerid);
        timerid = setInterval(autopaly,4000);
    })
    timerid = setInterval(autopaly,4000);

    //autoplay 
    function autopaly() {
        index++;
        $('.top-nav').css('background',arrBg[index]);
        $(".banner-imgList li").eq(index).stop().fadeIn(800).siblings().stop().fadeOut(800);
        $(".banner-tab li").eq(index).addClass("on").siblings().removeClass("on");
        if(index >=  $(".banner-imgList li").length -1 ) {
            index = -1;
        }
    }

    //
    //
   
})