<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Meta -->
		<title><?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="author" content="">

        <!-- Favicon & Touch Icons -->
        <link href="<?php echo get_template_directory_uri(); ?>/static/images/favicon.png" rel="shortcut icon">

        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
        <div class="wrapper">

            <header id="top" class="header" role="banner">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><?php wp_title(); ?></a>
                </div><!-- logo -->
                <nav>
                    <ul>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Giveaways</a></li>
                        <li><a href="#">Map</a></li>
                        <li><a href="#">Media</a></li>
                    </ul>
                </nav>
            </header>
