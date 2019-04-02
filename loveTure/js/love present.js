// 第一个动画效果

function animate(element){
    element.onmouseover=function(){

    this.style.color= " #efb336";
   
    this.children[1].style.display = 'block';
  
    }
    element.onmouseout = function(){

        this.style.color= "#666";
        this.children[1].style.display = 'none';   

    }
}

//

// 商品展示页 动画效果
function anim(elements,obj){ 

    // elements.onmouseover = function(){


            //清除上一个定时器
            clearInterval(elements.timerId)
        
            //开启一个新的定时器
        
            elements.timerId = setInterval(function(){
        
                // 假设成立
                var flag=true;
        
                // 遍历 对象
                for(var key in obj){
        
                   var  atter = key;
                   var  getart = obj[key];
        
                   //动画三步走
                   // 获取当前位置
                   var current = window.getComputedStyle(elements)[atter];
        
                   var current = parseInt(current);
        
                   // 累加小碎步
                   var setp = (getart - current)/10
                        setp = setp > 0 ? Math.ceil(setp) : Math.floor(setp);;
                        current += setp;
        
                    // 重新赋值
                    elements.style[atter]= current + "px";
        
                    // 第二步 找打脸的
                    if(current != getart){
                        flag =false
                    }
        
                }
        
                // 判断
                if(false == true){
                    clearInterval(elements.timerId)
                }
        
            },20)
        
        // }

}
    //  elements.onmouseout=function(){
        
    //     //  dai.style.display="none";

    // }
