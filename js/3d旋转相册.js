$(function (){
    $(window).scroll(function(){
        var current = $('html,body').scrollTop();
        var on = true;
        if($('#wrap').offset().top-800 < current && on) {
            on = false;
            var oWrap = document.getElementById('wrap');
            var oImg = oWrap.getElementsByTagName('img');
            var od3 = document.querySelector('.d3-wrap');
            var oImgLength = oImg.length;
            var Deg = 360 / oImgLength;
            var nowX , nowY , lastX , lastY , minusX = 0, minusY = 0;
            var roY = 0 , roX = -10;
            var timer;

            for ( var i=0;i<oImgLength;i++ )
            {
                oImg[i].style.transform = 'rotateY('+ i*Deg +'deg) translateZ(350px)';
                oImg[i].style.transition = 'transform 1s '+ (oImgLength-1-i)*0.1 +'s';
            }

            oWrap.style.marginTop = '200px';
            // 拖拽：三个事件-按下 移动 抬起
            //按下
            od3.onmousedown = function(ev){
                ev = ev || window.event;

                //鼠标按下的时候，给前一点坐标赋值，为了避免第一次相减的时候出错
                lastX = ev.clientX;
                lastY = ev.clientY;
                
                //移动
                this.onmousemove = function(ev){
                    ev = ev || window.event;

                    clearInterval( timer );

                    nowX = ev.clientX; // clientX 鼠标距离页面左边的距离
                    nowY = ev.clientY; // clientY ………………………………顶部………………

                    //当前坐标和前一点坐标差值
                    minusX = nowX - lastX; 
                    minusY = nowY - lastY;
                    
                    //更新wrap的旋转角度，拖拽越快-> minus变化大 -> roY变化大 -> 旋转快
                    roY += minusX*0.2; // roY = roY + minusX*0.2;
                    roX -= minusY*0.1;
    
                    oWrap.style.transform = 'rotateX('+ roX +'deg) rotateY('+ roY +'deg)';
                    
                    /*
                    //生成div，让div跟着鼠标动
                    var oDiv = document.createElement('div');
                    oDiv.style.cssText = 'width:5px;height:5px;background:red;position:fixed;left:'+nowX+'px;top:'+nowY+'px';
                    this.body.appendChild(oDiv);
                    */
                    
                    //前一点的坐标
                    lastX = nowX;
                    lastY = nowY;

                }
                //抬起
                this.onmouseup = function(){
                    this.onmousemove = null;
                    timer = setInterval(function(){
                        minusX *= 0.95;
                        minusY *= 0.95;
                        roY += minusX*0.2; // roY = roY + minusX*0.2;
                        roX -= minusY*0.1;
                        oWrap.style.transform = 'rotateX('+ roX +'deg) rotateY('+ roY +'deg)';

                        if ( Math.abs(minusX)<0.1 && Math.abs( minusY )<0.1 )
                        {
                            clearInterval( timer );
                        }
                    },13);
                }
                return false;
                }
            }
    })

    var $imgs = $('#wrap img');
    $imgs.hover(function(){
        $(this).css('border','1px solid red');
    },function(){
        $(this).css('border','1px solid transparent');
    })
})