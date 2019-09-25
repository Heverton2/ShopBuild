<!DOCTYPE html>
<html lang="pt-br">

<head>
	<script src="https://kit.fontawesome.com/fb6d49f271.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="assets/img/fav.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Shop Build</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/linearicons.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/nouislider.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
					<button class="navbar-toggler border-0" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav row ml-auto">
							</li>
							<li class="nav-item  my-auto col-10 col-md-4 ">

								<form class="row contact_form">
									<div class="col-10 form-group mb-0 px-0">
										<input type="text" class="form-control" id="search_input"
											placeholder="Pesquise aqui">
									</div>
									<div class="col-2 form-group pl-1 mb-0 my-auto">
										<button type="submit" class="search bg-transparent border-0"><span
												class="lnr lnr-magnifier" id="search"></span></button>
									</div>
								</form>

							</li>
							<li class="nav-item mr-3 col-10 col-md-1"><a class="nav-link" href="index.php">Início</a>
							</li>
							<li class="nav-item col-10 col-md-1"><a class="nav-link" href="category.php">Produtos</a>
							</li>


							<li class="nav-item submenu dropdown mr-0 col-10 col-md-1">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false"><span class="ti-user"></span></a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Minha conta</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Pedidos</a></li>
								</ul>
							</li>
							<li class="nav-item my-auto col-10 col-md-1"><a href="cart.php"><span
										class="ti-bag text-dark "></span></a>


						</ul>

					</div>
				</div>
			</nav>
		</div>

	</header>
	<!-- End Header Area -->


	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<div class="login_box_area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
					<div class="login_box_img p-0 col-12">
						<img class="img-fluid" src="assets/img/login.jpg" alt="">
						<div class="hover">
							<h4>Não se cadastrou ainda??</h4>
							<p>preencha os seus dados e se cadastre agora!</p>
							<a class="primary-btn" href="cadastro.php">Criar conta</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
					<div class="login_form_inner">
						<h3>Faça o Login</h3>
						<form class="row login_form" action="pagina_login.php" method="REQUEST" id="contactForm"
							novalidate="novalidate">
							<div class="col-12 form-group">
								<input type="text" class="form-control" id="usuario" name="usuario"
									placeholder="Nome de Usuário" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-12 form-group">
								<input type="text" class="form-control" id="senha" name="senha" placeholder="Senha"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Lembre-me</label>
								</div>
							</div>
							<div class="col-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Logar</button><br>

								<!--<li class="nav-item"><a class="primary-btn" href="cadastro.php">Cadastrar</a></li> -->

								<a href="#">Esqueceu a sua senha?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6  col-md-12 col-sm-12 ">
					<div class="single-footer-widget">
						<h6>Sobre nós</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>

				<div class="col-lg-2 col-md-12 col-sm-12">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0">
					Copyright &copy;2019 All rights reserved
				</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->


	<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="assets/js/vendor/bootstrap.min.js"></script>
	<script src="assets/js/jquery.ajaxchimp.min.js"></script>
	<!-- 	<script src="js/jquery.nice-select.min.js"></script>
 -->
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/nouislider.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="assets/js/gmaps.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>