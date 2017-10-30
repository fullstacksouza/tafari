<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>TAFARI | {{$page or " "}}</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		
	

		
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="dummy/" alt="Makonnen Tafari">
						<small class="site-description"></small>
					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item {{$home or ' '}}"><a href="/">Home</a></li>
							<li class="menu-item {{$about or ' '}}"><a href="{{url('sobre')}}">Sobre</a></li>
							<li class="menu-item {{$gallery or ' '}}"><a href="{{url('galeria')}}">Galeria</a></li>
							<li class="menu-item {{$downloads or ' '}}"><a href="{{url('downloads')}}">Discografia</a></li>
							<li class="menu-item {{$appbook or ' '}}"><a href="{{url('agenda')}}">Agenda</a></li>
							<li class="menu-item {{$contact or ' '}}"><a href="{{url('contato')}}">Contrate</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
				<div class="container">
						@if(Session::has('msg'))
        <div class="alert alert-danger">
            <p id="msg">{!!Session::get('msg')!!}</p>
            
        </div>
    @endif
				</div>
			@yield('content')
			
			<footer class="site-footer">
				<div class="container">
					<img src="dummy/" alt="TAFARI">
					
					<address>
						<p>Rua Padre Daniel Lisboa <br><a href="tel:354543543">19e Brotas - Salvador BA</a> <br> <a href="mailto:info@bandname.com">makonnentafari@gmail.com</a></p> 
					</address> 
				

					{{Form::open(['url'=>'inscricao','class' =>'newsletter-form'])}}
						{{Form::email('email',null,['placeholder' => 'Digite seu e-mail para receber nossos conteúdos...','required'])}}

					
						{{Form::submit('Inscrever-se',['class' =>'button cut-corner'])}}
					{{Form::close()}}
					<!-- .newsletter-form -->
					
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div> <!-- .social-links -->
					
					<p class="copy">Copyright 2017 WM - Developer. Todos os Direitos Reservados</p>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<script src="js/jquery.scrollify.js"></script>
		@yield('script')
		
	</body>

</html>


							

					

<style type="text/css">
	#msg {
		color: red;
	}
</style>