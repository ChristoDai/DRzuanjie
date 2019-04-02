<?php

    if($_SERVER['REQUEST_METHOD'] === 'GET') {
      $GLOBALS['url'] = !empty($_GET['url']) ? $_GET['url'] : 'index.php';
      $GLOBALS['host'] = $_SERVER['HTTP_HOST'];
    //   echo $host;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DR-登陆</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <style>
    
    
        #user1,#user2 {
            display: block;
            width: 214px;
            height: 36px;
            border: 1px solid #e6e6e6;
            border-radius: 4px;
            margin-top: 12px;
            color: #666;
            line-height: 38px;
            padding-left: 38px;
            background: url(./image/ico-uinput.png) no-repeat 12px 12px;
        }
    </style>
</head>

<body>
    <!-- 头部 开始 -->
    <header class="top-header">
        <div class="w1360 clearfix">
            <div class="header-left fl">
                <a href="#">地址</a>
                <a href="#">全国店铺</a>
            </div>
            <ul class="header-right fr">
                <li>
                     <a href="../register/index.html">注册</a>
                    <a href="./index.html">登陆</a>
                </li>
                <li>
                    <a href="#">中文(简体)</a>
                </li>
                <li>
                    <a href="#"> 400-01-13520</a>
                </li>
                <li>
                    <a href="#">天猫旗舰店</a>
                </li>
            </ul>
        </div>
    </header>
    <!-- 头部 结束 -->

    <!-- <div class="demo" style="height: 100px;"></div> -->
    <!-- 顶部导航栏 开始 -->
    <div class="top-nav">
        <div class="line"></div>
        <div class="fixed"></div>
        <div class="w1360 clearfix">
            <ul class="nav-nav">
                <div class="logo">
                    <img src="image/logo-sanjiao.png" alt="">
                </div>
                                <li>
                    <a href="../index.php">
                        <em>网站首页</em>
                        <span>HOME</span>
                    </a>

                </li>
                <!-- 2 -->
                <li>
                    <a href="#">
                        <em>婚纱拍照</em>
                        <span>PHOTO</span>
                    </a>
                    <!-- 隐藏二级导航2 -->
                    <div class="hide-nav clearfix">
                        <div class="hide-nav-item-left fl">
                          <table cellpadding='0' cellspacing='0'>
                              <tr>
                                  <th>客片欣赏 ></th>
                              </tr>
                              <tr>
                                  <td>明星网红</td>
                                  <td>每日推荐</td>
                                  <td>巴厘岛</td>
                                  <td>济州岛</td>
                                  <td>日本</td>
                              </tr>
                              <tr>
                                    <td>迪拜</td>
                                    <td>马尔代夫</td>
                                    <td>塞班岛</td>
                                    <td>泰国</td>
                                    <td>欧洲</td>
                              </tr>
                              <tr>
                                <td>三亚</td>
                                <td>厦门</td>
                              </tr>
                          </table>
                            
                        </div>
                        <div class="hide-nav-item-line fl">
                            <img src="image/subNav_line.png" alt="">
                        </div>
                        <div class="hide-nav-item-right fl">
                            <table cellpadding='0' cellspacing='0'>
                                <tr>
                                    <th>全球样片 ></th>
                                </tr>
                                <tr>
                                    <td>巴厘岛站</td>
                                    <td>济州岛站</td>
                                    <td>日本站</td>
                                    <td>塞班岛站</td>
                                    <td>曼谷站</td>
                                </tr>
                                <tr>
                                    <td>迪拜站</td>
                                    <td>马尔代夫站</td>
                                    <td>普吉岛站</td>
                                    <td>泰国站</td>
                                    <td>欧洲站</td>
                                </tr>
                                <tr>
                                    <td>三亚站</td>
                                    <td>厦门站</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </li>
                <!-- 3 -->
                <li>
                    <a href="../loveTure/Love present.php">
                        <em>真爱礼物</em>
                        <span>GIFT</span>
                    </a>
                    <!-- 隐藏二级导航3 -->
                    <div class="hide-nav hide-item3 clearfix">
                       <dl class="left fl">
                           <dt>送礼对象</dt>
                           <dd>浪漫女士</dd>
                           <dd>尊贵男士</dd>
                           <dt>送礼对象</dt>
                           <dd>浪漫女士</dd>
                           <dd>尊贵男士</dd>
                       </dl>
                       <dl class="left2 fl">
                            <dt>类型</dt>
                            <dd>套链/项链/吊坠</dd>
                            <dd>手链/手镯</dd>
                            <dd>耳环/耳钉/耳线</dd>
                            <dd>首饰盒/花盒</dd>
                            <dd>冠冕</dd>
                            <dd>爱的DIY</dd>
                            <dd>配饰</dd>
                            <dd>查看全部真爱礼物</dd>
                       </dl>
                       <div class="hide-nav-item-line fl">
                            <img src="image/subNav_line.png" alt="">
                        </div>
                        <div class="right fl">
                            <img src="image/adv_gift.jpg" alt="">
                            <p>真爱礼物</p>
                        </div>
                    </div>
                </li>
                <!-- 4 -->
                <li>
                    <a href="../DR/dr-index.php">
                        <em>钻戒定制</em>
                        <span>RING</span>
                    </a>
                    <!-- 隐藏二级导航4 -->
                    <div class="hide-nav hide-item3 clearfix">
                       <dl class="left fl">
                           <dt>类型</dt>
                           <dd>结婚对戒</dd>
                           <dd>男戒</dd>
                           <dd>结婚套装</dd>
                           <dt>浏览</dt>
                           <dd>热销</dd>
                           <dd>新品</dd>
                       </dl>
                       <dl class="left2 fl">
                            <dt>系列</dt>
                            <dd>DARRY RING系列</dd>
                            <dd>TOGETHER系列</dd>
                            <dd>ENDLESS LOVE系列</dd>
                            <dd>查看更多戒指</dd>
                       </dl>
                       <div class="hide-nav-item-line fl">
                            <img src="image/subNav_line.png" alt="">
                        </div>
                        <div class="right fl">
                            <img src="image/adv_gift.jpg" alt="">
                            <p>真爱礼物</p>
                        </div>
                    </div>
                </li>
                <!-- 5 -->
                <li class="x">
                    <a href="#">
                        <em>品质香水</em>
                        <span>PERFUME</span>
                    </a>
                    <!-- 隐藏二级导航5 -->
                   
                </li>
                <!-- 6 -->
                <li>
                    <a href="#">
                        <em>实体店</em>
                        <span>STORE</span>
                    </a>
                    <!-- 隐藏二级导航6 -->
                    
                </li>
                <!-- 7 -->
                <li>
                    <a href="../darry ring/brand culture/brand culture/brand-culture.php">
                        <em>品牌文化</em>
                        <span>CURTURE</span>
                    </a>
                    <!-- 隐藏二级导航7 -->
                    <div class="hide-nav hide-item3">
                        <div class="left7">
                            <img src="image/pinpaiwenhua.jpg" alt="">
                            <p>品牌文化</p>
                        </div>
                        <div class="hide-nav-item-line fl">
                            <img src="image/subNav_line.png" alt="">
                        </div>
                        <div class="right fl">
                            <img src="image/adv_gift.jpg" alt="">
                            <p>真爱礼物</p>
                        </div>
                    </div>
                </li>
                <!-- 8 -->
                <li>
                    <a href="../explore/dr-ring.php">
                        <em>探索</em>
                        <span>EXPLORE</span>
                    </a>
                    <!-- 隐藏二级导航8 -->
                    
                </li>
            </ul>

        </div>
    </div>
    <!-- 顶部导航栏 结束 -->


    <div class="login">
        <div class="w1360">
            <div class="in_for ">
                <h3>登录</h3>
                <input type="text" id="user1" class="user1" maxlength="11" name= "phone" placeholder="请输入您的手机号码">
                <span></span>
                <div class="verify ">
                    <input type="text"  placeholder="请输入验证码">
                    <button>获取短信验证码</button>
                </div>

                <p>使用<a class="tologger">密码登录</a>　|　<a href="">获取语音验证码</a></p>
                
                <div class="agree">
                    <input type="checkbox" checked="checked"><label for="phoneCheck">同意用户</label><a href="https://www.darryring.com/help/46">注册协议</a>和<a href="https://www.darryring.com/help/47">隐私条款</a>
                </div>

                <div class="enter">
                    <a href="">登录</a>
                </div>

                <!-- 尾部图片部分 -->
                <div class="lat">
                    <h4>第三方账户登录</h4>
                </div>
                <!-- qq 微信部分 -->
                <div class="icon">
                    <a class="qqdl" href="https://graph.qq.com/oauth2.0/show?which=Login&display=pc&response_type=code&client_id=101139846&redirect_uri=http://passport.darryring.com/oauth/callback?type=qq&state=6ca34a6e2c9d1a9f04a3c93ccf8f49df&scope=get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo,check_page_fans,add_t,add_pic_t,del_t,get_repost_list,get_info,get_other_info,get_fanslist,get_idolist,add_idol,del_idol,get_tenpay_addr" target="_blank">
                    </a>
                    <a class="wxdl" href="https://open.weixin.qq.com/connect/qrconnect?appid=wx66f6df7337658510&redirect_uri=https%3A%2F%2Fpassport.darryring.com%2Foauth%2Fcallback%3Ftype%3Dweixin&response_type=code&scope=snsapi_login&state=STATE#wechat_redirect" target="_blank">
                    </a>
                    <a class="wbdl" href="https://api.weibo.com/oauth2/authorize?client_id=3780051303&redirect_uri=http%3A%2F%2Fpassport.darryring.com%2Foauth%2Fcallback%3Ftype%3Dweibo&response_type=code" target="_blank">
                    </a>
                    <a class="zfbdl" href="https://auth.alipay.com/login/express.htm?goto=https%3A%2F%2Fmemberexprod.alipay.com%3A443%2Fauthorize%2FuserAuthQuickLoginAction.htm%3Fe_i_i_d%3D027225c1b08799fe961467f62aee7c0c" target="_blank">
                    </a>
                </div>
            </div>


            <div class="in_for appear">
                <h3>登录</h3>
                <input type="text" id="user2" class="user2" maxlength="11" name= "phone" placeholder="请输入您的用户名">
                <span></span>
                <div class="verify">
                    <input type="password"  placeholder="请输入密码" class="password">
                </div>
                <p>使用<a class="tologger">验证码登录</a>　|　<a href="">忘记密码?</a></p>
                
                <div class="agree">
                    <input type="checkbox" checked="checked"><label for="phoneCheck">同意用户</label><a href="https://www.darryring.com/help/46">注册协议</a>和<a href="https://www.darryring.com/help/47">隐私条款</a>
                </div>

                <div class="enter">
                    <a>登录</a>
                </div>

                <!-- 尾部图片部分 -->
                <div class="lat">
                    <h4>第三方账户登录</h4>
                </div>
                <!-- qq 微信部分 -->
                <div class="icon">
                    <a class="qqdl" href="https://graph.qq.com/oauth2.0/show?which=Login&display=pc&response_type=code&client_id=101139846&redirect_uri=http://passport.darryring.com/oauth/callback?type=qq&state=6ca34a6e2c9d1a9f04a3c93ccf8f49df&scope=get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo,check_page_fans,add_t,add_pic_t,del_t,get_repost_list,get_info,get_other_info,get_fanslist,get_idolist,add_idol,del_idol,get_tenpay_addr" target="_blank">
                    </a>
                    <a class="wxdl" href="https://open.weixin.qq.com/connect/qrconnect?appid=wx66f6df7337658510&redirect_uri=https%3A%2F%2Fpassport.darryring.com%2Foauth%2Fcallback%3Ftype%3Dweixin&response_type=code&scope=snsapi_login&state=STATE#wechat_redirect" target="_blank">
                    </a>
                    <a class="wbdl" href="https://api.weibo.com/oauth2/authorize?client_id=3780051303&redirect_uri=http%3A%2F%2Fpassport.darryring.com%2Foauth%2Fcallback%3Ftype%3Dweibo&response_type=code" target="_blank">
                    </a>
                    <a class="zfbdl" href="https://auth.alipay.com/login/express.htm?goto=https%3A%2F%2Fmemberexprod.alipay.com%3A443%2Fauthorize%2FuserAuthQuickLoginAction.htm%3Fe_i_i_d%3D027225c1b08799fe961467f62aee7c0c" target="_blank">
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    <!--底部 开始-->
    <div class="dr_footer">
        <div class="dr_footer-top"></div>
        <!--底部图标-->
        <ul class="dr_footer-icon w1200">
            <li>
                <a href="#">
                    <i class="footer-icon1"></i>
                    <span>专业认证</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="footer-icon2"></i>
                    <span>一钻双证</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="footer-icon3"></i>
                    <span>终生保养</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="footer-icon4"></i>
                    <span>以小换大</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="footer-icon5"></i>
                    <span>15天退换</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="footer-icon6"></i>
                    <span>全国免运费</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="footer-icon7"></i>
                    <span>全程保险</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="footer-icon8"></i>
                    <span>会员专享</span>
                </a>
            </li>
        </ul>
        <!--底部图标end-->

        <!--黑色区域-->
        <!-- <div class="dr_tint">
            <div class="w1200">
                <!--服务-->
                <!-- <ul class="dr_servie">
                    <li>
                        <h4>关于我们</h4>
                        <a href="#">专业认证</a>
                        <a href="#">合作专区</a>
                        <a href="#">公司简介</a>
                    </li>
                    <li>
                        <h4>购物指南</h4>
                        <a href="#">购买流程</a>
                        <a href="#">支付方式</a>
                        <a href="#">配送流程</a>
                    </li>
                    <li>
                        <h4>售后服务</h4>
                        <a href="#">退货流程</a>
                        <a href="#">办理售后</a>
                        <a href="#">15天退换</a>
                    </li>
                    <li>
                        <h4>帮助中心</h4>
                        <a href="#">注册流程</a>
                        <a class="droline_showkf" href="javascript:;">联系客服</a>
                        <a href="#">网站地图</a>
                    </li>
                    <li>
                        <h4>服务条款</h4>
                        <a href="#">终生保养</a>
                        <a href="#">注册协议</a>
                        <a href="#">隐私声明</a>
                    </li>
                    <li>
                        <h4>DR资讯</h4>
                        <a href="#">资讯中心</a>
                        <a href="#">品牌专题</a>
                        <a href="#">DR标签</a>
                    </li>
                    <li>
                        <h4>会员指引</h4>
                        <a href="#">会员积分指引</a>
                        <a href="#">会员手册</a>
                        <a href="#">会员权益</a>
                    </li>
                </ul> -->
                <!--服务end-->

                <!--关注我们-->
                <!-- <div class="drfocus">
                    <h3>关注我们</h3>
                    <p>一个让你相信真爱的地方，给你实用的情感指南，为你的爱情终身服务。</p>
                    <a href="javascript:;" class="wechat">
                        <img src="image/gzh_wx.png" />
                    </a>
                    <a href="https://weibo.com/2249451585/" class="weibo" target="_blank"></a>
                </div> -->
            </div>

            <!--中英文切换，网站声明-->
            <!-- <div class="dr_declare fix">
                <div class="w1360">
                    <div class="dr_langues fl">
                        <span>选择站点</span>
                        <p class="dr_langueBtn">
                            <a href="javascript:void(0);">简体</a>
                        </p>
                        <div class="dr_langueList" id="langueList">
                            <a class="active" href="/">简体</a>
                            <a href="/hk">繁体</a>
                            <a href="/en">English</a>
                            <p>
                                <label>简体</label>
                            </p>
                        </div>
                        <a href="/help/47">隐私政策</a>
                        <a href="/drmap">网站地图</a>
                        <a href="/links">友情链接</a>
                    </div>
                    <div class="dr_decItem fr">
                        <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030302000934" target="_blank">
                            <img src="image/icon_police.png" />粤公网安备 44030302000934号/</a>
                        <span>
                            <a href="http://www.miitbeian.gov.cn" target="_blank">粤ICP备11012085号-2</a>/Copyright©2006-2018 www.darryring.com 戴瑞珠宝 All Rights Reserved. </span>
                        <img src="image/kxzd.png" alt="" />
                    </div>
                </div>
            </div> -->
            <!--中英文切换，网站声明end-->
        </div> -->
        <!--黑色区域end-->
    </div>
    <!--底部 结束-->

    <!-- 固定侧边栏 开始 -->
    <!-- <div id='dr_slide'>
            <div class="slide-top">
                <div class="top-word">
                    <img src="image/zxkf.gif" alt="">
                    <p>在线客服</p>
                </div>
                <em class="e1"></em>
                <em class="e2"></em>
            </div>
            <ul>
                <li class="control">
                    <a href="#" class="control-a1"></a>
                    <p>预约</p>
                    <div class="control-hide">
                        预约进店
                    </div>
                </li>
                <li class="control">
                    <a href="#" class="control-a2"></a>
                    <p>购物车</p>
                    <div class="control-hide">
                            购物车
                    </div>
                </li>
                <li class="control">
                    <a href="#" class="control-a3"></a>
                    <p>订单</p>
                    <div class="control-hide">
                        我的订单
                    </div>
                </li>
                <li class="control">
                    <a href="#" class="control-a4"></a>
                    <p>收藏</p>
                    <div class="control-hide">
                        我的收藏
                    </div>
                </li>
                <li class="control">
                    <a href="#" class="control-a5"></a>
                    <p>APP</p>
                    <div class="control-hide">
                        App下载
                    </div>
                </li>
                <li class="control">
                    <a href="#" class="control-a6"></a>
                    <p class="p8">分享</p>
                    <div class="control-hide">
                        分享
                    </div>
                </li>
            </ul>
            <div class="backTop">
                <a class="a1"></a>
            </div>
    </div> -->
    <!-- 固定侧边栏 结束 -->
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/common.js"></script>
    <!-- <script src="js/login.js"></script> -->
    <script>
        
        $(function () {
        var $user = $(".in_for .user1");
        var $user2 = $('.in_for .user2');
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
       
    $user.blur(function () {
        var v = $(this).val();
        var n = $(this).next();
        if (!Val.isMobile(v)) {
            n.html("<font color='red'>请输入正确的手机号码</font>");
            return;
        } else {
            n.html("<font color='green'>正确</font>");
        }
    });

    $user2.blur(function(){
        var v = $(this).val();
        var n = $(this).next();
        if(v.trim() == '') {
            return;
        }
        var xhr = new XMLHttpRequest();
        xhr.open('get','./check.php?username='+v ,true);
        xhr.send();
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 ){
                if( xhr.status>=200 && xhr.status<300){
                    var content = xhr.responseText;
                    if(content == 'kong') {
                        n.html("<font color='red'>该用户名不存在</font>");
                        on = false;
                    } else {
                        n.html("");
                        // n.css("color", "green");
                        on = true;
                        return;
                    }
                } else {
                    console.log(ss);
                }
            }
        }
    })
        
        $('.enter').click(function(){
            var userName = $user2.val()
            var password = $('.password').val();
            if(userName != '' && password !='' && on) {
                var xhr = new XMLHttpRequest();
                xhr.open('post','./login.php ',true);
                xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xhr.send("username=" + userName + "&"+ "password=" + password);
                xhr.onreadystatechange = function(){
                    if( xhr.readyState == 4 ){
                        if( xhr.status>=200 && xhr.status<300){
                            var content = xhr.responseText;
                            if(content == 'yes') {
                                alert('登陆成功');
                                window.location.href = '<?php echo "http://".$host."/".$url ?>';
                            }else {
                                alert('密码错误');
                            }
                        } else {
                            console.log(ss);
                        }
                    }
                }
            }
        })
    
        $('.tologger').click(function(){
            $(this).parent().parent().removeClass('appear');
            $(this).parent().parent().siblings('div').addClass('appear');
        })

        $('.password').keydown(function(e){
            e.stopPropagation();
            if(e.keyCode == 13) {
                $('.enter').click();
            }
        })
})

    </script>
</body>

</html>