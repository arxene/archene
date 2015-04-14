<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<![endif]-->
<script>(function(){document.documentElement.className='js'})();</script>

<title>Archene Design</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/sticky-footer.css">

<?php wp_head(); ?><!-- this should be the last line before </head> -->
</head>

<body>
    <header>
        <?php if ( get_header_image() ) : ?>
            <div id="site-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" id="logo" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>
            </div>
        <?php endif; ?>
    </header>
    
    <div class="container-fluid">
    	<div class="page-header">                
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            
            <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; ?></p>
                <?php endif;
            ?>
        </div><!-- .page-header -->
        
        <div class="row">
        	<div class="col-xs-12 col-sm-4">
            	<?php get_sidebar(); ?>
            </div>