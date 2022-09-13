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
    "numberposts"   => -1,
    "post_type"     => "gallery_img",
    "status"        => "publish",
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

<?php foreach($images as $img) : ?>
<figure data-lightbox
    class="cursor-pointer hover:-translate-y-2 hover:shadow-lg transition-all after:absolute after:top-0 after:left-0 after:w-full after:h-full after:bg-yellow after:opacity-0 after:pointer-events-none hover:after:opacity-30 after:transition-all">
    <img src="<?php echo get_field('img', $img->ID) ?>" alt="<?php echo $img->post_title ?>">
</figure>
<?php endforeach; ?>

<?php else : ?>
<div class="col-span-3">
    <div class="pt-10 text-center text-2xl font-bold mb-1">
        Brak zdjęć na tym stanie / etapie
    </div>
    <div class="text-lg pb-10 text-center">
        Sprawdź pozostałe stany / etapy
    </div>
</div>
<?php endif; ?>
<?php return ob_get_clean(); 
}