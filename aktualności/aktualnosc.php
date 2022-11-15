<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<title>ZS1 :: Aktualność</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Zespół Szkół Nr 1 im. Ignacego Łukasiewicza w Gorlicach">
	<meta name="keywords" content="szkoła, gorlice, łukasiewicz, rekrutacja, małopolska">

	<link rel="icon" type="image/png" href="../images/icons/logo.svg"/>

	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="../vendor/lightbox2/css/lightbox.min.css">

	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body class="animsition">

	<!-- Nagłówek -->

	<header>
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<div style="align-items: center; display: flex;">
						<div class="float-l m-r-10">
							<img class="m-b-5" src="../images/icons/godlo.webp" alt="Godło Rzeczpospolitej Polskiej" data-logofixed="../images/icons/godlo.webp"><br>
							<a href="https://bip.malopolska.pl/zs1gorlice"><img src="../images/icons/bip.webp" alt="Biuletyn Informacji Publicznej" data-logofixed="../images/icons/bip.webp"></a>
						</div>
						<div class="logo float-l p-b-5">
							<a href="../index.php"><img src="../images/icons/logo.svg" alt="Zespół Szkół Nr 1 im. Ignacego Łukasiewicza w Gorlicach" data-logofixed="../images/icons/logo.svg"></a>
						</div>
					</div>
					
					<!-- Menu główne -->

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
					<script src="../js/change-color.js"></script>
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
								<li><a href="../index.php">Strona główna</a></li>
								<li><a href="../profile/oferta.html">Oferta edukacyjna</a></li>
								<li><a href="../szkola/rekrutacja.html">Rekrutacja</a></li>
								<li class="drop"><a class="dropa" href="">O szkole </a></li>
									<div class="dropdown">
										<ul class="listaroz1">
											<li class="listaroz"><a class="od" href="../szkola/historia.html">Historia szkoły</a></li>
											<li class="listaroz"><a class="od" href="../szkola/patron.html">Patron szkoły</a></li>
											<li class="listaroz"><a class="od" href="../szkola/statut.html">Statut szkoły</a></li>
											<li class="listaroz"><a class="od" href="../szkola/kadrap.php">Kadra pedagogiczna</a></li>
											<li class="listaroz"><a class="od" href="../szkola/kadraa.php">Kadra administracyjna</a></li>
											<li class="listaroz"><a class="od" href="../szkola/biblioteka.html">Biblioteka</a></li>
											<li class="listaroz"><a class="od" href="../szkola/internat.html">Internat</a></li>
											<li class="listaroz"><a class="od" href="../szkola/rodo.html">Klauzula informacyjna</a></li>
											<li class="listaroz"><a class="od" href="../szkola/projektyunijne.html">Projekty unijne</a></li>
										</ul>
									</div>
								<li class="drop"><a class="dropa" href="">Informacje</a></li>
									<div class="dropdown dropdown2">
										<ul  class="listaroz1">
											<li class="listaroz"><a class="od" href="../strefy/uczeń.html">Strefa ucznia</a></li>
											<li class="listaroz"><a class="od" href="../strefy/rodzic.html">Strefa rodzica</a></li>
											<li class="listaroz"><a class="od" href="http://planlekcji.lukasiewicz.gorlice.pl/">Plan lekcji</a></li>
										</ul>
									</div>
								<li><a href="../szkola/kontakt.html">Kontakt</a></li>
								<li><a href="https://cufs.vulcan.net.pl/powiatgorlicki/Account/LogOn?ReturnUrl=%2Fpowiatgorlicki%2FFS%2FLS%3Fwa%3Dwsignin1.0%26wtrealm%3Dhttps%253a%252f%252fuonetplus.vulcan.net.pl%252fpowiatgorlicki%252fLoginEndpoint.aspx%26wctx%3Dhttps%253a%252f%252fuonetplus.vulcan.net.pl%252fpowiatgorlicki%252fLoginEndpoint.aspx">Dziennik</a></li>
								<li><a href="../szkola/ang.html">En</a></li>
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
			<li class="t-center m-b-13"><a href="../index.php" class="txt21">Strona główna</a></li></li>
			<li class="t-center m-b-13"><a href="../profile/oferta.html" class="txt21">Oferta edukacyjna</a></li>
			<li class="t-center m-b-13"><a href="../szkola/rekrutacja.html" class="txt21">Rekrutacja</a></li>
			<li class="t-center m-b-13 drop"><a class="dropa1 txt21" href="">O szkole </a></li>
				<div class="dropdown" style="position: relative; top:0px">
					<ul class="listaroz1" style="display:block">
						<li class="listaroz" style="display: block !important;"><a class="od" href="../szkola/historia.html">Historia szkoły</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="../szkola/patron.html">Patron szkoły</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="../szkola/statut.html">Statut szkoły</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="../szkola/kadrap.php">Kadra pedagogiczna</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="../szkola/kadraa.php">Kadra administracyjna</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="../szkola/biblioteka.html">Biblioteka</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="../szkola/internat.html">Internat</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="../szkola/rodo.html">Klauzula informacyjna</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="../szkola/projektyunijne.html">Projekty unijne</a></li>
					</ul>
				</div>
			<li class="t-center m-b-13 drop"><a class="dropa1 txt21" href="">Informacje</a></li>
				<div class="dropdown dropdown2" style="position: relative; top:0px">
					<ul  class="listaroz1">
						<li class="listaroz" style="display: block !important;"><a class="od" href="../strefy/uczeń.html">Strefa ucznia</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="../strefy/rodzic.html">Strefa rodzica</a></li>
						<li class="listaroz" style="display: block !important;"><a class="od" href="http://planlekcji.lukasiewicz.gorlice.pl/">Plan lekcji</a></li>
					</ul>
				</div>
			<li class="t-center m-b-13"><a href="../szkola/kontakt.html" class="txt21">Kontakt</a></li>
			<li class="t-center m-b-33"><a href="../szkola/ang.html" class="txt21">En</a></li>
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
	
	<!-- Główna -->
	<?php
		include("../laczeniezbaza.php");
		if(isset($_POST["submit"])){
			$_SESSION["idaktualnosc"]=$_POST["submit"];
			$id=$_POST["submit"];
			$zapytanie = 'SELECT temat FROM aktualnosci WHERE id = '.$id.';';
			$wynik=mysqli_query($id_pol,$zapytanie);
			if($wynik) {
				$wynik1=mysqli_fetch_row($wynik);
				$_SESSION["tytul"]=$wynik1[0];
			}
		}
	?>
    <section>
        <div style="width: auto; height: 120px; background-color: #012951;"></div>
    </section>
	<script>
        $(this).ready(function(){
			$('.next').on('click', function(){
				var currentImg = $('.active');
				var nextImg = currentImg.next();

				if(nextImg.length){
					currentImg.removeClass('active').css('z-index', -10);
					nextImg.addClass('active').css('z-index', 10);
				}
			});

			$('.prev').on('click', function(){
				var currentImg = $('.active');
				var prevImg = currentImg.prev();

				if(prevImg.length){
					currentImg.removeClass('active').css('z-index', -10);
					prevImg.addClass('active').css('z-index', 10);
				}
			});
        });
    </script>
	<section>
		<?php
		include("../laczeniezbaza.php");
			$zapytanie = 'SELECT temat, data, autor, tekst, dod1, dod2, dod3, dod4, dod5, dod6, dod7, dod8, dod9, dod10 FROM aktualnosci WHERE temat = "'.$_SESSION["tytul"].'";';
			$wynik=mysqli_query($id_pol,$zapytanie);
			if($wynik) {
				$wynik1=mysqli_fetch_row($wynik);
				echo '
				<div class="t-center p-t-50">		
					<h3 class="tit3 t-center m-b-35 m-t-2">'.$wynik1[0].'</h3>
				</div>
				<hr style="width: 90%; background-color: rgba(0, 0, 0, 0.3); margin: auto;"></hr>
				<div class="content-intro bg-white p-t-20 p-b-133">
					<div class="m-l-r-auto" style="width:80%">
						<span id="autor" style="float:left;"><b>Data:</b> '.$wynik1[1].'</span>
						<span id="data" style="float:right;"><b>Autor:</b> '.$wynik1[2].'</span>
					</div>
					<hr style="width: 90%; background-color: rgba(0, 0, 0, 0.3); margin: auto; clear:both;"></hr>
					<div id="tekstaktualnosci">'.$wynik1[3].'</div>
					<div class="container">
						<div class="row">';
							if ($wynik1[4] != "") {
								echo '<div class="container1"><div class="itemimg"><img src="../images/aktualnosci/'.$wynik1[4].'"></div>';
									for ($i=5; $i<14; $i++) {
										if ($wynik1[$i]) {
											echo '<div class="itemimg"><img src="../images/aktualnosci/'.$wynik1[$i].'"></div>';
										}
									};
								echo '</div>';
							}
						echo '
						</div>
					</div>
					<div class="col-md-3 p-t-30"></div>
				</div>';
			}
			mysqli_close($id_pol);
		?>
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
								<a href="../profile/oferta.html#liceum" class="name-item-mainmenu txt21">-Liceum</a>
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
								<a href="../szkola/rekrutacja.html#dokumenty" class="name-item-mainmenu txt21">-Wymagane dokumenty</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="../szkola/rekrutacja.html#termin" class="name-item-mainmenu txt21">-Terminarz rekrutacji</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="../szkola/rekrutacja.html#regulamin" class="name-item-mainmenu txt21">-Regulamin rekrutacji</a>
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
								<a href="../strefy/uczeń.html" class="name-item-mainmenu txt21">-Strefa ucznia</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
							</div>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="../strefy/rodzic.html" class="name-item-mainmenu txt21">-Strefa rodzica</a>
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
						<a href="../szkola/dostęp.html">| Deklaracja dostępności |</a>
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
	<script type="text/javascript" src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="../js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>