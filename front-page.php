<?php get_header();?>
	<div id="viva-slider">
		<div class="cotainer">
			<div class="row">
				<div class="viva-slider">
					<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="<?php echo get_template_directory_uri().'/image/img1.jpg';?>" class="d-block w-100 img-responsive" alt="img1">
						    </div>
						    <div class="carousel-item">
						      <img src="<?php echo get_template_directory_uri().'/image/img2.jpg';?>" class="d-block w-100 img-responsive" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="<?php echo get_template_directory_uri().'/image/img3.jpg';?>" class="d-block w-100 img-responsive" alt="...">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<div id="viva-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-pull-4">
				</div>
			</div>
		</div>
	</div>

<?php get_footer();?>

