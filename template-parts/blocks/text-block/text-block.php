<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Text Abschnitt === ></div>

<?php
$name_id = get_field('name_id');
$id = $name_id['id'];

$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];

$heading_group = get_field('heading');
$tag = $heading_group['tag'];
$heading_text = $heading_group['text'];

$text = get_field('text');

?>

<div class="section text-block <?php echo $bg_color; ?>">
    <div class="section__container">
        <?php if( !empty($id) ){ ?>
            <div class="anchor-bar" id="<?php echo $id; ?>"></div>
        <?php } ?>
        <div class="row <?php echo $classes; ?>">

            <div class="col-12 col-lg-11 col-xl-9 col-xxl-8 ps-lg-5 ps-xl-8 ps-xxl-10 ps-xxxl-11 pe-lg-5">
                <?php if( !empty($heading_text) ){ ?>
                    <<?php echo $tag; ?> class="color-black mb-4">
                        <?php echo $heading_text; ?>
                    </<?php echo $tag; ?>>
                <?php } ?>       
                <?php echo $text; ?>
            </div>

        </div>
    </div>
</div>

