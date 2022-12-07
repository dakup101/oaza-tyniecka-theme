<?php /* Template Name: Wybierz dom */ ?>
<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-bold mb-20">
            <?php echo __("Wybierz Swój dom", "oaza-tyniecka-theme"); ?>
        </h1>
    </section>
    <section>
        <?php get_template_part( '/components/ot', 'house-picker' ) ?>
    </section>
    <section>
        <!--         <div class="w-full bg-gray-light">
            <div class="sm:w-1/2 mx-auto px-4 sm:px-0 py-10">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center mb-5">Lista domów</h2>
                <?php get_template_part( '/components/ot', 'filters' ) ?>
            </div>
        </div> -->
        <div class="container lg:w-4/5 mx-auto pt-10 pb-5">
            <?php get_template_part( '/components/ot', 'aprtaments-style-changer' ) ?>
        </div>
        <div class="container lg:w-4/5 mx-auto py-5" data-apartaments="list" data-amount="-1">
        </div>
    </section>
    <section class="relative mt-20">
        <div class="grid grid-cols-1 sm:grid-cols-12">
            <div class="sm:col-span-5 sm:order-1 order-2flex items-end">
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