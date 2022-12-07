<?php 
add_action('init', 'return_apartaments_house_init');

function return_apartaments_house_init(){
	add_action( 'wp_ajax_nopriv_apartaments_info', 'return_apartaments_house_info' );
	add_action( 'wp_ajax_apartaments_info', 'return_apartaments_house_info' );
}

function return_apartaments_house_info(){
	$tile_id = isset($_POST['tile_id']) ? $_POST['tile_id'] : "3";
	$html = apartaments_house_info($tile_id);
	echo $html;
	wp_die();
}

function apartaments_house_info($tile_id) { 
?>

<?php
	$args = array(
		"numberposts" => 1,
		"post_type" => "apartaments",
		"status" => "publish",
		"meta_key" => "id_warstwy_na_renderze_wybierz_dom", 
		"meta_value" => $tile_id
	);
	$house = get_posts($args);
	if (!empty($house)) :
	$id = $house[0]->ID;
?>
<div class="text-md">Nr</div>
<div class="text-lg border-b-gray border-b-2 pb-1 mb-1 font-medium"><?php echo $house[0] -> post_title ?></div>
<div class="mb-1 text-sm"><?php echo __("Powierzchnia domu", "oaza-tyniecka-theme"); ?>:
    <strong><?php echo get_field('apartament', $id)['meters'] ?> m²</strong>
</div>
<!-- <div class="mb-1 text-sm">Powierzchnia garażu: <strong><?php echo get_field('apartament', $id)['meters'] ?> m²</strong>
</div> -->
<div class="mb-1 text-sm"><?php echo __("Powierzchnia ogródka", "oaza-tyniecka-theme") ?>:
    <strong><?php echo get_field('apartament', $id)['field'] ?> m²</strong>
</div>
<div class="mb-1 text-sm"><?php echo __("Status", "oaza-tyniecka-theme"); ?>:
    <strong>
        <?php
		$status = get_field('apartament', $id)['status'] ;
	if ($status == "avaliable") echo "Dostępne";
	else if ($status == "reserved") echo "Rezerwacja";
	else echo "Sprzedane"
		?>
    </strong>
</div>
<div class="text-sm mb-1">Cena: <strong><?php echo get_field('apartament', $id)['price'] ?> zł</strong></div>
<a class="w-full btn-card info-btn" href="<?php echo get_field('rzut_pdf', $id) ?>"
    target="_blank"><?php echo __("Zobacz", "oaza-tyniecka-theme") ?></a>

<?php else : ?>
<div>
    <?php echo __("Brak info o tym domie", "oaza-tyniecka-theme"); ?>
</div>
<?php endif; ?>

<?php return ob_get_clean(); ?>

<?php } ?>