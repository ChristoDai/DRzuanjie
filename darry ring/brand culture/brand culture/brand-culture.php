<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>品牌理念_男士一生仅能定制一枚</title>
    <link rel="shortcut icon" href="../img/bitbug_favicon .ico" /> 
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/brand-culture.css">
    <style>
                            .nav-a2 {
                                padding-top: 0;
                                text-decoration: none;
                                border-top: 4px solid #fc6;
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
                    <?php if(isset($_SESSION['username'])) : ?>
                        <a href="#">欢迎您,<?php echo $_SESSION['username']; ?></a>
                        <a href="../../../exit.php">退出登陆</a>
                    <?php else: ?>
                        <a href="../../../register/index.html">注册</a>
                        <a href="../../../login/index.php?url=darry ring/brand culture/brand culture/brand-culture.php">登陆</a>
                    <?php endif ?>
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

    <!-- 顶部导航栏 开始 -->
    <div class="top-nav">
        <div class="line"></div>
        <div class="fixed"></div>
        <div class="w1180 clearfix">
                <ul class="nav-nav">
                        <div class="logo">
                            <img src="image/logo-sanjiao.png" alt="">
                        </div>
                                        <li>
                            <a href="../../../index.php">
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
                            <a href="../../../loveTure/Love present.php">
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
                            <a href="../../../DR/dr-index.php">
                                <em>钻戒定制</em>
                                <span>RING</span>
                            </a>
                            <!-- 隐藏二级导航4 -->
                            <div class="hide-nav hide-item3 clearfix">
                               <dl class="left fl">
                                   <dt>类型</dt>
                                   <dd><a href="../../../product/commodity.php" id="product">结婚对戒</a></dd>
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
                            <a class="nav-a2" href="#">
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
                            <a href="../../../explore/dr-ring.php">
                                <em>探索</em>
                                <span>EXPLORE</span>
                            </a>
                            <!-- 隐藏二级导航8 -->
                            
                        </li>
                    </ul>

        </div>
    </div>
    <!-- 顶部导航栏 结束 -->

    <!-- 固定侧边栏 开始 -->
    <div id='dr_slide'>
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
    </div>
    <!-- 固定侧边栏 结束 -->

  
    <div class="only w1360">
        <div class="wei">
            <h1>此生真爱，唯你一人</h1>
            <p>DR求婚钻戒 ，男士一生仅能定制一枚</p>
            <p>DR婚戒、真爱礼物，一生只送一人</p>
            <span>___</span>
        </div>
    </div>

    <div class="w1360 ring">
        <div class="smile">
            <img src="../img/logo_02.png" alt="">
            <p>在这个浮躁的年代，忠贞的爱情快要成为传说</p>
            <p>但无论时代如何变化</p>
            <p>每个人在内心深处依然渴望一生一世的真爱</p>
            <p>DR求婚钻戒</p>
            <p>凝聚最虔诚、最有态度的真爱信仰</p>
            <p>希望通过自身力量让爱情变得更美好</p>
            <p>让坚信真爱的人都能找到心灵的归属</p>
            <p>并把真爱信仰传播到世界的各个角落</p>
            <p>这就是DR创建的初衷，也是品牌一直以来的追求</p>
            <span>_____</span>
        </div>
    </div>
 

    <div class="w1360 hand">
        <div class="so">
            <img src="../img/logo_02.png" alt="">
            <p>因此</p>
            <p>DR钻戒品牌从诞生起便立下浪漫规定</p>
            <p>每个人在内心深处依然渴望一生一世的真爱</p>
            <p>男士凭身份证一生仅能定制一枚DR求婚钻戒</p>
            <p>赠予此生唯一挚爱的女士</p>
            <p>寓意“一生•唯一•真爱”</p>
            <p>双方签署真爱协议，承诺此生真爱不变</p>
            <span>_____</span>
        </div>
    </div>

    <div class="w1360 appoint clearfix">
        <div class="gif fl">
            <img src="../img/zs.gif" >
        </div>
        <div class=" auto fl">
            <div class="zhen">
            <h1>【实名真爱鉴证】 一生·唯一·真爱</h1>
            <a href="#">如何获得真爱认证？</a>
            <p>DR严格限制男士一生仅能定制一枚，<br>
                象征男人一生真爱的承诺;</p>
            <p>只有经过官网查询验证该姓名没有与之绑定的钻戒编码，<br>
                 才可以进行购买。</p>
             <p>已购买过DR求婚钻戒的男士凭身份证号码<br>
             即可查询该定情信物和赠送的求婚对象信息；<br>
             每位男士只能赠送给一个心仪的她，<br>
             DR为每位追求真爱的恋人提供免费鉴证服务。</p>
            </div>
            <div class="inquire">
                <p>
                   <i>证件类型：</i>
                   <span class="hy">中国大陆</span>
                   <span>海外地区</span>
                   <span >港澳台</span>
                   <span >其他</span>
                 </p>

                <p class="inq-l">
                    <i >身份证号码：</i>
                    <input type="text" placeholder="请输入身份证号验证真爱承诺">
                </p>
                    <b>
                        Darrry esf Ring 严格规定男士凭身份证一生仅能定制一枚,
                            象征男人一生的真爱承诺,输入身份证号码即可查询购买记录
                    </b>
                 <a  class="privacy" href="#" >隐私声明 ></a><br>
                 <a id="verify" class="verify" style="cursor: pointer;">验证查询</a>
            </div>
        </div>
    </div>
    <!-- 输入身份验证环节结束 -->

    <div class="w1360 gift">
            <div class="smile">
                <img src="../img/logo_02.png" alt="">
                <h2>星辰般璀璨的真爱信物</h2>
                <p>从扎伊尔、博茨瓦纳到俄罗斯、加纳<br>
                DR的采购团队跨越全球30多个国家<br>
                犹如星辰般璀璨耀眼的钻石被采撷而来，落于爱人指间<br>
                <br>
                每一段真挚的爱情<br>
                都值得拥有如此珍贵的真爱信物</p>
                
                <span>_____</span>
            </div>
        </div>

        <!-- 查看更多款式 -->
        <div class="brandlb_more w1360">
                <a href="#" target="_blank">查看更多款式 &gt;&gt;</a>
            </div>
        <!-- 查看更多款式 -->

        <!-- 轮播图部分开始 -->
            
    <div class="box w1360">
        <ul class="imgList clearfix">
          <li><img src="../img/lb1.jpg" >
            <div class="cl_text">
                <h1>My Heart 系列</h1>
                <span>开启优雅的浪漫</span> <br>
                <span class="sa1">把心交给你，是我一生浪漫的开始</span> <br>
                <i>_______</i>
            </div>
          </li>

          <li><img src="../img/lb2.jpg" > 
            <div class="cl_text">
                <h1>Love Line 系列 </h1>
                <span>我愿与你绑定一辈子的幸福</span> <br>
                <span class="sa1">将每份心动、浪漫、惊喜，都与你紧紧系在一起</span> <br>
                <i>_______</i>
            </div>

        </li>


          <li><img src="../img/lb3.jpg" > 
            <div class="cl_text">
                <h1>With You 系列</h1>
                <span>浪漫粉钻高端定制 全球限量发售</span> <br>
                <span class="sa1">  传奇珍贵粉钻，只献给挚爱唯一</span> <br>
                <i>_______</i>
        </li>


          <li><img src="../img/lb4.jpg" >
         <div class="cl_text">
            <h1>Lock Forever 系列 心·锁唯一</h1>
            <span> 永锁恋人之心，真爱恒久不变</span> <br>
            <span class="sa1">   和你在一起，余生不再分离</span> <br>
            <i>_______</i>
        </li>
          
    
        </ul>

        <!-- 动态创建小圆点部分 -->
        <ol>
           
        </ol>
       
    </div>

        <!-- 轮播图部分结束 -->

        
        <div class="wrapper init w1360">
                <ul class="content">
                    <li class="item">
                        <div class="inner">
                            <div class="bjPic"></div>
                            <div class="dir">
                                <h2>那一瞬</h2>
                            </div>
                            <div class="showBox">
                                <div class="showBox-dir">
                                    <h2>那一瞬，我飞升成仙，不为长生，只为佑你平安喜乐</h2>
                                </div>
                                <div class="close">
        
                                </div>
                            </div>
                        </div>
        
                    </li>
                    <li class="item">
                        <div class="inner">
                            <div class="bjPic"></div>
                            <div class="dir">
                                <h2>那一刻</h2>
                            </div>
                            <div class="showBox">
                                <div class="showBox-dir">
                                    <h2>那一刻，我升起风马，不为祈福，只为守候你的到来</h2>
                                </div>
                                <div class="close">
        
                                </div>
                            </div>
                        </div>
        
                    </li>
                    <li class="item">
                        <div class="inner">
                            <div class="bjPic"></div>
                            <div class="dir">
                                <h2>那一日</h2>
                            </div>
                            <div class="showBox">
                                <div class="showBox-dir">
                                    <h2>那一日，我磨一砂石，不为修性，只为丢进你的心海</h2>
                                </div>
                                <div class="close">
        
                                </div>
                            </div>
                        </div>
        
                    </li>
                    <li class="item">
                        <div class="inner">
                            <div class="bjPic"></div>
                            <div class="dir">
                                <h2>那一夜</h2>
                            </div>
                            <div class="showBox">
                                <div class="showBox-dir">
                                    <h2>那一夜，我彻宿低吟，不为参悟，只为寻你的气息</h2>
                                </div>
                                <div class="close">
        
                                </div>
                            </div>
                        </div>
        
                    </li>
                    <li class="item">
                        <div class="inner">
                            <div class="bjPic"></div>
                            <div class="dir">
                                <h2>那一天</h2>
                            </div>
                            <div class="showBox">
                                <div class="showBox-dir">
                                    <h2>那一天，闭目在经殿香雾中，蓦然听见，你颂经中的真言</h2>
                                </div>
                                <div class="close">
        
                                </div>
                            </div>
                        </div>
        
                    </li>
                    <li class="item">
                        <div class="inner">
                            <div class="bjPic"></div>
                            <div class="dir">
                                <h2>那一月</h2>
                            </div>
                            <div class="showBox">
                                <div class="showBox-dir">
                                    <h2>那一月，我摇动所有经筒，不为超度，只为触摸你指尖</h2>
                                </div>
                                <div class="close">
        
                                </div>
                            </div>
                        </div>
        
                    </li>
                    <li class="item">
                        <div class="inner">
                            <div class="bjPic"></div>
                            <div class="dir">
                                <h2>那一年</h2>
                            </div>
                            <div class="showBox">
                                <div class="showBox-dir">
                                    <h2>那一年，磕长头匍匐在山路，不为觐见，只为贴着你的温暖</h2>
                                </div>
                                <div class="close">
        
                                </div>
                            </div>
                        </div>
        
                    </li>
                    <li class="item">
                        <div class="inner">
                            <div class="bjPic"></div>
                            <div class="dir">
                                <h2>那一世</h2>
                            </div>
                            <div class="showBox">
                                <div class="showBox-dir">
                                    <h2>那一世，转山转水转佛塔，不为修来世，只为途中相见</h2>
                                </div>
                                <div class="close">
        
                                </div>
                            </div>
                        </div>
        
                    </li>
                </ul>
        </div>
         <div class="end w1360"></div>
         <div class="wrap w1360" id="wrap">
  <div class="slide" id="slide">
    <ul>
      <li class="slide1"><a href="#"><img src="../img/love/a1.jpg" alt=""/></a></li>
      <li class="slide2"><a href="#"><img src="../img/love/a2.jpg" alt=""/></a></li>
      <li class="slide3"><a href="#"><img src="../img/love/a3.jpg" alt=""/></a></li>
      <li class="slide4"><a href="#"><img src="../img/love/a4.jpg" alt=""/></a></li>
      <li class="slide5"><a href="#"><img src="../img/love/a5.jpg" alt=""/></a></li>
    </ul>
    <div class="arrow" id="arrow">
      <a href="javascript:;" class="prev" id="arrLeft"></a>
      <a href="javascript:;" class="next" id="arrRight"></a>
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
        <div class="dr_tint">
            <div class="w1200">
                <!--服务-->
                <ul class="dr_servie">
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
                </ul>
                <!--服务end-->

                <!--关注我们-->
                <div class="drfocus">
                    <h3>关注我们</h3>
                    <p>一个让你相信真爱的地方，给你实用的情感指南，为你的爱情终身服务。</p>
                    <a href="javascript:;" class="wechat">
                        <img src="image/gzh_wx.png" />
                    </a>
                    <a href="https://weibo.com/2249451585/" class="weibo" target="_blank"></a>
                </div>
            </div>

            <!--中英文切换，网站声明-->
            <div class="dr_declare fix">
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
            </div>
            <!--中英文切换，网站声明end-->
        </div>
        <!--黑色区域end-->
    </div>
    <!--底部 结束-->


    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/common.js"></script>
    <script src="js/culture.js"></script>

    <script src="js/sshw/snowflake.js"></script>
    <script src="js/sshw/index.js"></script>

    <script>
        $('#verify').click(function(){
           var v = $('.inq-l input').val();
           if(v.trim() == '') {
               alert('请输入身份证号');
               return;
           }
           var xhr = new XMLHttpRequest();
           xhr.open('get','./query.php?idcard='+v+'',true);
           xhr.send();
           xhr.onreadystatechange = function() {
               if(xhr.readyState == 4) {
                   if(xhr.status==200) {
                       var content = xhr.responseText;
                       if(content == 'kong') {
                           alert('身份证未购买');
                       } else {
                           alert('购买了,分手吧');
                       }
                   } else {
                       alert('error : ' + xhr.status);
                   }
               }
           }

        })
    
    
    </script>
    
</body>


</html>