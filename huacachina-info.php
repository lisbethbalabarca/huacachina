<?php get_header(); /* Template Name: Huacachina info */?>
<?php while(have_posts()){ the_post(); ?>
<section class="hero-image" style="background-image: url('<?php the_field('hero_image')?>');">
	<div class="container">
		<div class="box-hero text-center">
			<h1 class="title-hero"><?php the_title(); ?></h1>
		</div>
	</div>
</section>
<section class="info-content py-4">
	<div class="container">
		<?php the_content(); ?>
		<div class="menu-scroll text-center py-sm-5 pb-4">
			<a href="#HistoryOfHuacachina">History Of Huacachina</a>
			<a href="#HowToGetThere">How To Get There</a>
			<a href="#WhatToDo">What To Do</a>
			<a href="#WhatToBring">What To Bring</a>
			<a href="#WhereToStay">Where To Stay</a>
			<a href="#Weather">Weather</a>
			<a href="#SecurityTips">Security Tips</a>
		</div>			
		<div id="HistoryOfHuacachina" class="history">
			<?php if( have_rows('history') ): ?>
			<?php while( have_rows('history') ): the_row(); ?>
			<div class="row mb-5">
				<div class="col-md-6">
					<?php the_sub_field('title')?>
					<?php the_sub_field('summary')?>
				</div>
				<div class="col-md-6">
					<img class="w-100" src="<?php the_sub_field('img')?>">
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="day-trip-banner" style="background-image: url('https://www.huacachina.com/wp-content/uploads/2020/03/huacachina-from-the-sky.png');">
			<div class="text-banner  pl-sm-5 text-sm-left text-center">
				<h3><span>Ready to experience</span><br>Huacachina</h3>
				<div class="separador my-5"></div>
				<div class="mt-5 mb-4">
					<a class="btn_yellow" href="">DAY TRIPS</a>
				</div>
			</div>	
		</div>
		<div class="how-to-get">
			<div class="row my-5">
				<div class="col-md-6">
					<h3 class="title-section-xs mb-3" id="HowToGetThere"><?php the_field('title_htgt')?></h3>
					<?php the_field('summary_htgt')?>
					<h3 class="title-section-xs mt-5 mb-3" id="WhatToDo"><?php the_field('title_wtd')?></h3>
					<?php the_field('summary_wtd')?>
				</div>
				<div class="col-md-6">
					<img class="w-100" src="<?php the_field('img_htgt')?>">
				</div>
			</div>
		</div>
		<div>
			<?php if( have_rows('tours') ): ?>
			<?php while( have_rows('tours') ): the_row(); ?>
			<div class="row my-3">
				<div class="col-md-6">
					<?php the_sub_field('title')?>
					<?php the_sub_field('summary')?>
					<!-- <div class="my-5">
						<a class="btn_yellow" href="<?php the_sub_field('link_btn')?>"><?php the_sub_field('btn')?></a>
					</div> -->
				</div>
				<div class="col-md-6 align-self-center">
					<img class="w-100" src="<?php the_sub_field('img')?>">
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="row mb-5">
			<div class="col-md-6">
				<h3 class="title-section-xs mb-5" id="WhatToBring"><?php the_field('title_wtbh')?></h3>
				<?php the_field('summary_wtbh')?>
				<h3 class="title-section-xs my-5" id="WhereToStay"><?php the_field('title_wts')?></h3>
				<?php the_field('summary_wts')?>
				<h3 class="title-section-xs my-5" id="Weather"><?php the_field('title_weather')?></h3>
				<?php the_field('summary_weather')?>
				<h3 class="subtitle-section my-5" id="SecurityTips"><?php the_field('title_recomendacion')?></h3>
				<?php the_field('summary_recomendacion')?>
			</div>
			<div class="col-md-6">
				<img class="w-100" src="<?php the_field('img_large')?>">
			</div>
		</div>
		<div class="day-trip-banner" style="background-image: url('https://www.huacachina.com/wp-content/uploads/2020/03/huacachina-from-the-sky.png');">
			<div class="text-banner pl-sm-5 text-sm-left text-center">
				<h3><span>Ready to experience</span><br>Huacachina</h3>
				<div class="separador my-5"></div>
				<div class="mt-5 mb-4">
					<a class="btn_yellow" href="">LEARN MORE</a>
				</div>
			</div>	
		</div>
	</div>
</section>
<?php } ?>
<?php get_footer(); ?>