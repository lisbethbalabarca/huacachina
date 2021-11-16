<?php get_header(); /* Template Name: How To Get There */?>
<?php while(have_posts()){ the_post(); ?>
<section class="hero-image" style="background-image: url('<?php the_field('hero_image')?>');align-items: flex-end;">
	<div class="container">
		<div class="box-hero">
			<h1 class="title-down"><?php the_title(); ?></h1>
			<div class="separador ml-0 mb-5"></div>
		</div>
	</div>
</section>
<section class="how-to-get-content py-4">
	<div class="container">
		<?php the_content(); ?>
		<div class="row my-5">
			<div class="col-sm-7 col-lg-6">
				<h4 class="title-section-xs"><?php the_field('title_flying')?></h4>
				<?php the_field('summary_flying')?>
			</div>
			<div class="col-md-5 offset-lg-1">
				<img class="w-100" src="<?php the_field('img_flying')?>">
			</div>
		</div>
		<div class="row my-5">
			<div class="col-sm-7 col-lg-6">
				<?php the_field('taking_bus')?>
			</div>
			<div class="col-md-5 offset-lg-1 self-align-center">
				<div style="position: relative;">
					<img class="w-100" src="<?php the_field('img_taking')?>">
					<div class="text-center box-absolute-down">
						<a href="<?php the_field('link_btn_taking')?>" class="btn_yellow"><?php the_field('btn_taking')?></a>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row my-5">
			<div class="col-sm-7 col-lg-6">
				<h4 class="title-section-xs"><?php the_field('title_taking_tour')?></h4>
				<?php the_field('summary_tour')?>
			</div>
			<div class="col-md-5 offset-lg-1">
				<img class="w-100" src="<?php the_field('img_tour')?>">
			</div>
		</div>
		<?php include (TEMPLATEPATH . '/shortcode/banners.php' ); ?>
		<!-- <div class="ads-day-trip" style="background-image: url('http://www.arequipawalkingtour.com/wp-content/uploads/2020/03/ads-day-trip.jpg');">
			<div class="text-ads pl-sm-5 text-sm-left text-center">
				<h3><span>Ready to experience</span><br>Huacachina</h3>
				<div class="separador my-5"></div>
				<div class="mt-5 mb-4">
					<a class="btn_yellow" href="">DAY TRIPS</a>
				</div>
			</div>	
		</div> -->
		<?php include (TEMPLATEPATH . '/shortcode/marketing-ads.php' ); ?>
	</div>
</section>
<?php } ?>
<?php get_footer(); ?>