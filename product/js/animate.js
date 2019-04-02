
// 封装函数
// 参数1 : 动画的元素
// 参数2 : 目标值
function animate(element,target) {

  // 清除上一个定时器
  clearInterval(element.timerId);

  // 新开启一个定时器
  element.timerId = setInterval(function () {

    // 动画三步走
    //1. 获取当前位置
    var current = element.offsetLeft;

    //2. 累加小碎步
    // 确定步数
    var step = current < target ? 20 : -20;
    // 确定什么时候走?  距离 >= 步数
    if (Math.abs(target-current) >= Math.abs(step) ) {

        current += step;

        //3. 重新赋值
        element.style.left = current + 'px';
      
    } else {

        clearInterval(element.timerId);
        // 不到一个步数的时候,直接赋值 <20
        element.style.left = target + 'px';
    }

    
  },20);
  
}