<div class="row mt-5">
	<?php if( get_field('marketing_ads') ): ?>
	<?php $posts = get_field('marketing_ads'); if( $posts ): ?>
	<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	<?php setup_postdata($post); ?>
	<div class="col-md-3">
		<a href="<?php the_field('link')?>">
			<div class="box-ads">
				<img class="w-100" src="<?php the_field('img')?>">
				<p><?php the_title(); ?></p>
			</div>
		</a>		
	</div>
	<?php endforeach; ?>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>  
	<?php endif; ?>
</div>
<style type="text/css">
	.box-ads p {
		margin-top: 10px;
	    font-weight: 500;
	    font-size: 20px;
	    line-height: 23px;
	    letter-spacing: -0.05em;
	    color: #050505;
	}
</style>