<!DOCTYPE HTML>
<html>

	<head>
	
		<title><?php bloginfo('title'); ?></title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/colorbox.css" />

		<?php wp_head(); ?>
		
	</head>
	
	<body>
		
		<header>

			<h1><?php bloginfo('title'); ?></h1>
			<h2><?php bloginfo('description'); ?></h2>

		</header>

		<section class="articles">