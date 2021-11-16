<?php get_header(); /* Template Name: Where To Stay */?>
<?php while(have_posts()){ the_post(); ?>
<section class="hero-image" style="background-image: url('<?php the_field('hero_image')?>');align-items: flex-end;">
	<div class="container">
		<div class="box-hero">
			<h1 class="title-down"><?php the_title(); ?></h1>
			<div class="separador ml-0 mb-5"></div>
		</div>
	</div>
</section>
<section class="where-to-stay-content py-3">
	<div class="container">
		<?php the_content(); ?>
		<?php if( have_rows('hostels') ): ?>
		<?php while( have_rows('hostels') ): the_row(); ?>
		<div class="row my-5">
			<div class="col-md-7 pr-sm-0">
				<div class="box-hostel">
					<div class="text-center">
						<h4 class="subtitle-section"><?php the_sub_field('title')?></h4>
						<div class="mini-separador mx-auto mb-3 mb-lg-5"></div>
						<?php the_sub_field('summary')?>
					</div>
				</div>
			</div>
			<div class="col-md-5 pl-sm-0">
				<img class="w-100" src="<?php the_sub_field('img')?>">
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
<?php } ?>
<?php get_footer(); ?>
<style>
	a.other-tours{
		background: #FFB800;
	    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
	    color: #050505;
	    font-weight: bold;
	    padding: 15px 20px;
	    font-size: 20px;
	    margin-right: 15px;
	    display: block;
	    width: 40%;
	    margin: 0 auto;
	}
</style>