<div class="d-none" style="border: 1px solid black;">Accordion-Abschnitt</div>

<?php
$section_name_id = get_field('name_id');

$id = "";

if( isset($section_name_id['id']) && !empty($section_name_id['id']) ){
    $id = preg_replace("/[^a-zA-Z0-9]/", "", $section_name_id['id']);
} else {
    $id = "accordion";
}



$repeater = get_field('repeater');

?>

<div class="section accordion-section">
    <div class="section__container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <?php if( $repeater ){ ?>

                    <div class="accordion" id="<?php echo $id; ?>">
                        <?php $start_id_num = 0; ?>
                        <?php foreach( $repeater as $entry ) { ?>
                            <div class="accordion-item">

                                <?php if( !empty( $entry['title']) ){ ?>
                                    <div class="accordion-header" id="heading-<?php echo $id; ?>-<?php echo $start_id_num ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $id; ?>-<?php echo $start_id_num ?>" aria-expanded="true" aria-controls="collapse-<?php echo $id; ?>-<?php echo $start_id_num ?>">
                                            <?php echo $entry['title']; ?>
                                        </button>
                                    </div>
                                <?php }

                                if( !empty( $entry['content']) ){ ?>
                                    <div id="collapse-<?php echo $id; ?>-<?php echo $start_id_num ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $id; ?>-<?php echo $start_id_num ?>" data-bs-parent="#<?php echo $id; ?>">
                                        <div class="accordion-body">
                                            <?php echo $entry['content']; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        <?php $start_id_num++; } ?>

                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>

