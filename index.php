<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>YArTuning</title>
	<meta name="description" content="YarTuning">
	<meta name="author" content="Ilya">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery183.min.js"></script>
	<script src="js/script.js"></script>
	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body class="home-page">
	<div class="wrap-body">
		<header>
			<div class="top-bar">
				<div class="wrap-top zerogrid">
					<div class="row">
						<div class="col-2-3">
							<ul class="list-inline">
								<li class="mail"><span><i class="fa fa-envelope"></i> YarTuning@yandex.ru</span></li>
								<li class="phone"><span><i class="fa fa-phone"></i>44-33-22</span></li>
								<li class="clock"><span><i class="fa fa-clock-o"></i>ПН-СБ | 9:00-22:00</span></li>
							</ul>
						</div>
						<div class="col-1-3">
							<ul class="list-inline top-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header-logo">
				<a href="index.html"><img src="images/logo.png"></a>
			</div>
			<div id='cssmenu' >
				<ul>
				   <li><a href='index.html'><span>YarTuning</span></a></li>
				   <li><a href='archive.html'><span>Архив</span></a>
					<ul>
						<li class='last'><a href='single.html'><span>Изготовление обвеса</span></a>
						</li>
						<li class='last'><a href='single1.html'><span>Изменение прошивки</span></a>
						</li>
					 </ul>
				</li>
				   <li><a href='single2.html'><span>О компании</span></a></li>
				   <li><a href='contact.html'><span>Контакты</span></a></li>
				</ul>
			</div>
			<div class="slider">
				<!-- Slideshow -->
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>
							<img src="images/slideshow-image1.jpg" alt="">
							<div class="caption">
								<h1>ДЕТЕЙЛИНГ</h1>
								<span>Лучшие специалисты города смогут быстро и качественно<br> произвести полировку, нанести керамическое покрытие, оклеить любой элемент в <br>цветную или защитную пленку.</span>
							</div>
						</li>
						<li>
							<img src="images/slideshow-image2.jpg" alt="">
							<div class="caption">
								<h1>УВЕЛИЧЕНИЕ МОЩНОСТИ ДВИГЕТЕЛЯ</h1>
								<span>В двигатель автомобиля производители закладывают определенные ограничения. <br> В электронный блок управления устанавливается специальное ПО, из-за которого мотор работает не на всю мощность.</span>
							</div>
						</li>
						<li>
							<img src="images/slideshow-image3.jpg" alt="">
							<div class="caption">
								<h1>ВЫХЛОПНЫЕ СИСТЕМЫ</h1>
								<span >Если вы решили заняться тюнингом выхлопной системы, то мы с удовольствием вам в этом поможем. <br> У нас вы сможете заказать авторскую выхлопную систему или установить готовую от ведущих производителей: Akrapovic, Borla, MgRace и др.</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------content-box-1-------------------->
				<section class="content-box box-1">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="box-item">
										<img src="images/1.png">
										<h2>ОКЛЕЙКА КУЗОВА PORSHE MACAN S В ЧЕРНЫЙ САТИН</h2>
										<p>Главный объект сегодняшней статьи Porsche Macan S. Посмотрим, насколько сложным будет процесс изменения, а также как будет выглядеть после всех работ.</p>
										<a href="single.html">Читать полностью</a>
									</div>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="box-item">
										<img src="images/2.png">
										<h2>ПЕРЕТЯЖКА ПОТОЛКА НА MERCEDES-BENZ S-CLASS W222</h2>
										<p>Мы привыкли, что обычно при перетяжке потолка используют в качестве материала алькантару. Сегодня мы покажем процесс работы с использованием заводской ткани Dinamica, которую использует мерседес.</p>
										<a href="single.html">Читать полностью</a>
									</div>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="box-item">
										<img src="images/3.png">
										<h2>ИЗГОТОВЛЕНИЕ ВЫХЛОПНОЙ СИСТЕМЫ НА INFINITY Q60S</h2>
										<p>Какой может быть тюнинг без изготовления выхлопной системы? Автомобили приводятся в движение двигателями внутреннего сгорания, беспрепятственное прохождение отработанных газов должно...</p>
										<a href="single.html">Читать полностью</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-2-------------------->
				<section class="content-box boxstyle-1 box-2">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="box-item">
								<blockquote><p>При наличии энтузиазма вы можете достичь всего. Энтузиазм — это блеск ваших глаз, стремительность походки, крепость рукопожатия, непреодолимый прилив энергии и воли для претворения в жизнь ваших идей. Энтузиазм — краеугольный камень всего прогресса! Только с ним возможен успех. Без него у вас есть только возможности.</p></blockquote>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-4-------------------->
				<section class="content-box boxstyle-2 box-4">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="header">
								<div class="wrapper">
								<h2>Наша команда</h2>
							</div>
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<div class="box-item">
											<div class="zoom-container">
												<img src="images/photo1.png" />
											</div>
											<div class="box-item-content">
												<h4>МАСТЕР ПО ДЕТЕЙЛИНГУ</h4>
												<p>Мастер своего дела, имеет опыт оклейки, покраски кузова, тонирование стёкол. Работал с такими автомобилями как Bentley, Mercedes-benz и другие мировые бренда. </p>
												<a href="single.html">Подробнее</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<div class="box-item">
											<div class="zoom-container">
												<img src="images/photo2.png" />
											</div>
											<div class="box-item-content">
												<h4>ГЛАВНЫЙ МЕХАНИК</h4>
												<p>Большой стаж работы с разными автомобилями от отечесвенного до немецкого автопрома. Способен починить или улучшить любой узел вашего авто.</p>
												<a href="single.html">Подробнее</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<div class="box-item">
											<div class="zoom-container">
												<img src="images/photo3.png" />
											</div>
											<div class="box-item-content">
												<h4>ИНЖЕНЕР-МЕХАНИК</h4>
												<p>Имеет многолетний опыт разработок и сборок автомобилей. Доработка всех элементов автомобиля, по вашему выбору и желанию.</p>
												<a href="single.html">Подробнее</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				
				<!-----------------content-box-6-------------------->
				<section class="content-box box-6">
					<div class="zerogrid" style="width: 100%;">
						<div class="row wrap-box"><!--Start Box-->
							<div class="col-1-2">
								<div class="portfolio-box">
									<img src="images/8.jpg" class="img-responsive" alt="">
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<a href="single.html">Изменение прошивки</a>
											</div>
											<div class="project-des">
												<p>Установка спортивной прошивки на BMW M5</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-2">
								<div class="portfolio-box">
									<img src="images/9.jpg" class="img-responsive" alt="">
									<div class="portfolio-box-caption">
										<div class="portfolio-box-caption-content">
											<div class="project-name">
												<a href="single.html">Изготовление обвеса</a>
											</div>
											<div class="project-des">
												<p>Подготовка к покраске обвеса на mercedes-benz G-class 63s AMG</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="top-footer">
				<div id="owl-brand" class="owl-carousel">
					<div class="item">
						<a href="single.html"><img src="images/15.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/16.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/17.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/18.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/19.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/20.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="images/21.jpg" /></a>
					</div>
				</div>
			</div>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="col-1-4 col-footer-1">
						<div class="wrap-col">
							<h3 class="widget-title">О нас</h3>
							<p>Данный сайт носит исключительно информационный характер и ни при каких условиях информационные материалы и цены, размещенные на сайте, не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ.</p>
						</div>
					</div>
					<div class="col-1-4 col-footer-2">
						<a href="index.html"><img src="images/logo.png"></a>
					</div>

					<div class="col-1-4 col-footer-3">
						<div class="wrap-col">
							<h3 class="widget-title">Свяжитесь с нами</h3>
							<p>Для консультации укажите вашу почту, чтобы мы могли связаться с вами.</p>
							<p>Введите email:</p>
							<form action="#" method="post">
								<input type="text" name="your-name" value="" size="40" placeholder="Ваш email" />
								<input type="submit" value="Подтвердить" class="button button-subcribe" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="zerogrid wrapper">
					<a href="index.html">@YarTuning</a> 2023 год
					<ul class="quick-link">
						<li><a href="#">Политика конфиденциальности</a></li>
						<li><a href="#">Правила пользования</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items : 6,
		itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,2],
		navigation: true,
		navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
		pagination: false
      });
    });
    </script>
</body>
</html>