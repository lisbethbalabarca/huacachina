<?php 

	function config_site(){

		//registramos los menus
		register_nav_menus(array(
			'Principal' => __('Principal'),
			'Footer' => __('Quick Links')
		));
		
		//AGREGAR OPCTION PAGES DAEBAKK!!!
		acf_add_options_page(array(
			'page_title'  => 'Configuracion de pagina',
			'menu_title'  => 'Configuración',
			'menu_slug'  => 'Configuración',
			'redirect'   => false
		));
		register_post_type(
        'marketingAds', array (
            'labels' => array('name' => 'Marketing Ads','singular_name'=>'Marketing Ads'),
            'public' => true,
            'rewrite' => array('slug'=>'marketingads'),
            'has_archive' => true,
            'supports' => array('title','editor','author','thumbnail','comments'),
        ));
        register_post_type(
        'Banners', array (
            'labels' => array('name' => 'Banners','singular_name'=>'Banners'),
            'public' => true,
            'rewrite' => array('slug'=>'banners'),
            'has_archive' => true,
            'supports' => array('title','editor','author','thumbnail','comments'),
        ));
	}

	add_theme_support('post-thumbnails');
	add_action('init', 'config_site');



function shortcode_banner() {
  
if( function_exists('have_rows') ) {
     
    ob_start(); ?>
  
    
            <div class="col-md-12 banner-shortcode" id="<?php the_field('banner_id') ?>">
                <picture>
                    <source srcset="<?php the_field('banner_image_mobile'); ?>" media="(max-width: 776px)" />
                    <img class="img-responsive" src="<?php the_field('banner_image'); ?>" />
                </picture>
                <div class="info-banner">
                    <a href="<?php the_field('banner_link'); ?>"> LEARN MORE </a>
                </div>
            </div>      
    <?php
     
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
 
    }
  
}

add_shortcode( 'banner', 'shortcode_banner' );

function shortcode_banner_ph() {
  
if( function_exists('have_rows') ) {
     
    ob_start(); ?>
  
    
           <div class="banner-post my-4">
                    <picture>
                        <source srcset="<?php bloginfo('template_url') ?>/img/single/banner-ph-mob.jpg" media="(max-width: 767px)" alt="banner footer">
                        <source srcset="<?php bloginfo('template_url') ?>/img/single/banner-ph.jpg" alt="banner ph">
                        <img srcset="<?php bloginfo('template_url') ?>/img/single/banner-ph.jpg" alt="banner ph" class="w-100">
                    </picture>
                    <a class="btn_banner" href="https://www.peruhop.com/coronavirus-update/">More Info</a>
                </div>    
    <?php
     
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
 
    }
  
}

add_shortcode( 'banner_ph', 'shortcode_banner_ph' );

function shortcode_note_covid() {
  
if( function_exists('have_rows') ) {
     
    ob_start(); ?>
  
    
          <div class="box-covid my-4">
                    <p>COVID-19 (Coronavirus) in Peru Updates</p>
                    <a href="https://www.peruhop.com/coronavirus-update/" class="btn_covid">Click here for more info</a>
                </div>    
    <?php
     
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
 
    }
  
}

add_shortcode( 'note_covid', 'shortcode_note_covid' );

// Move Yoast to bottom
function yoasttobottom() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


?>