<?php get_header(); ?>
<!-- <section class="hero-image title-down" style="background-image: url('<?php the_field('hero_image_blog')?>');">
	<h1><?php the_title(); ?></h1>
</section> -->
<?php while (have_posts()) { the_post(); ?>
	<section class="single-post">
		<div class="container">
			<div class="row">
				<div class="col-md-3 d-none d-sm-block mb-3">
					<div class="box-aside">
						<h3 class="title-aside mt-5">You may like</h3>
						<div class="separador-aside mb-4"></div>
						<?php
						$featured_posts = get_field('related_posts');
						if( $featured_posts ): ?>
							<?php foreach( $featured_posts as $post ):
							// Setup this post for WP functions (variable must be named $post).
								setup_postdata($post); ?>
								<a href="<?php the_permalink(); ?>">
									<div class="box-aside-left">
										<?php the_post_thumbnail(); ?>
										<p class="p-aside"><?php the_title(); ?></p>
									</div>
								</a>
							<?php endforeach; ?>

							<?php 
    						// Reset the global post object so that the rest of the page works correctly.
							wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-9">
					<h1 class="title-post"><?php the_title(); ?></h1>
					<div class="separador-single"></div>
					<p><?php the_field('intro_text')?></p>
					<?php the_content(); ?>           
				<!-- <div class="banner-post my-4">
					<picture>
						<source srcset="<?php bloginfo('template_url') ?>/img/single/banner-ph-mob.jpg" media="(max-width: 767px)" alt="banner footer">
			 			<source srcset="<?php bloginfo('template_url') ?>/img/single/banner-ph.jpg" alt="banner ph">
			  			<img srcset="<?php bloginfo('template_url') ?>/img/single/banner-ph.jpg" alt="banner ph" class="w-100">
			  		</picture>
			  		<a class="btn_banner" href="">More Info</a>
				</div>
				<div class="box-covid my-4">
					<p>COVID-19 (Coronavirus) in Peru Updates</p>
					<a href="" class="btn_covid">Click here for more info</a>
				</div> -->
			</div>
		</div>
		<!-- <div id="ads-flt"></div> -->
	</div>
</section>
<?php } ?>
<style type="text/css">
	.box-aside {
		position: sticky;
		top: 13vh;
	}
	nav {
		-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.4);
		-moz-box-shadow: 0 0 10px rgba(0,0,0,0.4);
		box-shadow: 0 0 10px rgba(0,0,0,0.4);
	}
	
	*{
		color:#484A4C;
	}
	.next-arrow a {
		right: 20px;
	}
	.title-post {
		font-style: italic;
	    font-weight: bold;
	    font-size: 50px;
	    padding-top: 1%;
	    color: #000000;
	    line-height: 68px;
	}
	h2{
		font-size: 40px;
		line-height: 54px;
		color: #000000;
		font-weight: bold;
	}
	p{
		line-height: 25px;
		font-style: normal;
		font-size: 18px;
		margin-bottom: 20px;
		color: #050505;
	}
	strong{
		color:#050505;
	}
	p img{
		width: 100%;
		height: auto;
	}

	@media screen and (max-width: 767px){
		.title-post{
			font-size: 34px;
		}
	}

</style>
<?php get_footer(); ?>