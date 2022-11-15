<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<title>ZS1 :: Strona Główna</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Zespół Szkół Nr 1 im. Ignacego Łukasiewicza w Gorlicach">
	<meta name="keywords" content="szkoła, gorlice, łukasiewicz, rekrutacja, małopolska">
	<meta name="robots" content="all">
	<link rel="icon" type="image/png" href="images/icons/logo.svg"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="animsition">

	<!-- Nagłówek -->

	<header>
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<div style="align-items: center; display: flex;">
						<div class="float-l m-r-10">
							<img class="m-b-5" src="images/icons/godlo.webp" alt="Godło Rzeczpospolitej Polskiej" data-logofixed="images/icons/godlo.webp"><br>
							<a href="https://bip.malopolska.pl/zs1gorlice"><img src="images/icons/bip.webp" alt="Biuletyn Informacji Publicznej" data-logofixed="images/icons/bip.webp"></a>
						</div>
						<div class="logo float-l p-b-5">
							<a href="index.php"><img src="images/icons/logo.svg" alt="Zespół Szkół Nr 1 im. Ignacego Łukasiewicza w Gorlicach" data-logofixed="images/icons/logo.svg"></a>
						</div>
					</div>
					
					<!-- Menu główne -->

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
					<script src="js/change-color.js"></script>
					<script>
						$(function() {
							$(".drop").click(function(e){
								e.preventDefault();
								if ($(this).next(".dropdown").is(":hidden")) {
									$(".dropdown").slideUp()
									$(this).next(".dropdown").slideDown()
								}
								else {
									$(".dropdown").slideUp()
								}
							});
							$(".drop").focusout(function(){
								$(".dropdown").slideUp()
							})
						});
					</script>
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li><a href="index.php">Strona główna</a></li>
								<li><a href="profile/oferta.html">Oferta edukacyjna</a></li>
								<li><a href="szkola/rekrutacja.html">Rekrutacja</a></li>
								<li class="drop"><a class="dropa" href="">O szkole </a></li>
									<div class="dropdown">
										<ul class="listaroz1">
											<li class="listaroz"><a class="od" href="szkola/historia.html">Historia szkoły</a></li>
											<li class="listaroz"><a class="od" href="szkola/patron.html">Patron szkoły</a></li>
											<li class="listaroz"><a class="od" href="szkola/statut.html">Statut szkoły</a></li>
											<li class="listaroz"><a class="od" href="szkola/kadrap.php">Kadra pedagogiczna</a></li>
											<li class="listaroz"><a class="od" href="szkola/kadraa.php">Kadra administracyjna</a></li>
											<li class="listaroz"><a class="od" href="szkola/biblioteka.html">Biblioteka</a></li>
											<li class="listaroz"><a class="od" href="szkola/internat.html">Internat</a></li>
											<li class="listaroz"><a class="od" href="szkola/rodo.html">Klauzula informacyjna</a></li>
											<li class="listaroz"><a class="od" href="szkola/projektyunijne.html">Projekty unijne</a></li>
										</ul>
									</div>
								<li class="drop"><a class="dropa" href="">Informacje</a></li>
									<div class="dropdown dropdown2">
										<ul  class="listaroz1">
											<li class="listaroz"><a class="od" href="strefy/uczeń.html">Strefa ucznia</a></li>
											<li class="listaroz"><a class="od" href="strefy/rodzic.html">Strefa rodzica</a></li>
											<li class="listaroz"><a class="od" href="http://planlekcji.lukasiewicz.gorlice.pl/">Plan lekcji</a></li>
										</ul>
									</div>
								<li><a href="szkola/kontakt.html">Kontakt</a></li>
								<li><a href="https://cufs.vulcan.net.pl/powiatgorlicki/Account/LogOn?ReturnUrl=%2Fpowiatgorlicki%2FFS%2FLS%3Fwa%3Dwsignin1.0%26wtrealm%3Dhttps%253a%252f%252fuonetplus.vulcan.net.pl%252fpowiatgorlicki%252fLoginEndpoint.aspx%26wctx%3Dhttps%253a%252f%252fuonetplus.vulcan.net.pl%252fpowiatgorlicki%252fLoginEndpoint.aspx">Dziennik</a></li>
								<li><a href="szkola/ang.html">En</a></li>
							</ul>
						</nav>
					</div>
					<!-- 

						ZMIANA KOLORU

					<div class="change p-t-10 p-b-10 p-l-20 p-r-20">
						<label for="checkbox_change" class="toggler">
							<input type="checkbox" id="checkbox_change" onchange="change_color()">
							<span class="ball" id="ball"></span>
							<i class="ri-sun-line sun"></i>
							<i class="ri-moon-line moon"></i>
						</label>
					</div>
					-->
					<div class="social flex-w flex-l-m p-r-20">
						<button class="btn-show-sidebar"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu boczne -->

	<aside class="sidebar trans-0-4">
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13"><a href="index.php" class="txt21">Strona główna</a></li></li>
			<li class="t-center m-b-13"><a href="profile/oferta.html" class="txt21">Oferta edukacyjna</a></li>
			<li class="t-center m-b-13"><a href="szkola/rekrutacja.html" class="txt21">Rekrutacja</a></li>
			<li class="t-center m-b-13 drop"><a class="dropa1 txt21" href="">O szkole </a></li>
				<div class="dropdown" style="position: relative; top:0px">
					<ul class="listaroz1" style="display:block">
						<li class="listaroz" style="display: block !important;"><a class="od" href="szkola/historia.html">Historia szkoły</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="szkola/patron.html">Patron szkoły</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="szkola/statut.html">Statut szkoły</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="szkola/kadrap.php">Kadra pedagogiczna</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="szkola/kadraa.php">Kadra administracyjna</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="szkola/biblioteka.html">Biblioteka</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="szkola/internat.html">Internat</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="szkola/rodo.html">Klauzula informacyjna</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="szkola/projektyunijne.html">Projekty unijne</a></li>
					</ul>
				</div>
			<li class="t-center m-b-13 drop"><a class="dropa1 txt21" href="">Informacje</a></li>
				<div class="dropdown dropdown2" style="position: relative; top:0px">
					<ul  class="listaroz1">
						<li class="listaroz" style="display: block !important;"><a class="od" href="strefy/uczeń.html">Strefa ucznia</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="strefy/rodzic.html">Strefa rodzica</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="http://planlekcji.lukasiewicz.gorlice.pl/">Plan lekcji</a></li>
					</ul>
				</div>
			<li class="t-center m-b-13"><a href="szkola/kontakt.html" class="txt21">Kontakt</a></li>
			<li class="t-center m-b-33"><a href="szkola/ang.html" class="txt21">En</a></li>
			<li class="t-center m-b-33"><a href="https://cufs.vulcan.net.pl/powiatgorlicki/Account/LogOn?ReturnUrl=%2Fpowiatgorlicki%2FFS%2FLS%3Fwa%3Dwsignin1.0%26wtrealm%3Dhttps%253a%252f%252fuonetplus.vulcan.net.pl%252fpowiatgorlicki%252fLoginEndpoint.aspx%26wctx%3Dhttps%253a%252f%252fuonetplus.vulcan.net.pl%252fpowiatgorlicki%252fLoginEndpoint.aspx" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">Dziennik</a></li>
			<!--

				ZMIANA KOLORU

			<li class="t-center">
				<label for="checkbox_change" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto hov-pointer">
					<input type="checkbox" id="checkbox_change" onchange="change_color()">
					<span>Zmień kolor</span>
				</label>
			</li>
			-->
		</ul>
	</aside>
	
	<!-- Wejście -->
	
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/glowna1.webp);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-30 txt-shadow" data-appear="fadeInDown">Dołącz do nas</span>
						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37 txt-shadow" data-appear="fadeInUp">Górka</h2>
						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<a href="oferta.html" class="btn1 flex-c-m size18 txt3 trans-0-4">Dołącz</a>
						</div>
					</div>
				</div>
				<div class="item-slick1 item2-slick1" style="background-image: url(images/glowna1.webp);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-30 txt-shadow" data-appear="rollIn">Dołącz do nas</span>
						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37 txt-shadow" data-appear="lightSpeedIn">Górka</h2>
						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<a href="oferta.html" class="btn1 flex-c-m size1 txt3 trans-0-4">Dołącz</a>
						</div>
					</div>
				</div>
				<div class="item-slick1 item3-slick1" style="background-image: url(images/glowna1.webp);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-30 txt-shadow" data-appear="rotateInDownLeft">Dołącz do nas</span>
						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37 txt-shadow" data-appear="rotateInUpRight">Górka</h2>
						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<a href="oferta.html" class="btn1 flex-c-m size1 txt3 trans-0-4">Dołącz</a>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Główna -->

	<section>
		<div id="changethis" class="t-center p-t-50">		
			<h3 class="tit3 t-center m-b-35 m-t-2">Aktualności</h3>
		</div>
		<div class="content-intro  p-t-20 p-b-133">
			<form method="post" action="aktualności/aktualnosc.php">
				<div class="container oferta_container">
					<div class="row cards">
						
						<!-- Aktualności -->

						<?php
						include "laczeniezbaza.php";
						$pytanie="SELECT temat, DATE_FORMAT(data,'%d/%m/%Y'), autor, zdjecie, id FROM `aktualnosci` ORDER BY ID DESC LIMIT 3; ";
						$wynik=mysqli_query($id_pol,$pytanie);
						$ilosc=mysqli_num_rows($wynik);
						for ($i=0;$i<$ilosc;$i++) {
							$wynik1=mysqli_fetch_array($wynik);
							echo '
							<button class="m-l-20 m-r-20 m-b-30 aktualnoscwidth" type="submit" name="submit" value="'.$wynik1[4].'">
								<figure class="card">
									<img class="cardimg" src="images/aktualnosci/'.$wynik1[3].'" alt="">
									<figcaption class="txt36 t-center">'.$wynik1[0].'<hr class="m-t-5 m-b-5 w-100" style="background-color:#333"><div style="float:left">Data: '.$wynik1[1].'</div><div style="float:right">Autor: '.$wynik1[2].'</div></figcaption>
								</figure>
							</button>';
						}
						?>
					</div>
					<div class="flex-c">
						<div>
							<a class="przyciskszkola" style="--clr:#ea6645" href="aktualności/aktualnosci.php"><span>Więcej aktualności</span><i></i></a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>


	<section style="margin-top: -100px;">
		<hr style="width: 70%; margin: auto; text-align: center;"></hr>
		<div class="content-intro  p-t-20 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-3 p-t-30">

						<!-- Nauczyciele -->
						
						<div class="blo1">
							<div class="wrap-text-blo1 p-t-35">
								<h4 class="txt5 color0-hov trans-0-4 m-b-13">Nauczyciele</h4>
								<hr>
								<div id="wszyscy" style="width: 100%">
									<?php
									$pytanie="SELECT imie, nazwisko, stanowisko FROM `kadra-nauczyciele` ORDER BY RAND() LIMIT 2;";
									$wynik=mysqli_query($id_pol,$pytanie);
									$ilosc=mysqli_num_rows($wynik);
									for ($i=0;$i<$ilosc;$i++) {
										$wynik1=mysqli_fetch_array($wynik);
										echo '
										<div class="jeden">
											<div class="zdjecienau">
												<div class="image-wrapper"><img class="img-thumbnail" alt="profesor" data-pagespeed-url-hash="824905187" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" src="data:image/webp;base64,UklGRkoBAABXRUJQVlA4ID4BAADQCgCdASpQAFAAPmUqkEWkIqGcK1wAQAZEtIALaN/OsWN+XpXGijrAHWlMVMwYW0Xg4/YHkWrkKMfYjvo044zuIXPt3cXbkCFLkGf2R9XklunCkGOiz716c1kmmdJMAAD++3Yyr3z2C6peF6/AAHdJIAlW516nZNxGWHeysCm+eJllsHy39wMsPMSp4I94d4bTfedNUW3B2Iec2Cz0K4xztNdy6XHQXTAiXsOO3ssGxAG24BjJoWyvvZMsT6eL/Cmu36wdqi41LRRNPi36CsxLdTAPyNkurOCRWeKxhqZbdqbeDCWVjD7YogvBy+QSxNA5cTQgXPgasRcWRVJU2WneO93qxUt6hGF+6+Gh8G0Ikw9xCO1uFe/ZEupIUBabJSkWRGkmsZeIs1KNElACXcSSY/VRMBuMJOhzHBKaAAA=" width="80" height="80"></div>
											</div>
											<div class="asw">
												<p class="asw1 m-t-5 m-b-5">'.$wynik1[0].' '.$wynik1[1].'</p>
												<hr style="background-color: rgba(0,0,0,0.2)">
												<p class="asw1"><b>Stanowisko:</b> '.$wynik1[2].'</p>
											</div>
										</div>
										';
									}
									mysqli_close($id_pol)
									?>
								</div>
								<div class="m-l-r-auto t-center">
								<a class="przyciskszkola" style="--clr:#ea6645" href="szkola/kadrap.php"><span>Zobacz wszystkich</span><i></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 p-t-30">

						<!-- Ogłoszenia -->

						<div class="blo1">
							<div class="wrap-text-blo1 p-t-35">
								<h4 class="txt5 color0-hov trans-0-4 m-b-13">Ogłoszenia</h4>
								<hr>
								<span class="name-item-mainmenu txt12">
									TAK
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 p-t-30">

						<!-- Szczęśliwe numerki -->

						<div class="blo1">
							<div class="wrap-text-blo1 p-t-35">
								<h4 class="txt5 color0-hov trans-0-4 m-b-13">Szczęśliwe numerki</h4>
								<hr>
								<span class="name-item-mainmenu txt12">
									TAK
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 p-t-30">

						<!-- Szkoła - przyciski -->

						<div class="blo1">
							<div class="wrap-text-blo1 p-t-35 t-center">
								<h4 class="txt5 color0-hov trans-0-4 m-b-13 t-left">Szkoła</h4>
								<hr></hr>
								<div class="buttons">
									<a class="przyciskszkola" style="--clr:#ea6645" href="https://www.youtube.com/channel/UCY8TC2U7ylRDfwIyjfSMjEA"><span><span class="fa fa-camera fa-1x"></span>Górka.tv</span><i></i></a>
									<a class="przyciskszkola" style="--clr:#ea6645" href="szkola/rodo.html"><span><span class="fa fa-lock fa-1x"></span>Rodo</span><i></i></a>
									<a class="przyciskszkola" style="--clr:#ea6645" href="szkola/ligaochronyprzyrody.html"><span><span class="fa fa-heart fa-1x"></span>Liga Ochrony Przyrody</span><i></i></a>
									<a class="przyciskszkola" style="--clr:#ea6645" href="szkola/zagranicznepraktyki.html"><span><span class="fa fa-university fa-1x"></span>Praktyki zawodowe w Grecji</span><i></i></a>
									<a class="przyciskszkola" style="--clr:#ea6645" href="szkola/malopolskachedu.html"><span><span class="fa fa-university fa-1x"></span>Małopolska Chmura Edukacyjna</span><i></i></a>
									<a class="przyciskszkola" style="--clr:#ea6645" href="szkola/projektyunijne.html"><span><span class="fa fa-university fa-1x"></span>Projekty Unijne</span><i></i></a>
									<!-- <a class="przyciskszkola" style="--clr:#ea6645" href="https://sites.google.com/view/zs1-tgipc/strona-g%C5%82%C3%B3wna"><span><span class="fa fa-external-link fa-1x"></span>Technik Grafiki i Poligrafii Cyfrowej</span><i></i></a> -->
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<!-- Współpraca -->

	<section style="margin-top: -130px;">
		<div class="content-intro  p-t-20 p-b-133">
			<div class="container">
				<h4 class="txt5 color0-hov trans-0-4 m-b-13">Współpracujemy</h4>
				<hr></hr>
				<div class="row">
					<div class="col-md-3 p-t-30">
						<div class="blo1 t-center">
							<div class="wrap-text-blo1 p-t-35 t-center flex-c-m">
								<div class="white_block flex-c-m hov-img-zoom">
									<a href="https://www.wsb-nlu.edu.pl/"><img src="images/współpraca/wspolpraca1.webp" alt=""></a>
								</div>
							</div>
							<span class="txt12">Wyższa Szkoła Biznesu - National-Louis University</span>
						</div>
					</div>
					<div class="col-md-3 p-t-30">
						<div class="blo1 t-center">
							<div class="wrap-text-blo1 p-t-35 flex-c-m">
								<div class="white_block flex-c-m hov-img-zoom">
									<a href="https://www.pwsz-ns.edu.pl/"><img src="images/współpraca/wspolpraca2.webp" alt=""></a>
								</div>
							</div>
							<span class="txt12">Państwowa Wyższa Szkoła Zawodowa w Nowym Sączu</span>
						</div>
					</div>
					<div class="col-md-3 p-t-30">
						<div class="blo1 t-center">
							<div class="wrap-text-blo1 p-t-35 flex-c-m">
								<div class="white_block flex-c-m hov-img-zoom">
									<a href="https://www.agh.edu.pl/"><img src="images/współpraca/wspolpraca3.webp" alt=""></a>
								</div>
							</div>
							<span class="txt12">Akademia Górniczo-Hutnicza im. S. Staszica w Krakowie</span>
						</div>
					</div>
					<div class="col-md-3 p-t-30">
						<div class="blo1 t-center">
							<div class="wrap-text-blo1 p-t-35 flex-c-m">
								<div class="white_block flex-c-m hov-img-zoom">
									<a href="https://www.kwspz.pl/"><img src="images/współpraca/wspolpraca4.webp" alt=""></a>
								</div>
							</div>
							<span class="txt12">Krakowska Wyższa Szkoła Promocji Zdrowia</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Stopka -->

	<footer class="bg1">
		<div class="container p-t-20 p-b-10">
			<div class="row flex-r-m">
				<h4 class="c-white m-r-10">Nasze social media:</h4>
				<a class="social_icon" href="https://www.youtube.com/channel/UCY8TC2U7ylRDfwIyjfSMjEA"><i class="fa fa-youtube fa-3x icon"></i></a>
				<a class="social_icon" href="https://www.instagram.com/gorkagorlice/"><i id="icon2" class="fa fa-instagram fa-3x icon"></i></a>
				<a class="social_icon" href="https://web.facebook.com/zs1gorlice/"><i id="icon3" class="fa fa-facebook fa-3x icon"></i></a>
			</div>
		</div>

		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">Oferta edukacyjna</h3>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="profile/oferta.html#liceum" class="name-item-mainmenu txt21">-Liceum</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="profile/oferta.html#technikum" class="name-item-mainmenu txt21">-Technikum</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">Rekrutacja</h3>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="szkola/rekrutacja.html#dokumenty" class="name-item-mainmenu txt21">-Wymagane dokumenty</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="szkola/rekrutacja.html#termin" class="name-item-mainmenu txt21">-Terminarz rekrutacji</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="szkola/rekrutacja.html#regulamin" class="name-item-mainmenu txt21">-Regulamin rekrutacji</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">Informacje</h3>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="strefy/uczeń.html" class="name-item-mainmenu txt21">-Strefa ucznia</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="strefy/rodzic.html" class="name-item-mainmenu txt21">-Strefa rodzica</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">O szkole</h3>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<span class="name-item-mainmenu txt13">
									Jesteśmy szkołą z ponad 60-letnią tradycją. Dążymy do tego, by ciągle "być lepszym". Dbamy o wysoką jakość kształcenia oraz o to by nasi uczniowie czuli się bezpiecznie.
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; ZS1 Gorlice <script>document.write(new Date().getFullYear())</script> Wszelkie prawa zastrzeżone!  |  Strona wykonana przez: Maciej Gąsior
					</div>
					<div class="txt17 p-r-20 p-t-5 p-b-5">
						<a href="dostęp.html">| Deklaracja dostępności |</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Powrót do góry -->

	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->


</body>
</html>