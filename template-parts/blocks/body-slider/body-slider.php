<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Slider für Seite === ></div>


<?php

$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$imgs = get_field('imgs');

$text_group = get_field('text-group');
$heading = $text_group['heading'];
$text = $text_group['text'];

$tag_id = "";

if( !empty( $id ) ){
    $tag_id = preg_replace("/[^a-zA-Z0-9]/", "", $id);
} else {
    $tag_id = "body_slider";
}

?>

<?php if( isset( $imgs ) && !empty( $imgs ) ){ ?>
    <div class="section body-slider <?php echo $bg_color; ?>">
        <div class="section__container">
            <div class="row <?php echo $classes; ?> pe-lg-0 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 position-relative">
                <div class="body-slider__text col-12 col-lg-4">
                    <?php if( !empty( $heading ) || !empty( $text ) ){ ?>
                        
                            <?php if( !empty( $heading ) ){ ?>
                                <h2 class="heading-md mb-2 mb-md-3 mb-lg-4"><?php echo $heading; ?></h2>
                            <?php } ?>
                            <?php if( !empty( $text ) ){ ?>
                                <p class="paragraph color-sage text-uppercase mb-4"><?php echo $text; ?></p>
                            <?php } ?>
                    <?php } ?>

                </div>
                <div class="col-12 col-lg-8 pe-xl-0 position-relative position-lg-static">
                    <div id="<?php echo $tag_id; ?>" class="slider">
                        <?php foreach( $imgs as $img ){ ?>
                            <div>
                                <?php echo wp_get_attachment_image($img['img'], 'full'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php } ?>

<script>

function twoDigitNumber(num) {
    let digit = parseInt(num);
    if ( digit >= 0 && digit <= 9 ) {
        return '0' + digit.toString();
    }
}

jQuery(document).ready(function($){
    
    var slider_<?php echo $tag_id; ?> = $('#<?php echo $tag_id; ?>.slider');

    slider_<?php echo $tag_id; ?>.slick({
        arrows: true,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        centerMode: false,
        variableWidth: false,
        adaptiveHeight: false,
        infinite: true,
        autoplay: true,
        mobileFirst: true,
        initialSlide: 0
    });
    
    const slider = document.querySelector('#<?php echo $tag_id; ?>.slider');
    const sliderWindow = document.querySelector('#<?php echo $tag_id; ?>.slider .slick-list');
    const frames = document.querySelectorAll('#<?php echo $tag_id; ?>.slider .slick-slide');
    const sliderBtns = document.querySelectorAll('#<?php echo $tag_id; ?> button.slick-arrow');

    function slideIndex(){
        let slideIndex = document.createElement('div');
        slideIndex.classList.add('slideIndex');

        let slideIndex__cur = document.createElement('div');
        slideIndex__cur.classList.add('slideIndex__cur');
        //slideIndex__cur.innerHTML = twoDigitNumber("1");
        slideIndex__cur.innerHTML = "1";
        slideIndex.insertAdjacentElement('beforeEnd', slideIndex__cur);

        let slideIndex__slash = document.createElement('div');
        slideIndex__slash.classList.add('slideIndex__slash');
        slideIndex__slash.innerHTML = "/";
        slideIndex.insertAdjacentElement('beforeEnd', slideIndex__slash);

        let slideIndex__total = document.createElement('div');
        slideIndex__total.classList.add('slideIndex__total');
        //slideIndex__total.innerHTML = twoDigitNumber((frames.length / 2));
        slideIndex__total.innerHTML = Math.floor(frames.length / 2);
        slideIndex.insertAdjacentElement('beforeEnd', slideIndex__total);

        slider.insertAdjacentElement('beforeEnd', slideIndex);
    }

    function slideCounter(){
        slider_<?php echo $tag_id; ?>.on('afterChange', function(event, slick, currentSlide, nextSlide) {
            var curIndexCell = $(this).find('.slideIndex__cur');
            //curIndexCell[0].innerHTML = twoDigitNumber(currentSlide+1);
            curIndexCell[0].innerHTML = currentSlide + 1;
        });
    }

    slideIndex();
    slideCounter();

});
</script>