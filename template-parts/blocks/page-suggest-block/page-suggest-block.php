<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">Seiten-Vorschlag-Block</div>

<?php
$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$heading = get_field('heading');

$page_suggest_repeater = get_field('page-suggest-repeater');

?>

<div class="section page-suggest-block <?php echo $bg_color; ?>">
    <div class="section__container">

        <div class="row <?php echo $classes; ?>">
            
            <?php if( isset($heading) && !empty($heading) ){ ?>
                <div class="col-12 col-md-4 col-xxl-3 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 mb-5">
                    <p class="heading-flow"><?php echo $heading; ?></p>
                </div>                
            <?php } ?>

            <?php if( isset($page_suggest_repeater) && !empty($page_suggest_repeater) ){ ?>
                <div class="col-12 col-md-8 col-xxl-9 pe-lg-5 pe-xl-8 pe-xxl-10 pe-xxxl-11">
                    <div class="row">
                        <?php foreach( $page_suggest_repeater as $suggest ){ ?>
                            <div class="col-12 col-md-6 suggestion mb-5 mb-md-0">
                                <?php if( !empty($suggest['link']) ){ ?>
                                    <a class="suggestion__link" href="<?php echo $suggest['link']; ?>">
                                        <?php if( isset($suggest['img']) && !empty($suggest['img']) ){ ?>
                                            <div class="suggestion__img d-none d-md-flex mb-md-4">
                                                <?php echo wp_get_attachment_image($suggest['img'], 'full'); ?>
                                            </div>
                                        <?php } ?>
                                        <div class="suggestion__link__content d-flex flex-column">
                                            <?php if( isset($suggest['page-name']) && !empty($suggest['page-name']) ){ ?>
                                                <p class="heading-md mb-2">
                                                    <?php echo $suggest['page-name']; ?>
                                                </p>
                                            <?php } ?>

                                            <?php if( isset($suggest['link']) && !empty($suggest['link']) ){ ?>
                                                <button class="suggestion__link__btn">
                                                    <img src="<?php bloginfo('template_url'); ?>/img/arrow-btn.svg">
                                                </button>
                                            <?php } ?>
                                        </div>
                                    </a>
                                <?php } else { ?>

                                    <?php if( isset($suggest['img']) && !empty($suggest['img']) ){ ?>
                                        <div class="suggestion__img d-none d-md-flex mb-md-4">
                                            <?php echo wp_get_attachment_image($suggest['img'], 'full'); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="suggestion__content d-flex flex-column">
                                        <?php if( isset($suggest['page-name']) && !empty($suggest['page-name']) ){ ?>
                                            <p class="heading-md mb-1"><?php echo $suggest['page-name']; ?></p>
                                        <?php } ?>
                                    </div>

                                <?php }?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>
</div>

