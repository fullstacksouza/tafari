@extends('site.layouts.main')
@section('content')			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title">Entre em Contato</h2>
						<div class="row">
							<div class="col-md-6">
								<form action="#" class="contact-form">
									<input type="text" placeholder="Digite seu nome"..>
									<input type="text" placeholder="Seu Email..">
									<input type="text" placeholder="Seu Telefone...">
									<textarea name="#" placeholder="Digite sua mensagem..."></textarea>
									<input type="submit" value="Enviar mensagem">
								</form>
							</div>
							<div class="col-md-6">
								<div class="map-wrapper">
									<div id="map" class="map"></div>
									<address>
										<div class="row">
											<div class="col-sm-6">
												<strong>Rua Padre Daniel Lisboa.</strong>
												<span>19e, Brotas - Salvador BA</span>
											</div>
											<div class="col-sm-6">
												<a href="mailto:office@companyname.com">makonnentafari@gmail.com</a> <br>
												<a href="tel:532930098891">(71) 00000-0000</a>
											</div>
										</div>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

			 <script>
      function initMap() {

        var uluru = {lat: -12.9723288, lng: -38.5097227};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjL6zRhI7FlI5ylUkwXziJUZJRh-17izw &callback=initMap">
    </script>

@endsection