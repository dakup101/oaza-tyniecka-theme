<?php /* Template Name: Galeria */ ?>
<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            <?php echo __("Galeria", "oaza-tyniecka-theme") ?>
        </h1>
    </section>
    <section class="container mx-auto">
        <!--         <h2 class="text-2xl sm:text-4xl md:text-5xl font-bold mb-2">Postęp prac:</h2>
        <?php
        $phases = get_terms( 'phase', array(
            'hide_empty' => false,
        ));
        ?>
        <div class="flex flex-wrap items-end">

            <?php foreach($phases as $phase) : ?>
            <button data-phase="<?php echo $phase->slug ?>"
                class="mr-5 underline <?php echo ($phase->slug) == 'etap-1' ? 'text-3xl text-yellow' : 'text-lg' ?>">
                <?php echo $phase->name ?>
            </button>
            <?php endforeach; ?>
        </div> -->

        <div class="mx-20 relative gallery-cats__wraooer">
            <div class="gallery-cats overflow-hidden" data-gallery_cats>
                <div class="swiper-wrapper flex items-end">
                    <div class="swiper-slide">
                        <button class="gallery-cat text-2xl font-bold" data-category="stan-zerowy">
                            <?php echo __("Stan Zerowy", "oaza-tyniecka-theme") ?>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <button class="gallery-cat text-2xl font-bold" data-category="stan-surowy-otwarty">
                            <?php echo __("Stan surowy otwarty", "oaza-tyniecka-theme") ?>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <button class="gallery-cat text-2xl font-bold" data-category="start-budowy">
                            <?php echo __("Start budowy", "oaza-tyniecka-theme") ?>
                        </button>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <svg version="1.1" class=" fill-dark hover:fill-yellow transition-all stroke-dark h-3.5 rotate-180"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 66.3 15" style="enable-background:new 0 0 66.3 15;" xml:space="preserve">
                        <polygon points="59.8,3.8 53.3,0 53.3,5 0,5 0,10 53.3,10 53.3,15 59.8,11.2 66.3,7.5 " />
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg version="1.1" class=" fill-dark hover:fill-yellow transition-all stroke-dark h-3.5"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 66.3 15" style="enable-background:new 0 0 66.3 15;" xml:space="preserve">
                        <polygon points="59.8,3.8 53.3,0 53.3,5 0,5 0,10 53.3,10 53.3,15 59.8,11.2 66.3,7.5 " />
                    </svg>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10" data-gallery>
            <?php echo gallery_images_query("stan-zerowy", "etap-1", 1) ?>
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