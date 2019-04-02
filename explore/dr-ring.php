<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DR求婚钻戒|求婚钻戒品牌|DR全球真爱体验店|DR店铺地址查询|一生只爱一人-DR求婚钻戒官网</title>
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/common.css">
	 <link rel="shortcut icon" type="image/x-icon" href="fonts/bitbug_favicon .ico" />
	<link rel="stylesheet" href="css/dr.css">
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
								<a href="../exit.php">退出登陆</a>
							<?php else: ?>
								<a href="../register/index.html">注册</a>
								<a href="../login/index.php?url=explore/dr-ring.php">登陆</a>
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
									<a  class="nav-a2" href="#">
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
		
	<!-- bnner图片1 -->
	<div id="jsi-cherry-container" class="container"></div>
	<!-- DR求婚钻戒品牌 -->
	<div class="banner2">
		<div class="dr-qhzj">
			<div class="dr-b-t">
				<h1>DR求婚钻戒品牌</h1>
				<div class="hr"></div>
				<div class="p01">基于让爱情变的更美好的品牌使命，致力于对真爱唯一的传播与见证
				<br>
				<span>男士一生仅能定制一枚</span>
				，赠予一生唯一真爱的人
				<br>
				在求婚的那一刻，许下对爱一生的承诺
				</div>
			</div>
		</div>
	</div>
	<!-- DR求婚Tips -->
	<div class="dr-tips">
     	<div class="con-main">
     		<div class="con-t">
     			<h1>DR求婚Tips</h1>
     			<div class="hr"></div>
     			<ul class="tips-list fix">
     				<li>
     					<div class="tips-box">
     						<img src="images/part03_img01.jpg" alt="">
     						<div class="tips-txt">求婚场地的选择？</div>
     						<a href="" class="a01">点击了解 ></a>
     					</div>
     				</li>
     				<li>
     					<div class="tips-box">
     						<img src="images/part03_img02.jpg" alt="">
     						<div class="tips-txt">如何选购一枚求婚钻戒？</div>
     						<a href="" class="a01">点击了解 ></a>
     					</div>
     				</li>
     				<li class="no-mr">
     					<div class="tips-box">
     						<img src="images/part03_img03.jpg" alt="">
     						<div class="tips-txt">寻找附近的DR真爱体验店？</div>
     						<a href="" class="a01">点击了解 ></a>
     					</div>
     				</li>
     			</ul>
     		</div>
     	</div>
     </div>
	<!-- DR体验店真爱故事 -->
	<div class ="dr-tyd">
		<div class="con-main">
			<div class="con-t ">
				<h1>DR体验店真爱故事</h1>
				<div class="hr"></div>
				<div class="p01">每一枚DR求婚钻戒背后，都有一个相爱一生的故事。
					<br>
					DR真爱体验店见证族DR族浪漫的爱情故事，期待我们也能见证您一生唯一的爱情！
				</div>
			</div>
		<div class="carousel-content">
			<div class="carousel">
				<li class="swiper-wrapper clearfix">
					<div class="swiper-img">
						<img src="images/part04_banner01.jpg" alt="">
					</div>
					<div class="co">
						<div class="c-box">
							<div class="p01">有你,才有诗和远方</div>
								<div class="p02">
									初次见你，是被你纯真的笑容深深吸引。<br>
									我酷爱摄影，鼓起勇气邀请你做我镜头下的女主角，<br>
									就这样，我们开启了“相”伴的旅程。<br>
									重庆IFS店真爱大使偷偷的<br>
									告诉我：“要不婚戒定制回来时，<br>
									在我们店铺给女士来个<br>
									浪漫的求婚如何？”<br>
									是的，生活需要仪式感，<br>
									我也要给你一个浪漫的惊喜，<br>
									给你一生只爱一人的承诺。
								</div>
								<div class="p03">Darry Ring-重庆IFS店</div>
								<a href="" class="a02">DR体验店服务咨询</a>
								<div class="pro-box">
									<img src="images/part04_img01.png" alt="">
								</div>
						</div>
					</div>
				</li>
				<li class="swiper-wrapper clearfix">
					<div class="swiper-img">
						<img src="images/part04_banner02.jpg" alt="">
					</div>
					<div class="co">
						<div class="c-box">
							<div class="p01">漂洋过海来娶你</div>
								<div class="p02">
										在意大利留学，她则在郑州工作，<br>
										最终，打败了6、7个小时的时差和上万公里的距离，<br>
										坚持和相爱让我们走到一起。<br>
										在国外留学经常会看到求婚的场景，<br>
										这让我坚定向你求婚的心，<br>
										DR郑州大商国贸店精致庄严的风格，<br>
										轻奢格调中透露着浪漫生活的气息，<br>
										是她喜欢的样子。<br>
										我要给你一辈子的爱，<br>
										给你我此生重要的承诺
								</div>
								<div class="p03">Darry Ring-郑州大商国贸店</div>
								<a href="" class="a02">DR体验店服务咨询</a>
								<div class="pro-box">
									<img src="images/part04_img02.png" alt="">
								</div>
						</div>
					</div>
				</li>
				<li class="swiper-wrapper clearfix">
					<div class="swiper-img">
						<img src="images/part04_banner03.jpg" alt="">
					</div>
					<div class="co">
						<div class="c-box">
							<div class="p01">幸福，会从眼睛里跑出来</div>
								<div class="p02">
										亲爱的，我想过无数次要怎么和你求婚。<br>
										不善言辞的我选择了一个可以让我说出真心话<br>
										而不必担心被打扰的地方<br>
										-DR兰州国芳百货店向你求婚，<br>
										为你戴上了一生一枚的DR钻戒，<br>
										看着你像孩子一样惊慌、惊喜、激动，<br>
										心变得很满很温暖，亲爱的，<br>
										谢谢你接受这个不善言辞的我，<br>
										这个不能给你很多陪伴的我，<br>
										这个还不够浪漫的我。
								</div>
								<div class="p03">Darry Ring-兰州国芳百货店</div>
								<a href="" class="a02">DR体验店服务咨询</a>
								<div class="pro-box">
									<img src="images/part04_img03.png" alt="">
								</div>
						</div>
					</div>
				</li>
			</div>
		</div>
		<div class="sw-pagination">
			<div class="pagination">
				<span class="sw-pa-switch"></span>
				<span class="sw-pa-switch"></span>
				<span class="sw-pa-switch"></span>
			</div>
			<ul class="img-index">
				
			</ul>
		</div>
		<div class="c-b">
			<a href="" class="a03">查询附近体验店</a>
			<br>
			<a href="" class="a04">查看更多DR真爱故事></a>
		</div>
		</div>
	</div>
	<!-- 选购一枚DR求婚钻戒 -->
	<div class="dr-pick">
		<div class="con-main">
			<div class="con-t">
				<h1>选购一枚DR求婚钻戒</h1>
				<div class="hr"></div>
			</div>
			<div class="pro-part clearfix">
			<!--箭头-->
       		 <div class="arrow">
           			 <span class="arrow-left">&lt;</span>
          		 	 <span class="arrow-right">&gt;</span>
      	 	 </div>
				<div class="sw-container">
					<div class="wrapper1 sw-cn-wrapper">
						<div class="sw-slide-img">
							<a href="" class=""><img src="images/part05_pro01.jpg" alt=""></a>
							<span class="ic"></span>
							<div class="info-box">
								<div class="p01">My Heart系列 简奢款</div>
								<div class="hr2"></div>
								<div class="p10">只对你动心</div>
								<div class="p11">进一步了解更多 &gt;</div>
							</div>
						</div>
						<div class="sw-slide-img">
							<a href="" class=""><img src="images/part05_pro03.jpg" alt=""></a>
							<span class="ic"></span>
							<div class="info-box">
									<div class="p01">Forever系列 简奢款</div>
									<div class="hr2"></div>
									<div class="p10">一生挚爱，永恒不变</div>
									<div class="p11">进一步了解更多 &gt;</div>
								</div>
						</div>
						<div class="sw-slide-img">
							<a href="" class=""><img src="images/part05_pro05.jpg" alt=""></a>
							<span class="ic"></span>
							<div class="info-box">
									<div class="p01">Believe系列 典雅</div>
									<div class="hr2"></div>
									<div class="p10">相爱更要相守</div>
									<div class="p11">进一步了解更多 &gt;</div>
								</div>
						</div>
						<div class="sw-slide-img">
							<a href="" class=""><img src="images/part05_pro07.jpg" alt=""></a>
							<span class="ic"></span>
							<div class="info-box">
									<div class="p01">Princess系列 花冠</div>
									<div class="hr2"></div>
									<div class="p10">每天爱你多一点</div>
									<div class="p11">进一步了解更多 &gt;</div>
								</div>
						</div>
					</div>
				</div>
				<div class="sw-cn-wz">
					<div class="sw-wz-box">
						<div class="sw-wz-box02">
							<div class="pro-co">
								<div class="p05">设计理念</div>
									<div class="p06">
										心形钻戒起源爱神厄洛斯<br>
										为神圣的爱情信物<br>
										传说被爱神射中的恋人<br>
										就能拥有箭锋上的心形宝石印记<br>
										从此一心一意，一生一世
									</div>
							</div>
						</div>
						<div class="sw-wz-box02">
							<div class="pro-co">
								<div class="p05">设计理念</div>
									<div class="p06">
										传奇的六爪镶嵌订婚钻戒面世<br>
										以钻戒求婚的订婚传统由此开启<br>
										唯有百年经典赞颂之作<br>
										足以承载内心对真爱的坚定承诺<br>
									</div>
							</div>
						</div>
						<div class="sw-wz-box02">
							<div class="pro-co">
								<div class="p05">设计理念</div>
									<div class="p06">
										传说雪花是落入凡间的小精灵<br>
										能实现女人浪漫的爱情梦想<br>
										此款钻戒以雪花作为灵感<br>
										只为世间纯粹真爱的浪漫表达<br>
										雪花般纯粹的浪漫，只为一人实现<br>
									</div>
							</div>
						</div>
						<div class="sw-wz-box02">
							<div class="pro-co">
								<div class="p05">设计理念</div>
									<div class="p06">
										每个女孩心中都有公主梦<br>
										设计师以欧洲新娘婚嫁时的花冠为原型<br>
										打造梦幻Princess系列钻戒<br>
										每一位向往真爱的女孩<br>
										都值得公主般的宠爱<br>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sw-container">
					<div class="wrapper2 sw-cn-wrapper">
						<div class="sw-slide-img">
							<a href="" class=""><img src="images/part05_pro02.jpg" alt=""></a>
							<span class="ic"></span>
								<div class="info-box">
									<div class="p01">My Heart系列 浪漫款</div>
									<div class="hr2"></div>
									<div class="p10">把心交给你</div>
									<div class="p11">进一步了解更多 &gt;</div>
								</div>
						</div>
						<div class="sw-slide-img">
							<a href="" class=""><img src="images/part05_pro04.jpg" alt=""></a>
							<span class="ic"></span>
								<div class="info-box">
									<div class="p01">Forever系列 经典款</div>
									<div class="hr2"></div>
									<div class="p10">时光流逝，爱你如初</div>
									<div class="p11">进一步了解更多 &gt;</div>
								</div>
						</div>
						<div class="sw-slide-img">
							<a href="" class=""><img src="images/part05_pro06.jpg" alt=""></a>
							<span class="ic"></span>
								<div class="info-box">
									<div class="p01">Believe系列 经典款</div>
									<div class="hr2"></div>
									<div class="p10">爱你，是我一生的信仰</div>
									<div class="p11">进一步了解更多 &gt;</div>
								</div>
						</div>
						<div class="sw-slide-img">
							<a href="" class=""><img src="images/part05_pro08.jpg" alt=""></a>
							<span class="ic"></span>
								<div class="info-box">
									<div class="p01">Princess系列 宠爱</div>
									<div class="hr2"></div>
									<div class="p10">这一生我只宠爱你一人</div>
									<div class="p11">进一步了解更多 &gt;</div>
								</div>
						</div>
					</div>
				</div>
				<!-- <div class="pick-pagination">
				<div class="dian-pagination">
					<span class="sw-pa-switch"></span>
					<span class="sw-pa-switch"></span>
					<span class="sw-pa-switch"></span>
					<span class="sw-pa-switch"></span>
				</div>
				</div> -->
				</div>
			
<!-- DR求婚钻戒选购指导 -->
		<div class="shoppers-part">
			<div class="p07">DR求婚钻戒选购指导</div>
			<div class="hr"></div>
			<ul class="ul-list clearfix">
				<li>
					<div class="img-box">
						<img src="images/part05_ic01.jpg" alt="">
					</div>
					<div class="con">
						<div class="ti">款式</div>
						<div class="txt">
								DR钻戒（Darry Ring）备有多种款式<br>
								供您选择。您可以根据自己的预算<br>
								以及心爱之人的风格、喜好，<br>
								挑选一枚合适的钻戒。
							</div>
						<div class="tt">我需要更多的款式推荐？</div>
					</div>
				</li>
				<li>
					<div class="img-box">
						<img src="images/part05_ic02.jpg" alt="">
					</div>
					<div class="con">
						<div class="ti">手寸/刻字</div>
						<div class="txt">
								如果您想要给到女士惊喜，<br>
								可以联系我们的官网客服协助您进行估算 。<br>
								DR钻戒提供免费刻字服务，<br>
								限5个汉字或10个字母以内。
							</div>
						<div class="tt">我需要估算手寸？刻字刻什么？</div>
					</div>
				</li>
				<li class="no-mr">
					<div class="img-box">
						<img src="images/part05_ic03.jpg" alt="">
					</div>
					<div class="con">
						<div class="ti">定制流程/周期</div>
						<div class="txt">
								DR钻戒产品从下单支付到您收到货品<br>
								一般是15个工作日内。<br>
								不同款式的定制时间不同。<br>
								需要加急定制可联系在线客服。
						</div>
						<div class="tt">如何定制？我想要加急定制？</div>
					</div>
				</li>
			</ul>
			<a href="" class="link-a">联系在线客服</a>
		</div>
	</div>
</div>

<!-- 选择城市区域 -->
<script src="js/数据.js"></script>

<div class="pick-city">
	<div class="con-main">
		<div class="p08">
				我需要看实际试戴效果<br>
				我还想要寻找浪漫的求婚场所<br>
				我想体验爱情的仪式感<br>
				……
		</div>
		<div class="p09">
			<div class="ti">探索最近的DR真爱体验店</div>
			<div class="txt">DR真爱体验店遍布全国，提供钻戒试戴与求婚服务。</div>
			<div class="storeSelect-box">
				<select class="c-select" id="province">
						<option value="">请选择省份</option>

						<script type="text/javascript"> 
                            for(var i=0;i<provinceArr.length;i++)    
                            {
                                document.write("<option value='"+i+"'>"+provinceArr[i]+"</option>");
                                
                            }
                        </script>
						                 <!--           <option value="3735">巴黎</option>
                                                   <option value="33">香  港</option>
                                                   <option value="1">北京市</option>
                                                   <option value="2">天津市</option>
                                                   <option value="3">河北省</option>
                                                   <option value="4">山西省</option>
                                                   <option value="5">内蒙古自治区</option>
                                                   <option value="6">辽宁省</option>
                                                   <option value="7">吉林省</option>
                                                   <option value="8">黑龙江</option>
                                                   <option value="9">上海市</option>
                                                   <option value="10">江苏省</option>
                                                   <option value="11">浙江省</option>
                                                   <option value="12">安徽省</option>
                                                   <option value="13">福建省</option>
                                                   <option value="14">江西省</option>
                                                   <option value="15">山东省</option>
                                                   <option value="16">河南省</option>
                                                   <option value="17">湖北省</option>
                                                   <option value="18">湖南省</option>
                                                   <option value="19">广东省</option>
                                                   <option value="20">广西壮族自治区</option>
                                                   <option value="21">海南省</option>
                                                   <option value="22">重庆市</option>
                                                   <option value="23">四川省</option>
                                                   <option value="24">贵州省</option>
                                                   <option value="25">云南省</option>
                                                   <option value="27">陕西省</option>
                                                   <option value="28">甘肃省</option>
                                                   <option value="29">青海省</option>
                                                   <option value="30">宁夏回族自治区</option>
                                                   <option value="31">新疆维吾尔自治区</option> -->



                        					</select>
                <select class="c-select" id="city2">
						<option value="0">请选择城市</option>
					</select>
				<a href="" class="toPage">搜索</a>
			</div>
			<a href=""class="a05">查看所有DR真爱体验店</a>
		</div>
		<a href="" class="a06 a07">求婚钻戒 ></a>
		<a href="" class="a06 a08">结婚对戒 ></a>
		<a href="" class="a06 a09">在线咨询服务 ></a>
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
                        <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030302000934" target="_blank"></a>
                            <!-- <img src="image/icon_police.png" />粤公网安备 44030302000934号/</a> -->
                        <span>
                            <a href="http://www.miitbeian.gov.cn" target="_blank">粤ICP备11012085号-2</a>/Copyright©2006-2018 www.darryring.com 戴瑞珠宝 All Rights Reserved. </span>
                        <!-- <img src="image/kxzd.png" alt="" /> -->
                    </div>
                </div>
            </div>
            <!--中英文切换，网站声明end-->
        </div>
        <!--黑色区域end-->
    </div>
    <!--底部 结束-->


<!-- 轮播图 -->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<script src="js/carousel.js"></script>


<script>
      $(function () {
            // 思路：
            //  给右箭头注册点击事件
            //  1. 获取到 arrow-right  ==>  $arrRight
            //  2. 给 $arrRight  注册 click
            //  3. 声明一个index 变量，  表示当前展示的是哪一张图片的下标
            //          var index = 0; // 默认展示的是第一行
            //  4. index++
            //  5. 去li中获取对应下标的图片进行展示 （fadeIn）
            //      隐藏其他的兄弟li  fadeOut()

            // 1.
            // var $arrRight = $(".arrow-right");
            // var $arrLeft = $(".arrow-left");
            // var $lis = $(".sw-cn-wrapper div");
            // var index = 0; // 当前展示的图片的下标
            // // 2.
            // $arrRight.click(function () {
            //     index++;
            //     // 临界点的判断
            //     if (index > $lis.length - 1) {
            //         index = 0;  // 回到第一张
            //     }

            //     $lis.eq(index).fadeIn().siblings().fadeOut();
            // })
            // // 左边的
            // $arrLeft.click(function(){
            //     index--;

            //     if (index < 0) {
            //         index = $lis.length - 1;  // 回到最后一张
            //     }

            //     $lis.eq(index).fadeIn().siblings().fadeOut();
            // })

            //  // 开启定时器，触发右箭头的点击事件
            // var timerId = setInterval(function(){
            //     // $arrRight.click();
            //     $arrRight.trigger("click");

            // }, 300);


            // $(".sw-cn-wrapper").on("mouseenter", function(){
            //     // 清定时器
            //     clearInterval(timerId);
            // })


            // $(".sw-cn-wrapper").on("mouseleave", function(){
            //     // 开启定时器
            //     // 注意点：千万不要var timerId
            //     timerId = setInterval(function(){
            //         $arrRight.trigger("click");
            //     }, 300);
            // })


           var $divs1 = $(".wrapper1 div.sw-slide-img");
           var $divs2 = $(".wrapper2 div.sw-slide-img");
           var $divWz = $(".sw-wz-box div.sw-wz-box02");
           $divWz.eq(0).show(0);
           // console.log($divWz);
           // console.log($divs1);
           // console.log($divs2);
           var index = 0;
           setInterval(function(){
           	if(index == 3) {
           		index = -1;
           	}
           	index ++ ;
           	$divs1.eq(index).fadeIn(800).siblings().fadeOut(800);
           	$divs2.eq(index).fadeIn(800).siblings().fadeOut(800);
           	$divWz.eq(index).fadeIn(800).siblings().fadeOut(800);
           },2000)
        });

</script>



<script>

	$(".carousel-content").carousel({
		carousel : ".carousel",//轮播图容器
		indexContainer : ".img-index",//下标容器
		prev : ".carousel-prev",//左按钮
		next : ".carousel-next",//右按钮
		timing : 3000,//自动播放间隔
		animateTime : 700,//动画时间
		autoPlay : true,//是否自动播放 true/false
		direction : "left",//滚动方向 right/left
	});

		// 	$(".carousel-content").hover(function(){
		// 		$(".carousel-prev,.carousel-next").fadeIn(300);
		// 	},function(){
		// 		$(".carousel-prev,.carousel-next").fadeOut(300);
		// 	});

		// 	$(".carousel-prev").hover(function(){
		// 		$(this).find("img").attr("src","./images/left2.png");
		// 	},function(){
		// 		$(this).find("img").attr("src","./images/left1.png");
		// 	});
		// 	$(".carousel-next").hover(function(){
		// 		$(this).find("img").attr("src","./images/right2.png");
		// 	},function(){
		// 		$(this).find("img").attr("src","./images/right1.png");
		// 	});
		// });

	</script>


<!-- 二级联动菜单 -->
<script>
	
	//将省份加载到下拉选择框中
    function getProvince()
    {
           //通过id获取省份下拉框的对象 （省份的下拉框的id是province）    
       var provincesobj=document.getElementById("province");
        for(var i=0;i<provinceArr.length;i++)
        {
            provincesobj.options[provincesobj.options.length]=new Option(provinceArr[i],i);    
        
        }
        
    }

// 二级联动菜单

//var op = $("#province option:selected");
//console.log(op.val());

  var $pro = $("#province");
  var sheng = '';
  $pro.change(function(){
  	//console.log($(this).val());
  	var value = $(this).val();
  	$(this).children('option').each(function(i,v){
  		if($(v).val() == value) {
  			sheng = $(v).text();
  		}
  	})
  	// console.log(sheng);
  	$('#city2').empty();
  	 for(var i=0;i<cityArr.length;i++)    
    {
    	if(cityArr[i][0] == sheng) {

    		for(var j =0;j<cityArr[i].length;j++) {
    			var option = $('<option>'+cityArr[i][j]+'</option>');
    			option.appendTo($('#city2'));
    		}
    	}
        
    }
  	$("#city2");
  })
</script>




<!-- 樱花雨 -->
<script>
	
var RENDERER = {
	INIT_CHERRY_BLOSSOM_COUNT : 30,
	MAX_ADDING_INTERVAL : 10,
	
	init : function(){
		this.setParameters();
		this.reconstructMethods();
		this.createCherries();
		this.render();
	},
	setParameters : function(){
		this.$container = $('#jsi-cherry-container');
		this.width = this.$container.width();
		this.height = this.$container.height();
		this.context = $('<canvas />').attr({width : this.width, height : this.height}).appendTo(this.$container).get(0).getContext('2d');
		this.cherries = [];
		this.maxAddingInterval = Math.round(this.MAX_ADDING_INTERVAL * 1000 / this.width);
		this.addingInterval = this.maxAddingInterval;
	},
	reconstructMethods : function(){
		this.render = this.render.bind(this);
	},
	createCherries : function(){
		for(var i = 0, length = Math.round(this.INIT_CHERRY_BLOSSOM_COUNT * this.width / 1000); i < length; i++){
			this.cherries.push(new CHERRY_BLOSSOM(this, true));
		}
	},
	render : function(){
		requestAnimationFrame(this.render);
		this.context.clearRect(0, 0, this.width, this.height);
		
		this.cherries.sort(function(cherry1, cherry2){
			return cherry1.z - cherry2.z;
		});
		for(var i = this.cherries.length - 1; i >= 0; i--){
			if(!this.cherries[i].render(this.context)){
				this.cherries.splice(i, 1);
			}
		}
		if(--this.addingInterval == 0){
			this.addingInterval = this.maxAddingInterval;
			this.cherries.push(new CHERRY_BLOSSOM(this, false));
		}
	}
};
var CHERRY_BLOSSOM = function(renderer, isRandom){
	this.renderer = renderer;
	this.init(isRandom);
};
CHERRY_BLOSSOM.prototype = {
	FOCUS_POSITION : 300,
	FAR_LIMIT : 600,
	MAX_RIPPLE_COUNT : 100,
	RIPPLE_RADIUS : 100,
	SURFACE_RATE : 0.5,
	SINK_OFFSET : 20,
	
	init : function(isRandom){
		this.x = this.getRandomValue(-this.renderer.width, this.renderer.width);
		this.y = isRandom ? this.getRandomValue(0, this.renderer.height) : this.renderer.height * 1.5;
		this.z = this.getRandomValue(0, this.FAR_LIMIT);
		this.vx = this.getRandomValue(-2, 2);
		this.vy = -2;
		this.theta = this.getRandomValue(0, Math.PI * 2);
		this.phi = this.getRandomValue(0, Math.PI * 2);
		this.psi = 0;
		this.dpsi = this.getRandomValue(Math.PI / 600, Math.PI / 300);
		this.opacity = 0;
		this.endTheta = false;
		this.endPhi = false;
		this.rippleCount = 0;
		
		var axis = this.getAxis(),
			theta = this.theta + Math.ceil(-(this.y + this.renderer.height * this.SURFACE_RATE) / this.vy) * Math.PI / 500;
		theta %= Math.PI * 2;
		
		this.offsetY = 40 * ((theta <= Math.PI / 2 || theta >= Math.PI * 3 / 2) ? -1 : 1);
		this.thresholdY = this.renderer.height / 2 + this.renderer.height * this.SURFACE_RATE * axis.rate;
		this.entityColor = this.renderer.context.createRadialGradient(0, 40, 0, 0, 40, 80);
		this.entityColor.addColorStop(0, 'hsl(330, 70%, ' + 50 * (0.3 + axis.rate) + '%)');
		this.entityColor.addColorStop(0.05, 'hsl(330, 40%,' + 55 * (0.3 + axis.rate) + '%)');
		this.entityColor.addColorStop(1, 'hsl(330, 20%, ' + 70 * (0.3 + axis.rate) + '%)');
		this.shadowColor = this.renderer.context.createRadialGradient(0, 40, 0, 0, 40, 80);
		this.shadowColor.addColorStop(0, 'hsl(330, 40%, ' + 30 * (0.3 + axis.rate) + '%)');
		this.shadowColor.addColorStop(0.05, 'hsl(330, 40%,' + 30 * (0.3 + axis.rate) + '%)');
		this.shadowColor.addColorStop(1, 'hsl(330, 20%, ' + 40 * (0.3 + axis.rate) + '%)');
	},
	getRandomValue : function(min, max){
		return min + (max - min) * Math.random();
	},
	getAxis : function(){
		var rate = this.FOCUS_POSITION / (this.z + this.FOCUS_POSITION),
			x = this.renderer.width / 2 + this.x * rate,
			y = this.renderer.height / 2 - this.y * rate;
		return {rate : rate, x : x, y : y};
	},
	renderCherry : function(context, axis){
		context.beginPath();
		context.moveTo(0, 40);
		context.bezierCurveTo(-60, 20, -10, -60, 0, -20);
		context.bezierCurveTo(10, -60, 60, 20, 0, 40);
		context.fill();
		
		for(var i = -4; i < 4; i++){
			context.beginPath();
			context.moveTo(0, 40);
			context.quadraticCurveTo(i * 12, 10, i * 4, -24 + Math.abs(i) * 2);
			context.stroke();
		}
	},
	render : function(context){
		var axis = this.getAxis();
		
		if(axis.y == this.thresholdY && this.rippleCount < this.MAX_RIPPLE_COUNT){
			context.save();
			context.lineWidth = 2;
			context.strokeStyle = 'hsla(0, 0%, 100%, ' + (this.MAX_RIPPLE_COUNT - this.rippleCount) / this.MAX_RIPPLE_COUNT + ')';
			context.translate(axis.x + this.offsetY * axis.rate * (this.theta <= Math.PI ? -1 : 1), axis.y);
			context.scale(1, 0.3);
			context.beginPath();
			context.arc(0, 0, this.rippleCount / this.MAX_RIPPLE_COUNT * this.RIPPLE_RADIUS * axis.rate, 0, Math.PI * 2, false);
			context.stroke();
			context.restore();
			this.rippleCount++;
		}
		if(axis.y < this.thresholdY || (!this.endTheta || !this.endPhi)){
			if(this.y <= 0){
				this.opacity = Math.min(this.opacity + 0.01, 1);
			}
			context.save();
			context.globalAlpha = this.opacity;
			context.fillStyle = this.shadowColor;
			context.strokeStyle = 'hsl(330, 30%,' + 40 * (0.3 + axis.rate) + '%)';
			context.translate(axis.x, Math.max(axis.y, this.thresholdY + this.thresholdY - axis.y));
			context.rotate(Math.PI - this.theta);
			context.scale(axis.rate * -Math.sin(this.phi), axis.rate);
			context.translate(0, this.offsetY);
			this.renderCherry(context, axis);
			context.restore();
		}
		context.save();
		context.fillStyle = this.entityColor;
		context.strokeStyle = 'hsl(330, 40%,' + 70 * (0.3 + axis.rate) + '%)';
		context.translate(axis.x, axis.y + Math.abs(this.SINK_OFFSET * Math.sin(this.psi) * axis.rate));
		context.rotate(this.theta);
		context.scale(axis.rate * Math.sin(this.phi), axis.rate);
		context.translate(0, this.offsetY);
		this.renderCherry(context, axis);
		context.restore();
		
		if(this.y <= -this.renderer.height / 4){
			if(!this.endTheta){
				for(var theta = Math.PI / 2, end = Math.PI * 3 / 2; theta <= end; theta += Math.PI){
					if(this.theta < theta && this.theta + Math.PI / 200 > theta){
						this.theta = theta;
						this.endTheta = true;
						break;
					}
				}
			}
			if(!this.endPhi){
				for(var phi = Math.PI / 8, end = Math.PI * 7 / 8; phi <= end; phi += Math.PI * 3 / 4){
					if(this.phi < phi && this.phi + Math.PI / 200 > phi){
						this.phi = Math.PI / 8;
						this.endPhi = true;
						break;
					}
				}
			}
		}
		if(!this.endTheta){
			if(axis.y == this.thresholdY){
				this.theta += Math.PI / 200 * ((this.theta < Math.PI / 2 || (this.theta >= Math.PI && this.theta < Math.PI * 3 / 2)) ? 1 : -1);
			}else{
				this.theta += Math.PI / 500;
			}
			this.theta %= Math.PI * 2;
		}
		if(this.endPhi){
			if(this.rippleCount == this.MAX_RIPPLE_COUNT){
				this.psi += this.dpsi;
				this.psi %= Math.PI * 2;
			}
		}else{
			this.phi += Math.PI / ((axis.y == this.thresholdY) ? 200 : 500);
			this.phi %= Math.PI;
		}
		if(this.y <= -this.renderer.height * this.SURFACE_RATE){
			this.x += 2;
			this.y = -this.renderer.height * this.SURFACE_RATE;
		}else{
			this.x += this.vx;
			this.y += this.vy;
		}
		return this.z > -this.FOCUS_POSITION && this.z < this.FAR_LIMIT && this.x < this.renderer.width * 1.5;
	}
};
$(function(){
	RENDERER.init();
});
</script>

	

</body>
</html>



