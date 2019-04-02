<?php 
    session_start();
   if(empty($_SESSION['username'])) {
        $GLOBALS['host'] = $_SERVER['HTTP_HOST'];
       echo '<script>alert("请先登陆,登陆后会自动跳转...")</script>';
       echo '<script>window.location.href="http://'.$host.'/login/index.php?url=product/commodity.php"</script>';
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pro-list</title>
    <link rel="stylesheet" type="reset/css" href="font/iconfont.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/commodity.css">
    <style>
         body::-webkit-scrollbar {
            width: 9px;
            background-color: #666;
        }
        body {
            overflow-x: hidden;
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
                        <a href="../exit.php">退出登陆</a>
                    <?php else: ?>
                        <a href="../register/index.html">注册</a>
                        <a href="../login/index.php">登陆</a>
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
                        <div class="hide-right fl">
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
                        <div class="hide-right fl">
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
                        <div class="hide-right fl">
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


    <!-- 商品详细开始 -->
    <div class="details w1360 clearfix">
        <div class="d-top"><a href="">DR</a> > <a href="">求婚钻戒</a> > BELIEVE系列 典雅 30分 F色</div>
        <div class="d-middle">
                <div class="box fl">
                        <div class="tb-booth tb-pic tb-s310">
                            <a href="image/img/1477450706.jpg"><img src="image/img/1477450706.jpg" alt="美女" rel="image/img/1477450706.jpg" class="jqzoom" /></a>
                        </div>
                        <ul class="tb-thumb" id="thumblist">
                            <li class="tb-selected"><div class="tb-pic tb-s40"><a href="#"><img src="image/img/1477450706.jpg" width="60px;" height="60px;" mid="image/img/1477450706.jpg" big="image/img/1477450706.jpg"></a></div></li>
                            <li><div class="tb-pic tb-s40"><a href="#"><img src="image/img/1509691454.jpg" width="60px;" height="60px;" mid="image/img/1509691454.jpg" big="image/img/1509691454.jpg"></a></div></li>
                            <li><div class="tb-pic tb-s40"><a href="#"><img src="image/img/1509691446.jpg" width="60px;" height="60px;" mid="image/img/1509691446.jpg" big="image/img/1509691446.jpg"></a></div></li>
                            <li><div class="tb-pic tb-s40"><a href="#"><img src="image/img/1509691458.jpg" width="60px;" height="60px;" mid="image/img/1509691458.jpg" big="image/img/1509691458.jpg"></a></div></li>
                        </ul>
                        
                    </div>
            <!-- <div class="xian"></div> -->
            <div class="r-pr fr clearfix">
                <h2>BELIEVE系列 典雅 100分 D色</h2>
                <div class="price pm-8 clearfix"><h3 class="fl">¥199999</h3>
                    <a class="fr" href="#">更多BELIEVE系列>></a>
                </div>
                <ul class="pr-sell">
                    <li>近期售出：<i>23262</i></li>
                    <li>近期售出：<i>1826</i></li>
                    <li>深圳</li>
                </ul>
                <ul class="pr-craft">
                    <li>主钻重量: 100分</li>
                    <li>钻石颜色: D色</li>
                    <li>钻石净度: VS1</li>
                    <li>钻石切工: VG</li>
                </ul>
                <!-- 材质 -->
               <div class="xiangqing">
                    <div class="pr-texture pm-8">
                        <span class="span1 mr-5">戒托材质</span>
                        <i class="mr-5">PT950</i><i class="mr-5">白18K金</i>
                        <span class="ml-5">本商品价格为单只戒指售价, 材质调整后金额会自动调整。</span>
                    </div>
                    <div class="pr-expect pm-8">
                        <span>预期价位</span>
                        <input class="ml-5" value="输入阿拉伯数字">
                        <button>搜索</button>
                    </div>
                    <div class="pr-match">
                        <span class="fl">搭配主钻</span>
                        <div class="match-r fr pa">
                            <a class="a1" href="#">31分H色</a>
                            <a class="a1" href="#">40分H色</a>
                            <a class="a1" href="#">50分E色</a>
                            <a class="a1" href="#">70分D色</a>
                            <a class="a1" href="#">32分G色</a>
                            <a class="a1" href="#">52分D色</a>
                            <a class="a1" href="#">70分G色</a>
                            <a class="a1" href="#">100分E色</a>
                            <a class="a1" href="#">30分F色</a>
                            <a class="a1" href="#">50分F色</a>
                            <a class="a1" href="#">100分J色</a>
                            <a class="a1" href="#">30分F色</a>
                            <div class="zuanshi pa">
                                <a class="fl a2" href="#">换一批</a>
                                <a class="cizi" href="#"></a>
                                <a class="fr a2" href="https://www.darryring.com/help/25">如何选择钻石 ?</a>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="xiala">
                    <span>选择指寸</span>
                    <select class="mr-5" name="" id="">
                        <option value="" selected>选择尺寸</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                        <option value="">13</option>
                        <option value="">14</option>
                        <option value="">15</option>
                        <option value="">17</option>
                        <option value="">18</option>
                        <option value="">19</option>
                        <option value="">20</option>
                        <option value="">21</option>
                        <option value="">22</option>
                        <option value="">23</option>
                        <option value="">24</option>
                        <option value="">25</option>
                        <option value="">26</option>
                        <option value="">27</option>
                        <option value="">28</option>
                        <option value="">29</option>
                        <option value="">30</option>
                        <option value="">31</option>
                    </select>
                    <input type="text" value="免费刻字">
                </div>
                <!-- 购买 -->
                <div class="buy">
                    <a class="cart mr-5" href="#">加入购物车</a>
                    <a class="b-buy" href="#">立即购买</a>
                    <i class="gift  iconfont icon-xxx">&#xe651; <span>加入礼物清单</span></i>
                </div>
            </div>
        </div>
    </div>
    <!-- 商品详细结束 -->
    
    <!-- 工艺介绍 -->
    <div class="craft w1360">
        <div class="xx"><span class="c-gy">工艺介绍</span></div>
        <img title="男士一生仅能定制一枚" class="gongyi" src="image/8765432.jpg" alt="">
        <img title="男士一生仅能定制一枚" src="image/456.jpg" height="583px" alt="">
        <!-- <video src="image/drshiping.mp4" autoplay controls loop ></video> -->
        <div class="xx"><span class="c-gy">众多明星的选择</span></div>
        <img title="男士一生仅能定制一枚" src="image/87655.jpg" alt="">
        <img title="男士一生仅能定制一枚 " src="image/1479178396.jpg" alt="">
        <img title="男士一生仅能定制一枚 " src="image/1485049184.jpg" alt="">
        <img title="男士一生仅能定制一枚 " src="image/1485049199.jpg" alt="">
        <img title="男士一生仅能定制一枚 " src="image/1485049205.jpg" alt="">
        <img title="男士一生仅能定制一枚 " src="image/1485049235.jpg" alt="">
        <img title="男士一生仅能定制一枚 " src="image/1485049238 (1).jpg" alt="">
        <div class="xx" style="margin-top:30px;" ><span class="c-gy" style="color:deeppink;" ><i class=" love iconfont icon-xxx">&#xe606; &nbsp;&nbsp;</i>幸福<i class=" love iconfont icon-xxx">&nbsp;&nbsp; &#xe606;</i></span></div>
    </div>
    <!-- 淡入淡出轮播图 -->
    <div class="box1 w1200">
        <ul class="slideshow ">
          <li><img src="image/img1/54323465.jpg" alt=""></li>
          <li><img src="image/img1/4568764.jpg" alt=""></li>
          <li><img src="image/img1/23454.jpg" alt=""></li>
          <li><img src="image/img1/65432.jpg" alt=""></li>
          <li><img src="image/img1/1234r.jpg" alt=""></li>
          <!-- <li><img src="image/img/65432.jpg" alt=""></li> -->
        </ul>
        <ol>
            
        </ol>
        <div class="arrow">
          <span class="left">&lt;</span>
          <span class="right">&gt;</span>
        </div>
    </div>
    <!-- 淡入淡出轮播图 -->
    <!-- 跟多产品 -->
    <ul class="product clearfix w1360">
      <li class="pd-price">
          <img src="image/1521023914.jpg" alt="">
          <div class="pd-pe">¥66609</div>
          <p>BELIEVE系列 典雅 130分 F色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1473675043.jpg" alt="">
          <div class="pd-pe">¥999009</div>
          <p>MY HEART系列 简奢款 50分 D色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/123456 (6).jpg" alt="">
          <div class="pd-pe">¥4567009</div>
          <p>BELIEVE系列 典雅 130分 D色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/6544564.jpg" alt="">
          <div class="pd-pe">¥999909</div>
          <p>BELIEVE系列 典雅 130分 A色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/4524252452.jpg" alt="">
          <div class="pd-pe">¥9999</div>
          <p>BELIEVE系列 典雅 30分 B色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1468289221.jpg" alt="">
          <div class="pd-pe">¥90009</div>
          <p>BELIEVE系列 典雅 50分 F色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1473674984.jpg" alt="">
          <div class="pd-pe">¥90009</div>
          <p>MY HEART系列 简奢款 50分 D色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1473675043.jpg" alt="">
          <div class="pd-pe">¥99909</div>
          <p>BELIEVE系列 典雅 70分 C色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1518086562.jpg" alt="">
          <div class="pd-pe">¥5230009</div>
          <p>MY HEART系列 简奢款 50分 D色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/4524252452.jpg" alt="">
          <div class="pd-pe">¥42459</div>
          <p>BELIEVE系列 典雅 50分 R色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/6d99cee822.jpg" alt="">
          <div class="pd-pe">¥76543009</div>
          <p>BELIEVE系列 典雅 230分 D色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1539768c7.jpg" alt="">
          <div class="pd-pe">¥990009</div>
          <p>BELIEVE系列 典雅 130分 D色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1490684317.jpg" alt="">
          <div class="pd-pe">¥870009</div>
          <p>BWEDDING系列 爱的捧花 13分</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1490839555.jpg" alt="">
          <div class="pd-pe">¥59999</div>
          <p>BELIEVE系列 典雅 50分 C色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1492743373.jpg" alt="">
          <div class="pd-pe">¥987346</div>
          <p>BELIEVE系列 典雅 130分 F色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1515133695.jpg" alt="">
          <div class="pd-pe">¥40009</div>
          <p>WEDDING系列 爱的捧花 13分</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/1470303876.jpg" alt="">
          <div class="pd-pe">¥987009</div>
          <p>BELIEVE系列 典雅 70分 D色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
      <li class="pd-price">
          <img src="image/6d99cee822.jpg" alt="">
          <div class="pd-pe">¥542009</div>
          <p>BELIEVE系列 典雅 60分 D色</p>
          <span class="shouc">收藏</span>
          <a class="money" href="#">立即购买</a>
      </li>
    </ul>
    <!-- 跟多产品结束 -->
    
    <!-- 使用时删除本行 -->
    <!-- 使用时删除本行 -->
    <!-- 使用时删除本行 -->
    <!-- <div class="clearfix" style="height: 100px;"></div> -->
    <!-- 使用时删除本行 -->
    <!-- 使用时删除本行 -->
    <!-- 使用时删除本行 -->
    <!-- 使用时删除本行 -->
    <!-- 使用时删除本行 -->
    <!--底部 开始-->
    <div class="dr_footer clearfix">
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
    <script src="js/jquery.imagezoom.js"></script>
    <script src="js/jquery.imagezoom.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/commodity.js"></script>
    <script src="js/animate.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        
            $(".jqzoom").imagezoom();
            
            $("#thumblist li a").mouseenter(function(){
                $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
                $(".jqzoom").attr('src',$(this).find("img").attr("mid"));
                $(".jqzoom").attr('rel',$(this).find("img").attr("big"));
            });
        
        });
        // $(function () {
        //     var $lis = $('.product .pd-price');
        //    $lis.mouseenter(function () {
        //     $(this).css('opacity', 1).siblings().css('opacity', .2);
        //    })
        //     $('.product').mouseleave(function () {
        //         $lis.css('opacity', 1);

        // })
        // })
        </script>
</body>

</html>