<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

			<link rel="icon" href="favicon.ico" type="assets/images/favicons/fav.png" />
			<link rel="manifest" href="/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">

			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="<?php bloginfo('description'); ?>">

		  <link rel="icon" type="image/png" href="img/icon.png" />

		<!--Style-->

		  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
		  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-responsive.css">
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		  <!--[if lt IE 9]>
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		  <![endif]-->

</head>

<body>

<!--Preloader-->



<div class="opacity-nav">
    <div class="menu-index" id="buttons">
    <i class="fa  fa-close"></i>
    </div>

    <ul class="menu-fullscreen">
      <li><a href="index.html">Home</a></li>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="about-us.html">About us</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
</div>


  <!--Header-->
  <header id="fullscreen">

      <div class="logo" id="full"><a href="index.html"><img src="img/logo/logo.svg"></a></div>

        <div class="menu-index" id="button">
        <i class="fa fa-bars"></i>
        </div>

  </header>

  <div class="clear"></div>	
