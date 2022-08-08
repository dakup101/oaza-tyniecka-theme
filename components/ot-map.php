<div class="px-20 mb-16">
    <h2 class="text-7xl font-bold">Lokalizacja</h2>
    <div class="text-4xl">Oaza Tyniecka daje wytchnienie od miejskiego zgiełku</div>
</div>

<?php
$args = array(  
    'post_type' => 'locations',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'orderby' => 'title', 
    'order' => 'ASC', 
);

$loop = new WP_Query( $args ); 
?>

<?php print_r(get_field('locations', 51)) ?>

<div class="grid grid-cols-6 gap-5 mb-10">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a href="#"
        class="hover:text-yellow hove focus:text-yellow-dark flex flex-col justify-center items-center active-location"
        data-location_id="<?php the_ID(); ?>">
        <figure class="w-16">
            <img src="<?php echo get_field('icon', get_the_ID()); ?>" alt="" class="w-full h-auto">
        </figure>
        <p class="font-bold text-xl text-center mt-5">
            <?php echo get_field('type', get_the_ID()) ?>
        </p>
    </a>
    <?php endwhile; wp_reset_postdata(); ?>
</div>



<div class="w-full map" id="map">

</div>