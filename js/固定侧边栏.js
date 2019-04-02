$(function(){
            
    var $lis = $('#slide li');
    var $navs = $('.nav');
    var isTrue = true;
    var onOff = true;

    $lis.hover(function (){
        //    $(this).find('p').addClass('on').parent().siblings().find('p').removeClass('on');
        if($(this).hasClass('on')) {
            isTrue = false;
        } else {
            isTrue = true;
        }
            $(this).addClass('on');
            
    },function(){
        if(isTrue) {
            $(this).removeClass('on');
        }
    })

    $lis.click(function(){
        onOff = false;
        isTrue = true;
      var index = $(this).index();
      var top = $navs.eq(index).offset().top;
      $('html,body').animate({
          scrollTop : top
      },400,function(){
          onOff = true;
      })
      if(isTrue) {
          $(this).addClass('on').siblings().removeClass('on');
          isTrue = false;
      }
    })

    $(window).scroll(function(){
        var current = $('html,body').scrollTop();
        if( current >=  $navs.eq(0).offset().top) {
            $('#slide').fadeIn(400);
        } else {
            $('#slide').fadeOut(400);
        }
        if(onOff) {
           
            for ( var i=0;i<$navs.length;i++ ) {
                if ( current < $navs.eq(i).offset().top )
                {
                    index = i - 1;
                    if ( index < 0 )
                    {
                        index = 0;
                        $lis.removeClass('on');
                    }else
                    {
                        $lis.eq(index).addClass('on').siblings().removeClass('on');
                    }
                    break;
                }
            }
        }
    })
    $('.backTop a').click(function(e){
        e.preventDefault;
        $('html,body').animate({
            scrollTop : 0
      },500)
    })

//    var $top =  $('.slide-top');
//    $top.mousedown(function(e){
//        var clientX = e.clientX;
//        var clientY = e.clientY;
//        var left = $(this).offset.left;
//        var top = $(this).offset.top;
//        var spaceX = clientX - left;
//        var spaceY = clientY - top;
//        $(document).mousemove(function(e){
//             var nX = e.clientX;
//             var nY = e.clientY;
//             left = nX - spaceX;
//             top = nY - spaceY;
//             $('#slide').css({
//                 left : left,
//                 top : top,
//             })
//        })
//    })
})