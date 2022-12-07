<?php /* Template Name: Lokalizacja */ ?>
<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            <?php echo __("Lokalizacja inwestycji", "oaza-tyniecka-theme") ?>
        </h1>
    </section>
    <section class="container  mt-20 mx-auto">
        <?php get_template_part( '/components/ot', 'map' ) ?>
    </section>
    <section class="container mx-auto py-10 mt-10">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center mb-14">
            <?php echo __("Wszędzie blisko", "oaza-tyniecka-theme") ?>
        </h2>
        <div class="grid gap-5 grid-cols-2 sm:grid-cols-3 lg:grid-cols-6">
            <?php get_template_part( '/components/ot', 'path-icons', get_field('path_icons') ) ?>
        </div>
    </section>
    <section class="overflow-x-clip">
        <div class="container mx-auto">
            <?php get_template_part( '/components/ot-right-img-section', null, get_field('right_img_section')) ?>
        </div>
    </section>
    <section class="container mx-auto mb-20">
        <?php get_template_part( '/components/ot-left-img-section', null, get_field('left_img_section')) ?>
    </section>
    <section class="relative mt-20">
        <div class="grid grid-cols-1 sm:grid-cols-12">
            <div class="sm:col-span-5 sm:order-1 order-2 flex items-end">
                <img src="<?php echo THEME_IMG . 'contact.jpg' ?>" alt="" class="w-full">
            </div>
            <div class="px-4 sm:px-0 sm:col-span-6 sm:order-2 order-1">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-5">
                    <?php echo __("Chcesz uzyskać więcej informacji?", "oaza-tyniecka-theme"); ?>
                </h2>
                <?php echo do_shortcode('[contact-form-7 id="110" title="Kontakt"]') ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>