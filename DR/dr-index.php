
<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" type="text/css" media="screen" href="dr.css/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dr.css/dr-index.css" />
    <link rel="stylesheet" type="text/css" href="fonts/iconfont.css">
    <style>
    
        .nav-a2 {
            padding-top: 0;
            text-decoration: none;
            border-top: 4px solid #fc6;
        }
    
    </style>
</head>
<body>
    <!-- 头部导航 -->

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
                        <a href="../login/index.php?url=DR/dr-index.php">登陆</a>
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
            <ul class="nav-nav" id="navnavnav">
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
                    <a class="nav-a2" href="#">
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

    <!-- vidoe -->
    <div class="dr-banner clearfix">
                <!-- <ul class="cleafix">
                    <li><img id="img" src="dr-img/banner1.jpg" alt=""></li>
                    <li><img src="dr-img/banner2.jpg" alt=""></li>
                    <li><img src="dr-img/banner3.jpg" alt=""></li>
                    <li><img src="dr-img/banner4.jpg" alt=""></li>
                    <li><img src="dr-img/banner5.jpg" alt=""></li>
                </ul> 
                <ol class="cleafix">
                    //轮播小圆点 -->
                <!-- </ol> -->
                   <!-- 左右按钮点击 -->
                <!-- <div class="arrow clearfix"> -->
                    <!-- <div class="arrow-left">&lt;</div> -->
                    <!-- <div class="arrow-right">&gt;</div> -->
                <!-- </div> --> 
                <!-- controls="controls" -->
        <video   autoplay="autoplay" muted loop="loop">
            <source src="dr-img/video.mp4" type="video/mp4" />
                <!-- src="dr-img/video.mp4" -->
            您的浏览器不支持 video 标签。
        </video>
        <div class="fixed-tip">
            <h1 class="-tip">惊喜非必浮夸 - 浪漫源于表达<br></h1>
            <h2 class="sub-title">只为期待你的 Yes,  I  Do</h2>
            <a class="index-btn iorderbtn" href="#">我 要 求 婚</a>

        </div>
        
    </div>

    <!-- 四个钻戒 -->
    <div class="sghz">
        <div class="dr-choose">
        <div class="choose w1200 clearfix">
        <ul>
            <li>    
                    <figure>
                            <div>
                              <span class="face"> 
                                <img src="dr-img/choose11.jpg" alt="">
                              </span>
                              <span class="face">
                                  <img src="dr-img/choose1.jpg" alt="">
                                  <!-- <p class="face-down">求婚戒指</p></span> -->
                              </span>
                            </div>

                    </figure>
            </li>

            <li>    
                    <figure>
                            <div>
                              <span class="face"> 
                                <img src="dr-img/choose22.jpg" alt="">

                              </span>
                              <span class="face">
                                  <img src="dr-img/choose2.jpg" alt="">
                                  <p class="face-down">求婚戒指</p></span>
                            </div>

                    </figure>
            </li>

            <li>    
                    <figure>
                            <div>
                              <span class="face"> 
                                <img src="dr-img/choose33.jpg" alt="">

                              </span>
                              <span class="face">
                                  <img src="dr-img/choose3.jpg" alt="">
                                  <p class="face-down">求婚戒指</p></span>
                            </div>

                    </figure>
            </li>

            <li>    
                    <figure>
                            <div>
                              <span class="face"> 
                                <img src="dr-img/choose44.jpg" alt="">

                              </span>
                              <span class="face">
                                  <img src="dr-img/choose4.jpg" alt="">
                                  <p class="face-down">求婚戒指</p></span>
                            </div>

                    </figure>
            </li>
        </ul>

        </div>
        </div>


    <!-- 聚合 -->
        <div class="dr-juhe w1200">
            <a href="#">
                <img  src="dr-img/banner1.jpg" alt="">
            </a>
        </div>
    </div>



    <!-- 字穿线 -->
    <div class="dr-line">
        <div class="line w200">
            <span class="zcx">飘飞在蓝蓝得海上/成为彼此得远方</span>
        </div>
    </div>

    <!-- 品牌介绍 -->
    <div class="dr-brand">
            <div class="brand w1200 clearfix">
    
                <div class="brand-left fl clearfix">
    
                    <div class="brand-img fl">
                        <img src="dr-img/dingzhi115.jpg" alt="">
                    </div>
                    <div class="brand-w fl">
                        <h4>看那天地日月</h4>
                        <p>恒静无言</p>
                        <span>青山长河，世代绵延</span>
                        <span>-似此星辰非昨夜，</span>
                    </div>
    
                </div> 
    
                <div class="brand-right lf">
                    <div class="brand-w2 fl">
                        <div class="clearfix">
                            <span class="fl">&nbsp;2</span><p class="fl">018</p><span class="fl">脑阔疼</span>
                        </div>                   
                        <span >如何再对你细述心事,你成心事</span>
                        <span >滕梦玮就像阳光一样美好。</span>
                    </div>
                 
                    <div class="brand-img2 fl">
                        <img src="dr-img/kpicon.jpg" alt="">
                    </div>              
                </div>
    
                <div class="brand-img3 fr">
                        <img src="dr-img/brand1.jpg" alt="">
                </div> 
    
            </div>   
    </div>




    <!-- 背景1 -->
    <!-- 系列价格范围 -->
       <!-- 推荐 -->
    <div class="bgc-one">
    <!-- 系列价格范围 -->
     
    <div class="dr-series w1200 clearfix">
        <ul>
            <li class="fl">
                <a href="#">系列<i class="iconfont icon-arrow"></i>
                   
                </a>
            </li>

            <li class="fl">
                <a href="#">价格范围<i class="iconfont icon-arrow"></i>
                </a>
            </li>

            <li class="fl">
                <a href="#" >排序<i class="iconfont icon-arrow"></i>
                </a>
            </li>

            <li class="fr">
                <a href="#" >查看全部对戒<i class="iconfont icon-arrow-right"></i>
                </a>
            </li>
        </ul>
    </div>  

    <!-- 推荐 -->
    <div class="dr-ring w1200">

        <ul class="clearfix">

            <li>
                <a href="#">
                    <div class="needring">
                        <img src="dr-img/ring1.jpg" alt="">
                        <ins class="png"></ins>

                        <div class="needring-down">

                            <h2>SWAROVSKI REMIX COLLECTION STAR</h2>
                            <div class="xian"></div>
                            <span>白色, 镀白金色</span>
                       
                            <div class="goumai">
                                <span>$1350.00</span>
                                <div class="xian1 fl"></div>
                                <span>立即购买</span>
                            </div>

                        </div>

                   </div>
                </a>
            </li>

            <li>
                    <a href="#">
                        <div class="needring">
                            <img src="dr-img/ring2.jpg" alt="">
                            <ins class="png"></ins>

    
                            <div class="needring-down">
    
                                <h2>SWAROVSKI REMIX COLLECTION CARRIER</h2>
                                <div class="xian"></div>
                                <span>白色, 镀玫瑰金色</span>
                           
                                <div class="goumai">
                                    <span>$1500.00</span>
                                    <div class="xian1 fl"></div>
                                    <span>立即购买</span>
                                </div>
                                                                    
                            </div>
    
                       </div>
                    </a>
                </li>

                <li>
                        <a href="#">
                            <div class="needring">
                                <img src="dr-img/ring3.jpg" alt="">
                                <ins class="png"></ins>
        
                                <div class="needring-down">
        
                                    <h2>DUO MOON 手镯</h2>
                                    <div class="xian"></div>
                                    <span>黑色, 镀玫瑰金色</span>
                               
                                    <div class="goumai">
                                        <span>$1998.00</span>
                                        <div class="xian1 fl"></div>
                                        <span>立即购买</span>
                                    </div>
                                                                        
                                </div>
        
                           </div>
                        </a>
                    </li>

                    <li>
                            <a href="#">
                                <div class="needring">
                                    <img src="dr-img/ring4.jpg" alt="">
                                    <ins class="png"></ins>
            
                                    <div class="needring-down">
            
                                        <h2>DUO MOON 项链</h2>
                                        <div class="xian"></div>
                                        <span>黑色, 镀玫瑰金色</span>
                                   
                                        <div class="goumai">
                                            <span>$3998.00</span>
                                            <div class="xian1 fl"></div>
                                            <span>立即购买</span>
                                        </div>
                                                                            
                                    </div>
            
                               </div>
                            </a>
                        </li>

                        <li>
                                <a href="#">
                                    <div class="needring">
                                        <img src="dr-img/ring5.jpg" alt="">
                                        <ins class="png"></ins>
                
                                        <div class="needring-down">
                
                                            <h2>AROMATIC 胸针</h2>
                                            <div class="xian"></div>
                                            <span>我的爱围绕在你的身边</span>
                                       
                                            <div class="goumai">
                                                <span>$11998</span>
                                                <div class="xian1 fl"></div>
                                                <span>立即购买</span>
                                            </div>
                
                                        </div>
                
                                   </div>
                                </a>
                            </li>

                            <li>
                                    <a href="#">
                                        <div class="needring">
                                            <img src="dr-img/ring6.jpg" alt="">
                                            <ins class="png"></ins>
                    
                                            <div class="needring-down">
                    
                                                <span ><h2>SUPER EDC BLUE VER</h2></span>
                                                <div class="xian"></div>
                                                <span>我的爱围绕在你的身边</span>
                                           
                                                <div class="goumai">
                                                    <span>$11998</span>
                                                    <div class="xian1 fl"></div>
                                                    <span>立即购买</span>
                                                </div>
                    
                                            </div>
                    
                                       </div>
                                    </a>
                                </li>
                            

        </ul>

    </div>


    </div>


    <!-- 品牌介绍 -->
    <div class="dr-brand">
        <div class="brand w1200 clearfix">

            <div class="brand-left fl clearfix">

                <div class="brand-img fl">
                        <img src="dr-img/dingzhi115.jpg" alt="">
                </div>
                <div class="brand-w fl">
                    <h4>就像在我心中</h4>
                    <p>你从未离去</p>
                    <span>也从未改变</span>
                    <span>-为谁风露立中宵。</span>
                </div>

            </div> 

            <div class="brand-right lf">
                <div class="brand-w2 fl">
                    <div class="clearfix">
                        <span class="fl">&nbsp;2</span><p class="fl">018</p><span class="fl">作品集</span>
                    </div>                   
                    <span >
                            骑着我最酷爱的机车 带着我最爱的你 走遍 那山川和湖海 </span>
                    <!-- <span >点击查看更多客片</span> -->
                </div>
             
                <div class="brand-img2 fl">
                    <img src="dr-img/kpicon.jpg" alt="">
                </div>              
            </div>

            <div class="brand-img3 fr">
                    <img src="dr-img/brand2.jpg" alt="">
            </div> 

        </div>

    </div>



    <!-- 背景2 -->
    <!-- 四个盒子 -->
    <div class="dr-bj1">

            <div class="dr-series w1200 clearfix">
                    <ul>
                        <li class="fl">
                            <a href="#">从校园<i class="iconfont icon-arrow"></i>
                               
                            </a>
                        </li>
            
                        <li class="fl">
                            <a href="#">走到结婚<i class="iconfont icon-arrow"></i>
                            </a>
                        </li>
            
                        <li class="fl">
                            <a href="#" >最后离婚了<i class="iconfont icon-arrow"></i>
                            </a>
                        </li>
            
                        <li class="fr">
                            <a href="#" >离婚事务所<i class="iconfont icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
            </div>  

    <!-- 四个盒子 -->

        <div class="table w1200">

            <a href="#">
                <div class="table-one table-two fl">
                    <div class="big">
                        <img src="dr-img/table1.jpg" alt="">
                    </div>
                    <!-- <span class="xs">&nbsp;&nbsp;梦里总遇见你    戴飞飞祝你们分手</span> -->
                </div>
            </a>



            <a href="#">
                <div class="table-one  fl">
                    <div class="big">
                        <img src="dr-img/table2.jpg" alt="">
                    </div>
                    <!-- <span class="xs">&nbsp;&nbsp;梦里总遇见你</span> -->
                </div>
            </a>

                <a href="#">
                    <div class="table-one table-two fl">
                        <div class="big">
                            <img src="dr-img/table3.jpg" alt="">
                        </div>
                        <!-- <span class="xs">&nbsp;&nbsp;梦里总遇见你    戴飞飞祝你们分手</span> -->
                    </div>
                </a>

                    <a href="#">
                        <div class="table-one  fl">
                            <div class="big">
                                <img src="dr-img/table4.jpg" alt="">
                            </div>
                            <!-- <span class="xs">&nbsp;&nbsp;梦里总遇见你    戴飞飞祝你们分手</span> -->
                        </div>
                    </a>





        </div>
    </div>



    <!-- 品牌介绍 -->
    <div class="dr-brand">
                <div class="brand w1200 clearfix">
        
                    <div class="brand-left fl clearfix">
        
                        <div class="brand-img fl">
                            <img src="dr-img/dingzhi115.jpg" alt="">
                        </div>
                        <div class="brand-w fl">
                            <h4>她和东华</h4>
                            <p>应的是那句佛语</p>
                            <span>说不得,多说是错,多说说是劫</span>
                            <span>剑寒九州不如一受封疆</span>
                        </div>
        
                    </div> 
        
                    <div class="brand-right lf">
                        <div class="brand-w2 fl">
                            <div class="clearfix">
                                <span class="fl">&nbsp;2</span><p class="fl">020</p><span class="fl">脱鞋子
                                
                                </span>
                            </div>                   
                            <span >似一场短暂的永恒。</span>
                            <span >你眨了眨眼我捱过 三万余年</span>
                        </div>
                     
                        <div class="brand-img2 fl">
                            <img src="dr-img/kpicon.jpg" alt="">
                        </div>              
                    </div>
        
                    <div class="brand-img3 fr">
                            <img src="dr-img/brand2.jpg" alt="">
                    </div> 
        
                </div>
        
    </div>



  <!-- 背景3 血轮眼-->
    <div class="dr-bj2 ">

    <div class="xuely">
            <div class="container">
                    <div style="width:90%;margin:300px auto;">
                      <div id="circles-container">
                        <div id="main-circle-content"></div>
                        <div id="circle">
                          <div class="min-circle" data-inside="min-circle"> <a href="dr-img/a1.png"> <img src="dr-img/a1.png" alt=""> </a>
                            <div class="content-text">Caption 1</div>
                          </div>
                          <div class="min-circle" data-inside="min-circle"> <a href="dr-img/a2.png"> <img src="dr-img/a2.png" alt=""> </a>
                            <div class="content-text">Caption 2</div>
                          </div>
                          <div class="min-circle" data-inside="min-circle"> <a href="dr-img/a3.png"> <img src="dr-img/a3.png" alt=""> </a>
                            <div class="content-text">Caption 3</div>
                          </div>
                          <div class="min-circle" data-inside="min-circle"> <a href="dr-img/a4.png"> <img src="dr-img/a4.png" alt=""> </a>
                            <div class="content-text">Caption 4</div>
                          </div>
                          <div class="min-circle" data-inside="min-circle"> <a href="dr-img/a5.png"> <img src="dr-img/a5.png" alt=""> </a>
                            <div class="content-text">Caption 5</div>
                          </div>
                          <div class="min-circle" data-inside="min-circle"> <a href="dr-img/a6.png"> <img src="dr-img/a6.png" alt=""> </a>
                            <div class="content-text">Caption 6</div>
                          </div>
                          <div class="min-circle" data-inside="min-circle"> <a href="dr-img/a7.png"> <img src="dr-img/a7.png" alt=""> </a>
                            <div class="content-text">Caption 7</div>
                          </div>
                          <div class="min-circle" data-inside="min-circle"> <a href="dr-img/a8.png"> <img src="dr-img/a8.png" alt=""> </a>
                            <div class="content-text">Caption 8</div>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
    </div>
                       <!-- 弹幕 -->

    <div class="dr-danmu">
            <div id="box" class="box"></div>
            <div>
                <input class="txt fl" type="text" id="txt"  onkeydown="var e=window.event || arguments[0];if(e.keyCode==13){ send(); }" placeholder="爱情誓言加载..."/>
                <button onclick="send()" class="btndm fl">誓言是狗屁</button>
            </div>


                
    </div>
    </div>



    <!-- 品牌介绍 -->
    <div class="dr-brand">
            <div class="brand w1200 clearfix">
    
                <div class="brand-left fl clearfix">
    
                    <div class="brand-img fl">
                        <img src="dr-img/dingzhi115.jpg" alt="">
                    </div>
                    <div class="brand-w fl">
                        <h4>我是人间</h4>
                        <p>你便是我的四月天</p>
                        <span>--我是漂泊的船</span>
                        <span>--你便是我的帆</span>
                    </div>
    
                </div> 
    
                <div class="brand-right lf">
                    <div class="brand-w2 fl">
                        <div class="clearfix">
                            <span class="fl">&nbsp;2</span><p class="fl">018</p><span class="fl">扣脚趾

                            </span>
                        </div>                   
                        <span >我是启程处,你却是终点。</span>
                        <span >我们之间的距离</span>
                    </div>
                 
                    <div class="brand-img2 fl">
                        <img src="dr-img/kpicon.jpg" alt="">
                    </div>              
                </div>
    
                <div class="brand-img3 fr">
                        <img src="dr-img/brand2.jpg" alt="">
                </div> 
    
            </div>
    
    </div>



<!-- 打钻石 -->
    <div class="dr-divider">
        <div class="divider-icon">

        </div>
        <div class="divider-w">
            散发耀眼光芒
        </div>
    </div>



<!-- 三个大盒子 左二 右一 -->
    <div class="dr-row w1200 clearfix">
    <div class="row-left fl">
        <div class="row-top">
            <a href="#">

                <div class="top-w">
                    层叠佩戴: 鸡尾酒造型的戒指中融入精致的设计，并加入鲜艳的彩色dr水晶，打造出耀眼的造型。
                </div>
            </a>

        </div>


        <div class="row-foot">

            <a href="#">

                <img src="dr-img/zuoer1.jpg" alt="">
                <div class="zoom">
                    <img src="dr-img/zoom_tide.svg" alt="">
                </div>
                <div class="shop">
                    SHOW NOW
                </div>
            </a>

        </div>

    </div>



    <div class="row-right  fr">
        <div class="row-foot row-change">
            <a href="#">

                <img src="dr-img/youyi.jpg" alt="">
                <div class="zoom">
                    <img src="dr-img/zoom_tide.svg" alt="">
                </div>
                <div class="shop">
                    SHOW NOW
                </div>
            </a>
        </div>
    </div>
    </div>


<!-- 三个盒子 -->
    <div class="dr-san w1200 clearfix">
    <div class="dr-one fl">
        <div class="sisui">
            	<div id="boxx"></div>

        </div>
        <!-- <img src="dr-img/san1.jpg" alt=""> -->
        <a href="#">

            <div class="one-w1">
                品牌故事
            </div>
            <div class="one-w2">
                自1895年以来，DR一直遵循创始人丹尼尔（Daniel Rwarovski）的宗旨，在仿水晶切割工艺上精益求精。他追求创新设计的热忱，使DR赢得国际知名首饰及配饰品牌的美誉。
            </div>
            <div class="one-w3">
                发现更多 >
            </div>
        </a>
            
    </div>

    <div class="dr-two bdsx fl ">
        <a href="javascript:void(0);">

            <img src="dr-img/san2.jpg" alt="">
            <div class="one-w1">
                SWAROVSKI CRYSTAL SOCIETY
            </div>
            <div class="one-w2">
                
                身为相信爱情的您，快来加入dr真心相爱，体验这个独特闪耀繁华世界。
            </div>
            <div class="one-w3">
                成为会员 >
            </div>
            
        </a>
    </div>

    <div class="dr-three bdsx fl">
        <a href="javascript:void(0);">

            <img src="dr-img/san3.jpg" alt="">
            <div class="one-w1">                    
                Be Swarovski
            </div>
            <div class="one-w2">
                
                dr会员奖赏计划为您提供一系列尊贵礼品、特色活动和闪烁惊喜
            </div>
            <div class="one-w3">
                免费注册 >
            </div>
            
        </a>
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



    <!-- 固定侧边栏 开始 -->
    <div id="dr_slide">
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











    <!-- 测试 -->


    <script src="dr.js/jquery-1.12.4.js"></script>
    <script src="js/common.js"></script>

    <!-- <script src="dr.js/animate-lunbo1.js"></script> -->

<!-- ********************************  xuely   血轮眼-->

    <script src="dr.js/jCircle.js"></script>  
    <script>
            var circle = new jCircle({
                'container': 'circles-container',
                'circle': 'circle',
                'mainContent':'main-circle-content',
                'animateCircles':true,
                'speed':3,
                'mainViewStyle':'normal',
                'minCirclesEffectOver':'pulse',
                'contentType':'images',
                'stopOnOverMain':false,
                'mainContentOverAction':'normal'
            });
          circle.create();
    </script>


<!-- 聚合 -->
    <script>       
        // 获取元素
        var lis = document.querySelectorAll('.dr-choose li');
        var div = document.querySelector('.dr-juhe');
        var img = div.querySelector('img');
        
        //  伪数组得遍历  添加注册事件
        for (var i = 0; i < lis.length; i++) {
            lis[i].index = i+1;
            lis[i].onmouseenter = function  () {
                img.src ='dr-img/banner'+this.index+ '.jpg';
            }
        }
        
        $(function  () {
            $(".dr-choose li").mouseenter(function  () {
                $(".dr-juhe img").attr('dr-img/banner'+this.index+ '.jpg');
            })
        })                        
    </script>

    <!-- 弹幕************************************** -->
    <script>
        $("#txt").focus(function () {
            $(this).addClass("txtb")
        });
        $("#txt").blur(function () {
            $(this).removeClass("txtb")
        });
        // console.log($("#txt"));
        
        function dale(str) {
             return document.getElementById(str);
        }
        

        function send() {
         var word = dale('txt').value;
         var span = document.createElement('span');
         var top = parseInt(Math.random() * 500) - 20;
         var color1 = parseInt(Math.random() * 256);
         var color2 = parseInt(Math.random() * 256);
         var color3 = parseInt(Math.random() * 256);
         var color = "rgb(" + color1 + "," + color2 + "," + color3 + ")";
            
         top = top < 0 ? 0 : top;
         span.style.position = 'absolute';
         span.style.top = top + "px";
         span.style.color = color;
         span.style.left = '500px';
         span.style.whiteSpace = 'nowrap';
         span.style.fontSize = 26+'px';
         var nub = (Math.random() * 10) + 1;
         span.setAttribute('speed', nub);
         span.speed = nub;
         span.innerHTML = word;
         dale('box').appendChild(span);
         dale('txt').value = "";
        }
        setInterval(move, 50);
        function move() {
         var spanArray = dale('box').children;
         for (var i = 0; i < spanArray.length; i++) {
          spanArray[i].style.left =
           parseInt(spanArray[i].style.left) - spanArray[i].speed + 'px';
         }
        }
        // $("#btndm").on("keydown", function (e) {
        //         if (e.keyCode == 13) {
        //             send();
        //         }
        //     });
    </script>


<!-- <script>
        $(function  () {
            $('.bdsx img').mousemove(function  () {
                console.log($(this));
                // $(this).css('transform',"scale(1.3)");
                // $(this).css('transform','scale(1)');
                // $(this).animate({
                //     opacity:'0.5',
                //     width:'280px',
                //     height:'180px'
                // },400)
                $(this).addClass("ssx")
            })
        })
    </script> -->



















<!-- 撕碎 -->
    <script>
		// 图片
		var imgs = ["img/1.jpg","img/2.jpg","img/3.jpg","img/4.jpg"];
		    // imgs.style.width = "100%";
	    	// imgs.style.height = "100%";

		//z-index的值
		var z = 999999;
		//显示第几张图片
		var index = 0;
		var boxx = document.getElementById('boxx')

		boom(10,10)
		//l 传进来几行；t传进来几列;
		function boom(l,t) {
			//创建一个新的div
			var oParentNode = document.createElement("div");
			//设置z-index的值
			oParentNode.style.zIndex = z;
			z--;
			boxx.appendChild(oParentNode);

			var x = l,y = t;
			for(var i = 0; i < y;i++){
				for(var j = 0;j<x;j++){
					//创建碎片
					var oDiv = document.createElement("div");
					//添加背景图片
					oDiv.style.background = "url("+imgs[index]+")";

					oDiv.style.width = boxx.clientWidth / x + 'px';
					oDiv.style.height = boxx.clientHeight / y + 'px';
					oDiv.style.left = (boxx.clientWidth / x) * j +'px';
					oDiv.style.top = (boxx.clientHeight / y) * i +'px';
					oDiv.style.backgroundPositionX = (boxx.clientWidth/ x)* -j + 'px';
					oDiv.style.backgroundPositionY= (boxx.clientHeight/y)* -i + 'px';
					oDiv.style.transition = (Math.random()*1+0.5)+"s";
					oParentNode.appendChild(oDiv);

				}
			};


			var allDiv = oParentNode.children;
			setTimeout(()=>{
				index++;
				index == imgs.length && (index = 0);

				boom(l,t);
				for(var i= 0;i<allDiv.length;i++){
					allDiv[i].style.transform = 'perspective(800px) rotateX('+ (Math.random()*500-250)+'deg) rotateY('+(Math.random()*500-250)+'deg) translateX('+(Math.random()*500-250)+'px) translateY('+(Math.random()*500-250)+'px) translateZ('+(Math.random()*1000-500)+'px)'
					allDiv[i].style.opacity = 0;
				};
			},2000);

			setTimeout(function(){
				oParentNode.remove();
			},3500)

		}
	</script>					
    
    














<!-- ************************************************ -->

    <!-- <script>   
    $(function () {
        var $lis = $(".dr-series>li");
        $lis.mouseenter(function () { 
            $(this).children("p").show();
        });
        $lis.mouseleave(function  () {
            $(this).children("p").hide();
        });      
    })  
    </script>  -->
















   
         <!-- <script type="text/javascript">
	    	$('#image').animate('tile', {
				"effect": "fadeIn",
				"sequent": true,
				"adjustDuration": true
			});
        </script>     
		<script src="dr.js/jquery-1.11.0.min.js"></script>
		<script src="dr.js/jquery.animations.min.js"></script>
        <script src="dr.js/jquery.animations-tile.js"></script>
        <script src="dr.js/app.js"></script> -->





</body>
</html>