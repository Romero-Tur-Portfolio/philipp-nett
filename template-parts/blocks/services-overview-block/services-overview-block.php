<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Leistungen-Übersicht === ></div>

<?php
$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$options = get_field('section-options');
$quote = $options['quote'];
$bg_img = $options['img'];

$services = get_field('services');

?>

<div class="section services-overview-block <?php echo $bg_color; ?>">
    <div class="section__container">
        
        <?php if( !empty($bg_img) ){ ?>
            <div class="bg-pic">
                <img src="<?php echo $bg_img['url']; ?>">
            </div>
        <?php } ?>

        <div class="row <?php echo $classes; ?>">

            <?php if( !empty($quote) ){ ?>
                <div class="services-quote col-12 d-block d-lg-none">
                    <div class="services-quote__text">
                        <?php echo $quote; ?>
                    </div>
                </div>
            <?php } ?>

            <?php if( isset($services) && !empty($services) ){ ?>
                <div class="col-12 ps-lg-5 pe-lg-5 ps-xl-8 pe-xl-8 ps-xxl-10 pe-xxl-10 ps-xxxl-11 pe-xxxl-11">
                    <div class="row services">
                        <?php for($i=0; $i<2; $i++){ ?>
                            <div class="col-12 col-md-6 services__entry mb-5">
                                <?php if( !empty($services[$i]['link']) ){ ?>

                                    <a class="d-flex flex-column flex-sm-row flex-md-column services__entry__link" href="<?php echo $services[$i]['link']; ?>">
                                        <div class="services__entry__img col-12 col-sm-5 col-md-12">
                                            <div class="services__entry__img__shade"></div>
                                            <?php if( !empty($services[$i]['img']) ){ ?>
                                                <?php echo wp_get_attachment_image($services[$i]['img'], 'full'); ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col-12 col-sm-7 col-md-12 services__entry__strings mt-3 mt-sm-0 mt-md-3 ps-sm-4 ps-md-0">
                                            <div class="services__entry__title">
                                                <?php if( !empty($services[$i]['text']) ){ ?>
                                                    <p class="heading-lg"><?php echo $services[$i]['text']; ?></p>                                    
                                                <?php } ?>                                    
                                            </div>
                                            <button class="services__entry__btn mt-2 mt-lg-4">
                                                <div>Mehr</div>
                                                <div class="arrow">
                                                    <span>erfahren</span>
                                                    <img src="<? bloginfo('template_url'); ?>/img/arrow-btn.svg">
                                                </div>
                                            </button>
                                        </div>                                        
                                    </a>
                                    
                                <?php } else { ?>

                                    <div class="services__entry__img col-12">
                                        
                                        <?php if( !empty($services[$i]['img']) ){ ?>
                                            <?php echo wp_get_attachment_image($services[$i]['img'], 'full'); ?>
                                        <?php } ?>
                                    </div>

                                    <div class="col-12">                                        
                                        <?php if( !empty($services[$i]['text']) ){ ?>
                                            <div class="services__entry__title">
                                                <p><?php echo $services[$i]['text']; ?></p> 
                                            </div>                                   
                                        <?php } ?>                                    
                                    </div>

                                <?php } ?>
                            </div>

                        <?php } ?>


                        <?php if( !empty($quote) ){ ?>
                            <div class="services-quote col-12 d-none d-lg-block">
                                <div class="services-quote__text">
                                    <?php echo $quote; ?>
                                </div>
                            </div>
                        <?php } ?>


                        <?php if( isset($services[2]) && !empty($services[2]) ){ ?>
                            <div class="services__entry col-12 col-md-6 mb-5">
                                <?php if( !empty($services[2]['link']) ){ ?>

                                    <a class="d-flex flex-column flex-sm-row flex-md-column services__entry__link" href="<?php echo $services[2]['link']; ?>">
                                        <div class="services__entry__img col-12 col-sm-5 col-md-12">
                                            <div class="services__entry__img__shade"></div>
                                            <?php if( !empty($services[2]['img']) ){ ?>
                                                <?php echo wp_get_attachment_image($services[2]['img'], 'full'); ?>
                                            <?php } ?>
                                        </div>
                                        <div class="col-12 col-sm-7 col-md-12 services__entry__strings mt-3 mt-sm-0 mt-md-3 ps-sm-4 ps-md-0">
                                            <div class="services__entry__title">
                                                <?php if( !empty($services[2]['text']) ){ ?>
                                                    <p class="heading-lg"><?php echo $services[2]['text']; ?></p>                                    
                                                <?php } ?>                                    
                                            </div>
                                            <button class="services__entry__btn mt-2 mt-lg-4">
                                                <div>Mehr</div>
                                                <div class="arrow">
                                                    <span>erfahren</span>
                                                    <img src="<? bloginfo('template_url'); ?>/img/arrow-btn.svg">
                                                </div>
                                            </button>
                                        </div>                                        
                                    </a>
                                    
                                <?php } else { ?>

                                    <div class="services__entry__img col-12">
                                        <?php if( !empty($services[2]['img']) ){ ?>
                                            <?php echo wp_get_attachment_image($services[2]['img'], 'full'); ?>
                                        <?php } ?>
                                    </div>
                                    <div class="services__entry__title-link col-12">
                                        <?php if( !empty($services[2]['title']) ){ ?>
                                            <p><?php echo $services[2]['title']; ?></p>                                    
                                        <?php } ?>                                    
                                    </div>

                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>