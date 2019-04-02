<?php 
    session_start();
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>真爱礼物-荆娜</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="Iconfont/iconfont.css">
    <link rel="stylesheet" href="lovecss/love.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/common.js"></script>
    <style>
                    .nav-a2 {
                        padding-top: 0;
                        text-decoration: none;
                        border-top: 4px solid #fc6;
                    }
                </style>
</head>

<body>
    <div id="snowzone" ></div> 
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
                        <a href="../exit.php">退出登陆</a>
                    <?php else: ?>
                        <a href="../register/index.html">注册</a>
                        <a href="../login/index.php?url=loveTure/Love present.php">登陆</a>
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

    <!-- <div class="demo" style="height: 100px;"></div> -->
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
                    <a class="nav-a2" href="../loveTure/Love present.php">
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
                           <dd><a href="../product/commodity.php" id="product">结婚对戒</a></dd>
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

    



    <!-- 顶部主视觉图 -->
    <div class=" herat"></div>

    <ul class="w1360 five">
        <li class="wares"><img src="images-1/主视觉图下五张图/style4.jpg" alt=""><p>套链/项链/吊坠</p></li>
        <li class="wares"><img src="images-1/主视觉图下五张图/style5.jpg" alt=""><p>手链/手镯</p></li>
        <li class="wares"><img src="images-1/主视觉图下五张图/style6.jpg" alt=""><p>耳环/耳钉/耳线</p></li>
        <li class="wares"><img src="images-1/主视觉图下五张图/style7.jpg" alt=""><p>冠冕</p></li>
        <li class="wares"><img src="images-1/主视觉图下五张图/style8.jpg" alt=""><p>首饰盒/花盒</p></li>
    </ul>
    <ul class="w1360 tureLove clearfix">
        <li ><span>爱的礼物  </span> <div class=" w1360 box">
            <a href="#">热销礼物 </a>
            <a href="#">生日礼物 </a>
            <a href="#">纪念日礼物 </a>
            <a href="#">节日礼物 </a>
            <a href="#">十二星座礼物</a>
        </div></li>  
        <li><span>送礼对象  </span> <div class=" w1360 box">
                <a href="#">浪漫女士 </a>
                <a href="#">尊贵男士 </a>
                <a href="#"> 天真女孩 </a>
                <a quanhref="#">帅气男生 </a>
                <a href="#"> 崇敬长辈 </a>
        </div></li>
        <li><span>价格范围  </span> <div class=" w1360 box">
                <a href="#">3000以下 </a>
                <a href="#"> 3001 - 5000  </a>
                <a href="#">5001 - 10000 </a>
                <a href="#">10001 - 20000</a>
                <a href="#">20001以上</a>  
        </div></li>
        <li>查看全部真爱礼物 <span class=" jinSe clearfix">></span>
            </li>
    </ul>
    <!-- 第一张背景图 -->
    <div class=" w1360 port-7 effect-1">
        <div class="image-box">
            <img src="./images-1/jnr_ad1-left_02.png" alt="Image-1">
        </div>
        <div class=" text-desc">
            <img src="./images-1/jnr_ad1-left_01.png" alt="">
        </div>
    </div>
    <div class="w1360 box-title" >
        <h3 class="title">当季推荐</h3>
    </div>

 <!-- 商品展示页面 -->
    <ul class="w1360 box-z">
        <li class="xian ">
            <img src="./images-1/jnr_cp1.jpg"  class="img2" alt="" >
            <div class="box2 ">
                 <img src="./images-1/jnr_cp1.jpg" class="img" alt="">
                 <div class="qing">
                     <h3>LOVE LINE系列 初心套链</h3>
                 <div class="nov_hr"></div>
                     <p>与你绑定，一生一世</p>
                     <div class="liJi">
                         <span ><a> ¥8999 | 立即购买</a> </span> 
                     </div>
                 </div>
            </div>
        </li>
        <li class="xian ">
                <img src="./images-1/jnr_cp2.jpg"  class="img2" alt="" >
                <div class="box2 ">
                     <img src="./images-1/jnr_cp2.jpg" class="img" alt="">
                     <div class="qing">
                         <h3>HONEY系列 甜如蜜手链</h3>
                     <div class="nov_hr"></div>
                         <p>自从有了你，生活甜如蜜</p>
                         <div class="liJi">
                             <span ><a> ¥2699 | 立即购买</a> </span> 
                         </div>
                     </div>
                </div>
            </li>
            <li class="xian ">
                    <img src="./images-1/jnr_cp3.jpg"  class="img2" alt="" >
                    <div class="box2 ">
                         <img src="./images-1/jnr_cp3.jpg" class="img" alt="">
                         <div class="qing">
                             <h3>SNOW系列 简奢款手链</h3>
                         <div class="nov_hr"></div>
                             <p>仅为纯粹爱情绽放</p>
                             <div class="liJi">
                                 <span ><a> ¥4799 | 立即购买</a> </span> 
                             </div>
                         </div>
                    </div>
                </li>
            </ul>
            <ul class="w1360 box-z">
                <li class="xian ">
                    <img src="./images-1/jnr_cp4.jpg"  class="img2" alt="" >
                    <div class="box2 ">
                         <img src="./images-1/jnr_cp4.jpg" class="img" alt="">
                         <div class="qing">
                             <h3>MY LOVE系列典雅耳钉</h3>
                         <div class="nov_hr"></div>
                             <p>若非成双，爱不会如此美妙</p>
                             <div class="liJi">
                                 <span ><a> ¥1699 | 立即购买</a> </span> 
                             </div>
                         </div>
                    </div>
                </li>
                <li class="xian ">
                        <img src="./images-1/jnr_cp5.jpg"  class="img2" alt="" >
                        <div class="box2 ">
                             <img src="./images-1/jnr_cp5.jpg" class="img" alt="">
                             <div class="qing">
                                 <h3>D+R系列 倾心之链</h3>
                             <div class="nov_hr"></div>
                                 <p>只予一人的倾心爱意</p>
                                 <div class="liJi">
                                     <span ><a> ¥2199 | 立即购买</a> </span> 
                                 </div>
                             </div>
                        </div>
                    </li>
                    <li class="xian ">
                            <img src="./images-1/jnr_cp6.jpg"  class="img2" alt="" >
                            <div class="box2 ">
                                 <img src="./images-1/jnr_cp6.jpg" class="img" alt="">
                                 <div class="qing">
                                     <h3>FLOWER LOVE系列 玫瑰耳钉</h3>
                                 <div class="nov_hr"></div>
                                     <p>天生拥有爱与被爱的好运气</p>
                                     <div class="liJi">
                                         <span ><a> ¥4399 | 立即购买</a> </span> 
                                     </div>
                                 </div>
                            </div>
                        </li>
                    </ul>
                 
<!-- 第二张背景图 -->
    <div class=" w1360 port-7 effect-3">
        <div class="image-box">
            <img src="./images-1/jnr_ad2-left_02.png" alt="Image-1">
        </div>
        <div class=" text-desc">
            <img src="./images-1/jnr_ad2-right_02.png" alt="">
        </div>
    </div>
    <div class="w1360 box-title" >
        <h3 class="title">星座推荐</h3>
    </div>

                

    <!-- 商品展示页面 -2 -->
    <ul class="w1360 box-z1">
        <li class="there xian">
            <img src="./images-1/con1.jpg"   alt="" >
            <div class="box2 ">
                 <img src="./images-1/con1.jpg"  alt="">
                 <div class="qing">
                     <h3>白羊座 3.21-4.19</h3>
                 <div class="nov_hr"></div>
                     <p>天真直率，遇见爱便会勇往直前</p>
                     <div class="liJi">
                         <span ><a> ¥3299 | 立即购买</a> </span> 
                     </div>
                 </div>
            </div>
        </li>
        <li class="there xian">
                <img src="./images-1/con2.jpg"   alt="" >
                <div class="box2 ">
                     <img src="./images-1/con2.jpg"  alt="">
                     <div class="qing">
                         <h3>摩羯座 12.22-1.19</h3>
                     <div class="nov_hr"></div>
                         <p>坚定爱情，渴望安定的幸福</p>
                         <div class="liJi">
                             <span ><a> ¥3299 | 立即购买</a> </span> 
                         </div>
                     </div>
                </div>
            </li>
            <li class="there xian">
                    <img src="./images-1/con3.jpg"   alt="" >
                    <div class="box2 ">
                         <img src="./images-1/con3.jpg"  alt="">
                         <div class="qing">
                             <h3>射手座 11.23-12.21</h3>
                         <div class="nov_hr"></div>
                             <p>乐观热情，期待寻找一起看世界的爱</p>
                             <div class="liJi">
                                 <span ><a> ¥3299 | 立即购买</a> </span> 
                             </div>
                         </div>
                    </div>
                </li>
                <li class="there xian">
                    <img src="./images-1/con4.jpg"   alt="" >
                    <div class="box2 ">
                         <img src="./images-1/con4.jpg" alt="">
                         <div class="qing">
                             <h3>天蝎座 10.24-11.22</h3>
                         <div class="nov_hr"></div>
                             <p>执着感性，所有的温柔只予一人</p>
                             <div class="liJi">
                                 <span ><a> ¥3299 | 立即购买</a> </span> 
                             </div>
                         </div>
                    </div>
                </li>
            </ul>
            <ul class="w1360 box-z1">
                <li class="there xian ">
                        <img src="./images-1/con5.jpg"   alt="" >
                        <div class="box2 ">
                             <img src="./images-1/con5.jpg"  alt="">
                             <div class="qing">
                                 <h3>水瓶座 1.20-2.18</h3>
                             <div class="nov_hr"></div>
                                 <p>对爱情至死不渝，相信永恒唯一</p>
                                 <div class="liJi">
                                     <span ><a> ¥3299 | 立即购买</a> </span> 
                                 </div>
                             </div>
                        </div>
                    </li>
                    <li class="there xian  ">
                            <img src="./images-1/con6.jpg"   alt="" >
                            <div class="box2 ">
                                 <img src="./images-1/con6.jpg"  alt="">
                                 <div class="qing">
                                     <h3>金牛座 4.20-5.20</h3>
                                 <div class="nov_hr"></div>
                                     <p>脚踏实地，认定了就是一辈子</p>
                                     <div class="liJi">
                                         <span ><a> ¥3299 | 立即购买</a> </span> 
                                     </div>
                                 </div>
                            </div>
                        </li>
                        <li class="there xian  ">
                            <img src="./images-1/con7.jpg"   alt="" >
                            <div class="box2 ">
                                 <img src="./images-1/con7.jpg"  alt="">
                                 <div class="qing">
                                     <h3>天秤座 9.23-10.23</h3>
                                 <div class="nov_hr"></div>
                                     <p>纠结敏感，不安的心需要用心安抚</p>
                                     <div class="liJi">
                                         <span ><a> ¥3299 | 立即购买</a> </span> 
                                     </div>
                                 </div>
                            </div>
                        </li>
                        <li class="there xian  ">
                                <img src="./images-1/con8.jpg"   alt="" >
                                <div class="box2 ">
                                     <img src="./images-1/con8.jpg"  alt="">
                                     <div class="qing">
                                         <h3>双鱼座 2.19-3.20</h3>
                                     <div class="nov_hr"></div>
                                         <p>纯真如你，浪漫如谜</p>
                                         <div class="liJi">
                                             <span ><a> ¥3299 | 立即购买</a> </span> 
                                         </div>
                                     </div>
                                </div>
                            </li>
                    </ul>
                    <ul class="w1360 box-z1">
                            <li class="there xian  ">
                                    <img src="./images-1/con9.jpg"   alt="" >
                                    <div class="box2 ">
                                         <img src="./images-1/con9.jpg"  alt="">
                                         <div class="qing">
                                             <h3>处女座 8.23-9.22</h3>
                                         <div class="nov_hr"></div>
                                             <p>追求完美，爱情的至高信仰</p>
                                             <div class="liJi">
                                                 <span ><a> ¥3299 | 立即购买</a> </span> 
                                             </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="there xian  ">
                                    <img src="./images-1/con10.jpg"   alt="" >
                                    <div class="box2 ">
                                         <img src="./images-1/con10.jpg"  alt="">
                                         <div class="qing">
                                             <h3>狮子座 7.23-8.22</h3>
                                         <div class="nov_hr"></div>
                                             <p>霸气十足，真爱面前却需要守护</p>
                                             <div class="liJi">
                                                 <span ><a> ¥3299 | 立即购买</a> </span> 
                                             </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="there xian  ">
                                        <img src="./images-1/con11.jpg"   alt="" >
                                        <div class="box2 ">
                                             <img src="./images-1/con11.jpg"  alt="">
                                             <div class="qing">
                                                 <h3>巨蟹座 6.22-7.22</h3>
                                             <div class="nov_hr"></div>
                                                 <p>温柔顾家，只愿深情不被辜负</p>
                                                 <div class="liJi">
                                                     <span ><a> ¥3299 | 立即购买</a> </span> 
                                                 </div>
                                             </div>
                                        </div>
                                    </li>
                                    <li class="there xian  ">
                                            <img src="./images-1/con12.jpg"   alt="" >
                                            <div class="box2 ">
                                                 <img src="./images-1/con12.jpg"  alt="">
                                                 <div class="qing">
                                                     <h3>双子座 5.21-6.21</h3>
                                                 <div class="nov_hr"></div>
                                                     <p>双重人格，希望能被懂得</p>
                                                     <div class="liJi">
                                                         <span ><a> ¥3299 | 立即购买</a> </span> 
                                                     </div>
                                                 </div>
                                            </div>
                                        </li>
                            </ul>
<!-- 第三张背景图片 -->
    <div class=" w1360 port-7 effect-1">
    <div class="image-box">
    <img src="./images-1/32c3f0c9-15d8-4a9c-a672-638c1d7b2f1f_02.png" alt="Image-1">
    </div>
    <div class=" text-desc">
    <img src="./images-1/jnr_ad3-left_01.png" alt="">
    </div>
    </div>
    <div class="w1360 box-title" >
    <h3 class="title">纪念日推荐</h3>
    </div>

    <!-- 商品展示页面 3-->
    <ul class="w1360 box-z clearfix">
    <li class="xian3 xian ">
    <img src="./images-1/jnr_sp1.jpg"  class="img2" alt="" >
    <div class="box2 ">
            <img src="./images-1/jnr_sp1.jpg" class="img" alt="">
            <div class="qing">
                <h3>SWEETIE系列 浪漫套链</h3>
            <div class="nov_hr"></div>
                <p>我们要永远爱下去</p>
                <div class="liJi">
                    <span ><a> ¥3699 | 立即购买</a> </span> 
                </div>
            </div>
    </div>
    </li>
    <li class="xian3 xian ">
        <img src="./images-1/jnr_sp2.jpg"  class="img2" alt="" >
        <div class="box2 ">
                <img src="./images-1/jnr_sp2.jpg" class="img" alt="">
                <div class="qing">
                    <h3>TRUE LOVE系列 经典手链</h3>
                <div class="nov_hr"></div>
                    <p>我的一生，因你而圆满</p>
                    <div class="liJi">
                        <span ><a> ¥2849 | 立即购买</a> </span> 
                    </div>
                </div>
        </div>
    </li>
    <li class="xian3 xian ">
            <img src="./images-1/jnr_sp3.jpg"  class="img2" alt="" >
            <div class="box2 ">
                    <img src="./images-1/jnr_sp3.jpg" class="img" alt="">
                    <div class="qing">
                        <h3>SWEETIE系列 心形耳饰</h3>
                    <div class="nov_hr"></div>
                        <p>你的情话，我百听不厌</p>
                        <div class="liJi">
                            <span ><a> ¥4520 | 立即购买</a> </span> 
                        </div>
                    </div>
            </div>
        </li>
    </ul>
    <ul class="w1360 box-z">
        <li class="xian3 xian ">
            <img src="./images-1/jnr_sp4.jpg"  class="img2" alt="" >
            <div class="box2 ">
                    <img src="./images-1/jnr_sp4.jpg" class="img" alt="">
                    <div class="qing">
                        <h3>TRUE LOVE系列 典雅款耳钉</h3>
                    <div class="nov_hr"></div>
                        <p>爱要有你才完美</p>
                        <div class="liJi">
                            <span ><a> ¥6539 | 立即购买</a> </span> 
                        </div>
                    </div>
            </div>
        </li>
        <li class="xian3 xian">
                <img src="./images-1/jnr_sp5.jpg"  class="img2" alt="" >
                <div class="box2 ">
                        <img src="./images-1/jnr_sp5.jpg" class="img" alt="">
                        <div class="qing">
                            <h3>MY HEART系列 初心耳环</h3>
                        <div class="nov_hr"></div>
                            <p>爱你初心不变</p>
                            <div class="liJi">
                                <span ><a> ¥18320 | 立即购买</a> </span> 
                            </div>
                        </div>
                </div>
            </li>
            <li class="xian3 xian ">
                    <img src="./images-1/jnr_sp6.jpg"  class="img2" alt="" >
                    <div class="box2 ">
                            <img src="./images-1/jnr_sp6.jpg" class="img" alt="">
                            <div class="qing">
                                <h3> ROMANTIC 永生花盒 佳人</h3>
                            <div class="nov_hr"></div>
                                <p>繁花三千，只为你一人留恋</p>
                                <div class="liJi">
                                    <span ><a> ¥520 | 立即购买</a> </span> 
                                </div>
                            </div>
                    </div>
                </li>
            </ul>


    <!-- 第四张背景图 -->
    <div class=" w1360 port-7 effect-3">
            <div class="image-box">
                <img src="./images-1/jnr_ad4-left_01.png" alt="Image-1">
            </div>
            <div class=" text-desc">
                <img src="./images-1/jnr_ad4rigt_02.png" alt="">
            </div>
        </div>
        <div class="w1360 box-title" >
            <h3 class="title">热销推荐</h3>
        </div>

    <!-- 第四栏 商品展示 -->
    <ul class="w1360 box-z clearfix">
            <li class="xian4 xian ">
            <img src="./images-1/jnr_hot1.jpg"  class="img2" alt="" >
            <div class="box2 ">
                    <img src="./images-1/jnr_hot1.jpg" class="img" alt="">
                    <div class="qing">
                        <h3> LUCKY LOVE系列 四叶草 幸运套链 </h3>
                    <div class="nov_hr"></div>
                        <p>遇见你是天意</p>
                        <div class="liJi">
                            <span ><a> ¥2999 | 立即购买</a> </span> 
                        </div>
                    </div>
            </div>
            </li>
            <li class="xian4 xian ">
                <img src="./images-1/jnr_hot2.jpg"  class="img2" alt="" >
                <div class="box2 ">
                        <img src="./images-1/jnr_hot2.jpg" class="img" alt="">
                        <div class="qing">
                            <h3>ENDLESS LOVE系列 典雅款耳钉</h3>
                        <div class="nov_hr"></div>
                            <p>从红颜到白发，爱意无限</p>
                            <div class="liJi">
                                <span ><a> ¥520 | 立即购买</a> </span> 
                            </div>
                        </div>
                </div>
            </li>
            <li class="xian4 xian ">
                    <img src="./images-1/jnr_hot3.jpg"  class="img2" alt="" >
                    <div class="box2 ">
                            <img src="./images-1/jnr_hot3.jpg" class="img" alt="">
                            <div class="qing">
                                <h3>ENDLESS LOVE系列 简爱款套链</h3>
                            <div class="nov_hr"></div>
                                <p> 谱写时光里永恒不变的爱 </p>
                                <div class="liJi">
                                    <span ><a> ¥3199 | 立即购买</a> </span> 
                                </div>
                            </div>
                    </div>
                </li>
            </ul>
            <ul class="w1360 box-z">
                <li class="xian4 xian ">
                    <img src="./images-1/jnr_hot4.jpg"  class="img2" alt="" >
                    <div class="box2 ">
                            <img src="./images-1/jnr_hot4.jpg" class="img" alt="">
                            <div class="qing">
                                <h3>JUST YOU系列 守护套链</h3>
                            <div class="nov_hr"></div>
                                <p>一生守护，一世安稳</p>
                                <div class="liJi">
                                    <span ><a> ¥4298 | 立即购买</a> </span> 
                                </div>
                            </div>
                    </div>
                </li>
                <li class="xian4 xian">
                        <img src="./images-1/jnr_hot5.jpg"  class="img2" alt="" >
                        <div class="box2 ">
                                <img src="./images-1/jnr_hot5.jpg" class="img" alt="">
                                <div class="qing">
                                    <h3>SWEETIE系列 满天星耳钉</h3>
                                <div class="nov_hr"></div>
                                    <p>你是星，点亮我内心的光</p>
                                    <div class="liJi">
                                        <span ><a> ¥2599 | 立即购买</a> </span> 
                                    </div>
                                </div>
                        </div>
                    </li>
                    <li class="xian4 xian ">
                            <img src="./images-1/jnr_hot6.jpg"  class="img2" alt="" >
                            <div class="box2 ">
                                    <img src="./images-1/jnr_hot6.jpg" class="img" alt="">
                                    <div class="qing">
                                        <h3> LUCKY LOVE系列 四叶草 幸运手链 </h3>
                                    <div class="nov_hr"></div>
                                        <p>与你牵手，幸运 相随</p>
                                        <div class="liJi">
                                            <span ><a> ¥2399 | 立即购买</a> </span> 
                                        </div>
                                    </div>
                            </div>
                        </li>
                    </ul>

   <!-- 底部通栏背景图 -->
   <div class="foor">

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
  
    
</body>
<script src="./js/love present.js"></script>
<script>
   $(function(){
    var u1 = document.querySelector(".tureLove");
     lis = u1.querySelectorAll("li");
     box = document.querySelectorAll(".box");
    //  console.log(lis)
     for(var i = 0; i < lis.length; i++ ){
        
        animate(lis[i]);

        }

  var xian = document.querySelectorAll(".xian")
  var box2 = document.querySelectorAll(".box2")
  var img = document.querySelectorAll('.img')
  var qing = document.querySelectorAll('.qing')

 for(var i = 0; i < xian.length; i++ ){

   
   
     xian[i].onmouseenter = function(){

      var res= this.children[1];
      res.style.display="block";        
   

    for(var i = 0; i < box2.length; i++ ){

  
    box2[i].onmouseenter = function() {

    this.style.background="#fff";

    var res1 = this.children[0];
    var res2 = this.children[1];

    
    anim(res1,{top:10});
    anim(res2,{top:356});

     }
    

     box2[i].onmouseleave = function() {

        var res1 = this.children[0];
        var res2 = this.children[1];
        
        anim(res1,{top:-363});
        anim(res2,{top:564});

        this.style.background="transparent";

    }
    }    
    
 }
}


(function(){  
	function snow(left,height,src){  
		var div = document.createElement("div");  
		var img = document.createElement("img");  
		div.appendChild(img);  
		img.className = "roll";  
		img.src = src;  
		div.style.left=left+"px";  
		div.style.height=height+"px";  
		div.className="div";  
		document.getElementById("snowzone").appendChild(div);  
		setTimeout(function(){  
			document.getElementById("snowzone").removeChild(div);  
		// console.log(window.innerHeight);  
	},5000);  
	}  
	setInterval(function(){  
		var left = Math.random()*window.innerWidth;  
		var height = Math.random()*window.innerHeight;  
		var src = "s"+Math.floor(Math.random()*3+1)+".png";
		
		snow(left,height,src);  
	},500);  
})();
   })
     
</script>

</html>