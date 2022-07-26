<?php /* Template Name: Aktualności */ ?>
<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            <?php echo __("Aktualności inwestycji", "oaza-tyniecka-theme"); ?>
        </h1>
    </section>
    <section class="container mx-auto mb-10">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl text-center font-bold mt mb-5">
            <?php echo __("Jesteś zainteresowany zakupem domu?", "oaza-tyniecka-theme"); ?>
        </h2>
        <p class="text-center mb-10">
            <!-- Sed in mauris accumsan massa pharetra suscipit. Quisque et consequat odio, non molestie odio. -->
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3">
            <?php
        $query = array( 'posts_per_page' => -1, 'order' => 'ASC' );
        $counter = 1;
        $wp_query = new WP_Query($query);

        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        ?>
            <?php
            if ($counter == 4) $counter = 1;
            $borders = null;
            switch($counter){
                case 1:
                    $borders = "sm:border-r border-t border-gray";
                    break;
                case 2:
                    $borders = "border-t border-gray";
                    break;
                case 3: 
                    $borders = "sm:border-l border-t border-gray";
                    break;
                default: 
                    break;    
            }
            ?>
            <article class="w-full px-10 py-10 <?php echo $borders ?>">
                <a href="<?php echo get_the_permalink() ?>"
                    class="block h-52 w-full relative overflow-hidden  after:absolute after:top-0 after:left-0 after:w-full after:h-full after:bg-yellow after:opacity-0 after:pointer-events-none hover:after:opacity-30 after:transition-all">
                    <img src="<?php echo get_the_post_thumbnail_url($post) ?>" alt=""
                        class="absolute min-w-full min-h-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 object-cover">
                </a>
                <div class="col-span-5 mt-5 px-5 relative">
                    <div class="flex w-full h-full justify-end items-start flex-col">
                        <span class="block mb-5 font-light">
                            <?php  echo get_the_date(); ?>
                        </span>
                        <a href="<?php echo get_the_permalink() ?>" class=" text-xl mb-3 block font-medium
                            hover:text-yellow transition-all">
                            <?php echo $post->post_title; ?>
                        </a>
                        <p><?php echo $post->post_excerpt; ?></p>
                        <a href="<?php echo get_the_permalink() ?>" class="mt-3 underline text-yellow block font-medium
                            hover:text-yellow-dark transition-all">
                            <?php echo __("Czytaj więcej", "oaza-tyniecka-theme"); ?>
                        </a>
                    </div>


                </div>

            </article>
            <?php $counter++; endwhile; else: ?>
            <p><?php __('Brak aktualności w tym momencie', "oaza-tyniecka-theme"); ?></p>
            <?php endif; ?>
        </div>



    </section>
    <section class="relative mt-20">
        <div class="grid grid-cols-1 sm:grid-cols-12">
            <div class="sm:col-span-5 sm:order-1 order-2 flex items-end">
                <img src="<?php echo THEME_IMG . 'contact.jpg' ?>" alt="" class="w-full">
            </div>
            <div class="px-4 sm:px-0 sm:col-span-6 sm:order-2 order-1">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-5">
                    <?php echo __("Chcesz uzyskać więcej informacji?", "oaza-tyniecka-theme") ?>
                </h2>
                <?php echo do_shortcode('[contact-form-7 id="110" title="Kontakt"]') ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>