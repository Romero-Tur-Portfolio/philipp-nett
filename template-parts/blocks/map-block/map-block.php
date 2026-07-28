<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Karten-Block === ></div>

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
$road_planner = $content['road-planner-group'];
$road_planner_url = $road_planner['url'];
$road_planner_anchro_text = $road_planner['anchor-text'];

?>

<div class="section map-block <?php echo $bg_color; ?>">
    <div class="section__container">
        <div class="row <?php echo $classes; ?>">

            <div class="col-12 px-0">
                <?php if( !empty( $img ) ){ ?>
                    <?php echo wp_get_attachment_image($img, 'full'); ?>
                <?php } ?>
                <?php if( isset($road_planner) && !empty($road_planner) ){ ?>
                    <a href="<?php echo $road_planner_url; ?>">
                        <?php echo $road_planner_anchro_text; ?>
                    </a>
                <?php } ?>
            </div>

        </div>
    </div>
</div>

