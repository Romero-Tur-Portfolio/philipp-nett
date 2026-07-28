<div class="d-none" style="border: 1px solid gray; padding: 15px; text-transform: uppercase;">< === Code Abschnitt === ></div>

<?php
$name_id = get_field('name_id');
$id = $name_id['id'];
$code = get_field('code');

?>

<?php if( !empty($code) ){ ?>
<style>
    <?php echo $code; ?>
</style>
<?php } ?>
