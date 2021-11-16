<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="icon" href="<?php bloginfo('template_url') ;?>/img/home/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159414771-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-159414771-1');
	</script>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav id="header" class="navbar main-nav fixed-top navbar-expand-lg navbar-light">
			<a class="navbar-brand logo_header m-auto " href="<?php echo home_url(); ?>">
				<img class="logo" width="180" src="<?php bloginfo('template_url') ?>/img/home/huacachina.png" alt="huacachina logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse a_header" id="navbarNavDropdown">
				<div class="navbar-nav m-auto">
					<a class="nav-item nav-link" href="<?php echo home_url(); ?>/info/">Info</a>
					<a class="nav-item nav-link" href="<?php echo home_url(); ?>/sandboarding-dunebuggy/">Sandboarding/Dune Buggy</a>
					<a class="nav-item nav-link" href="<?php echo home_url(); ?>/nazca-lines-flight/">Nazca Lines Flight</a>
					<a class="nav-item nav-link" href="https://www.peruhop.com/day-trips-from-lima/">Day Trips</a>
					<a class="nav-item nav-link" href="<?php echo home_url(); ?>/where-to-stay/">Where To Stay</a>
					<a class="nav-item nav-link" href="<?php echo home_url(); ?>/how-to-get-there/">How to Get There</a>
					<a class="nav-item nav-link" href="<?php echo home_url(); ?>/other-tours/">Other Tours</a>
				</div>
			</div>
		</nav>
	</header>