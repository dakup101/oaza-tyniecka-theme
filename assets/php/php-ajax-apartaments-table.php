<?php 
add_action('init', 'return_apartaments_table_init');

function return_apartaments_table_init(){
    add_action( 'wp_ajax_nopriv_apartaments_table', 'return_apartaments_table' );
    add_action( 'wp_ajax_apartaments_table', 'return_apartaments_table' );
}

function return_apartaments_table(){
    $amount = isset($_POST['amount']) ? $_POST['amount'] : "-1";
    $html = apartaments_view_cards($amount);
    echo $html;
    wp_die();
}

function apartaments_view_cards($amount) { 
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
if (!empty($apartaments)) :
?>
<div class="overflow-auto">
    <table class="w-full" data-sort_table>
        <thead class="apartaments-list">
            <tr class="border-t-2 border-b-2 border-gray">
                <th class="px-5 py-2.5">
                    <button data-sort="0"
                        class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                        <?php echo __("nr. domu", "oaza-tyniecka-theme"); ?>
                        <figure class="apartament-list__sort ml-2">
                            <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 29">
                                <path d="M12,0l12,11H0L12,0Z" />
                                <path d="M12,29L0,18H24l-12,11Z" />
                            </svg>
                        </figure>
                    </button>
                </th>
                <th class="px-5 py-2.5">
                    <button data-sort="1"
                        class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                        <?php echo __("metraz", "oaza-tyniecka-theme");?>
                        <figure class="apartament-list__sort ml-2">
                            <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 29">
                                <path d="M12,0l12,11H0L12,0Z" />
                                <path d="M12,29L0,18H24l-12,11Z" />
                            </svg>
                        </figure>
                    </button>
                </th>
                <th class="px-5 py-2.5">
                    <button data-sort="2"
                        class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                        <?php echo __("pokoje", "oaza-tyniecka-theme"); ?>
                        <figure class="apartament-list__sort ml-2">
                            <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 29">
                                <path d="M12,0l12,11H0L12,0Z" />
                                <path d="M12,29L0,18H24l-12,11Z" />
                            </svg>
                        </figure>
                    </button>
                </th>
                <th class="px-5 py-2.5">
                    <button data-sort="3"
                        class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                        <?php echo __("ogród", "oaza-tyniecka-theme") ?>
                        <figure class="apartament-list__sort ml-2">
                            <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 29">
                                <path d="M12,0l12,11H0L12,0Z" />
                                <path d="M12,29L0,18H24l-12,11Z" />
                            </svg>
                        </figure>
                    </button>
                </th>
                <th class="px-5 py-2.5">
                    <button data-sort="4"
                        class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                        <?php echo __("Cena", "oaza-tyniecka-theme"); ?>
                        <figure class="apartament-list__sort ml-2">
                            <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 29">
                                <path d="M12,0l12,11H0L12,0Z" />
                                <path d="M12,29L0,18H24l-12,11Z" />
                            </svg>
                        </figure>
                    </button>
                </th>
                <th class="px-5 py-2.5">
                    <button data-sort="5"
                        class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                        <?php echo __("Status", "oaza-tyniecka-theme"); ?>
                        <figure class="apartament-list__sort ml-2">
                            <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 29">
                                <path d="M12,0l12,11H0L12,0Z" />
                                <path d="M12,29L0,18H24l-12,11Z" />
                            </svg>
                        </figure>
                    </button>
                </th>
                <th class="px-5 py-2.5">
                    <span class="flex items-center uppercase justify-center w-full">
                        <?php echo __("Zobacz dom", "oaza-tyniecka-theme"); ?>
                    </span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($apartaments as $item) : ?>
            <tr class="border-b border-gray">
                <td data-sort_col="0" class="text-center px-5 py-2.5 font-bold">
                    <?php echo $item->post_title ?>
                </td>
                <td data-sort_col="1" class="text-center px-5 py-2.5 font-bold">
                    <?php echo get_field('apartament', $item->ID)['meters'] ?>
                </td>
                <td data-sort_col="2" class="text-center px-5 py-2.5 font-bold">
                    <?php echo get_field('apartament', $item->ID)['rooms'] ?>
                </td>
                <td data-sort_col="3" class="text-center px-5 py-2.5 font-bold">
                    <?php echo get_field('apartament', $item->ID)['field'] ?>
                </td>
                <td data-sort_col="4" class="text-center px-5 py-2.5 font-bold">
                    <?php echo get_field('apartament', $item->ID)['price'] ?>
                </td>
                <td data-sort_col="5" class="text-center px-5 py-2.5 font-bold">
                    <?php
					$status = get_field('apartament', $item->ID)['status'] ;
					if ($status == "avaliable") echo __("Dostępne", "oaza-tyniecka-theme"); 
						else if ($status == "reserved") echo __("Rezerwacja", "oaza-tyniecka-theme");
							else echo __("Sprzedane", "oaza-tyniecka-theme");
                    ?>
                </td>
                <td class="text-center px-5 py-2.5 font-bold">
                    <a href="<?php echo get_field('rzut_pdf', $item->ID) ?>" target="_blank"
                        class="mx-auto block w-fit">
                        <svg class="w-6 h-6 fill-yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.81 24">
                            <path
                                d="M23.81,21.65l-6.2-6.2c1.17-1.6,1.86-3.58,1.86-5.71C19.46,4.36,15.1,0,9.73,0S0,4.36,0,9.73s4.36,9.73,9.73,9.73c2.03,0,3.92-.63,5.49-1.7l6.24,6.24,2.35-2.35ZM2.85,9.73c0-3.79,3.09-6.88,6.88-6.88s6.88,3.09,6.88,6.88-3.09,6.88-6.88,6.88-6.88-3.09-6.88-6.88Z" />
                        </svg>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php else : ?>

<div class="pt-10 text-center text-2xl font-bold mb-1">
    <?php echo __("Brak wyników wyszukania", "oaza-tyniecka-theme"); ?>
</div>
<div class="text-lg pb-10 text-center">
    <?php echo __("spróbuj z innymi ustawieniami filtra", "oaza-tyniecka-theme"); ?>
</div>
<?php endif; ?>

<?php return ob_get_clean(); ?>

<?php } ?>