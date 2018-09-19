@extends('layouts.app')
@section('title', 'Blog')
@section('content')
		<section id="slider" class="full-screen clearfix slider-escritorio" style="height: 0px">

			<div class="">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide" style="background-image: url('images/blog/head.jpg'); background-position: center center; background-size: cover;">
							<div class="slider-title" style="height: 100px">
								
							</div>
							<div class="text-center" style="bottom: 20px; position: absolute; width: 100%;">
							<h1 class="nomargin" style="color: white; ">BLOG</h1>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section>
		<section >
			<div id="header-mobil" class="header-mobil-blog">			
				<div class="col-12  text-center porque-mobil">	
					<div class="col-10 offset-1  ">
						<h1 class="nomargin" style="color: white; ">BLOG</h1>
					</div>
				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container post-masonry post-timeline grid-2 clearfix">

						<div class="timeline-border"></div>

						<div class="entry entry-date-section notopmargin"><span>Septiembre 2018</span></div>

						<div class="entry clearfix">
							<div class="entry-timeline">
								<div class="timeline-divider"></div>
							</div>
							<div class="entry-image">
								<a href="images/blog/foto-blog1.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/foto-blog1.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">Lorem ipsum dolor sit amet</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10 de Septiembre de 2018</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
								<a href="blog-single.html"class="more-link text-red">Leer mas...</a>
							</div>
						</div>


						<div class="entry clearfix">
							<div class="entry-timeline">
								<div class="timeline-divider"></div>
							</div>
							<div class="entry-image">
								<a href="images/blog/foto-blog2.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/foto-blog2.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">Lorem ipsum dolor sit amet</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10 de Septiembre de 2018</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
								<a href="blog-single.html"class="more-link text-red">Leer mas...</a>
							</div>
						</div>


						<div class="entry clearfix">
							<div class="entry-timeline">
								<div class="timeline-divider"></div>
							</div>
							<div class="entry-image">
								<a href="images/blog/foto-blog3.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/foto-blog3.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">Lorem ipsum dolor sit amet</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10 de Septiembre de 2018</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
								<a href="blog-single.html"class="more-link text-red">Leer mas...</a>
							</div>
						</div>

						


					</div><!-- #posts end -->

					<div class="page-load-status">
						<div class="css3-spinner infinite-scroll-request">
							<div class="css3-spinner-ball-pulse-sync">
								<div></div>
								<div></div>
								<div></div>
							</div>
						</div>
						<div class="alert alert-warning center infinite-scroll-last mx-auto" style="max-width: 20rem;">End of content</div>
						<div class="alert alert-warning center infinite-scroll-error mx-auto" style="max-width: 20rem;">No more pages to load</div>
					</div>

					<div class="center">
						<a href="blog-timeline-2.html" class="button button-3d button-dark button-large button-rounded load-next-posts">Cargar mas</a>
					</div>

				</div>

			</div>

		</section><!-- #content end -->
@endsection

@section('scripts')
<script>

		jQuery(window).on( 'load', function(){

			var $container = $('#posts');

			$container.isotope({
				itemSelector: '.entry',
				masonry: {
					columnWidth: '.entry:not(.entry-date-section)'
				}
			});

			$container.infiniteScroll({
				path: '.load-next-posts',
				button: '.load-next-posts',
				scrollThreshold: false,
				history: false,
				status: '.page-load-status'
			});

			$container.on( 'load.infiniteScroll', function( event, response, path ) {
				var $items = $( response ).find('.entry');
				// append items after images loaded
				$items.imagesLoaded( function() {
					$container.append( $items );
					$container.isotope( 'insert', $items );
					setTimeout( function(){
						$container.isotope('layout');
						SEMICOLON.initialize.resizeVideos();
						SEMICOLON.widget.loadFlexSlider();
						SEMICOLON.widget.masonryThumbs();
					}, 1000 );
					setTimeout( function(){
						SEMICOLON.initialize.blogTimelineEntries();
					}, 1500 );
				});
			});

			setTimeout( function(){
				SEMICOLON.initialize.blogTimelineEntries();
			}, 2500 );

			$(window).resize(function() {
				$container.isotope('layout');
				setTimeout( function(){
					SEMICOLON.initialize.blogTimelineEntries();
				}, 2500 );
			});

		});

	</script>
@endsection