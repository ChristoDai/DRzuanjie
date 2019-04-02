
      // 准备 : 
      //1 ol里面的li全部删除, 想通过图片的个数添加
      //2.最后一张1, 代码加

      // 功能1 : 根据图片的个数.添加小圆点 ,并且第一个小圆点变红
      //1.1 获取元素
      var ul = document.querySelector('.dr-banner ul');
      var ulis = ul.children; // 图片的个数
      var ol = document.querySelector('.dr-banner ol');
      var index = 0;

      //1.2  遍历图片的个数
      for (var i = 0; i < ulis.length; i++) {
          
          //1.3 创建添加小圆点
          //1.3.1 创建li
          var li = document.createElement('li');
          //1.3.2 设置li
          li.innerText =  i+1;
          //1.3.3 添加li
          ol.appendChild(li);
      }
      //1.4 第一个小圆点变红
      var olis = ol.children;
      olis[0].className = 'current';


      // 功能2 : 拷贝第一张图片,添加到ul的最后
      // 网页之前存在的元素,如果使用appendChild.相当于剪切的功能
      ul.appendChild( ulis[0].cloneNode(true));

      // 功能3 :  点击左右键滚动 + 无缝滚动 + 同步小圆点
      //3.1 获取元素
      var arr_left = document.querySelector('.arrow-left');
      var arr_right = document.querySelector('.arrow-right');
      var imgWidth = document.querySelector('.dr-banner').offsetWidth;
      var index = 0;

      //3.2 注册事件 - 右键
      arr_right.onclick = function () {
        
          //1 动画之前处理无缝滚动 , 打印index,看index哪个值有问题的
          // console.log(index);
          if (index == 5) {
            index = 0; //索引归0
            ul.style.left = 0;  // 位置归0  立马切换到第一张1
          }
          

          //2 动画
          index++;
          animate(ul, - index * imgWidth );

          //3 动画之后处理同步 小圆点  打印index.确认index是否是真的下标
          // console.log(index);
          // 数组[下标].className = 'current';
          for (var i = 0; i < olis.length ; i++) {
              olis[i].className = '';
          }

           if (index == 5) {
             0 
             olis[0].className = 'current';
           } else { // 0-4 都ok
            
             olis[index].className = 'current';
           }



      }
      //3.3 注册事件 - 左键
      arr_left.onclick = function () {

        //1 动画之前处理无缝滚动, 打印index,看index哪个值有问题
       
        if (index == 0) {
          index = 5;
          ul.style.left = - index * imgWidth + 'px';
        }
        
        //2 动画
        index--;
        animate(ul, - index * imgWidth);

        //3. 动画之后,处理同步 小圆点
        // console.log(index);
        for (var i = 0; i < olis.length ; i++) {
            olis[i].className = '';
        }
        olis[index].className = 'current';

      }

      // 功能4 : 自动播放 
      //4.1 获取元素
      var box = document.querySelector('.dr-banner');
      var arrow = document.querySelector('.arrow');
      var time = 4000;

      var timerId = setInterval(function () {
        arr_right.onclick();
      },time);

      //4.1 注册 over
      box.onmouseover = function () {
        
        // 清除定时器
        clearInterval(timerId);
        // 显示arrow
        arrow.style.display = 'block';
        
      }
      //4.2 注册 out
      box.onmouseout = function () {

        // 再开启
        timerId = setInterval(function () {
            arr_right.onclick();
          },time);

        // 离开隐藏
        arrow.style.display = 'none';  
        
      }

      // 功能5 : 点击小圆点
      //5.1 遍历注册事件
      for (var i = 0; i < olis.length ; i++) {

          olis[i].index = i;
          olis[i].onclick = function () {
            
            // 功能1 : 点击小圆点, 小圆点变红
            for (var i = 0; i < olis.length ; i++) {
                olis[i].className = '';
            }
            this.className = 'current';
            // 功能2 : 点击小圆点, 显示出对应 的图片
            
            // 同步最新点击的小圆点下标
            index = this.index;

            // 首要任务 : 获取当前元素的索引
            // console.log(this.index);
            animate(ul, - this.index * imgWidth);

            
          }
      }
      




      
// 封装
// 参数1 : 目标元素
// 参数2 : 目标值 (目的地)
// var timerId;  window.timerId
function animate( element, target) {

  // 清除上一个定时器
  clearInterval(element.timerId);

  // 开启一个新的定时器
  element.timerId = setInterval(function () {

    // 动画三步走
    //1. 获取当前位置
    var current = element.offsetLeft;

    //2. 累加小碎步
    // 确定步数
    var step = current < target ? 30 : -30;
    // 没有到达目的地 (距离 >= 步数)
    if (Math.abs(target-current) >= Math.abs(step) ) {
      
      current += step;
      //3. 重新赋值
      element.style.left = current + 'px';

    } else {
      // 到达目的地
      clearInterval(element.timerId);
      // 直接赋值目的地
      element.style.left = target + 'px';
    }



  },5);
  
}
