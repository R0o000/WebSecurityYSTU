<?php
$recaptcha = $_POST['g-recaptcha-response'];
 
if(!empty($recaptcha)) {
    $recaptcha = $_REQUEST['g-recaptcha-response'];
    $secret = '6LeHqismAAAAAB5w2Q2PiQ0lIz3SQxH2LlaleO2d';
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0");
    $curlData = curl_exec($curl);
    curl_close($curl); 
    $curlData = json_decode($curlData, true);
    if($curlData['success']) {
        $name=$_POST['name'];
	    $email=$_POST['email'];
	    $message=$_POST['message'];
	    $subject=$_POST['subject'];
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);
        $subject = htmlspecialchars($subject);
        $name = urldecode($name);
        $email = urldecode($email);
        $message = urldecode($message);
        $subject = urldecode($subject);
        $name = trim($name);
        $email = trim($email);
        $message  = trim($message);
        $subject  = trim($message);
        if (mail("ilya022003@yandex.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email." Тема: ".$subject." Сообщение: ".$message  ,"From: test.yartun@yartuningystu.ru \r\n")){  
        echo "Сообщение успешно отправлено"; 
        } else { 
        echo "При отправке сообщения возникли ошибки";
        }
    } else {
        echo "Подтвердите, что вы не робот и попробуйте еще раз";
    }
}
else {
    echo "поставьте галочку в поле 'Я не робот' для отправки сообщения";
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>YarTuning</title>
	<meta name="description" content="YarTuning">
	<meta name="author" content="www.yartuning.ru">
	
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	
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

<body class="contact-page">
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
		</header>

		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container zerogrid">
				<div class="crumbs">
					<ul>
						<li><a href="index.html">Главная</a></li>
						<li><a href="contact.html">Контакты</a></li>
					</ul>
				</div>
				<div id="main-content-contact">
					<div class="row">
						<h1 class="t-center" style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Контакты</h1>
						
						<!--Start Map-->
						<div id="map" style="height: 450px; margin-left: auto; margin-right: auto; width: 80%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8553.016830751612!2d39.85577017827137!3d57.59315148112661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b29389896a372f%3A0x4c586b080156d0ca!2z0JzQvtGB0LrQvtCy0YHQutC40Lkg0L_RgNC-0YHQvy4sIDEzMywg0K_RgNC-0YHQu9Cw0LLQu9GMLCDQr9GA0L7RgdC70LDQstGB0LrQsNGPINC-0LHQuy4sIDE1MDAzMA!5e0!3m2!1sru!2sru!4v1684132176921!5m2!1sru!2sru" width="80%" margin-left: auto; margin-right: auto; height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
						<!--End Map-->
						
						<div class="col-1-3">
							<div class="wrap-col">
								<h3 style="margin: 20px 0">Дополнительная информация</h3>
								<strong>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</strong>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
								<p>JL.Kemacetan timur no.23. block.Q3<br>
									Jakarta-Indonesia</p>
								   <p>+6221 888 888 90 <br>
									+6221 888 88891</p>
								<p>info@yourdomain.com</p>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="contact">
									<h3 style="margin: 20px 0 20px 30px">Форма для отправки</h3>
									<div id="contact_form">
										<form name="form1" id="ff" method="post" action="contact.php">
											<label class="row">
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="text" name="name" id="name" placeholder="Введите имя" required="required" />
													</div>
												</div>
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="email" name="email" id="email" placeholder="Введите email" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="col-full">
													<div class="wrap-col">
													<input type="text" name="subject" id="subject" placeholder="Тема" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Введите сообщение"></textarea>
												</div>
											</label>
											
											<center><input class="sendButton" type="submit" name="submitcontact" value="Отправить"></center>
											<center><div class="g-recaptcha" data-sitekey="6LeHqismAAAAAAP8_HNlhlo5BeFFzNsmFXZ2BvJr"></div></center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
	
	<!-- Google Map -->
	
   
</body>
</html>