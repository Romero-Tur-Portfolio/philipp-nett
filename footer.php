<?php

require_once 'custom-functions.php';

$open_hours_repeater = get_field('open-hours', 'option');

$contact_group = get_field('contact', 'option');
$praxis_data = $contact_group['praxis-data'];

$direct_contact_group = $contact_group['direct-contact'];
$tel = $direct_contact_group['tel'];
$email = $direct_contact_group['e-mail'];

$extra_info_group = get_field('extra-info', 'option');
$footer_writings = $extra_info_group['footer-writings'];
$main_footer_string = $footer_writings['main-string'];
$extra_footer_string = $footer_writings['extra-string'];
$parking = $extra_info_group['parking'];

$sm_channels_repeater = get_field('channels', 'option');

$footer_graphics = get_field('graphics', 'option');
$footer_img = $footer_graphics['footer-img'];

?>

<footer class="">
    <div class="section__container bg-black color-green">
        
        <?php if( !empty($footer_img) ){ ?>
            <div id="footer__pic">
                <img src="<?php echo $footer_img; ?>">
            </div>
        <?php } ?>

        <div class="row ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 pe-lg-5 pe-xl-8 pe-xxl-10 pe-xxxl-11 pb-6 pb-lg-5 pb-xl-6 pb-xxl-7 pb-xxxl-8 pt-5 pt-md-6 pt-xxl-7 pt-xxxl-8">

            <?php if( !empty($main_footer_string) ){ ?>
                <p class="heading-lg mb-4 col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7">
                    <?php echo $main_footer_string; ?>
                </p>
            <?php } ?>

            <?php if( !empty($extra_footer_string) ){ ?>
                <p class="heading-flow mb-4 mb-lg-6 mb-md-5 mb-xl-7 mb-xxl-8 col-12 col-md-10 col-lg-9 col-xl-8">
                    <?php echo $extra_footer_string; ?>
                </p>
            <?php } ?>
            
            <div class="col-12 col-md-6 col-lg-5 mb-4 mb-lg-0">
                <?php if( !empty($praxis_data) ){
                    echo $praxis_data;
                } ?>

                <?php if( !empty($tel) ){ ?>
                    <p class="mb-0"><a href="<?php echo tel_validity( $tel ); ?>"><?php echo $tel; ?></a></p>
                <?php } ?>

                <?php if( !empty($email) ){ ?>
                    <p class="mb-0"><a href="<?php echo email_validity( $email ); ?>"><?php echo $email; ?></a></p>
                <?php } ?>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <?php if( isset( $open_hours_repeater ) && !empty( $open_hours_repeater ) ){ ?>
                    <div class="open-hours">
                        <div class="text-uppercase mb-2">Sprechzeiten</div>
                        <?php foreach( $open_hours_repeater as $days_hours ){ ?>
                            <?php if( isset( $days_hours['days-hours'] ) && !empty( $days_hours['days-hours'] ) ){
                                $day_entry = $days_hours['days-hours'];
                                if( isset( $day_entry['day'] ) && !empty( $day_entry['day'] ) && isset( $day_entry['hours-1'] ) && !empty( $day_entry['hours-1'] ) ){ ?>
                                    <div class="open-hours__entry mb-2">
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
                        <div>Sowie nach Vereinbarung</div>
                    </div>
                <?php } ?>
            </div>

            <div class="col-12 col-lg-3 align-self-lg-end">
                <?php if( isset($sm_channels_repeater) && !empty($sm_channels_repeater) ){ ?>
                    <div class="data-row align-items-sm-center mb-4 mb-xl-5 mb-xxxl-6">
                        <div class="data-row__data d-flex">
                            <?php foreach( $sm_channels_repeater as $channel ){ 
                                if( isset($channel['url']) && !empty($channel['url']) && isset($channel['logo']) && !empty($channel['logo']) ) { ?>
                                    <a class="sm-channel" href="<?php echo $channel['url']; ?>">
                                        <img src="<?php echo $channel['logo']['url']; ?>"/>
                                    </a>
                                <?php } 
                            } ?>
                        </div>
                    </div>                        
                <?php } ?>

                <?php wp_nav_menu( array(
                    'theme_location' => 'footer_menu',
                    'container'     => 'nav',
                    'container_id'  => 'footer__menu'
                )); ?>
            </div>
        </div>
    </div>

    <?php if( !empty($parking) ){ ?>
        <div class="section__container bg-white" id="footer__bottom-part">
            <div class="row ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 pe-lg-5 pe-xl-8 pe-xxl-10 pe-xxxl-11 py-3">
                <div class="col-12">
                    <span>P</span><?php echo $parking; ?>
                </div>
            </div>
        </div>
    <?php } ?>

</footer>

<script rel="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/bootstrap.min.js"></script>
<script rel="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
<script rel="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

<?php wp_footer(); ?>
</body>
</html>