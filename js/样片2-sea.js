
    $(function () {

        creatPro('s1', 'Surprise Party', '景点：巴厘岛', 'Surprise Party', ".sea-imgList");
        creatPro('s2', '海盐味的夏天', '景点：巴厘岛', '海盐味的夏天', ".sea-imgList");
        creatPro('s3', 'R.and MRS', '景点：巴厘岛', 'MR.and MRS', ".sea-imgList");
        creatPro('s4', 'My girl', '景点：巴厘岛', 'My girl', ".sea-imgList");
        creatPro('s5', '摩登的罗曼蒂', '景点：巴厘岛', '摩登的罗曼蒂', ".sea-imgList");
        creatPro('s6', 'After 21', '景点：巴厘岛', 'After 21', ".sea-imgList");
        creatPro('s7', '最佳情侣', '景点：巴厘岛', '最佳情侣', ".sea-imgList");
        creatPro('s8', '棉花糖与白日梦', '景点：巴厘岛', '棉花糖与白日梦', ".sea-imgList");
        creatPro('s9', '海上的伊甸园', '景点：马尔代夫', '海上的伊甸园', ".sea-imgList");
        creatPro('s10', '与风吻你', '景点：马尔代夫', '与风吻你', ".sea-imgList");
        creatPro('s11', '第六感的甜', '景点：马尔代夫', '第六感的甜', ".sea-imgList");
        creatPro('s12', '抛洒人间的项链', '景点：马尔代夫', '抛洒人间的项链', ".sea-imgList");

        var $li = $(".sea-imgList li");

        $li.hover(function(ev){

            move.call(this , ev , true);
            $(this).find("span").stop().animate({
                top: 0
            }, 400)
            $(this).find("img").css("opacity", 0.6)
            $(this).find("p").stop().animate({
                bottom: 10
            }, 400)

        },function(ev){

            move.call(this , ev , false);

            $(this).find("span").stop().animate({
                top: -259
            }, 400)
            $(this).find("img").css("opacity", 1)
            $(this).find("p").stop().animate({
                bottom: -32
            }, 400)

        });



        function creatPro(i, h3text1, itext, h3text2, target) {
            var li = $('<li></li>');
            var a = $('<a></a>');
            var divT1 = $('<div class="t1"></div>');
            var img = $('<img src="image/pro'+i+'.jpg" alt="">');
            var spanT1 = $('<span></span>');
            var h3T1 = $('<h3>' + h3text1 + '</h3>');
            var i = $('<i>' + itext + '</i>');
            var p = $('<p> CHLOE PRE-WEDDING PHOTOGRAPHY STUDIO<br> HIGH-END CUSTOM WEDDING PHOTOGRAPHY</p>');

            var divT2 = $('<div class="t2"></div>');
            var h3T2 = $('<h3>' + h3text2 + '</h3>');
            var spanT2 = $('<span>Oct 01, 2018</span>');
            var h4 = $('<h4>' + itext + '</h4>');

            var divCover = $('<div class="cover"></div>');
            // var pCover = $('<p>'+ h3text1 +'</p>');
            
            // pCover.appendTo(divCover);
            divCover.appendTo(divT1);

            h3T1.appendTo(spanT1);
            i.appendTo(spanT1);
            spanT1.appendTo(divT1);

            img.appendTo(divT1);
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
        function move( ev , bool ){
            var top = $(this).offset().top;
            var bottom  = top + $(this).height();
            var left = $(this).offset().left;
            var right = left + $(this).width();

            var x = ev.pageX,
                y = ev.pageY;
            
            var sT = Math.abs(y - top),
                sB = Math.abs(y - bottom),
                sL = Math.abs(x - left),
                sR = Math.abs(x - right);
            
            var a = Math.min( sT , sB , sL , sR );

            switch ( a )
            {
                case sT:
                    if ( bool )
                    {
                        $(this).find('.cover').css({
                            left : 0,
                            top : '-487px'
                        }).stop().animate({
                            top : 0
                        },400);
                    }
                    else
                    {
                        $(this).find('.cover').stop().animate({
                            top : '-487px'
                        },400);
                    }
                    
                    break;

                case sB:
                    if ( bool )
                    {
                        $(this).find('.cover').css({
                            left : 0,
                            top : '487px'
                        }).stop().animate({
                            top : 0
                        },400);
                    }
                    else
                    {
                        $(this).find('.cover').stop().animate({
                            top : '487px'
                        },400);
                    }
                    break;
                
                case sL:
                    
                    if ( bool )
                    {
                        $(this).find('.cover').css({
                            top : 0,
                            left : '-286px'
                        }).stop().animate({
                            left : 0
                        },400);
                    }
                    else
                    {
                        $(this).find('.cover').stop().animate({
                            left : '-286px'
                        },400);
                    }
                    
                    break;
                
                case sR:
                    if ( bool )
                    {
                        $(this).find('.cover').css({
                            top : 0,
                            left : '286px'
                        }).stop().animate({
                            left : 0
                        },400);
                    }
                    else
                    {
                        $(this).find('.cover').stop().animate({
                            left : '286px'
                        },400);
                    }
                    break;
            }
        };

    })