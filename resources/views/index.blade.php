<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Tafari</title>
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

	<body class="header-collapse">
		
		<div id="site-content">
			@include('site.header')
			
			<div class="hero">
				<div class="slider">
					<ul class="slides">
						<li class="lazy-bg" data-background="dummy/slide-1.jpg">
							<div class="container">
								<h2 class="slide-title">Makonnen Tafari OK?</h2>
								<h3 class="slide-subtitle">Seja bem vindo ao meu site</h3>
								<p class="slide-desc">Rapper Integrante do coletivo BTB.</p>

								<a href="#" class="button cut-corner">Saiba Mais</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="dummy/slide-2.jpg">
							<div class="container">
									<h2 class="slide-title">Tafari loko parte 2</h2>
									<h3 class="slide-subtitle">Mixtape lançada em 2017</h3>
									<p class="slide-desc">mixtape com 10 faixas.</p>

									<a href="#" class="button cut-corner">Saiba Mais</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="dummy/slide-3.jpg">
							<div class="container">
									<h2 class="slide-title">Contrate o Tafi</h2>
									<h3 class="slide-subtitle">Leve o meu show para sua cidade</h3>
									<p class="slide-desc">Acompanhe a minha agenda mensal.</p>

									<a href="#" class="button cut-corner">Saiba Mais</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<main class="main-content">
				<div class="fullwidth-block testimonial-section">
					<div class="container">
						<div class="quote-slider">
							<ul class="slides">
								<li>
									<blockquote>
										<p>"Novas canções pra novas visões e novas maldades do mundo
                                            Novas tensões renova o tesão e toda maldade do mundo
                                            Novas tendências renovo padrões eu que assumo"</p>
										<cite>Makonnen Tafari</cite>
										<span>Eu que assumo</span>
									</blockquote>
								</li>
								<li>
									<blockquote>
										<p>"Gaste uma bala por mim, gaste uma bala em mim
                                            Ache uma falha em mim, isso tudo num é eu
                                            Se vejo minha mãe sorrir"</p>
										<cite>Makonnen Tafari</cite>
										<span>Vida Real</span>
									</blockquote>
								</li>
							</ul>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
					<div class="container">
						<header class="section-header">
							<h2 class="section-title">Próximos Eventos</h2>

							<div class="event-nav">
								<a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
	    						<a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
							</div> <!-- .event-nav -->

						</header> <!-- .section-header -->
						<div class="event-carousel">
							
							<div class="event">
								<div class="entry-date">
									<div class="date">23</div>
									<span class="month">Jun</span>
								</div>
								<h2 class="entry-title"><a href="#">Rap Salvador Music</a></h2>
								<p>Data: 28/10/17. Atrações: Filipe Ret + Modestiaparte e muito mais Hora: 21hs Local: Salvador Music Place (Patamares) </p>
							</div> <!-- .event -->
							
							
							<div class="event">
								<div class="entry-date">
									<div class="date">19</div>
									<span class="month">Out</span>
								</div>
								<h2 class="entry-title"><a href="#">Salvador Rap Festival 3ª edição </a></h2>
								<p>Salvador Rap Festival 3ª edição dia 25 de Novembro ás 21h com apresentação inédita da Primeiramente no Salvador Music em Patamares. </p>
							</div> <!-- .event -->
							
							
							<div class="event">
								<div class="entry-date">
									<div class="date">12</div>
									<span class="month">Set</span>
								</div>
								<h2 class="entry-title"><a href="#">Rap Ragga 33</a></h2>
								<p>Visando dar notoriedade e espaço para as famosas batalhas de MC´s, a Laboratório Rap promove pela primeira vez no Barra 33, a Batalha mais quente da cidade: a Du Haxi Batalha de MC’s.</p>
							</div> <!-- .event -->
							
							
							<div class="event">
								<div class="entry-date">
									<div class="date">5</div>
									<span class="month">Nov</span>
								</div>
								<h2 class="entry-title"><a href="#">Quintas Dancehall</a></h2>
								<p>Promovido há 10 anos pelo Ministereo Público, o baile já passou por Cachoeira e São Paulo e recebeu convidados como BNegão, Lazzo Matumbi, Rico Dalasam. Russo Passapusso, dentre outros. </p>
							</div> <!-- .event -->
							
							
							<div class="event">
								<div class="entry-date">
									<div class="date">9</div>
									<span class="month">Dez</span>
								</div>
								<h2 class="entry-title"><a href="#">Baile da Space </a></h2>
								<p>Baile da Space no Vegas Music – Salvador (BA) com as atrações Mc MK2, Mc Dumel, Dj Peu Chamusca, Mc Naise, Plano B Rap, Dj Horuz dia 08 de Abril ás 14h. </p>
							</div> <!-- .event -->
							
						</div> <!-- .event-carousel -->
					</div> <!-- .container -->
				</div> <!-- .upcoming-event-section -->

				<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
					<div class="container">
						<header class="section-header">
							<h2 class="section-title">Videos em Destaque</h2>

							<div class="event-nav">
								<a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
	    						<a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
							</div> <!-- .event-nav -->

						</header> <!-- .section-header -->
						<div class="event-carousel">
							
							<div class="featured-content">
                            <div id="featured_videos">

                         <div class="latest_item">
                         <iframe width="420" height="290" src="https://www.youtube.com/watch?v=U0N96y_qYu8" frameborder="0" allowfullscreen></iframe>
                    </div> 
							
							
	
						</div> <!-- .event-carousel -->
					</div> <!-- .container -->
				</div> <!-- .upcoming-event-section -->

			<footer class="site-footer">
				<div class="container">
					<img src="dummy/" alt="TAFARI">
					
					<address>
						<p>Rua Padre Daniel Lisboa <br><a href="tel:354543543">19e Brotas - Salvador BA</a> <br> <a href="mailto:info@bandname.com">makonnentafari@gmail.com</a></p> 
					</address> 
					
					<form action="#" class="newsletter-form">
						<input type="email" placeholder="Digite seu e-mail para receber nossos conteúdos...">
						<input type="submit" class="button cut-corner" value="Inscrever-se">
					</form> <!-- .newsletter-form -->
					
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
		
	</body>

</html>