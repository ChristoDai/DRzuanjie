$(function () {
   var $user = $(".in_for .user");
    var on = false;
    var Val = {

        isMobile: function (s) { 
            return this.test(s, /(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/) 
        },

        isEmail: function (a) {
            var b = "^[-!#$%&'*+\\./0-9=?A-Z^_`a-z{|}~]+@[-!#$%&'*+\\/0-9=?A-Z^_`a-z{|}~]+.[-!#$%&'*+\\./0-9=?A-Z^_`a-z{|}~]+$";
            return this.test(a, b);
        },
        isNumber: function (s, d) { 
            return !isNaN(s.nodeType == 1 ? s.value : s) && (!d || !this.test(s, "^-?[0-9]*\\.[0-9]*$")) 
        },
        isEmpty: function (s) { 
            return !jQuery.isEmptyObject(s) 
        }, 
        test: function (s, p) { 
            s = s.nodeType == 1 ? s.value : s; 
            return new RegExp(p).test(s) 
        }

    };

  
      $("button").click(function () {
        if(on) {
            $(this).prop('disabled', true);
            $(this).text("30秒后再次发送");
            var that = $(this);
            var index = 30;
            var timeId = setInterval(function () {
                index--;
                $(that).text(index + "秒后再次发送");
                if (index == 0) {
                    clearInterval(timeId)
                    $(that).text("获取验证码");
                    on = false;
                }
            }, 1000)
        }
    }); 


    //获取验证码 
   $user.blur(function () {
        var v = $(this).val();
        var n = $(this).next();
        if (!Val.isMobile(v)) {
            n.html("<font color='red'>请输入正确的手机号码</font>");
            return;
        } else {
            n.text("正确");
            n.css("color", "green");
            on = true;
            // var xhr = new XMLHttpRequest();
        //   $.ajax({
        //         type : 'post' ,
        //         url : '../../checkUserName.php',
        //         dataType : 'json',
        //         data: {username:v},
        //         succeess : function(res) {
        //             console.log(res);
        //         },
        //         error : function(XMLHttpRequest,textStatus,errorThrown) {
        //             console.log(XMLHttpRequest);
        //             console.log(textStatus);
        //             console.log(errorThrown);
        //         }
        //     })
            // alert(html);
            var xhr = new XMLHttpRequest();
            // var username = oInput[0].value;
            xhr.open('get','../../checkUserName.php?username='+'liyang','true');
            xhr.send();
            xhr.onreadystatechange = function(){
                if( xhr.readyState==4 ){
                    if( xhr.status>=200 && xhr.status<300){
                        var content = xhr.responseText;
                        console.log(content);
                        // if( content == "恭喜您，该用户名可用" ){
                        // oDiv[0].style.color = '#dedede';
                        // oDiv[0].innerHTML = "恭喜您，该用户名可用";
                        // on = true;
                        //alert( "恭喜您，该用户名" + content + "可用" );
                    } else {
                        console.log(ss);
                    }
                }else{
                        alert('出了点问题，状态码为： '+ xhr.readyState);
                    }
                }
        }
    });
    
    //手机号码不正确 无法登陆

   
    //上面给你一个常用的验证代码，比较使用

    

    $('.tologger').click(function(){
        console.log( $(this).parent());
        $(this).parent().parent().removeClass('appear');
        $(this).parent().parent().siblings('div').addClass('appear');
    })
})