// 获取元素
 // 1. 获取元素
//  var as = document.querySelectorAll('.img1 a');
//  var bigImg = document.querySelector('.fl #bigImg');

//  // 2. 注册事件
//  for (var i = 0; i < as.length ; i++) {
//      as[i].onmousemove = function() {
//               //3.1 获取a的href
//        // this.href;
//         bigImg.src = this.href;

//        //最后 阻止a的跳转
//        return false;
//      }
//  } 
// 获取元素
var inpu = document.querySelector('.pr-expect input');

// 注册事件
inpu.onfocus = function () {
    if (this.value == '输入阿拉伯数字') {
        this.value = '';
    }
}
// 离开
inpu.onblur = function () {
    if(this.value == '') {
        this.value = '输入阿拉伯数字';
    }
}



// 获取元素
var ipt = document.querySelector('.xiala input');

// 注册事件
  ipt.onfocus = function () {

      if(this.value == '免费刻字') {
          this.value = '';
      }
  }
// 离开
ipt.onblur = function () {
    if(this.value == '') {
        this.value = '免费刻字';
    }
}





// 轮播图
var ul = document.querySelector('.box1 ul');
var ulis = ul.children;
var ol = document.querySelector('.box1 ol');

// 遍历图片的个数
for(var i = 0; i < ulis.length; i++) {
    // 添加小圆点
    // 创建li
    var li = document.createElement('li');
    // 设置li
    // li.innerText = i+1;
    // 添加li
    ol.appendChild(li);
}
// 第一个变红
var olis = ol.children;
olis[0].className = 'current';



$(function(){
    var i = 0;
    //获取图片li
    var lis = $(".slideshow li");
    lis.eq(0).css('display','block');
    //获取点击小圆点的li
    var ols = $("ol li");
    // 给小圆点注册点击事件
    ols.on('click',function(){
        //获取点击的那个的下标
        var index = $(this).index();
        i = index;
        //.fadeIn()淡入 .fadeOut()淡出 .sbilings() 切换到他的其他兄弟
        lis.eq(index).stop().fadeIn(800).siblings().stop().fadeOut(800);
        $(this).addClass('current').siblings().removeClass('current');
    })
    setInterval(function () {
        if(i == 4) {
            i = -1;
        }
        i ++;
        lis.eq(i).stop().fadeIn(800).siblings().stop().fadeOut(800);
        ols.eq(i).addClass('current').siblings().removeClass('current');
    },3000)
})



// 拷贝第一张图 添加到ul的最后面
// ul.appendChild( ulis[0].cloneNode(true) );

// var arr_left = document.querySelector('.left');
// var arr_right = document.querySelector('.right');
// var imgWidth = document.querySelector('.box1').offsetWidth;
// var ul = document.querySelector('.box1 ul');
// var index = 0;

// 注册事件 右键
// arr_right.onclick = function () {
//     // 动画之前处理无缝滚动
//     console.log(index);
//     if(index == 5) {
//         index = 0;
//         ul.style.left = 0;
//     }
    
//     // 动画
//     index++;
//     animate(ul, -index * imgWidth);
//     // 动画之后处理同步  小圆点
//     for (var i = 0; i < olis.length; i++) {
//         olis[i].className = '';
//     }
//     if(index == 5) {
//         olis[0].className = 'current';
//     }else {
//         olis[index].className = 'current';
//     }
// }


// arr_left.onclick = function () {

//     if(index == 0) {
//         index = 5;
//         ul.style.left = -index * imgWidth + 'px';

//     }

//     // 动画
//     index--;
//     animate(ul, -index * imgWidth);

//     for(var i = 0; i < olis.length; i++) {
//         olis[i].className = '';

//     }
//     olis[index].className = 'current';

// }
// 自动播放
// 获取元素
// var box = document.querySelector('.box1');
// var arrow = document.querySelector('.box1 .arrow');
// var time = 2000;

// var timerId = setInterval(function () {
//     arr_right.onclick();
// },time);
// // 注册 over 
// box.onmouseover = function () {
//     // 清除定时器
//     clearInterval(timerId);
//     // 显示arrow
//     arrow.style.display = 'block';
// }
// // 注册 out
// box.onmouseout = function () {
//     // 在开启
//     timerId = setInterval(function () {
//         arr_right.onclick();
//     },time);
//     // 离开隐藏
//     arrow.style.display = 'none';
// }
// 小圆点
// 遍历
// for(var i = 0; i < olis.length; i++) {

//     olis[i].index = i;
//     olis[i].onclick = function () {

//         for(var i = 0; i < olis.length; i++) {
//             olis[i].className = '';
//         }

//         this.className = 'current';
//         index = this.index;

//         // 获取索引
//         console.log(this.index);
//         animate(ul, -this.index * imgWidth);
        
//     }
// }