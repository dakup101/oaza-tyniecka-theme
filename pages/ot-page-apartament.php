<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            Dom: <?php echo get_the_title() ?>
        </h1>
    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-2 px-5 pt-5 gap-5">
            <figure class="flex items-center justify-center">
                <img class="h-6"
                     src="<?php echo THEME_IMG . 'rooms.svg' ?>"
                     alt="">
                <div class="flex flex-col ml-5">
                    <p class="uppercase">
                        <?php echo __("Metraż", "oaza-tyniecka-theme"); ?>
                    </p>
                    <p class="font-bold text-lg"><?php echo get_field('apartament')['meters'] ?> m²</p>
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
                    <p class="font-bold text-lg"><?php echo get_field('apartament')['rooms'] ?></p>
                </div>
            </figure>
        </div>
    </section>
</main>

<?php get_footer(); ?>