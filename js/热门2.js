$(function () {
    var $imgList = $(".hotCity-imgList2 li");
    var $smallList = $(".small-tt2 li");
    var $span = $(".hotCity-scroll2");
    var index = 0;
    
    $imgList.eq(0).css('display', 'block');
    var timerid;
    for (var i = 0; i < $smallList.length; i++) {
        $smallList.eq(i).mouseenter(function () {
            clearInterval(timerid);
            var spanLeft = $span.position().left;
            var i = $(this).index();
            index = i;
            $imgList.eq(i).stop().fadeIn(400).siblings().stop().fadeOut();
            $(this).addClass('on').siblings().removeClass('on');
            $(this).mouseleave(function() {
                clearInterval(timerid);
               timerid = setInterval(autoplay,4000);
            })
            //判断位置,向前走
            if (spanLeft < i * 240) {
                $span
                    .stop()
                    .animate({
                        left: 250 * i
                    }, 200, 'linear', function () {
                        $(this)
                            .stop()
                            .animate({
                                left: 240 * i
                            }, 100)
                    })
            } else if (spanLeft > i * 240) {
                //当回到0点的时候,由于0 * 240 == 0,因此要自己判断一下!
                if (i == 0) {
                    $span.stop().animate({
                        left: -10
                    }, 200, 'linear', function () {
                        $(this).stop().animate({
                            left: 0
                        }, 100)
                    })
                    return;
                }
                $span.stop().animate({
                    left: 230 * i
                }, 200, 'linear', function () {
                    $(this).stop().animate({
                        left: 240 * i
                    }, 100)
                })
            }
        })
    }
    timerid = setInterval(autoplay, 4000);
    function autoplay() {
        index++;
        if (index == 5) {
            index = 0;
        }
        $imgList.eq(index).stop().fadeIn(400).siblings().stop().fadeOut();
        $smallList.eq(index).addClass('on').siblings().removeClass('on');
        var spanLeft = $span.position().left;
        if (spanLeft < index * 240) {
                $span
                    .stop()
                    .animate({
                        left: 250 * index
                    }, 200, 'linear', function () {
                        $(this)
                            .stop()
                            .animate({
                                left: 240 * index
                            }, 100)
                    })
            } else if (spanLeft > index * 240) {
                //当回到0点的时候,由于0 * 240 == 0,因此要自己判断一下!
                if (index == 0) {
                    $span.stop().animate({
                        left: -10
                    }, 200, 'linear', function () {
                        $(this).stop().animate({
                            left: 0
                        }, 100)
                    })
                    return;
                }
                $span.stop().animate({
                    left: 230 * index
                }, 200, 'linear', function () {
                    $(this).stop().animate({
                        left: 240 * index
                    }, 100)
                })
            }
    }
})