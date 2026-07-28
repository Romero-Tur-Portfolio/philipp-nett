<div class="d-none" style="padding: 10px; border: 1px solid; color: gray;">< === TEXT-KONTAKT === ></div>

<?php

$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$open_hours_repeater = get_field('open-hours', 'option');

$contact_group = get_field('contact', 'option');
$praxis_data = $contact_group['praxis-data'];

$direct_contact_group = $contact_group['direct-contact'];
$tel = $direct_contact_group['tel'];
$email = $direct_contact_group['e-mail'];

$code = get_field('code');


function email_check( $arg ){
    $output = 'mailto:' . preg_replace('/[^a-zA-Z0-9@._-]/', '', $arg);
    return $output;
}

function tel_check( $arg ){
    $output = 'tel:' . preg_replace('/[^0-9+]/', '', $arg);
    return $output;
}

?>

<div class="section text-contact <?php echo $bg_color; ?>">
    <div class="section__container">
        <div class="row <?php echo $classes; ?>">
        
            <div class="col-12 ps-lg-5 pe-lg-5 ps-xl-8 pe-xl-8 ps-xxl-10 pe-xxl-10 ps-xxxl-11 pe-xxxl-11">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5 col-xxl-4">
                        
                        <p class="heading-md mb-4">Praxis</p>
                        
                        <?php if( isset($praxis_data) && !empty($praxis_data) ){ ?>
                            <?php echo $praxis_data; ?>
                        <?php } ?>
                        
                        <?php if( isset($tel) && !empty($tel) ){ ?>
                            <div>
                                <a href="<?php echo tel_check( $tel ); ?>">
                                    <span>T </span><?php echo $tel; ?>
                                </a>
                            </div>
                        <?php } ?>
                        
                        <?php if( isset($email) && !empty($email) ){ ?>
                            <div>
                                <a href="<?php echo email_check( $email ); ?>">
                                    <?php echo $email; ?>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if( isset( $open_hours_repeater ) && !empty( $open_hours_repeater ) ){ ?>
                            
                            <p class="heading-md mb-4 mt-5">SPRECHZEITEN</p>
                            <div class="open-hours">
                                <?php foreach( $open_hours_repeater as $days_hours ){ ?>
                                    <?php if( isset( $days_hours['days-hours'] ) && !empty( $days_hours['days-hours'] ) ){
                                        $day_entry = $days_hours['days-hours'];
                                        if( isset( $day_entry['day'] ) && !empty( $day_entry['day'] ) && isset( $day_entry['hours-1'] ) && !empty( $day_entry['hours-1'] ) ){ ?>
                                            <div class="open-hours__entry">
                                                <div class="open-hours__entry__day"><?php echo $day_entry['day']; ?></div>
                                                <div class="open-hours__entry__hours-1"><?php echo $day_entry['hours-1']; ?>
                                                    <?php if( isset( $day_entry['hours-2'] ) && !empty( $day_entry['hours-2'] ) ){ ?>
                                                        <div class="open-hours__entry__hours-2"><span>& </span><?php echo $day_entry['hours-2']; ?></div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </div>

                        <?php } ?>
                    </div>

                    <div class="col-12 col-md-6 col-lg-7 col-xxl-8">
                        <div class="anchor-bar" id="form"></div>
                        <?php if( isset($heading) && !empty($heading) ){ ?>
                            <p class="heading-md mb-4"><?php echo $heading; ?></p>
                        <?php } ?>
                        <?php if( isset($text) && !empty($text) ){ ?>
                            <?php echo $text; ?>
                        <?php } ?>
                        <?php if( isset($code) && !empty($code) ){ ?>
                            <div class="mt-5"><?php echo $code; ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

