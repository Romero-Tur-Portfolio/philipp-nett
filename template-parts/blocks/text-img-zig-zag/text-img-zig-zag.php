<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Text/Bild Zig-Zag === ></div>

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

?>

<div class="section text-img-zig-zag <?php echo $bg_color; ?>">
    <div class="section__container">
        <div class="row <?php echo $classes; ?>">
            <?php if( !empty( $heading ) ){ ?>
                <div class="headings col-12 col-md-10 col-lg-9 col-xl-5 mb-4 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 pe-lg-5">
                
                    <<?php echo $tag; ?> class="heading-lg">
                        <?php echo $heading; ?>
                    </<?php echo $tag; ?>>
                
                    <?php if( !empty( $alt_heading ) ){ ?>
                        <h3 class="heading-flow mt-3"><?php echo $alt_heading; ?></h3>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if( !empty( $text ) ){ ?>
                <?php echo $text; ?>
            <?php } ?>

            <?php if( !empty( $img ) ){ ?>
                <div class="col-12 col-xl-5 img-content pe-xl-4 pe-xxl-6 ps-xl-0">
                    <?php echo wp_get_attachment_image($img, 'full'); ?>
                </div>
            <?php } ?>

        </div>
    </div>
</div>

