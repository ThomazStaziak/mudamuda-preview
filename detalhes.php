<?php
    if ($_POST) {
        var_dump($_POST);

        try {
            require "conexao.php";
            
            $consulta = $conexao->prepare("INSERT INTO pedidos (pedido) VALUES (:pedido)");
            $inseriu = $consulta->execute([
                ':pedido' => print_r($_POST, true)
            ]);

			$lastId = $conexao->lastInsertId();
    
            $conexao = null;
    
            if ($inseriu) {
                header("Location: lista.php/".$lastId);
            } 
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/detalhes.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-12">
					<div id="gtco-logo"><a href="index.html"><img src="./images/logo-preview.png" width="100" alt="logo"></a></div>
				</div>
				<div class="col-8 text-right text-black menu-1">
					<ul class="text-black">
						<li><a style="color: #999" href="#">Quem somos</a></li>
						<li><a style="color: #999" href="#">Menu</a></li>
						<li><a style="color: #999" href="#">Menu</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>

	<main style="padding-top: 8%;">
		<div class="container">
			<h1 class="h2 mb-4">Quer receber um orçamento? <br /> Preencha o formulário abaixo</h1>
	
			<form method="post" action="detalhes.php" class="border-orange bg-light form-box">
				<div class="row">
					<div class="col-4">
						<h5>Quero me mudar de:</h5>
						<div class="row">
							<div class="col-12 mb-3">
								<input name="fromState" type="text" class="form-control" placeholder="Estado">
							</div>
							<div class="col-12">
								<div>
									<input id="house" name="fromBuilding" type="radio" >
									<label for="house" >Casa</label>
									<input id="apt" type="radio" name="fromBuilding">
									<label for="apt">Apartamento</label>
								</div>
								<div>
									<label>Andar</label>
									<input name="fromFloor" type="text" class="form-control col-2">
									<input id="elevator" name="fromElevator" type="checkbox">
									<label for="elevator">Com elevador</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<h5>Destino:</h5>
						<div class="row">
							<div class="col-6">
								<input name="toState" type="text" class="form-control" placeholder="Estado">
							</div>
							<div class="col-6">
								<input name="toCity" type="text" class="form-control" placeholder="Cidade">
							</div>
							<div class="col-12">
								<div>
									<input id="tohouse" name="toBuilding" type="radio" >
									<label for="tohouse" >Casa</label>
									<input id="toapt" type="radio" name="toBuilding">
									<label for="toapt">Apartamento</label>
								</div>
								<div>
									<label>Andar</label>
									<input name="toFloor" type="text" class="form-control col-2">
									<input id="toelevator" name="toElevator" type="checkbox">
									<label for="toelevator">Com elevador</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<h5>Data da mudança:</h5>
						<div class="row">
							<div class="col-12 mb-3">
								<input name="changeDate" type="date" class="form-control" placeholder="First name">
							</div>
							<div class="col-6">
								<h5>Data flexível?</h5>
								<div>
									<input id="yes" name="flexDate" type="radio">
									<label for="yes">Sim</label>
									<input id="no" name="flexDate" type="radio">
									<label for="no">Não</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 mt-3">
						<h5>Dados de contato</h5>
						<div class="row">
							<div class="col-4">
								<label for="">Nome completo</label>
								<input name="completeName" type="text" class="form-control">
							</div>
							<div class="col-4">
								<label for="">E-mail</label>
								<input name="email" type="email" class="form-control">
							</div>
							<div class="col-4">
								<label for="">Telefone</label>
								<input name="phone" type="phone" class="form-control">
							</div>
							<div class="col-4 mt-3">
								<button type="submit" class="btn btn-primary">Enviar</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</main>

    <footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>A Abreu Mudanças é uma empresa familiar que nasceu com o objetivo de suprir às necessidades do mercado, oferecendo serviços de transporte e mudanças com qualidade e comprometimento. Desde 2018 já foram mais de 300 clientes atendidos e sem nenhuma ocorrência de avaria ou qualquer transtorno.</p>
					</div>
				</div>

				<!-- <div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Destination</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Europe</a></li>
							<li><a href="#">Australia</a></li>
							<li><a href="#">Asia</a></li>
							<li><a href="#">Canada</a></li>
							<li><a href="#">Dubai</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hotels</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Luxe Hotel</a></li>
							<li><a href="#">Italy 5 Star hotel</a></li>
							<li><a href="#">Dubai Hotel</a></li>
							<li><a href="#">Deluxe Hotel</a></li>
							<li><a href="#">BoraBora Hotel</a></li>
						</ul>
					</div>
				</div> -->

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Contato</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> (11) 96555-4321</a></li>
							<!-- <li><a href="#"><i class="icon-mail2"></i> info@logo.co</a></li> -->
							<!-- <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li> -->
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; Todos os direitos reservados.</small> 
					</p>
					<!-- <p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p> -->
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
