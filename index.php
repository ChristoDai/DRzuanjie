
<?php

    session_start();

    // $GLOBALS[] =  $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css" />

    <style>
        body::-webkit-scrollbar {
            width: 9px;
            background-color: #666;
        }

        body::-webkit-scrollbar-corner {
            background-color: #333;
        }

        body::-webkit-scrollbar-thumb {
            border: solid 2px #333;
            width: 5px;
            border-radius: 4px;
            background-color: #fc6;
        }

        .wb-l .main::-webkit-scrollbar {
            width: 9px;
            background-color: #ffffea;
        }

        .wb-l .main::-webkit-scrollbar-corner {
            background-color: #ffffea;
        }

        .wb-l .main::-webkit-scrollbar-thumb {
            border: solid 2px #e2db9f;
            width: 5px;
            border-radius: 4px;
            background-color: #e2db9f;
        }
        .nav-a2 {
            padding-top: 0;
            text-decoration: none;
            border-top: 4px solid #fc6;
        }

    </style>
</head>

<body>
    <audio src="mp3/Jhameel Kim - White Lie.mp3" loop></audio>
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
                        <a href="exit.php">退出登陆</a>
                    <?php else: ?>
                        <a href="register/index.html">注册</a>
                        <a href="login/index.php?url=index.php">登陆</a>
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
        <div class="w1360 clearfix">
                <ul class="nav-nav">
                        <div class="logo">
                            <img src="image/logo-sanjiao.png" alt="">
                        </div>
                                        <li>
                            <a class="nav-a2" href="#">
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
                            <a href="loveTure/Love present.php">
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
                            <a href="./DR/dr-index.php">
                                <em>钻戒定制</em>
                                <span>RING</span>
                            </a>
                            <!-- 隐藏二级导航4 -->
                            <div class="hide-nav hide-item3 clearfix">
                               <dl class="left fl">
                                   <dt>类型</dt>
                                   <dd><a href="product/commodity.php" id="product">结婚对戒</a></dd>
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
                            <a href="darry ring/brand culture/brand culture/brand-culture.php">
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
                            <a href="./explore/dr-ring.php">
                                <em>探索</em>
                                <span>EXPLORE</span>
                            </a>
                            <!-- 隐藏二级导航8 -->
                            
                        </li>
                    </ul>
            <!-- <div class="top-nav-audio">
                <audio src="mp3/1.ogg"></audio>
                <audio src="mp3/2.ogg"></audio>
                <audio src="mp3/3.ogg"></audio>
                <audio src="mp3/4.ogg"></audio>
                <audio src="mp3/5.ogg"></audio>
                <audio src="mp3/6.ogg"></audio>
                <audio src="mp3/7.ogg"></audio>
                <audio src="mp3/8.ogg"></audio>
            </div> -->
        </div>
    </div>

    <!-- 顶部导航栏 结束 -->

    <!--banner 开始-->
    <div class="banner">
        <ul class="banner-imgList">
            <li>
                <img src="images/banner1.jpg" alt="">
            </li>
            <li>
                <img src="images/banner2.jpg" alt="">
            </li>
            <li>
                <img src="images/banner3.jpg" alt="">
            </li>
            <li>
                <img src="image/banner6.jpg" alt="">
            </li>
            <li>
                <img src="image/banner3.jpg" alt="">
            </li>
            
        </ul>

        <div class="banner-mask"></div>

        <ul class="banner-tab">
            <li class="on"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!--banner 结束-->



    <!-- 新闻动态 开始-->

    <div class="split nav">
        <i></i>
        <a href="#">
            <span>DR，只为深情不为景深！</span>
        </a>
    </div>

    <div class="news">
        <div class="wrap">
            <ul class="wrap-imgList clearfix">
                <li>
                    <a href="#">
                        <img src="images/b11.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/b20.jpg" alt="">
                    </a>
                </li>
                 
                <li>
                    <a href="#">
                        <img src="images/b191.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/b11.jpg" alt="">
                    </a>
                </li>
                
            </ul>

            <ul class="wrap-hd">
                <li class="on">
                    <a href="#">
                        <h3>爱的行动派：江宏杰 🌹 福原爱</h3>
                        <i>CHLOE PRE-WEDDING IN LOVING SERVICE</i>
                        <p>江宏杰为了满足爱酱对爱的所有幻想，定制独一无二的婚戒给爱酱，通过朋友介绍了解到BLOVE，并偷偷去BLOVE门店定制，亲自画图参与设计.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>原生态，爱情！🎈</h3>
                        <i>CHLOE PRE-WEDDING IN LOVING SERVICE</i>
                        <p>是时候带上爱情出发了! <br> 爱是你我,爱是你和我</p>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <h3>晓飞 🌺 占老鬼 </h3>
                        <i>CHLOE PRE-WEDDING IN LOVING SERVICE</i>
                        <p> 两人星球  自转公转
                            <br>
                            生命轨迹  相遇相守
                            <br>
                            时光廿载  甜蜜如初
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 新闻动态 结束-->
    
    <!-- 样片 开始 -->

    <div class="split yangpian nav">
        <i></i>
        <a href="#">
            <span>DR，只为深情不为景深！</span>
        </a>
    </div>

    <div class="product">
        <div class="w1360">
            <ul class="pro-imgList clearfix">
                <!-- <li>
                    <a href="#">
                        <div class="t1">
                            <img src="image/pro1.jpg" alt="">
                            <span>
                                <h3>克洛伊全球旅拍团队</h3>
                                <i>景点：厦门乔治老别墅</i>
                            </span>
                            <p>
                                CHLOE PRE-WEDDING PHOTOGRAPHY STUDIO
                                <br>
                                 HIGH-END CUSTOM WEDDING PHOTOGRAPHY
                            </p>
                        </div>
                        <div class="t2">
                            <h3>维克多の玫瑰</h3>
                            <span>Oct 01, 2018</span>
                            <h4>景点：厦门乔治老别墅</h4>
                        </div>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>

    <!-- 样片 结束 -->

    <!-- 热门 开始-->

    <div class="split remen nav">
        <i></i>
        <a href="#">
            <span>DR，只为深情不为景深！</span>
        </a>
    </div>
    <div class="hotCity">
        <ul class="hotCity-imgList clearfix">
            <li>
                <img src="images/c01.jpg" alt="">
            </li>
            <li>
                <img src="images/c02.jpg" alt="">
            </li>
            <li>
                <img src="images/c03.jpg" alt="">
            </li>
            <li>
                <img src="images/c04.jpg" alt="">
            </li>
            <li>
                <img src="images/c05.jpg" alt="">
            </li>
        </ul>
        <div class="w1360">
            <ul class="small-tt">
                <li>
                    <a href="#">
                        <h3>{ 摩斯密码 }</h3>
                        <img src="images/c01.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>{ 铃铛花 }</h3>
                        <img src="images/c02.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>{ 人鱼公主 }</h3>
                        <img src="images/c03.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>{ 结 }</h3>
                        <img src="images/c04.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>{ 天鹅 }</h3>
                        <img src="images/c05.jpg" alt="">
                    </a>
                </li>
            </ul>
            <div class="hotCity-line"></div>
            <span class="hotCity-scroll"></span>
        </div>
    </div>

    <!-- 热门 结束-->

    <!-- 婚纱通道 开始 -->

    <div class="hunshatongdao">
        <div class="hunshaWrap">
            <img src="images/ap4.png" alt="">
        </div>
    </div>


    <!-- 婚纱通道 结束 -->


    <!-- 样片2 开始-->

    <div class="split yangpian nav">
        <i></i>
        <a href="#">
            <span>DR，只为深情不为景深！</span>
        </a>
    </div>
    <div class="hotSea">
        <div class="w1360">
            <ul class="sea-imgList clearfix"></ul>
        </div>
    </div>

    <!-- 样片2 结束-->

    <!-- 热门2 开始-->

    <div class="split remen nav">
            <i></i>
            <a href="#">
                <span>DR，只为深情不为景深！</span>
            </a>
        </div>
    <div class="hotCity">
        <ul class="hotCity-imgList2 clearfix">
            <li>
                <img src="image/c01.jpg" alt="">
            </li>
            <li>
                <img src="image/c02.jpg" alt="">
            </li>
            <li>
                <img src="image/c03.jpg" alt="">
            </li>
            <li>
                <img src="image/c04.jpg" alt="">
            </li>
            <li>
                <img src="image/c05.jpg" alt="">
            </li>
        </ul>
        <div class="w1360">
            <ul class="small-tt2">
                <li>
                    <a href="#">
                        <h3>{ 云南站 }</h3>
                        <img src="image/sc01.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>{ 巴厘岛站 }</h3>
                        <img src="image/sc02.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>{ 塞班岛站 }</h3>
                        <img src="image/sc03.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>{ 济州岛站 }</h3>
                        <img src="image/sc04.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>{ 三亚站 }</h3>
                        <img src="image/sc05.jpg" alt="">
                    </a>
                </li>
            </ul>
            <div class="hotCity-line"></div>
            <span class="hotCity-scroll2"></span>
        </div>
    </div>
    
        <!-- 热门2 结束-->
    

    <!-- 幸福微电影 开始-->

    <div class="split weidianying nav">
        <i></i>
        <a href="#">
            <span>DR，只为深情不为景深！</span>
        </a>
    </div>

    <div class="weiMovie">
        <div class="w1360">
            <ul class="clearfix">
                <!-- 1 -->
                <li>
                    <a href="#">
                        <div class="t1">
                            <img src="image/movie1.jpg" alt="">
                            <span></span>
                        </div>
                        <div class="t2">
                            <h3>带着热血去撒野</h3>
                            <span>Sep 15, 2017</span>
                            <h4>Chloe Film</h4>
                        </div>
                    </a>
                </li>
                <!-- 2 -->
                <li>
                    <a href="#">
                        <div class="t1">
                            <img src="image/movie2.jpg" alt="">
                            <span></span>
                        </div>
                        <div class="t2">
                            <h3>明星:严屹宽&杜若溪</h3>
                            <span>Sep 15, 2017</span>
                            <h4>Chloe Film</h4>
                        </div>
                    </a>
                </li>
                <!-- 3 -->
                <li>
                    <a href="#">
                        <div class="t1">
                            <img src="image/movie3.jpg" alt="">
                            <span></span>
                        </div>
                        <div class="t2">
                            <h3>网红:阿沁&刘阳</h3>
                            <span>Sep 15, 2017</span>
                            <h4>Chloe Film</h4>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="daMovie">
                <img src="image/mov4_1.jpg" alt="">
                <i></i>
                <span></span>
            </div>
        </div>
    </div>

    <!-- 幸福微电影 结束-->




    <!-- 3d旋转 开始-->
    <div class="d3-wrap nav">
        <div class="split yangpian">
            <i></i>
            <a href="#">
                <span>DR，只为深情不为景深！</span>
            </a>
        </div>

    
        <div id="perspective">
            <div id='wrap'>
                <img src="image/d1.jpg" alt="">
                <img src="image/d2.jpg" alt="">
                <img src="image/d3.jpg" alt="">
                <img src="image/d4.jpg" alt="">
                <img src="image/d5.jpg" alt="">
                <img src="image/d6.jpg" alt="">
                <img src="image/d7.jpg" alt="">
                <img src="image/d8.jpg" alt="">
                <img src="image/d9.jpg" alt="">
                <img src="image/d10.jpg" alt="">
                <img src="image/d11.jpg" alt="">
                <p></p>
            </div>
        </div>
    </div>
    
    <!-- 3d旋转 结束 -->



    <!-- 微博秀 开始 -->

    <div class="wb nav">
        <div class="bg"></div>
        <div class="wb-body w1360 clearfix">
            <div class="wb-l">
                <div class="top">
                    <div class="wb-logo">
                        <a href="#">
                            微博
                        </a>
                    </div>
                </div>
                <div class="header">
                    <div class="wrap clearfix">
                        <div class="wb-pic fl">
                            <img src="image/touxiang.png" alt="">
                        </div>
                        <div class="wb-title fl">
                            <a href="#">一生只爱一人</a>
                            <span>
                                海南
                            </span>
                            <div class="button">
                                <button>+加关注</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <ul class="main-content">
                        
                    </ul>
                </div>
            </div>

            <!-- 微博秀右边 -->
            <div class="wb-r">
                <div class="split weiboxiu">
                    <i></i>
                    <a href="#">
                        <span>DR，只为深情不为景深！</span>
                    </a>
                </div>
                <div class="liuyan">
                    <i></i>
                    <ul class="hd"></ul>
                    <div class="tempWrap">
                        <ul class="bd"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 微博秀 结束 -->

    <!-- map 开始 -->
 
    <div class="map nav">
        <div class="f1"></div>
        <div class="f2">
        <h2></h2>
        <ul class="share-hide">
            <li class="share-hide-item item1">
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/sanya1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/sanya2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/sanya3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/sanya4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                三亚市区三面环山，北有抱坡岭，东有大会岭、虎豹岭和海拔393米的高岭（狗岭），南有南边岭，形成环抱之势，山岭绵延起伏、层次分明；同时，山脉的延伸将市区分成若干青山围成的空间，为城市不同地区提供了各具特色的空间景观环境。三亚面临南海，海湾较多，众多海湾各有佳景。处于市区的大东海、小东海、三亚湾与市民生活的关系最为密切。
                </p>
                <p>
                三亚市区坐落在一种幽美的以山、海、河为特点的自然环境之中，城市的建设注意城市与自然景观环境、生态环境的协调关系，“山—海—河—城”巧妙组合，浑然一体，构成了三亚市区独特的环境特色。
                </p>
            </li>
            <li class="share-hide-item item2">
                <!-- <h2>巴厘岛</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/balidao1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                巴厘岛上大部分为山地，全岛山脉纵横，地势东高西低。岛上的最高峰是阿贡火山海拔3142米。巴厘岛是印度尼西亚唯一信奉印度教的地区。80%的人信奉印度教。主要通行的语言是印尼语和英语。
                </p>
                <p>
                由于巴厘岛万种风情，景物甚为绮丽。因此，它还享有多种别称，如"神明之岛"、"恶魔之岛"、"罗曼斯岛"、"绮丽之岛"、"天堂之岛"、"魔幻之岛"、"花之岛"等。
                </p>
                <p>
                沙努尔、努沙-杜尔和库达等处的海滩，是岛上景色最美的海滨浴场，这里沙细滩阔、海水湛蓝清澈。每年来此游览的各国游客络绎不绝。
                </p>
            </li>
            <li class="share-hide-item item3">
                <!-- <h2>巴厘岛</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/balidao1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                巴厘岛上大部分为山地，全岛山脉纵横，地势东高西低。岛上的最高峰是阿贡火山海拔3142米。巴厘岛是印度尼西亚唯一信奉印度教的地区。80%的人信奉印度教。主要通行的语言是印尼语和英语。
                </p>
                <p>
                由于巴厘岛万种风情，景物甚为绮丽。因此，它还享有多种别称，如"神明之岛"、"恶魔之岛"、"罗曼斯岛"、"绮丽之岛"、"天堂之岛"、"魔幻之岛"、"花之岛"等。
                </p>
                <p>
                沙努尔、努沙-杜尔和库达等处的海滩，是岛上景色最美的海滨浴场，这里沙细滩阔、海水湛蓝清澈。每年来此游览的各国游客络绎不绝。
                </p>
            </li>
            <li class="share-hide-item item4">
                <!-- <h2>巴厘岛</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/balidao1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                巴厘岛上大部分为山地，全岛山脉纵横，地势东高西低。岛上的最高峰是阿贡火山海拔3142米。巴厘岛是印度尼西亚唯一信奉印度教的地区。80%的人信奉印度教。主要通行的语言是印尼语和英语。
                </p>
                <p>
                由于巴厘岛万种风情，景物甚为绮丽。因此，它还享有多种别称，如"神明之岛"、"恶魔之岛"、"罗曼斯岛"、"绮丽之岛"、"天堂之岛"、"魔幻之岛"、"花之岛"等。
                </p>
                <p>
                沙努尔、努沙-杜尔和库达等处的海滩，是岛上景色最美的海滨浴场，这里沙细滩阔、海水湛蓝清澈。每年来此游览的各国游客络绎不绝。
                </p>
            </li>
            <li class="share-hide-item item5">
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/sanya1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/sanya2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/sanya3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/sanya4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                三亚市区三面环山，北有抱坡岭，东有大会岭、虎豹岭和海拔393米的高岭（狗岭），南有南边岭，形成环抱之势，山岭绵延起伏、层次分明；同时，山脉的延伸将市区分成若干青山围成的空间，为城市不同地区提供了各具特色的空间景观环境。三亚面临南海，海湾较多，众多海湾各有佳景。处于市区的大东海、小东海、三亚湾与市民生活的关系最为密切。
                </p>
                <p>
                三亚市区坐落在一种幽美的以山、海、河为特点的自然环境之中，城市的建设注意城市与自然景观环境、生态环境的协调关系，“山—海—河—城”巧妙组合，浑然一体，构成了三亚市区独特的环境特色。
                </p>
            </li>
            <li class="share-hide-item item6">
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/sanya1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/sanya2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/sanya3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/sanya4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                三亚市区三面环山，北有抱坡岭，东有大会岭、虎豹岭和海拔393米的高岭（狗岭），南有南边岭，形成环抱之势，山岭绵延起伏、层次分明；同时，山脉的延伸将市区分成若干青山围成的空间，为城市不同地区提供了各具特色的空间景观环境。三亚面临南海，海湾较多，众多海湾各有佳景。处于市区的大东海、小东海、三亚湾与市民生活的关系最为密切。
                </p>
                <p>
                三亚市区坐落在一种幽美的以山、海、河为特点的自然环境之中，城市的建设注意城市与自然景观环境、生态环境的协调关系，“山—海—河—城”巧妙组合，浑然一体，构成了三亚市区独特的环境特色。
                </p>
            </li>
            <li class="share-hide-item item7">
                <!-- <h2>巴厘岛</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/balidao1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                巴厘岛上大部分为山地，全岛山脉纵横，地势东高西低。岛上的最高峰是阿贡火山海拔3142米。巴厘岛是印度尼西亚唯一信奉印度教的地区。80%的人信奉印度教。主要通行的语言是印尼语和英语。
                </p>
                <p>
                由于巴厘岛万种风情，景物甚为绮丽。因此，它还享有多种别称，如"神明之岛"、"恶魔之岛"、"罗曼斯岛"、"绮丽之岛"、"天堂之岛"、"魔幻之岛"、"花之岛"等。
                </p>
                <p>
                沙努尔、努沙-杜尔和库达等处的海滩，是岛上景色最美的海滨浴场，这里沙细滩阔、海水湛蓝清澈。每年来此游览的各国游客络绎不绝。
                </p>
            </li>
            <li class="share-hide-item item8">
                <!-- <h2>巴厘岛</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/balidao1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                巴厘岛上大部分为山地，全岛山脉纵横，地势东高西低。岛上的最高峰是阿贡火山海拔3142米。巴厘岛是印度尼西亚唯一信奉印度教的地区。80%的人信奉印度教。主要通行的语言是印尼语和英语。
                </p>
                <p>
                由于巴厘岛万种风情，景物甚为绮丽。因此，它还享有多种别称，如"神明之岛"、"恶魔之岛"、"罗曼斯岛"、"绮丽之岛"、"天堂之岛"、"魔幻之岛"、"花之岛"等。
                </p>
                <p>
                沙努尔、努沙-杜尔和库达等处的海滩，是岛上景色最美的海滨浴场，这里沙细滩阔、海水湛蓝清澈。每年来此游览的各国游客络绎不绝。
                </p>
            </li>
            <li class="share-hide-item item9">
                <!-- <h2>巴厘岛</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/balidao1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/balidao4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                巴厘岛上大部分为山地，全岛山脉纵横，地势东高西低。岛上的最高峰是阿贡火山海拔3142米。巴厘岛是印度尼西亚唯一信奉印度教的地区。80%的人信奉印度教。主要通行的语言是印尼语和英语。
                </p>
                <p>
                由于巴厘岛万种风情，景物甚为绮丽。因此，它还享有多种别称，如"神明之岛"、"恶魔之岛"、"罗曼斯岛"、"绮丽之岛"、"天堂之岛"、"魔幻之岛"、"花之岛"等。
                </p>
                <p>
                沙努尔、努沙-杜尔和库达等处的海滩，是岛上景色最美的海滨浴场，这里沙细滩阔、海水湛蓝清澈。每年来此游览的各国游客络绎不绝。
                </p>
            </li>
            <li class="share-hide-item item10">
                <!-- <h2>马尔代夫</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/maerdaifu1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                马尔代夫是地处亚洲印度洋上的一个群岛国家，马尔代夫位于北纬4度，东经73度。总面积9万平方公里（含领海面积），陆地面积298平方公里。平均海拔1.8米。距离印度南部约600公里，距离斯里兰卡西南部约750公里。南北长820公里，东西宽130公里。由26组自然环礁、1192个珊瑚岛组成，构成20个环礁，分布在9万平方公里的海域内，其中有人定居岛屿有200座。
                </p>
                <p>
                马尔代夫的最高点是全世界所有国家中最低的，并且是最平坦的印度洋上的群岛国家，由26组自然环礁、1192个珊瑚岛组成，分成19个行政组，分布在9万平方公里的海域内，其中199个岛屿有人居住，993个荒岛，岛屿平均面积为1-2平方公里，地势低平，平均海拔1.2米.
                </p>
            </li>
            <li class="share-hide-item item11">
                <!-- <h2>马尔代夫</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/maerdaifu1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                马尔代夫是地处亚洲印度洋上的一个群岛国家，马尔代夫位于北纬4度，东经73度。总面积9万平方公里（含领海面积），陆地面积298平方公里。平均海拔1.8米。距离印度南部约600公里，距离斯里兰卡西南部约750公里。南北长820公里，东西宽130公里。由26组自然环礁、1192个珊瑚岛组成，构成20个环礁，分布在9万平方公里的海域内，其中有人定居岛屿有200座。
                </p>
                <p>
                马尔代夫的最高点是全世界所有国家中最低的，并且是最平坦的印度洋上的群岛国家，由26组自然环礁、1192个珊瑚岛组成，分成19个行政组，分布在9万平方公里的海域内，其中199个岛屿有人居住，993个荒岛，岛屿平均面积为1-2平方公里，地势低平，平均海拔1.2米.
                </p>
            </li>
            <li class="share-hide-item item12">
                <!-- <h2>马尔代夫</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/maerdaifu1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                马尔代夫是地处亚洲印度洋上的一个群岛国家，马尔代夫位于北纬4度，东经73度。总面积9万平方公里（含领海面积），陆地面积298平方公里。平均海拔1.8米。距离印度南部约600公里，距离斯里兰卡西南部约750公里。南北长820公里，东西宽130公里。由26组自然环礁、1192个珊瑚岛组成，构成20个环礁，分布在9万平方公里的海域内，其中有人定居岛屿有200座。
                </p>
                <p>
                马尔代夫的最高点是全世界所有国家中最低的，并且是最平坦的印度洋上的群岛国家，由26组自然环礁、1192个珊瑚岛组成，分成19个行政组，分布在9万平方公里的海域内，其中199个岛屿有人居住，993个荒岛，岛屿平均面积为1-2平方公里，地势低平，平均海拔1.2米.
                </p>
            </li>
            <li class="share-hide-item item13">
                <!-- <h2>马尔代夫</h2> -->
                <div class="hr"></div>
                <div class="item-middle">
                    <div class="jindutiao">
                        <div class="an"></div>
                        <div class="liang"></div>
                    </div>
                   <ul class="item-img">
                        <li>
                            <img src="img/maerdaifu1.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu2.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu3.jpg" alt="">
                        </li>
                        <li>
                            <img src="img/maerdaifu4.jpg" alt="">
                        </li>
                   </ul>
                </div>
                <p class="p1">
                马尔代夫是地处亚洲印度洋上的一个群岛国家，马尔代夫位于北纬4度，东经73度。总面积9万平方公里（含领海面积），陆地面积298平方公里。平均海拔1.8米。距离印度南部约600公里，距离斯里兰卡西南部约750公里。南北长820公里，东西宽130公里。由26组自然环礁、1192个珊瑚岛组成，构成20个环礁，分布在9万平方公里的海域内，其中有人定居岛屿有200座。
                </p>
                <p>
                马尔代夫的最高点是全世界所有国家中最低的，并且是最平坦的印度洋上的群岛国家，由26组自然环礁、1192个珊瑚岛组成，分成19个行政组，分布在9万平方公里的海域内，其中199个岛屿有人居住，993个荒岛，岛屿平均面积为1-2平方公里，地势低平，平均海拔1.2米.
                </p>
            </li>
        </ul>
            <ul class="nNum">
                <li class="n0">三亚</li>
                <li class="n1">巴厘岛</li>
                <li class="n2">塞班岛</li>
                <li class="n3">曼谷</li>
                <li class="n4">普吉岛</li>
                <li class="n5">济州岛</li>
                <li class="n6">日本</li>
                <li class="n7">厦门</li>
                <li class="n8">云南</li>
                <li class="n20">马尔代夫</li>
                <li class="n21">法国</li>
                <li class="n22">夏威夷</li>
                <li class="n23">大溪地</li>
            </ul>
        </div>
    </div>
    <!-- map 结束 -->

    <!--share 开始-->

    <div class="share nav">
        <div class="w1360">
            <div class="hd">
                <div class="hd-left"></div>
                <div class="hd-right"></div>
            </div>
            <div class="bd">
                <ul class="share-imgList clearfix">
                    <!-- 1 -->
                    <li class="n1">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>联系电话</h3>
                            <i>40003-520-99</i>
                            <p>
                                环球旅拍，全国免费咨询
                                <br> 专业婚纱摄影顾问为您解答
                            </p>
                        </a>
                    </li>
                    <!-- 2 -->
                    <li class="n2">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>官方微博</h3>
                            <i>WEIBO</i>
                            <p>
                                坚持口碑营销
                                <br> 享受更高品质的服务
                            </p>
                        </a>
                    </li>
                    <!-- 3 -->
                    <li class="n3">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>天猫店铺</h3>
                            <i>TMALL</i>
                            <p>
                                没有隐形消费，除套系价格
                                <br> 全程不再收取任何费用
                            </p>
                        </a>
                    </li>
                    <!-- 4 -->
                    <li class="n4">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>官方微信</h3>
                            <i>WEIXIN</i>
                            <p>

                                微信扫一扫，每日客照
                                <br> 最新优惠活动准时送达
                            </p>
                        </a>
                    </li>
                    <!-- 5   -->
                    <li class="n5">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>企业QQ咨询</h3>
                            <i>QQ</i>
                            <p>
                                专业深沟通，咨询零距离
                                <br> 三亚婚纱摄影客服为您解答
                            </p>
                        </a>
                    </li>
                    <!-- 6 -->
                    <li class="n6">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>淘宝店铺</h3>
                            <i>TAOBAO</i>
                            <p>
                                上淘宝，就够了
                                <br> 购买预定更直接
                            </p>
                        </a>
                    </li>
                    <!-- 1 -->
                    <li class="n1">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>联系电话</h3>
                            <i>40003-520-99</i>
                            <p>
                                环球旅拍，全国免费咨询
                                <br> 专业婚纱摄影顾问为您解答
                            </p>
                        </a>
                    </li>
                    <!-- 2 -->
                    <li class="n2">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>官方微博</h3>
                            <i>WEIBO</i>
                            <p>
                                坚持口碑营销
                                <br> 享受更高品质的服务
                            </p>
                        </a>
                    </li>
                    <!-- 3 -->
                    <li class="n3">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>天猫店铺</h3>
                            <i>TMALL</i>
                            <p>
                                没有隐形消费，除套系价格
                                <br> 全程不再收取任何费用
                            </p>
                        </a>
                    </li>
                    <!-- 4 -->
                    <li class="n4">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>官方微信</h3>
                            <i>WEIXIN</i>
                            <p>

                                微信扫一扫，每日客照
                                <br> 最新优惠活动准时送达
                            </p>
                        </a>
                    </li>
                    <!-- 5   -->
                    <li class="n5">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>企业QQ咨询</h3>
                            <i>QQ</i>
                            <p>
                                专业深沟通，咨询零距离
                                <br> 三亚婚纱摄影客服为您解答
                            </p>
                        </a>
                    </li>
                    <!-- 6 -->
                    <li class="n6">
                        <a href="#">
                            <span class="bd-touch"></span>
                            <h3>淘宝店铺</h3>
                            <i>TAOBAO</i>
                            <p>
                                上淘宝，就够了
                                <br> 购买预定更直接
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--share 结束-->

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


    <div id='slide'>
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
                <p>动态</p>
            </li>
            <li class="control">
                <p>样片</p>
            </li>
            <li class="control">
                <p>钻戒</p>
            </li>
            <li class="control">
                <p>海岛</p>
            </li>
            <li class="control">
                <p>婚纱</p>
            </li>
            <li class="control">
                <p class="p8">微电影</p>
            </li>
            <li class="control">
                <p>多彩</p>
            </li>
            <li class="control">
                <p class="p8">粉丝秀</p>
            </li>
            <li class="control">
                <p class="p8">MAP</p>
            </li>
            <li class="control">
                <p class="pt">SHARE</p>
            </li>
            <li class="blue"></li>
        </ul>
        <div class="backTop">
            <a class="a1"></a>
        </div>
    </div>

    <!-- 固定侧边栏 结束 -->
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/common.js"></script>
    <script src="js/banner.js"></script>
    <script src="js/无缝轮播.js"></script>
    <script src="js/弹出层.js"></script>
    <script src="js/新闻无缝轮播.js"></script>
    <script src="js/样片.js"></script>
    <script src="js/热门.js"></script>
    <script src="js/热门2.js"></script>
    <script src="js/样片2-sea.js"></script>
    <script src="js/微博秀,movie.js"></script>
    <script src="js/3d旋转相册.js"></script>
    <script src="js/固定侧边栏.js"></script>
    <!-- <script src="js/爆炸特效.js"></script> -->
    <script>
        
      var $map3 =  $('audio');

      window.onload = function (){
        setTimeout(function(){
            $map3.get(0).load();    
            $map3.get(0).play();
        },500)
      }    
    </script>
</body>
</html>