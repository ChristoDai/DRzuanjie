$(function () {
    var index = 0;
    var ulImg = $(".wrap-imgList");
    var imgWidth = $(".wrap-imgList li").eq(0).width();
    var timerid;
    timerid = setInterval(autoplay2, 4000);


    $(".wrap-hd li").on('mouseenter', function () {
        clearInterval(timerid);
        $(this).addClass("on").siblings().removeClass("on");
        var i = $(this).index();
        index = i;
        ulImg.stop().animate({
            left: -imgWidth * i
        }, 400)
    }).mouseleave(function () {
        timerid = setInterval(autoplay2, 4000);
    });

    
    function autoplay2() {
        if (index == 3) {
            ulImg.css("left", 0);
            index = 0;
        }
        index++;
        ulImg.stop().animate({
            left: -imgWidth * index
        }, 400)
        if (index == 3) {
            $(".wrap-hd li").eq(0).addClass("on").siblings().removeClass("on");
        } else {
            $(".wrap-hd li").eq(index).addClass("on").siblings().removeClass("on");
        }
    }
})