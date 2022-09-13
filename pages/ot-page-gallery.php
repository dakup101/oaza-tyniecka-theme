<?php /* Template Name: Galeria */ ?>
<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            Galeria zdjęć
        </h1>
    </section>
    <section class="container mx-auto">
        <h2 class="text-5xl font-bold mb-2">Postęp prac:</h2>
        <?php
        $phases = get_terms( 'phase', array(
            'hide_empty' => false,
        ));
        ?>
        <div class="flex items-end">

            <?php foreach($phases as $phase) : ?>
            <button data-phase="<?php echo $phase->slug ?>"
                class="mr-5 underline <?php echo ($phase->slug) == 'etap-1' ? 'text-3xl text-yellow' : 'text-lg' ?>">
                <?php echo $phase->name ?>
            </button>
            <?php endforeach; ?>
        </div>

        <div class="mx-20 relative gallery-cats__wraooer">
            <div class="gallery-cats overflow-hidden" data-gallery_cats>
                <div class="swiper-wrapper flex items-end">
                    <div class="swiper-slide">
                        <button class="gallery-cat text-2xl font-bold" data-category="stan-zerowy">
                            Stan Zerowy
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <button class="gallery-cat text-2xl font-bold" data-category="stan-surowy-otwarty">
                            Stan surowy otwarty
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <button class="gallery-cat text-2xl font-bold" data-category="start-budowy">
                            Start budowy
                        </button>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <svg class=" fill-dark stroke-dark h-5 rotate-180" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 15" fill-rule="evenodd">
                        <path d="M21.88,8l-7.53,6.24,.64,.76,9-7.52L15,0l-.65,.76,7.53,6.24H0v1H21.88Z" />
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg class=" fill-dark stroke-dark h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 15"
                        fill-rule="evenodd">
                        <path d="M21.88,8l-7.53,6.24,.64,.76,9-7.52L15,0l-.65,.76,7.53,6.24H0v1H21.88Z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-10" data-gallery>
            <?php echo gallery_images_query("stan-zerowy", "etap-1", 1) ?>
        </div>
    </section>
    <section class="relative mt-20">
        <div class="grid grid-cols-12">
            <div class="col-span-5">
                <img src="<?php echo THEME_IMG . 'contact.jpg' ?>" alt="" class="w-full">
            </div>
            <div class="col-span-6">
                <h2 class="text-4xl font-bold mb-5">Chcesz uzyskać więcej informacji?</h2>
                <?php echo do_shortcode('[contact-form-7 id="110" title="Kontakt"]') ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>