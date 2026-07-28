<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset') ?>"/>
    <script rel="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="top"></div>

<?php
require_once 'custom-functions.php';

$contact_group = get_field('contact', 'option');

$direct_contacts = $contact_group['direct-contact'];
$tel = $direct_contacts['tel'];
$email = $direct_contacts['e-mail'];

$instant_app_group = $contact_group['instant-app'];
$instant_app_href = $instant_app_group['href'];

$open_hours_repeater = get_field('open-hours', 'option');

$sm_channels_repeater = get_field('channels', 'option');

?>


<header class="bg-pale-moor">
    <div class="section__container">
        <div class="d-none d-md-block bg-image">
            <img src="<?php bloginfo('template_url'); ?>/img/logo-sage.svg">
        </div>
        <div id="fader-bg" class="d-block"></div>
        <div id="fader" class="d-block">
            <div class="h-100 section__container">
                <div class="h-100 justify-content-between row">
                    <div class="align-items-center align-items-xl-end col-4 col-md-2 col-xxl-3 d-flex order-1"></div>
                    <div class="position-relative col-5 col-md-8 col-sm-3 col-xxl-6 d-flex flex-column justify-content-center order-2 h-100">
                        <div id="video-container">
                            <video width="100%" height="auto" muted="muted">
                                <source src="<?php bloginfo('template_url'); ?>/img/intro-logo.mp4" type="video/mp4">
                                <source src="<?php bloginfo('template_url'); ?>/img/intro.mov" type="video/mov">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-border-fix"></div>
                        </div>
                        <div id="img-top">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo-top.svg">
                        </div>
                        <div id="img-bottom">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo-bottom.svg" >
                        </div>
                    </div>
                    <div class="col-2 col-md-2 col-xxl-1 d-md-flex d-none justify-content-end order-3 order-xxl-4 px-0"></div>
                    
                    <div class="col-12 col-xxl-2 d-flex flex-row flex-xxl-column justify-content-center order-4 order-xxl-3 px-md-0"></div>
                </div>
            </div>
        </div>

		<div class="row justify-content-between" id="headerTopWrap">

            <div class="align-items-center col-4 col-md-2 col-xxl-3 d-flex order-1">
                <button id="header__menu-mob-btn" class="d-block closed" data-opener-sender="header__menu-mob">    
                    <div class="hamburger">
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </button>
            </div>
			
            <div class="col-6 col-md-8 col-sm-3 col-xxl-6 d-flex flex-row justify-content-center order-2 pt-4 pb-4" id="header__logo">
                <div class="align-self-center d-inline-flex">
                    <a class="d-flex flex-column align-items-center" href="<?php echo home_url(); ?>">
                        <img id="header__logo__top" src="<?php bloginfo('template_url'); ?>/img/logo-top.svg" >
                        <img id="header__logo__bottom" src="<?php bloginfo('template_url'); ?>/img/logo-bottom.svg" >
                    </a>
                </div>
			</div>

            <div class="col-2 col-md-2 col-xxl-1 d-md-flex d-none justify-content-end order-3 order-xxl-4 px-0">
                <div class="d-flex flex-column bg-green pt-3 pb-3 ps-4 pe-4">
                    <?php if( isset($sm_channels_repeater) && !empty($sm_channels_repeater) ){ ?>                    
                        <?php foreach( $sm_channels_repeater as $channel ){ 
                            if( isset($channel['url']) && !empty($channel['url']) && isset($channel['logo']) && !empty($channel['logo']) ) { ?>
                                <a class="sm-channel" href="<?php echo $channel['url']; ?>">
                                    <img src="<?php echo $channel['alt-logo']['url']; ?>"/>
                                </a>
                            <?php }
                        } ?>
                    <?php } ?>
                </div>
            </div>

			<div class="bg-black bg-xxl-transparent col-12 col-xxl-2 d-flex flex-row flex-xxl-column justify-content-center align-items-xl-end order-4 order-xxl-3 px-md-0" id="header__utils">                                
                <?php if( !empty( $tel ) || !empty( $email ) ){ ?>
                    <button class="quick-call-btn closed" data-opener-sender="quick-contact-mob">Schnellkontakt</button>
                <?php } ?>
                <?php if( !empty( $instant_app_href ) ){ ?>
                    <a class="quick-call-btn" target="blank" href="<?php echo $instant_app_href; ?>">Online-Termin</a>
                <?php } ?>
			</div>
		</div>

        <div id="header__menu-mob" class="d-block closed" data-opener-receiver="header__menu-mob">
            <?php wp_nav_menu( array(
                'theme_location' => 'header_menu',
                'container'     => 'nav',
                'link_before'   => '<span>',
                'link_after'    => '</span>'
            )); ?>
        </div>

        <?php if( !empty( $tel ) || !empty( $email ) ){ ?>
            <div class="quick-call-pane closed position-fixed d-block text-uppercase p-4 pe-5 bg-white" data-opener-receiver="quick-contact-mob">
                <button class="quick-call-pane__btn"></button>
                <?php if ( !empty($tel) || !empty($mail) ){ ?>
                    <div class="contacts mb-4">
                        <?php if( !empty($tel) ){ ?>
                            <div>
                                <a href="<?php tel_validity( $tel ); ?>">T <?php echo $tel ?></a>
                            </div>
                        <?php } ?>
                        
                        <?php if( !empty($email) ){ ?>
                            <div>
                                <a href="<?php email_validity( $email ); ?>"><?php echo $email ?></a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if( isset( $open_hours_repeater ) && !empty( $open_hours_repeater ) ){ ?>
                    <div class="open-hours">
                        <?php foreach( $open_hours_repeater as $days_hours ){ ?>
                            <?php if( isset( $days_hours['days-hours'] ) && !empty( $days_hours['days-hours'] ) ){
                                $day_entry = $days_hours['days-hours'];
                                if( isset( $day_entry['day'] ) && !empty( $day_entry['day'] ) && isset( $day_entry['hours-1'] ) && !empty( $day_entry['hours-1'] ) ){ ?>
                                    <div class="open-hours__entry">
                                        <div class="open-hours__entry__day"><?php echo $day_entry['day'] ?></div>
                                        <div class="open-hours__entry__hours-1">
                                            <div><?php echo $day_entry['hours-1'] ?><span> </span></div>
                                            <?php if( isset( $day_entry['hours-2'] ) && !empty( $day_entry['hours-2'] ) ){?>
                                                <div class="open-hours__entry__hours-2">und <?php echo $day_entry['hours-2']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</header>