<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Kontakt-Block === ></div>

<?php
$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$heading_group = get_field('headings_group');
$alt_heading = $heading_group['alt-heading'];
$main_heading_group = $heading_group['main-heading-group'];
$tag = $main_heading_group['tag'];
$heading = $main_heading_group['heading'];

$text = get_field('text');
$code = get_field('code');

?>

<div class="section contact-section <?php echo $bg_color; ?>">
    <div class="section__container">
        <div class="row position-relative <?php echo $classes; ?> ps-lg-5 ps-xl-10 ps-xxl-14 pe-lg-5 pe-xl-10 pe-xxl-14">

            <div class="text-content col-12 col-lg-7 col-xxl-8 mb-5 ps-xxl-7 ps-xxxl-11 pe-xxl-7 pe-xxxl-11">
                <?php if( !empty( $heading ) ){ ?>
                    <<?php echo $tag; ?> class="heading-lg mb-3"><?php echo $heading; ?></<?php echo $tag; ?>>
                <?php } ?>
                <?php if( !empty( $alt_heading ) ){ ?>
                    <p class="heading-flow mb-3 mb-md-4 mb-lg-5 mb-xl-6 mb-xxl-7"><?php echo $alt_heading; ?></p>
                <?php } ?>
                <?php if( !empty( $text ) ){ ?>
                    <?php echo $text; ?>
                <?php } ?>
            </div>
            
            <div class="form-content col-12 ps-xxl-7 ps-xxxl-11 pe-xxl-7 pe-xxxl-11">
                <?php if( !empty( $code ) ){ ?>
                    <?php echo do_shortcode( $code ); ?>
                <?php } ?>
            </div>

        </div>
    </div>
</div>

