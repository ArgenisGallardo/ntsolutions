<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Network Solutions</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css">
	<link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mdb.min.css" rel="stylesheet">
	<link href="css/style.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
	<link rel="stylesheet" href="css/leaflet.css" />
	<link rel="icon" href ="Network.ico" type="image/x-icon">
	<style>
		#parallax {
			/* The image used */
			/* Set a specific height */
			width: 100%;
			height: 100%;
			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		div.contenedor-video {
			max-width: 100%;
			overflow-x: hidden; 
		}
		#parabax {
			margin-top: 30px;
		}
		#parabax-2 {
			margin-top: 20px;
		}
	</style>
</head>

<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
		<div class="container">
				<a class="navbar-brand" href="#">
					<img style="height:50px;width:auto;" src="img/logo-barra2.png" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active"><a class="nav-link" href="/index">Home<span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="/servicios">Servicios</a></li>
					<li class="nav-item"><a class="nav-link" href="/nosotros">Nosotros</a></li>
					<li class="nav-item"><a class="nav-link" href="/planes">Planes</a></li>
					<li class="nav-item"><a class="nav-link" href="/portafolio">Portafolio</a></li>
					<li class="nav-item"><a class="nav-link" href="/tienda">Tienda</a></li>
					<li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
				</ul>

				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item">
						<a href="https://www.facebook.com/NetworkSolutionsVnzla" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="nav-item">
						<a href="https://www.instagram.com/network_sol/" class="nav-link" target="_blank"><i class="fab fa-instagram"></i></a>
					</li>
					<li class="nav-item">
						<a href="https://api.whatsapp.com/message/CVT5INZRFLQRL1?autoload=1&app_absent=0" class="nav-link" target="_blank"><i class="fab fa-whatsapp"></i></a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link border border-light rounded" target="_blank">Contactanos</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('components')


<footer class="page-footer text-center font-small wow fadeIn">
    <hr class="mt-0">
    <div class="pb-4">
        <a href="https://www.facebook.com/NetworkSolutionsVnzla" target="_blank"><i class="me-2 fab fa-facebook-f"></i></a>
		<a href="https://www.instagram.com/network_sol/" target="_blank"><i class="me-2 fab fa-instagram"></i></a>
		<a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
    <div class="footer-copyright py-3">© 2022 Copyright</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
<script src="js/leaflet.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>
</body>

</html>
