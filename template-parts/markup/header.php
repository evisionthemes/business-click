    <!-- for page.php - elementor -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/template-parts/markup/css/elementor.css">
    <style type="text/css">
        article .entry-header {
            display: none;
        }

        body:not(.home):not(.blog) .site-content {
            padding-top: 0;
        }

        .entry-content {
            margin: 0;
        }
    </style>
    <script type="text/javascript">
        jQuery('body').addClass('evt-no-sidebar');    
    </script>
    <!-- end for page.php -->

    <!-- preloader -->
    <div id="evt-preloader" class="d-none" style="">
        <div id="status" style=""><i class="fa fa-spinner fa-spin"></i></div>
    </div>

    <!-- scroll-top -->
    <a href="#!" id="evt-scroll-top" class="btn"><i class="fas fa-angle-double-up"></i></a>

    <!-- search overlay -->
    <!-- <div class="evt-search-mask"></div> -->

    <!-- header -->
    <header id="masthead" class="site-header">
        <div class="evt-header-wrap">

            <div id="evt-top-header" class="d-none- d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 evt-head-list-item-wrap">
                            <!-- head list item -->
                            <div id="evt-head-list-item">
                                <ul>
                                    <li><span><i class="fas fa-headphones"></i> +977-9841XXXXXX</span></li>
                                    <li><a href="mailto:example@gmail.com"><i class="fas fa-envelope"></i> example@gmail.com</a></li>
                                    <li><span><i class="fas fa-map-marker-alt"></i> Jawalakhel, Lalitpur, Nepal</span></li>
                                </ul>
                            </div>                            
                        </div>

                        <div class="col-lg-4">
                            <a href="#!" class="head-list-toggle float-left d-lg-none"></a>

                            <div class="evt-social-icons-wrap">
                                <div class="evt-head-search">
                                    <?php get_search_form();?>
                                </div>

                                <!-- search toggle icon -->
                                <button class="evt-head-search-toggler float-right"><i class="fas fa-search"></i></button> 

                                <!-- social icons -->
                                <div id="evt-social-icons" class="float-right">
                                    <ul>
                                        <li><a href="facebook.com" target="_blank"></a></li>
                                        <li><a href="twitter.com" target="_blank"></a></li>
                                        <li><a href="instagram.com" target="_blank"></a></li>
                                        <li><a href="pinterest.com" target="_blank"></a></li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                    </div>

                </div>
            </div>

            <div class="evt-header-wrap-nav">
                <div class="container">
                    <div class="evt-header-row row align-items-center">
                        <div class="evt-logo-manage">
                            <div class="site-branding">
                                <?php
                                the_custom_logo();
                                if ( is_front_page() && is_home() ) :
                                    // if( !empty( get_bloginfo( 'name' ) ) ) {
                                    ?>
                                    <h1 class="site-title">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                            <?php bloginfo( 'name' ); ?>
                                        </a>
                                    </h1>
                                    <?php
                                    // }
                                else :
                                    // if( !empty( get_bloginfo( 'name' ) ) ) {
                                    ?>
                                    <h1 class="site-title">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                            <?php bloginfo( 'name' ); ?>
                                        </a>
                                    </h1>
                                    <?php
                                    // }
                                endif;
                                $evt_description = get_bloginfo( 'description', 'display' );
                                if ( $evt_description || is_customize_preview() ) :
                                    ?>
                                    <p class="site-description"><?php echo $evt_description; /* WPCS: xss ok. */ ?></p>
                                <?php endif; ?>
                            </div><!-- .site-branding -->                   
                        </div><!-- site brand-->

                        <!-- left and right nav -->
                        <div class="evt-logo-left-right-nav evt-menu-toggler-manage float-right" style="width: calc(100% - 270px);">
                            <a href="#!" id="evt-buy-btn" class="btn btn-reverse float-right">Buy Now</a>

                            <button class="menu-toggler" id="menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            
                            <nav id="site-navigation" class="main-navigation float-right">
                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'business-click' ); ?></button>
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                ) );
                                ?>

                                <!-- search toggle icon -->
                                <!-- <button class="evt-head-search-toggler d-none d-lg-block"><i class="fas fa-search"></i></button> -->
                            </nav><!-- #site-navigation -->     
                        </div><!-- site nav -->
                    </div>
                </div>

            </div>
        </div>
    </header><!-- #masthead -->

    <?php if(is_home() || is_front_page()): ?>
    <div id="content" class="site-homepage">
    <?php else: ?>
    <div id="content" class="site-content">
        <div class="container-">
            <?php get_template_part('template-parts/markup/page-banner'); ?>
            <div class="row">
    <?php endif; ?>