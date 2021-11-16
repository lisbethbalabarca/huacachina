<?php get_header(); /* Template Name: HOME */?>
<section class="hero-image" style="background-image: url('<?php the_field('hero_image')?>');">
	<div class="container">
		<div class="box-hero">
			<h1><?php the_field('title')?></h1>
			<div class="separador my-4"></div>
			<p><?php the_field('subtext')?></p>
			<div class="mt-5 mb-3">
				<a class="btn-1" href="<?php the_field('link_btn_1')?>"><?php the_field('btn_1')?></a>
				<a class="btn-2" href="<?php the_field('link_btn_2')?>"><?php the_field('btn_2')?></a>
			</div>
		</div>
	</div>
</section>
<section class="section-1">
	<div class="container py-5 text-center">
		<h2 class="title-section"><?php the_field('title_1')?></h2>
		<div class="separador mx-auto my-4"></div>
		<div class="col-md-8 offset-md-2">
			<?php the_field('summary_1')?>
		</div>
		
	</div>
</section>
<section class="sanboarding">

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  	<div class="carousel-inner">
		  		<?php 
					if( have_rows('tour') ): ?>
				    <?php
				    $c = 0; while( have_rows('tour') ): the_row(); $c++;  ?>
				        <?php if ( $c == 1) { ?>
				        <div class="carousel-item active">
				        <?php } else { ?>
				        <div class="carousel-item">
				        <?php } ?>
				        	<div class="box-carrousel" style="background-image: url('<?php the_sub_field('img')?>');">
				        	</div>                    
				        </div>
				    <?php endwhile; ?>
				<?php endif; ?> 
		  	</div>
		 	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		</div>
		<div class="box-text-carrousel">
					<div class="container">
						<h2><?php the_field('name_tour')?></h2>
						<div class="row">
						    <div class="col-md-6">
						        <?php the_field('summary')?>
						        <div class="my-5 text-sm-left text-right">
						            <a href="<?php the_field('link_btn')?>" class="btn-rm"><?php the_field('btn')?></a>
						        </div>
						    </div>
						</div>   
					</div>                     
				</div>	
</section>
<section class="sub-menu">
	<div class="container py-5">
		<div class="row">
			<?php 
					if( have_rows('sub_menu') ): ?>
				<?php 
					while( have_rows('sub_menu') ): the_row(); ?>
			<div class="col-sm-6 col-lg-4 mt-3">
				<a href="<?php the_sub_field('url')?>">
					<div class="box-menu" style="background-image: url('<?php the_sub_field('background')?>');">
						<div class="box-center">
							<h3><?php the_sub_field('title')?></h3>
							<p><?php the_sub_field('text')?></p>
						</div>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
<!-- 			<div class="col-md-4">
				<div class="box-menu">
					<h3>How To Get</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-menu">
					<h3>How To Get</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div> -->
		</div>
	</div>
</section>
<?php get_footer(); ?>