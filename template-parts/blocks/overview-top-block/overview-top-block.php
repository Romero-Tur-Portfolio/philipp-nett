<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Top-Block (Deckblatt) === ></div>

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
?>

<div class="section overview-top-block <?php echo $bg_color; ?>">
    <div class="section__container px-0">

        <div class="row <?php echo $classes; ?>">
        
            <?php if( !empty($img) ){ ?>
                <div class="col-12 order-2 order-lg-1 position-relative px-lg-0">                
                    <?php echo wp_get_attachment_image($img, 'full'); ?>
                </div>
            <?php } ?>

            <div class="col-12 start-top-block__content order-1 order-lg-2 position-relative position-lg-absolute px-lg-0">
                <div class="row align-items-lg-end">
                    <div class="col-12 col-lg-7">
                        <?php if( !empty($heading_text) ){ ?>
                            <<?php echo $tag; ?> class="heading-br color-black color-lg-white heading-xl mb-4 mb-lg-5 ps-lg-5 ps-md-3 text-shadow">
                                <?php echo $heading_text; ?>
                            </<?php echo $tag; ?>>
                        <?php } ?>                
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>