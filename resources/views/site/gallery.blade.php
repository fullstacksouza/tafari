@extends("site.layouts.main")
			@section('content')
			<main class="main-content">
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
							<h2 class="entry-title">Galeria De Fotos</h2>
							<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Shows Solo</option>
									<option value=".concert">Shows BTB</option>
									<option value=".band">Shows Nova Saga</option>
									<option value=".stuff">Participações</option>
								</select>
								<a href="#" class="current" data-filter="*">Shows Solo</a>
								<a href="#" data-filter=".concert">Shows BTB</a>
								<a href="#" data-filter=".band">Shows Nova Saga</a>
								<a href="#" data-filter=".stuff">Participações</a>
							</div>
							<div class="filterable-items">
								<div class="filterable-item concert">
									<a href="dummy/large-gallery/gallery-1.jpg"><figure><img src="dummy/gallery-1.jpg" alt="gallery 1"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="dummy/large-gallery/gallery-2.jpg"><figure><img src="dummy/gallery-2.jpg" alt="gallery 2"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="dummy/large-gallery/gallery-3.jpg"><figure><img src="dummy/gallery-3.jpg" alt="gallery 3"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="dummy/large-gallery/gallery-4.jpg"><figure><img src="dummy/gallery-4.jpg" alt="gallery 4"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="dummy/large-gallery/gallery-5.jpg"><figure><img src="dummy/gallery-5.jpg" alt="gallery 5"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="dummy/large-gallery/gallery-6.jpg"><figure><img src="dummy/gallery-6.jpg" alt="gallery 6"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="dummy/large-gallery/gallery-7.jpg"><figure><img src="dummy/gallery-7.jpg" alt="gallery 7"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="dummy/large-gallery/gallery-8.jpg"><figure><img src="dummy/gallery-8.jpg" alt="gallery 8"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="dummy/large-gallery/gallery-9.jpg"><figure><img src="dummy/gallery-9.jpg" alt="gallery 9"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="dummy/large-gallery/gallery-10.jpg"><figure><img src="dummy/gallery-10.jpg" alt="gallery 10"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="dummy/large-gallery/gallery-11.jpg"><figure><img src="dummy/gallery-11.jpg" alt="gallery 11"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="dummy/large-gallery/gallery-12.jpg"><figure><img src="dummy/gallery-12.jpg" alt="gallery 12"></figure></a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

@endsection