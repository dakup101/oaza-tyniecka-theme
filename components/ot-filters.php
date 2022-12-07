<?php
$args = array(
    'numberposts' => -1,
    'post_type' => 'apartaments',
    'status' => 'published'
);
$apartaments = get_posts($args);
$meters = array();
$rooms = array();
$floors = array();
foreach ($apartaments as $apartament) {
    $post_id = $apartament->ID;
    $info = get_field('apartament', $post_id);
    $meters[] = (int)$info['meters'];
    $price[] = (int)$info['price'];
}
sort($meters);
sort($price);
$min_meter = $meters[0] - 1;
$max_meter = $meters[sizeof($meters) - 1] + 1;
$min_price = $price[0];
$max_price = $price[sizeof($price) - 1];
?>

<form class="filters w-full grid grid-cols-1 sm:grid-cols-3 sm:gap-6 items-center align-middle" autocomplete="off">
    <div class="filters__sliders--item meters">
        <p class="mb-3 font-bold uppercase"><?php echo __("Metraż", "oaza-tyniecka-theme") ?></p>
        <div class="filters__multi-range" data-multi_range>
            <input type="range" min="<?php echo $min_meter ?>" max="<?php echo $max_meter; ?>"
                value="<?php echo $min_meter ?>" data-type="0" data-lower>
            <input type="range" min="<?php echo $min_meter ?>" max="<?php echo $max_meter; ?>"
                value="<?php echo $max_meter ?>" data-type="0" data-upper>
            <div class="filters__multi-range--lefty" data-min data-for="meter">
                <?php echo $min_meter ?>m²
            </div>
            <div class="filters__multi-range--righty" data-max data-for="meter">
                <?php echo $max_meter ?>m²
            </div>
        </div>
    </div>
    <div class="filters__sliders--item price" data-multi_range>
        <p class="mb-3 font-bold uppercase"><?php echo __("Cena", "oaza-tyniecka-theme") ?></p>
        <div class="filters__multi-range">
            <input type="range" min="<?php echo $min_price ?>" max="<?php echo $max_price; ?>"
                value="<?php echo $min_price ?>" step="10000" data-type="1" data-lower>
            <input type="range" min="<?php echo $min_price ?>" max="<?php echo $max_price; ?>"
                value="<?php echo $max_price ?>" step="10000" data-type="1" data-upper>
            <div class="filters__multi-range--lefty" data-min>
                <?php echo $min_price ?>
            </div>
            <div class="filters__multi-range--righty" data-max>
                <?php echo $max_price ?>
            </div>
        </div>
    </div>
    <div>
        <button class="btn-yellow  mb-2 block w-full" data-filter>
            <?php echo __("Pokaż domy", "oaza-tyniecka-theme") ?>
        </button>
    </div>
</form>