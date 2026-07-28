<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Parallax-Fenster === ></div>

<?php

$name_id = get_field('name_id');
$id = $name_id['id'];

/*$bg_color_classes = get_field('bg-color_classes');
$bg_color = $bg_color_classes['bg-color'];
$classes = $bg_color_classes['classes'];*/

$img = get_field('img');

?>

<?php if( isset( $img ) && !empty( $img ) ){ ?>

    <div class="section parallax-window">
        <div class="section__container">
            <div class="img-content" style="background-image: url(<?php echo $img['url']; ?>)"></div>
        </div>
    </div>

<?php } ?>

