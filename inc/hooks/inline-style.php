<?php
/**
*Inline style to use color options
**/
if( ! function_exists( 'business_click_inline_style' ) ) :

    /**
     * style to use color options
     *
     * @since  flare 1.0.1
     */
    function business_click_inline_style()
    {
      
        global $business_click_customizer_all_values;

        global $business_click_google_fonts;
        $business_click_customizer_defaults['business-click-font-family-site-identity']         = 'Raleway:400,300,500,600,700,900';
        $business_click_customizer_defaults['business-click-font-family-menu']                  = 'Raleway:400,300,500,600,700,900';
        $business_click_customizer_defaults['business-click-font-family-h1-h6']                 = 'Raleway:400,300,500,600,700,900';
        $business_click_customizer_defaults['business-click-font-family-body-p']                = 'Raleway:400,300,500,600,700,900';
        $business_click_customizer_defaults['business-click-font-family-button-text']           = 'Roboto+Condensed:400,300,400italic,700';
        $business_click_customizer_defaults['business-click-footer-copy-right-text']            = 'Open+Sans:400,400italic,600,700';

        $business_click_font_family_site_identity           = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-site-identity']];
        $business_click_font_family_menu_text               = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-menu']];
        $business_click_font_family_h1_h6                   = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-h1-h6']];
        $business_click_font_family_body_paragraph          = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-body-p']];
        $business_click_font_family_button_text             = $business_click_google_fonts[$business_click_customizer_all_values['business-click-font-family-button-text']];
        $business_click_font_family_footer_copyright_text   = $business_click_google_fonts[$business_click_customizer_all_values['business-click-footer-copy-right-text']];

        
        //*color options*/
        $business_click_background_color                        = get_background_color();
        $business_click_site_identity_color_option              = $business_click_customizer_all_values['business-click-site-identity-color'];
        $business_click_primary_color_option                    = $business_click_customizer_all_values['business-click-primary-color'];
        $business_click_top_header_bar_background_color         = $business_click_customizer_all_values['business-click-top-header-background-bar-color'];
        $business_click_menu_header_background_color            = $business_click_customizer_all_values['business-click-menu-header-background-color'];
        $business_click_h1_h6                                   = $business_click_customizer_all_values['business-click-business-clcik-h1-h6'];
        $business_click_section_heading_bottom_border           = $business_click_customizer_all_values['business-click-section-heading-bottom-border-color'];
        $business_click_footer_background                       = $business_click_customizer_all_values['business-click-footer-background-color'];
       
        ?>
      
      <style type="text/css">

        /*site identity font family*/
            .site-title,
            .site-title a,
            .site-description,
            .site-description a {
                font-family: '<?php echo esc_attr( $business_click_font_family_site_identity ); ?>';
            }
                        
            h2, h2 a, .h2, .h2 a, 
            h2.widget-title, .h1, .h3, .h4, .h5, .h6, 
            h1, h3, h4, h5, h6 .h1 a, .h3 a, .h4 a,
            .h5 a, .h6 a, h1 a, h3 a, h4 a, h5 a, 
            h6 a {
                font-family: '<?php echo esc_attr( $business_click_font_family_h1_h6 ); ?>';
            }

            /* readmore and fonts*/
            .readmore, .business-click-header-wrap .business-click-head-search form .search-submit, .widget_search form .search-submit, a.btn, .btn, a.readmore, .readmore, .wpcf7-form .wpcf7-submit, button, input[type="button"], input[type="reset"], input[type="submit"], .dark-theme .site-content a.readmore, .dark-theme .site-content .readmore, .dark-theme #business-click-social-icons ul li a, .dark-theme-coloured .btn, .dark-theme-coloured a.btn, .dark-theme-coloured button, .dark-theme-coloured input[type="submit"], .dark-theme-coloured .business-click-header-wrap .business-click-head-search form .search-submit {
                font-family: '<?php echo esc_attr( $business_click_font_family_button_text ); ?>';
            }

            /*font family menu text*/
             nav#site-navigation ul a
            {
                font-family: '<?php echo esc_attr( $business_click_font_family_menu_text ); ?>';
            }

            /*font family body paragraph text*/
            p
            {
                font-family: '<?php echo esc_attr( $business_click_font_family_body_paragraph ); ?>';
            }

            /*font family footer copyright  text*/
            .evt-copyright 
            {
                font-family: '<?php echo esc_attr( $business_click_font_family_footer_copyright_text ); ?>'!important;
            }




        /*=====COLOR OPTION=====*/
        /*Color*/
        /*----------------------------------*/
        <?php 
        /*Primary*/
        if( !empty($business_click_primary_color_option) ){
        // removing , .readmore:hover, a.readmore:hover from bg
        // adding in color
        ?>

        .widget-title:before, .widgettitle:before, .page-title:before, .entry-title:before, .widget_search form .search-submit, .evt-head-search form .search-submit, .pagination .nav-links a, .wp-pagenavi a, .woocommerce nav.woocommerce-pagination a, .pagination .nav-links span, .wp-pagenavi span, .woocommerce nav.woocommerce-pagination span, a.btn, .btn, .wpcf7-form .wpcf7-submit, .woocommerce #respond input#submit, .woocommerce div.product form.cart .button, .woocommerce #respond input#submit.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, button, input[type="button"], input[type="reset"], input[type="submit"], .btn.btn-reverse:hover, .wp-pagenavi a:hover, .wp-pagenavi span.current, .pagination .nav-links ul li span.current, .wp-pagenavi ul li span.current, .woocommerce nav.woocommerce-pagination ul li span.current, .pagination .nav-links ul li span:hover, .wp-pagenavi ul li span:hover, .woocommerce nav.woocommerce-pagination ul li span:hover, .pagination .nav-links ul li a:hover, .wp-pagenavi ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, header.site-header .evt-header-wrap-nav .evt-menu-toggler-manage #menu-icon.menu-toggler:hover span, ul.slick-dots li button:hover, ul.slick-dots li.slick-active button, .woocommerce span.onsale, .evt-carousel.slick-slider ul.slick-dots li button:hover, .evt-carousel.slick-slider ul.slick-dots li.slick-active button, .evt-featured-item-wrap .evt-featured-item .evt-featured-icon, #evt-top-header, .evt-thumb-holder .evt-thumb-hover, #evt-team .evt-box-item-wrap .evt-box-image .evt-box-social-icons, #evt-testimonials .evt-testimonials-slider{
            background-color: <?php echo esc_attr( $business_click_primary_color_option ) ;?>;
        }            
        .woocommerce-message, .woocommerce-info, .pbThumbs li.active a img {
            border-color: <?php echo esc_attr( $business_click_primary_color_option ) ;?>;
        }

        a:hover, .evt-item article .entry-title a:hover, a.readmore, .readmore, .breadcrumbs .trail-items .trail-item a, nav#site-navigation ul li:hover > a, nav#site-navigation ul#menu > li.current-menu-item > a, nav#site-navigation ul.nav-menu > li.current-menu-item > a, nav#site-navigation ul.menu > li.current-menu-item > a, .slick-slider .slick-arrow:hover, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce-message::before, .woocommerce-info::before, .woocommerce form .form-row .required, .evt-head-search-toggler:hover i, body.head-search-active .evt-head-search-toggler .fa-search, #evt-top-header .evt-head-search-toggler:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul#menu > li > a:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul.nav-menu > li > a:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul.menu > li > a:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul a:hover, body.home.transparent-header:not(.small-header) nav#site-navigation ul#menu > li.current-menu-item > a, body.home.transparent-header:not(.small-header) nav#site-navigation ul.nav-menu > li.current-menu-item > a, body.home.transparent-header:not(.small-header) nav#site-navigation ul.menu > li.current-menu-item > a, #evt-portfolio #filters button.is-checked, #evt-team .evt-box-item-wrap .evt-box-caption .evt-designation {
          color: <?php echo esc_attr( $business_click_primary_color_option );?>;
        }
        .readmore:hover, a.readmore:hover {
            background: none;
        }

        a.read-more-btn,
        #content .nav-links a,
        .author-more,
        {
            border-color: <?php echo esc_attr( $business_click_primary_color_option ) ;?>;
        }  
        <?php
        } 
        if( !empty($business_click_site_identity_color_option) ){
        ?>
            /*Site identity / logo & tagline*/
            body:not(.transparent-header) .site-branding a,
            body:not(.transparent-header) .site-branding p,
            body.home.transparent-header.small-header .site-branding a,
            body.home.transparent-header.small-header .site-branding p {
              color: <?php echo esc_attr( $business_click_site_identity_color_option );?>;
            }
        <?php
        }

        /*top-header bar background color*/
        if( !empty($business_click_top_header_bar_background_color) ){?>
            #evt-top-header
            {
                background-color: <?php echo esc_attr($business_click_top_header_bar_background_color);?>;
            }

        <?php }

        /*menu-background color*/
        if( !empty($business_click_menu_header_background_color) )
        {?>
            header.site-header
            {
                background-color: <?php echo esc_attr($business_click_menu_header_background_color);?>;
            }

        <?php }

        /*h1-h6 color*/   
        if( !empty($business_click_h1_h6) )
        {?>
            .widget-title, .widgettitle, .page-title, .entry-title, .widget-title a, .widgettitle a, .page-title a, .entry-title a
            {
                color: <?php echo esc_attr($business_click_h1_h6);?>;
            }

        <?php }

        /*Section heading buttom border*/   
        if( (1 == $business_click_customizer_all_values['business-click-enable-section-header-bottom'] && !empty($business_click_section_heading_bottom_border) ) )
        {?>
            .widget-title:before, .widgettitle:before, .page-title:before, .entry-title:before
            {
                background-color: <?php echo esc_attr($business_click_section_heading_bottom_border);?>;
            }

            <?php } else
            { ?>
                .widget-title:before, .widgettitle:before, .page-title:before, .entry-title:before
            {
                display: none;
            }
            <?php } ?>

        <?php 

        /*footer background*/
        if( !empty($business_click_footer_background) )
        {?>
            .site-footer
            {
                background-color: <?php echo esc_attr($business_click_footer_background);?>;
            }

        <?php } ?>
       </style>
    <?php

    
    }
endif;
add_action( 'wp_head', 'business_click_inline_style' );

