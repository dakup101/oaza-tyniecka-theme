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
$counter = 0;

?>

<div class="grid grid-cols-6 gap-5 mb-10">
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a href="#"
        class="hover:text-yellow hove focus:text-yellow-dark transition-all flex flex-col justify-center items-center <?php echo $counter == 0 ? ' active-location' : '' ?>"
        data-location_id="<?php the_ID(); ?>">
        <figure class="w-16">
            <img src="<?php echo get_field('icon', get_the_ID()); ?>" alt="" class="w-full h-auto">
        </figure>
        <p class="font-bold text-xl text-center mt-5">
            <?php echo get_field('type', get_the_ID()) ?>
        </p>
    </a>
    <?php $counter++; endwhile; wp_reset_postdata(); ?>
</div>



<div class="map__wrapper w-full relative">
    <div class="w-full map" id="map">

    </div>
    <div class="map__loader absolute top-0 left-0 w-full h-full bg-white/70 flex items-center justify-center transition-all"
        data-map_loader>
        <div class="loader loader--style6" title="5">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="fill-yellow"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="43.75px"
                viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <rect x="0" y="13" width="4" height="5">
                    <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0s" dur="0.6s"
                        repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0s" dur="0.6s"
                        repeatCount="indefinite" />
                </rect>
                <rect x="10" y="13" width="4" height="5">
                    <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0.15s" dur="0.6s"
                        repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0.15s" dur="0.6s"
                        repeatCount="indefinite" />
                </rect>
                <rect x="20" y="13" width="4" height="5">
                    <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0.3s" dur="0.6s"
                        repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0.3s" dur="0.6s"
                        repeatCount="indefinite" />
                </rect>
            </svg>
        </div>
    </div>
</div>