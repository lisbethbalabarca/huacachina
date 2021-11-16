<?php if( get_field('banners') ): ?>
	<?php $posts = get_field('banners'); if( $posts ): ?>
	<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		<?php setup_postdata($post); ?>
		<?php if(get_field('bg_mobile')): ?>
			<div class="banner-contain">
				<picture>
				  <source srcset="<?php the_field('bg_mobile')?>" media="(max-width: 776px)">
				  <img src="<?php the_field('bg_banner')?>">
				</picture>
				<div class="text-banner pl-sm-5 text-sm-left text-center">
					<h3><span><?php the_field('title_small')?></span><br><?php the_field('title_medium')?></h3>
					<div class="separador"></div>
					<a class="btn_yellow" href="<?php the_field('link_btn')?>"><?php the_field('btn')?></a>
				</div>	
			</div>
		<?php else : ?>
			<div class="day-trip-banner" style="background-image: url('<?php the_field('bg_banner')?>');">
				<div class="text-banner pl-sm-5 text-sm-left text-center">
					<h3><span><?php the_field('title_small')?></span><br><?php the_field('title_medium')?></h3>
					<div class="separador my-5"></div>
					<div class="mt-5 mb-4">
						<a class="btn_yellow" href="<?php the_field('link_btn')?>"><?php the_field('btn')?></a>
					</div>
				</div>	
			</div>
		<?php endif ?>
	<?php endforeach; ?>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>  
<?php endif; ?>

<style>
	.banner-contain{
		position: relative;
	}
	.banner-contain img{
		width: 100%;
	}
	.text-banner{
		position: absolute;
		bottom: calc(100% - 80%);
	}
	.btn_yellow{
		display: block;
	    width: 68%;
	    text-align: center;
	}
	.separador{
		margin: 15px 0;
	}
	@media screen and (max-width: 767px){
		.text-banner{
			margin-left: auto;
		    margin-right: auto;
		    left: 0;
		    right: 0;
		    z-index: 10;
		}
		.separador{
			margin: 0 auto;
    		margin-bottom: 15px;
		}
		.btn_yellow{
			margin: 0 auto;
		}
		.banner-contain:before{
			content: '';
		    position: absolute;
		    top: 0;
		    left: 0;
		    right: 0;
		    bottom: 0;
		    background: linear-gradient(rgba(0, 0, 0, 0.38) -4%,rgba(0, 0, 0, 0.32) 100%);
		    z-index: 1;
		}
	}

</style>