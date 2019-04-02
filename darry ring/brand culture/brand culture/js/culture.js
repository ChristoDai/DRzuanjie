

      // 功能1 : 根据图片的个数.添加小圆点 ,并且第一个小圆点变红
      //1.1 获取元素
      var ul = document.querySelector('.box ul');
      var ulis = ul.children; // 图片的个数
      var ol = document.querySelector('.box ol');

      //1.2  遍历图片的个数
      for (var i = 0; i < ulis.length ; i++) {
          
          //1.3 创建添加小圆点
          //1.3.1 创建li
          var li = document.createElement('li');
          //1.3.3 添加li
          ol.appendChild(li);
      }
      //1.4 第一个小圆点变色
      var olis = ol.children;
      olis[0].className = 'current';

           //第一个轮播图
    $(function(){
        (function(){
            var i = 0;
            var timerId ;
            //获取图片li
            var lis = $(".imgList li");
            lis.eq(0).css('display','block');
            //获取点击小圆点的li
            var ols = $("ol li");
            // 给小圆点注册点击事件
            ols.on('click',function(){
                clearInterval(timerId);
                //获取点击的那个的下标
                var index = $(this).index();
                i = index;
                //.fadeIn()淡入 .fadeOut()淡出 .sbilings() 切换到他的其他兄弟
                lis.eq(index).stop().fadeIn(800).siblings().stop().fadeOut(800);
                $(this).addClass('current').siblings().removeClass('current');
            }).mouseleave(function(){
                clearInterval(timerId);
                timerId = setInterval(autoplay,3000);
            })
            timerId = setInterval(autoplay,3000);

            function autoplay () {
                if(i == 3) {
                    i = -1;
                }
                i ++;
                lis.eq(i).stop().fadeIn(800).siblings().stop().fadeOut(800);
                ols.eq(i).addClass('current').siblings().removeClass('current');
            }

        })()
        //身份验证环节
       var $spans = $(".inquire span");
        var $ipt = $(".inq-l input");
        
        
       $spans.click(function(){

        
            $(this).css({
              border: "1px solid #8b766c",
              backgroundColor: "#fff7f3",
               color: "#8b766c",
            }).siblings("span").css({
                border: "1px solid #c2c2c2",
                color: "#c2c2c2",
                backgroundColor:"#f2f2f2"
            });

         //获取当前元素的下标
        var index = $(this).index();
        
            //变文字
            if (index == 1) {
                $ipt.attr("placeholder", "请输入身份证号验证真爱承诺").siblings().text("身份证号码：") 
            }
            if (index == 2) {
                
             $ipt.attr("placeholder", "請輸入護照編號驗證真愛承諾").siblings().text("护照编号：")

            }if (index == 3) {
             $ipt.attr("placeholder", "請輸入港澳台身份證號碼驗證").siblings().text("身份證號碼：")
                
            }if (index == 4){
             $ipt.attr("placeholder", "请输入国家证件号码验证真爱承诺").siblings().text("其他证件号：")

            }
       });


       //鼠标移上文本框时显示文字
       $ipt.mouseenter(function(){
        
           $(this).parent().next().css("display","block");

       });

       //鼠标移走
       $ipt.mouseleave(function(){
        
        $(this).parent().next().css("display","none");

    });

    //轮播戒指

    // var j = 0;
    // var lis = $(".img li");
    // lis.eq(0).css('display','block');
   
    // setInterval(function () {
    //     if(j == 5) {
    //         j = -1;
    //     }
    //     j ++;
    //     lis.eq(j).stop().fadeIn(800).siblings().stop().fadeOut(800);
    //     ols.eq(j).addClass('current').siblings().removeClass('current');
    // },5000);

    // lis.mouseenter(function(){
    //     lis.stop();
    // });

//旋转木马

     //获取页面的5个li
     var $li = $("#wrap li");

     //让箭头显示与隐藏
     //1. 给大盒子注册mousenter事件，让箭头显示
     $("#wrap").mouseenter(function () {
       $("#arrow").css("opacity", 1);
     });
 
     //2. 注册mouseleave事件，让箭头隐藏
     $("#wrap").mouseleave(function () {
       $("#arrow").css("opacity", 0);
     });
 
 
     //3. 点击右箭头，要让所有li的类名都发生改变
     //数组存储了5个li的类名的顺序
     var arr = ["slide1", "slide2", "slide3", "slide4", "slide5"];
     $("#arrRight").click(function () {
 
       //让数组的最后一项变成数组的第一项
       var last = arr.pop();
       arr.unshift(last);
       //console.log(arr);
       //给每一个li设置对应的类名
       //遍历5个li
       for(var i = 0; i < $li.length; i++) {
         //js的方式
         //$li[i].className = arr[i];
         //添加对应的类，还要删除其他的类
         $li.eq(i).removeClass().addClass(arr[i]);
       }
     })
 
 
     $("#arrLeft").click(function () {
 
       //把数组的第一项放到数组的最后一项
       var first = arr.shift();
       arr.push(first);
 
       for(var i = 0; i < $li.length; i++){
         $li[i].className = arr[i];
       }
 
 
     })


    })

    
  






      
 


 