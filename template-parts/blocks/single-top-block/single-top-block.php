<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Top-Block (Single) === ></div>

<?php
$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$img = get_field('img');

$heading_group = get_field('heading');
$tag = $heading_group['tag'];
$heading_text = $heading_group['text'];

$labels = get_field('labels');
$label = $labels['label'];
$sub_label = $labels['sub-label'];

?>

<div class="section single-top-block <?php echo $bg_color; ?>">
    <div class="section__container">

        <div class="row <?php echo $classes; ?>">

            <div class="col-12 col-md-6 col-lg-7 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 pe-lg-5 d-flex flex-column justify-content-between">
                <div>
                    <?php if( !empty($label) ){ ?>
                        <p class="heading-lg mt-5 mb-3"><?php echo ($label); ?></p>
                    <?php } ?>

                    <?php if( !empty($sub_label) ){ ?>
                        <p class="heading-flow mt-3 mb-5"><?php echo ($sub_label); ?></p>
                    <?php } ?>
                </div>

                <?php if( !empty($heading_text) ){ ?>
                    <<?php echo $tag; ?> class="heading-xl m-0 mb-4 mb-lg-6 mb-md-5 mb-xl-7 mb-xxl-8">
                        <?php echo $heading_text; ?>
                    </<?php echo $tag; ?>>
                <?php } ?>

            </div>

            <div class="col-12 col-md-6 col-lg-5 px-md-0 pb-4 pb-md-0">
                <?php if( !empty($img) ){ ?>
                    <?php echo wp_get_attachment_image($img, 'full'); ?>
                <?php } ?>
            </div>

        </div>
    </div>
</div>