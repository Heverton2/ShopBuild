<?php
require_once 'model/usuarios.php';
$u = new Usuario;
?>
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
					<h1>Cadastro</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Página inícial<span class="lnr lnr-arrow-right"></span></a>
						<a href="Cadastro.php">Cadastro<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Cadastro Usuário</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Cadastro Box Area =================-->
	<div class="login_box_area section_gap">
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-lg-6">
					<div class="login_form_inner p-5">
						<form class="row contact_form" method="POST">
							<div class="col-12 col-md-12 form-group mb-0">
								<h5>Idententificação</h5>
							</div>
							<div class="col-12 col-md-12 form-group input-group-icon">
								<div class="icon ml-2"><i class="fa fa-user" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="Nome Completo" id="nome"
									name="nome">
							</div>
							<div class="col-12 col-md-6 form-group input-group-icon">
								<div class="icon ml-2"><i class="fa fa-id-card" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="CPF" id="cpf" name="cpf"
									maxlength="14">
							</div>
							<div class="col-12 col-md-6 form-group input-group-icon">
								<div class="icon ml-2"><i class="fa fa-id-card" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="RG" id="rg" name="rg">
							</div>
							<div class="col-12 col-md-6 form-group input-group-icon">
								<div class="icon ml-2"><i class="fa fa-calendar" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="Data de nascimento"
									id="datanasc" name="datanasc" onfocus="(this.type='date')"
									onfocusout="if(this.value == ''){(this.type='text')}">
							</div>
							<div class="col-12 col-md-6 form-group input-group-icon">
								<div class="icon ml-2"><i class="fa fa-envelope" aria-hidden="true"></i></div>
								<input type="email" class="form-control pl-5" placeholder="Email" id="email"
									name="email">
							</div>
							<div class="col-12 col-md-6 form-group input-group-icon">
								<div class="icon ml-2"><i class="fa fa-key" aria-hidden="true"></i></div>

								<input type="password" class="form-control pl-5" placeholder="Senha" id="senha"
									name="senha">
							</div>
							<div class="col-12 col-md-6 form-group input-group-icon">
								<div class="icon ml-2"><i class="fa fa-key" aria-hidden="true"></i></div>

								<input type="password" class="form-control pl-5" placeholder="Confirmar senha"
									id="confsenha" name="confsenha">
							</div>

							<div class="col-12 col-md-12 form-group mb-0">
								<h5>Endereço</h5>
							</div>
							<div class="col-12 col-md-12 form-group input-group-icon">
								<div class="icon ml-2"><i class="fa fa-home" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="Nome Endereço" id="nomeend"
									name="nomeend">
							</div>

							<div class="col-12 col-md-6 form-group input-group-icon">
								<div class="icon ml-2"><i class="fa fa-flag" aria-hidden="true"></i></div>
								<select id="uf" class="form-control pl-5">
									<option value="" disabled selected>Estado</option>
								</select>
							</div>
							<div class="col-12 col-md-6 form-group input-group-icon">
								<div class="icon ml-2"><i class="fas fa-city" aria-hidden="true"></i></div>
								<select id="cidade" class="form-control pl-5">
									<option id="" value="" disabled selected>Cidade</option>
								</select>
							</div>
							<div class="col-12 col-md-8 form-group input-group-icon">
								<div class="icon ml-2"><i class="fas fa-road" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="Rua" id="rua" name="rua">
							</div>
							<div class="col-12 col-md-4 form-group input-group-icon">
								<div class="icon ml-2"><i class="fas fa-sign" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="Nº" id="numero" name="numero">
							</div>
							<div class="col-12 col-md-12 form-group input-group-icon">
								<div class="icon ml-2"><i class="fas fa-list" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="Complemento" id="complemento"
									name="complemento">
							</div>
							<div class="col-12 col-md-4 form-group input-group-icon">
								<div class="icon ml-2"><i class="fas fa-mail-bulk" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="CEP" id="cep" name="cep"
									maxlength="9">
							</div>
							<div class="col-12 col-md-8 form-group input-group-icon">
								<div class="icon ml-2"><i class="fas fa-clipboard-list" aria-hidden="true"></i></div>
								<input type="text" class="form-control pl-5" placeholder="Referência" id="referencia"
									name="referencia">
							</div>
							<div class="col-12 col-md-12 form-group ">
								<button type="submit" class="primary-btn">Cadastrar</button>

							</div>
						</form>
						
					</div>
				</div>

				<!-- <div class="col-lg-1">
				
					
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Cadastre-se</h3>
					
						<form class="row login_form" action="cadastro.php" method="REQUEST" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="nome"id="name"  placeholder="Digite o nome de usuário" onfocus="this.placeholder = ''" onblur="this.placeholder = 'usuario'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="senha"id="name"  placeholder="Digite a Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'senha'">
                            </div>
                            <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="name"  placeholder="Digite o e-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                </div>
                                <div class="col-md-12 form-group">
                                        <input type="number" class="form-control"name="cpf" id="name"  placeholder="Digite o CPF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'cpf'">
									</div>
									<div class="col-md-12 form-group">
										<input type="date" class="form-control" name="datnasc" id="date"  placeholder="Digite a data de nascimento" onfocus="this.placeholder = ''" onblur="this.placeholder = 'data de nascimento'">
										</div>
									<div class="col-md-12 form-group">
                                        <input type="number" class="form-control" name="rg" id="name"  placeholder="Digite o RG" onfocus="this.placeholder = ''" onblur="this.placeholder = 'rg'">
									</div>
									<div class="col-md-12 form-group">
										<input type="text" class="form-control" name="telefone" id="name"  placeholder="Digite o seu número de telefone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'telefone'">
										</div>
									<div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="endereco" id="name"  placeholder=" Endereço " onfocus="this.placeholder = ''" onblur="this.placeholder = 'endereço'">
									</div>
								
							<div class="col-md-12 form-group">
								
							</div>
							<div class="col-md-12 form-group">
								<button  class="primary-btn">Cadastrar</button>
								
							</div>
						</form>
					</div>
				</div> -->
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