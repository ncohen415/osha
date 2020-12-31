<?php 
  $page = get_queried_object();
?><!DOCTYPE html>
<!--[if lte IE 11]><html <?php language_attributes(); ?> class="no-js lte-ie11"> <![endif]-->
<!--[if gte IE 11]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cleartype" content="on">

<link rel="apple-touch-icon" href="apple-touch-icon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700|PT+Sans" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Normalize -->
  <link rel="stylesheet" href="css/normalize.css" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />

  <!-- Custom -->
  <link rel="stylesheet" href="bower_components/animate/css/animations.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/styles.css" />

  <!-- Modernizer -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>


<?php wp_head(); ?>

<?php
	// Connect to the Browsersync server
	$dev_hostname = "localhost:8000";
	if( (strpos($_SERVER['SERVER_NAME'], ".") === false) || ($_SERVER['SERVER_NAME'] === $dev_hostname) ) {
		echo "<script type=\"text/javascript\" id=\"__bs_script__\">document.write(\"<script async src='http://HOST:3000/browser-sync/browser-sync-client.js'><\/script>\".replace(\"HOST\", window.location.hostname));</script>";
	}
?>
</head>



<body <?php body_class(); ?>>
  <div class="site-container">

      <div class="header-container">
        <div class="header-wrapper">
            <div class="brand">
                <a href="home">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/bsafetyconsciouslogo.png" alt="">
                </a>
            </div>



            <div class="nav-wrapper">
            <?php 
              
              wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'         => 'div',
                'menu_class'   => 'nav',
              )
              )

            ?>
            </div>
        </div>
    </div>


	<div class="site-content">