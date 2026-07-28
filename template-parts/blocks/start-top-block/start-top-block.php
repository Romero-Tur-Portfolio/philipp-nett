<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === start-top-block === ></div>

<?php
$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$extra_info = get_field('extra-info', 'option');
$avis = $extra_info['avis'];

$img = get_field('img');

$heading_group = get_field('heading');
$tag = $heading_group['tag'];
$heading_text = $heading_group['text'];
?>

<div class="section start-top-block <?php echo $bg_color; ?>">
    <div class="section__container">
        <?php if( !empty($id) ){ ?>
            <div class="anchor-bar" id="<?php echo $id; ?>"></div>
        <?php } ?>
        <div class="row <?php echo $classes; ?>">
            
            <div class="col-12 order-2 order-lg-1 position-relative px-lg-0">
                <?php if( !empty($img) ){ ?>
                    <?php echo wp_get_attachment_image($img, 'full'); ?>
                <?php } ?>
            </div>

            <div class="col-12 start-top-block__content order-1 order-lg-2 position-relative position-lg-absolute px-lg-0">
                <div class="row align-items-lg-end">
                    <div class="col-12 col-lg-8">                    
                        <?php if( !empty($heading_text) ){ ?>
                            <<?php echo $tag; ?> class="heading-br color-black color-lg-white heading-xl mb-4 mb-lg-5 pe-lg-4 pe-md-3 ps-lg-5 ps-md-3 text-shadow">
                                <?php echo $heading_text; ?>
                            </<?php echo $tag; ?>>
                        <?php } ?>                
                    </div>
                    <?php if( !empty($avis) ){ ?>
                        <div class="col-12 col-lg-4 d-flex justify-content-end">
                            <div id="avis" class="bg-green mb-4 mb-lg-0 p-3 p-xl-4 pe-5 pe-xl-5">
                                <div id="avis__content">
                                    <p><?php echo $avis; ?></p>
                                </div>
                                <button id="avis__btn">
                                    <img src="<?php bloginfo('template_url'); ?>/img/avis-btn.svg">
                                </button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>