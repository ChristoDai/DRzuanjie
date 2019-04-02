$(function () {
    var isTrue = false;
    // $(".share-imgList li a")
    //     .each(function (index, value) {
    //         $(value).attr("href", "javascript:void(0)");
    //     })

    // function addClick(obj) {
    //     $(".share-hide").stop().fadeIn(400);
    //     obj.stop().fadeIn().addClass('rotate').siblings().hide();
    // }
    var timerid;
    
    function autoplay(i){
        clearInterval(timerid);
        var $lis = $('.item'+i+' li');
        var index = 0;
        // $('.liang').animate({
        //     width : '100%'
        // },5000,function(){
        //     $(this).width("0%");
        // })
        $lis.eq(index).stop().fadeIn(400).siblings().fadeOut(400);
        timerid = setInterval(function (){
            if(index == $lis.length) {
                index = -1;
            }
            index++;
            $lis.eq(index).stop().fadeIn(400).siblings().fadeOut(400);

            // $('.liang').animate({
            // width : '100%'
            // },5000,function(){
            //     $(this).width("0%");
            // })
        },2000)
    }


    // $('.map').click(function(){
    //     if(isTrue) {
    //         // alert(1);
    //         $(".close-btn").click();
    //     }
    // })

    $(".nNum li").click(function(){
        isTrue = true;
        var i = $(this).index();

        var text = $(this).html();
        
        $('.f2 h2').fadeIn(400,function(){
            autoplay(i+1);
            $('.share-hide').stop().slideDown(400);
            $(".share-hide-item").eq(i).show();
        }).text(text);
        // $('.share-hide-item').eq(i).show(0).addClass('rotate');
        // $('.share-hide').stop().show(0).animate({
        //     width : 500
        // },300,"linear",function(){
        //     // 
        //     // $('.jindutiao').fadeIn(200);
        // })
        
    })

    $(".share-hide-item").each(function (index, value) {
        var $div = $('<div class="close-btn">×</div>');
        $div.appendTo(value);
    })
    
    $(".close-btn").click(function () {
        // $(".share-hide").stop().animate({
        //     width : 0
        // },300,"linear",function(){
        //     // $('.jindutiao').hide(0);
        //     
        //    
        // })
        // $(".share-hide").stop().fadeOut(200);
        $(".share-hide").stop().slideUp(200,function(){
            $('.f2 h2').fadeOut();
        });
        $(".share-hide-item").hide(200);
        clearInterval(timerid);
        // $('.share-hide-item').removeClass('rotate');
    })


    
    // $(".share-imgList li")
    //     .each(function (index, value) {

    //         $(value).click(function (e) {
    //             switch (index + 1) {
    //                 case 1:
    //                     addClick($(".item1"));
    //                     break;
    //                 case 2:
    //                     addClick($(".item2"));
    //                     break;
    //                 case 3:
    //                     addClick($(".item3"));
    //                     break;
    //                 case 4:
    //                     addClick($(".item4"));
    //                     break;
    //                 case 5:
    //                     addClick($(".item5"));
    //                     break;
    //                 case 6:
    //                     addClick($(".item6"));
    //                     break;
    //                 case 7:
    //                     addClick($(".item1"));
    //                     break;
    //                 case 8:
    //                     addClick($(".item2"));
    //                     break;
    //                 case 9:
    //                     addClick($(".item3"));
    //                     break;
    //                 case 10:
    //                     addClick($(".item4"));
    //                     break;
    //                 case 11:
    //                     addClick($(".item5"));
    //                     break;
    //                 case 12:
    //                     addClick($(".item6"));
    //                     break;
    //             }
    //         })
    //     });
})