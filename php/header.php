<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <main>
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2209317136019612');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2209317136019612&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Cureskin">
    <meta name="keywords" content="Cureskin">
    <meta name="author" content="Cureskin">
    <title>Cureskin</title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/OwlCarousel2/dist/<?php echo get_template_directory_uri(); ?>/cureskin/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cureskin/assets/css/responsive.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/cureskin/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/cureskin/assets/OwlCarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/cureskin/assets/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/cureskin/assets/js/script.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119785655-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119785655-1');
</script>
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- =========================================
    HEADER
    ========================================== -->
    <div class="topBackground"></div>
    <header class="siteHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="siteLogo">
                        <a href="<?php echo get_site_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/logo2x.png" alt="Cureskin Logo">
                        </a>
                    </div>
                    <div class="mobileMenu" id="mobileicon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="menuWrapper">
                        <a href="<?php echo get_site_url(); ?>" class="sidelogo">
                            <img src="<?php echo get_template_directory_uri(); ?>/cureskin/assets/images/logo2x.png" alt="Cureskin Logo">
                        </a>
                        <a href="javascript:;" class="crossbtn" id="mobilecross"><i class="fa fa-close"></i></a>
                        <nav class="topMenu">
                            <ul class="mainMenu">
                                <li class="menuItem"><a href="javascript:;">How we work</a></li>
                                <li class="menuItem"><a href="javascript:;">Why us</a></li>
                                <li class="menuItem"><a href="blog-v2.html">Blog</a></li>
                                <li class="menuItem"><a href="javascript:;">Try on whatsapp</a></li>
                                <li class="menuItem download"><a href="javascript:;">Download app now</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>