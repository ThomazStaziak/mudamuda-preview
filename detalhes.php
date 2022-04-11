<?php
    if ($_POST) {
        var_dump($_POST);

        try {
            require "conexao.php";
            
            $consulta = $conexao->prepare("INSERT INTO pedidos (created_at, pedido) VALUES (:created_at, :pedido)");
            $inseriu = $consulta->execute([
                ':created_at' => date('Y-m-d'),
                ':pedido' => print_r($_POST, true)
            ]);
    
            $conexao = null;
    
            if ($inseriu) {
                header("Location: panel.php");
            } 
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    } else {
        var_dump($GLOBALS);
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
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

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
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html"><img src="./images/logo-black.png" width="100" alt="logo"></a></div>
				</div>
				<div class="col-xs-8 text-right text-black menu-1">
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
			<h1 class="text-center">Quer receber um orçamento? <br /> Preencha o formulário abaixo</h1>
	
			<form method="post" action="detalhes.php">
				<div class="row">
					<div class="col-xs-4 bg-info">
						<h4>Quero me mudar de:</h4>
						<div class="row">
							<div class="col-xs-6">
								<input name="fromState" type="text" class="form-control" placeholder="First name">
							</div>
							<div class="col-xs-6">
								<div style="display: flex; align-items: center; justify-content: flex-start;">
									<input name="fromBuilding" type="radio" class="form-control" placeholder="Last name">
									<label for="">Casa</label>
									<input type="radio" class="form-control" placeholder="Last name">
									<label name="fromBuilding" for="">Apartamento</label>
								</div>
								<div style="display: flex; align-items: center; justify-content: flex-start;">
									<input name="fromFloor" type="text" class="form-control" placeholder="Last name">
									<label for="">Andar</label>
									<input name="fromElevator" type="checkbox" class="form-control" placeholder="Last name">
									<label>Com elevador</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-4">
						<h4>Destino</h4>
						<div class="row">
							<div class="col-xs-6">
								<input name="toState" type="text" class="form-control" placeholder="First name">
							</div>
							<div class="col-xs-6">
								<input name="toCity" type="text" class="form-control" placeholder="Last name">
							</div>
							<div class="col-xs-6">
								<div style="display: flex; align-items: center; justify-content: flex-start;">
									<input name="toBuilding" type="radio" class="form-control" placeholder="Last name">
									<label for="">Casa</label>
									<input name="toBuilding" type="radio" class="form-control" placeholder="Last name">
									<label for="">Apartamento</label>
								</div>
								<div style="display: flex; align-items: center; justify-content: flex-start;">
									<input to="toFloor" type="text" class="form-control" placeholder="Last name">
									<label for="">Andar</label>
									<input to="toElevator" type="checkbox" class="form-control" placeholder="Last name">
									<label>Com elevador</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-4">
						<h4>Data da mudança</h4>
						<div class="row">
							<div class="col-xs-12">
								<input name="changeDate" type="date" class="form-control" placeholder="First name">
							</div>
							<div class="col-xs-6">
								<h4>Data flexível?</h4>
								<div style="display: flex; align-items: center; justify-content: flex-start;">
									<input name="flexDate" type="radio" class="form-control" placeholder="Last name">
									<label for="">Sim</label>
									<input name="flexDate" type="radio" class="form-control" placeholder="Last name">
									<label for="">Não</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 mt-3">
						<h4>Dados de contato</h4>
						<div class="row">
							<div class="col-xs-4">
								<label for="">Nome completo</label>
								<input name="completeName" type="text" class="form-control" placeholder="First name">
							</div>
							<div class="col-xs-4">
								<label for="">E-mail</label>
								<input name="email" type="email" class="form-control" placeholder="First name">
							</div>
							<div class="col-xs-4">
								<label for="">Telefone</label>
								<input name="phone" type="phone" class="form-control" placeholder="First name">
							</div>
							<div class="col-xs-4">
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
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
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