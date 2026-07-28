<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Sonderkreativelement === ></div>

<?php
$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$heading_group = get_field('headings_group');
$alt_heading = $heading_group['alt-heading'];
$teaser_heading = $heading_group['teaser-heading'];

$main_heading_group = $heading_group['main-heading-group'];
$tag = $main_heading_group['tag'];
$heading = $main_heading_group['heading'];

$content = get_field('content');
$img = $content['img'];
$text = $content['text'];
$link = $content['link'];

?>

<div class="section creative-block <?php echo $bg_color; ?>">
    <div class="section__container">
        <div class="row <?php echo $classes; ?> pe-lg-5 pe-xl-8 pe-xxl-10 pe-xxxl-11 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11">
            
            <div class="align-items-lg-center bg-green d-flex flex-column flex-md-row flex-md-wrap position-relative py-5 py-lg-4 py-xl-0 px-xxl-0">
            
                <?php if( !empty( $img ) ){ ?>
                    <div class="col-12 col-md-6 col-lg-4 order-3 order-md-1 pe-md-2 p-xxl-0">
                        <?php echo wp_get_attachment_image($img, 'full'); ?>                
                    </div>
                <?php } ?>
        
            
                <?php if( !empty( $heading ) || !empty( $alt_heading ) || !empty( $link ) ) { ?>
                    
                    <div class="col-12 col-lg-4 col-md-6 col-xl-3 order-1 order-md-1 pe-lg-2 ps-md-2 px-xxl-4 py-xl-5">

                        <?php if( !empty( $alt_heading ) ){ ?>
                            <p class="heading-md mb-4"><?php echo $alt_heading; ?></p>
                        <?php } ?>

                        <?php if( !empty( $heading ) ){ ?>
                            <<?php echo $tag; ?> class="text-uppercase mb-4 paragraph">
                                <?php echo $heading; ?>
                            </<?php echo $tag; ?>>
                        <?php } ?>
                    
                        <?php if( !empty( $link ) ){ ?>
                            <a class="btn mb-5 mb-lg-0" href="<?php echo $link; ?>">
                                <img src="<?php bloginfo('template_url'); ?>/img/arrow-btn.svg">
                            </a>
                        <?php } ?>
                    
                    </div>
                    
                <?php } ?>                

                <?php if( !empty( $text ) ){ ?>
                    <div class="col-12 col-lg-4 col-md-12 col-xl-5 mb-4 mb-md-0 order-2 order-md-3 ps-lg-2 pt-lg-0 pt-md-4 px-xxl-4 py-xl-5">
                        <?php echo $text; ?>
                    </div>
                <?php } ?>
            </div>

            <?php if( !empty( $teaser_heading ) ){ ?>
                <div class="teaser-heading col-12 d-none d-lg-flex pe-lg-5 pe-xl-8 pe-xxl-10 pe-xxxl-11 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11">
                    <p><?php echo $teaser_heading; ?></p>
                </div>
            <?php } ?>

        </div>
    </div>
</div>