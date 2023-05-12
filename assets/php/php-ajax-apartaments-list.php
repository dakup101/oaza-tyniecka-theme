<?php 
add_action('init', 'return_apartaments_list_init');

function return_apartaments_list_init(){
    add_action( 'wp_ajax_nopriv_apartaments_list', 'return_apartaments_list' );
    add_action( 'wp_ajax_apartaments_list', 'return_apartaments_list' );
}

function return_apartaments_list(){
    $amount = isset($_POST['amount']) ? $_POST['amount'] : "-1";
    $html = apartaments_view_list($amount);
    echo $html;
    wp_die();
}

function apartaments_view_list($amount) { 
?>

<?php
$args = array(
    "numberposts" => $amount,
    "post_type" => "apartaments",
    "status" => "publish"
);

if (isset($_POST['minMeters'])) {
    $args += array(
        "meta_query" => array(
            "relation" => "AND", 
            array(
                "key" => "apartament_meters",
                "value" => $_POST['minMeters'],
                "compare" => ">="
            ),
            array(
                "key" => "apartament_meters",
                "value" => $_POST['maxMeters'],
                "compare" => "<="
            ),
            array(
                "key" => "apartament_price",
                "value" => $_POST['minPrice'],
                "compare" => ">="
            ),
            array(
                "key" => "apartament_price",
                "value" => $_POST['maxPrice'],
                "compare" => "<="
            )
        )
        );
}


$apartaments = get_posts($args);
?>

<?php if (!empty($apartaments)) : ?>

<div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-10">
    <?php foreach ($apartaments as $el) : ?>
    <div class="border border-gray">
        <a href="<?php echo get_field('rzut_pdf', $el->ID) ?>"
           target="_blank"
           class="block w-full relative after:absolute after:w-full after:top-0 after:transition-all after:left-0 after:h-full after:bg-yellow after:opacity-0 hover:after:opacity-30">
            <img class="w-full"
                 src="<?php echo get_field('preview', $el->ID) ?>"
                 alt="<?php echo $el->post_title; ?>">
        </a>
        <div class="grid grid-cols-2 px-5 pt-5 gap-5">
            <figure class="flex items-center justify-center">
                <img class="h-6"
                     src="<?php echo THEME_IMG . 'rooms.svg' ?>"
                     alt="">
                <div class="flex flex-col ml-5">
                    <p class="uppercase">
                        <?php echo __("Metraż", "oaza-tyniecka-theme"); ?>
                    </p>
                    <p class="font-bold text-lg"><?php echo get_field('apartament', $el->ID)['meters'] ?> m²</p>
                </div>
            </figure>
            <figure class="flex items-center justify-center">
                <img class="h-6"
                     src="<?php echo THEME_IMG . 'meters.svg' ?>"
                     alt="">
                <div class="flex flex-col ml-5">
                    <p class="uppercase">
                        <?php echo __("Pokoje", "oaza-tyniecka-theme") ?>
                    </p>
                    <p class="font-bold text-lg"><?php echo get_field('apartament', $el->ID)['rooms'] ?></p>
                </div>
            </figure>
        </div>
        <div class="p-5">
            <a class="w-full btn-card"
               href="<?php echo get_field('rzut_pdf', $el->ID) ?>"
               target="_blank">
                <?php echo __("Zobacz", "oaza-tyniecka-theme") ?>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php else : ?>

<div class="pt-10 text-center text-2xl font-bold mb-1">
    <?php echo __("Brak wyników wyszukania", "oaza-tyniecka-theme"); ?>
</div>
<div class="text-lg pb-10 text-center">
    <?php echo __("spróbuj z innymi ustawieniami filtra", "oaza-tyniecka-theme"); ?>
</div>
<?php endif; ?>
<?php return ob_get_clean(); 
} 