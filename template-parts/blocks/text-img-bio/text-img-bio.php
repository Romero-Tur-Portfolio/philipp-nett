<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Text/Bild Vita === ></div>

<?php
$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$heading_group = get_field('headings_group');
$main_heading_group = $heading_group['main-heading-group'];
$tag = $main_heading_group['tag'];
$heading = $main_heading_group['heading'];

$content = get_field('content');
$img = $content['img'];
$text = $content['text'];

?>

<div class="section text-img-bio <?php echo $bg_color; ?>">
    <div class="section__container">
        <?php if( !empty($id) ){ ?>
            <div class="anchor-bar" id="<?php echo $id; ?>"></div>
        <?php } ?>
        <div class="row <?php echo $classes; ?>">

            <div class="col-12 order-1 order-lg-1 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 pe-lg-5 pe-xl-8 pe-xxl-10 pe-xxxl-11 mb-4 mb-lg-5">
                <?php if( !empty( $heading ) ){ ?>
                    <<?php echo $tag; ?> class="col-12 col-lg-9 col-md-10 col-xl-8 col-xxl-7 heading-lg">
                        <?php echo $heading; ?>
                    </<?php echo $tag; ?>>
                <?php } ?>
            </div>
            
            <div class="col-12 col-lg-7 col-xxl-8 order-2 order-lg-3 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 pe-md-3 pe-lg-5 pe-xl-8 pe-xxl-10 pe-xxxl-11 mb-4">
                <?php if( !empty( $text ) ){ ?>
                    <?php echo $text; ?>
                <?php } ?>
            </div>

            <div class="col-12 col-lg-5 col-xxl-4 order-3 order-lg-2 px-lg-0">
                <?php if( !empty( $img ) ){ ?>
                    <?php echo wp_get_attachment_image($img, 'full'); ?>
                <?php } ?>
            </div>

        </div>
    </div>
</div>

