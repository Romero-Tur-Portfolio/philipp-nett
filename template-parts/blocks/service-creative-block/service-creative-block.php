<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Leistungs-Kreativelement === ></div>

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

$content = get_field('content');
$img = $content['img'];
$text = $content['text'];
$link = $content['link'];

?>

<div class="section service-creative-block <?php echo $bg_color; ?>">
    <div class="section__container">
        <div class="row pe-lg-5 pe-xl-8 pe-xxl-10 pe-xxxl-11 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 <?php echo $classes; ?>">

            <?php if( !empty( $heading ) || !empty( $alt_heading ) || !empty( $link ) ) { ?>

                <div class="col-12 col-md-6 col-lg-4 order-1 order-md-1 mt-lg-5 mt-xl-6 mt-xxl-7 mt-xxxl-8">

                    <?php if( !empty( $alt_heading ) ){ ?>
                        <p class="heading-md mb-4"><?php echo $alt_heading; ?></p>
                    <?php } ?>

                    <?php if( !empty( $heading ) ){ ?>
                        <<?php echo $tag; ?> class="paragraph color-sage text-uppercase mb-4">
                            <?php echo $heading; ?>
                        </<?php echo $tag; ?>>
                    <?php } ?>
                
                    <?php if( !empty( $link ) ){ ?>
                        <a class="btn mb-4 mb-lg-0" href="<?php echo $link; ?>">
                            <img class="passive" src="<?php bloginfo('template_url'); ?>/img/arrow-btn.svg">
                            <img class="hover" src="<?php bloginfo('template_url'); ?>/img/arrow-btn--sage.svg">
                        </a>
                    <?php } ?>
                
                </div>
                
            <?php } ?>


            <?php if( !empty( $text ) ){ ?>
                <div class="col-12 col-md-12 col-lg-4 order-2 order-md-3 mb-4 mb-md-0 mt-lg-5 mt-xl-6 mt-xxl-7 mt-xxxl-8">
                    <?php echo $text; ?>
                </div>
            <?php } ?>

            
            <?php if( !empty( $img ) ){ ?>
                <div class="img-content col-12 col-md-6 col-lg-4 order-3 order-md-2 mb-md-4 mb-lg-0">
                    <?php echo wp_get_attachment_image($img, 'full'); ?>                
                </div>
            <?php } ?>
            
                
            
            

            


        </div>
    </div>
</div>