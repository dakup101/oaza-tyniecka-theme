<?php 
add_action('init', 'return_gallery_images_init');

function return_gallery_images_init(){
    add_action( 'wp_ajax_nopriv_gallery_images', 'return_gallery_images' );
    add_action( 'wp_ajax_gallery_images', 'return_gallery_images' );
}

function return_gallery_images(){
    $category = $_POST['category'];
    $phase = $_POST['phase'];
    $page = $_POST['page'];
    $html = gallery_images_query($category, $phase, $page);
    echo $html;
    wp_die();
}

function gallery_images_query($category, $phase, $page) { 
?>

<?php
$args = array(
    "numberposts"   => 12,
    "post_type"     => "gallery_img",
    "status"        => "publish",
    "paged"         => $page,
    "category_name" => $category,
    "tax_query"     => array(
        array(
            "taxonomy"  => "phase",
            "field"     => "slug",
            "terms"     => $phase
        )
    )
);

$images = get_posts($args);
?>

<?php if (!empty($images)) : ?>
<?php print_r($images); ?>
<?php else : ?>

<div class="pt-10 text-center text-2xl font-bold mb-1">
    Brak zdjęć na tym stanie / etapie
</div>
<div class="text-lg pb-10 text-center">
    Sprawdź pozostałe stany / etapy
</div>
<?php endif; ?>
<?php return ob_get_clean(); ?>

<?php } ?>