<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>



				<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149929202-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-149929202-1');
		</script>



				<!-- Google Tag Manager -->


<!-- 		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-K87VCSZ');</script> -->


		<!-- End Google Tag Manager -->

		
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">


		<meta name="google-site-verification" content="aDTk91qUoVh-yy4YoVBSdPSvcj4zKl3sSuxh_6UpQng" />

		<meta name="theme-color" content="#000">

	    
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/swiper-master/dist/css/swiper.min.css">


	
			   
	    <meta charset="UTF-8">


	    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Jomhuria|Livvic|Quicksand|Sigmar+One|Special+Elite&display=swap" rel="stylesheet">


	    <!-- <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script> -->
	    


	    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>







		<meta property="og:url"                content="<?php the_permalink(); ?>" />


		<meta property="og:type"               content="article" />




		<meta property="og:description"        content="<?php $summary = get_field('opis_posta'); echo substr($summary, 0, 111); ?> ..." />



	

		<meta property="og:title"              content="<?php the_field('naslov_posta'); ?>" />


		<?php 
			$image = get_field('slika_posta');
			if( !empty( $image ) ): ?>

				<meta property="og:image"              content="<?php echo esc_url($image['url']); ?>" />
			  
		<?php endif; ?>





		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>

	<body <?php body_class(); ?> oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

		
					
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
				

			<!-- Google Tag Manager (noscript) -->
<!-- 		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K87VCSZ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
		<!-- End Google Tag Manager (noscript) -->



			
<!-- 			<header class="header clear" role="banner">

					
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>

			</header> -->
			<!-- /header -->
