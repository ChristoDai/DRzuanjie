// 封装
// var timerId;  window.timerId
function animate(element, obj, callback) { // window.element.timerId;

  // 清除上一个定时器
  clearInterval(element.timerId);

  // 开启一个新的定时器
  element.timerId = setInterval(function () {

    //第一步 : 假设三个动画都完成了
    var flag = true; 

    // 第二步 : 找打脸的(只要发现有一个没有完成就打脸)
    // 遍历对象
    for (var key in obj) {

      // 'width' : 400
      // 'height' : 400
      var attr = key;
      var target = obj[key];

      // 动画三步走
      //1. 获取当前样式值
      var current = window.getComputedStyle(element)[attr]; // '100px';
      current = parseInt(current);  // 100

      //2.累加小碎步
      var step = (target - current) / 10;
      step = step > 0 ? Math.ceil(step) : Math.floor(step);
      current += step;

      //3. 重新赋值
      element.style[attr] = current + 'px';

      //4. 到达目的地 
      if (current != target) {
        flag = false;
      }

    }

    // 第三步 : 判断 
    // 动画完成 清除定时器
    if (flag == true) {
      clearInterval(element.timerId);
      callback && callback();
    }

  }, 20);

}