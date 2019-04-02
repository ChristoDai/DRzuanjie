$(function () {
    creatPro(1, '银河有迹可循,你我终会相遇', 'DB:DARLING 3.5MM', '维克多の玫瑰',".pro-imgList");
    creatPro(2, '银河有迹可循,你我终会相遇', '黛比尔斯FOREVER铂金', '100%蜜恋仪式',".pro-imgList");
    creatPro(3, '银河有迹可循,你我终会相遇', '黛比尔斯FOREVER玫瑰金', 'AM11',".pro-imgList");
    creatPro(4, '银河有迹可循,你我终会相遇', 'Eternity 槽镶公主方形 3MM', '恋爱文学集',".pro-imgList");
    creatPro(5, '银河有迹可循,你我终会相遇', 'DB Classic Rose Gold Half Pavé', '心跳指数100+',".pro-imgList");
    creatPro(6, '银河有迹可循,你我终会相遇', 'De Beers Aura', '花语轻轻诉',".pro-imgList");
    creatPro(7, '银河有迹可循,你我终会相遇', 'De Beers Aura 黄钻黄金', '热恋第100天',".pro-imgList");
    creatPro(8, '银河有迹可循,你我终会相遇', 'Talisman 18 K 白金半密', '少女粉主义',".pro-imgList");
    creatPro(9, '银河有迹可循,你我终会相遇', 'TALISMAN ESSENCE', '我是你的Alice',".pro-imgList");
    creatPro(10, '银河有迹可循,你我终会相遇', 'DB Classic 密镶 Eternity', '星星坠入银河',".pro-imgList");
    creatPro(11, '银河有迹可循,你我终会相遇', 'Promise 半纹理', '光明甜茶馆',".pro-imgList");
    creatPro(12, '银河有迹可循,你我终会相遇', 'Petal 18 K', '蜜糖与黄昏',".pro-imgList");

    function creatPro(i, h3text1, itext, h3text2,target) {
        var li = $('<li></li>');
        var a = $('<a></a>');
        var divT1 = $('<div class="t1"></div>');
        var img = $('<img src="images/pro' + i + '.jpg" alt="">');
        var spanT1 = $('<span></span>');
        var h3T1 = $('<h3>' + h3text1 + '</h3>');
        var i = $('<i>' + itext + '</i>');
        var p = $('<p> CHLOE PRE-WEDDING PHOTOGRAPHY STUDIO<br> HIGH-END CUSTOM WEDDING PHOTOGRAPHY</p>');

        var divT2 = $('<div class="t2"></div>');
        var h3T2 = $('<h3>' + h3text2 + '</h3>');
        var spanT2 = $('<span>Oct 01, 2018</span>');
        var h4 = $('<h4>' + itext + '</h4>');

        h3T1.appendTo(spanT1);
        i.appendTo(spanT1);

        img.appendTo(divT1);
        spanT1.appendTo(divT1);
        p.appendTo(divT1);

        divT1.appendTo(a);

        h3T2.appendTo(divT2);
        spanT2.appendTo(divT2);
        h4.appendTo(divT2);
        divT2.appendTo(a);

        a.appendTo(li);

        var $ul = $(target);
        li.appendTo($ul);

    }

    window.creatPro = creatPro;

    $(".pro-imgList li").mouseenter(function () {

        $(this).find("span").stop().animate({
            top: 0
        }, 400)
        $(this).find("img").css("opacity", 0.6)
        $(this).find("p").stop().animate({
            bottom: 10
        }, 400)
    }).mouseleave(function () {
        $(this).find("span").stop().animate({
            top: -259
        }, 400)
        $(this).find("img").css("opacity", 1)
        $(this).find("p").stop().animate({
            bottom: -32
        }, 400)
    })
})