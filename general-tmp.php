<?php get_header(); /* Template Name: General Template*/?>
<?php while(have_posts()){ the_post(); ?>
<section class="hero-image" style=" background-image: url(<?php the_field('hero_image')?>); align-items: flex-end;">
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
		<?php if(get_field('sections')): ?>
			<?php while(has_sub_field('sections')): ?>
				<div class="row my-5">
					<div class="col-sm-7 col-md-7 col-lg-7">
						<h4 class="title-section-xs"><?php the_sub_field('section_title')?></h4>
						<?php the_sub_field('section_content')?>
					</div>
					<div class="col-md-5">
						<img class="w-100" src="<?php the_sub_field('image')?>">
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div>
			<?php the_field('final_content'); ?>
		</div>
		<?php include (TEMPLATEPATH . '/shortcode/banners.php' ); ?>
		<?php include (TEMPLATEPATH . '/shortcode/marketing-ads.php' ); ?>

		</div>

	</div>

</section>
<?php } ?>
<?php get_footer(); ?>
<style>
	ul {
	  	list-style: none; /* Remove default bullets */
	}

	ul li::before {
	  	content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
	  	color: #ffb800; /* Change the color */
	  	font-weight: bold; /* If you want it to be bold */
	  	display: inline-block; /* Needed to add space between the bullet and the text */
	  	width: 1em; /* Also needed for space (tweak if needed) */
	  	margin-left: -1em; /* Also needed for space (tweak if needed) */
	}
	ul li{
		line-height: 25px;
    	margin-bottom: 20px;
	}

</style>