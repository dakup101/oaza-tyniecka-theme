<?php /* Template Name: Strona Główna */ ?>

<?php get_header(); ?>
<main>
    <!-- Hero -->
    <section>
        <?php get_template_part( '/components/ot', 'home-hero' ) ?>
    </section>
    <!-- About -->
    <section class="container mx-auto py-10 mt-10">
        <?php get_template_part( '/components/ot', 'about-short' ) ?>
    </section>
    <section class="container mx-auto py-10 mt-10">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl text-center mb-10">
            <?php echo __("Jest wiele powodów dla których warto zamieszkać w Oazie Tynieckiej", "oaza-tyniecka-theme") ?>
        </h2>
        <div class="grid gap-5 grid-cols-2 sm:grid-cols-4 md:grid-cols-6">
            <?php get_template_part( '/components/ot', 'yellow-icons', get_field('icons') ) ?>
        </div>
    </section>
    <section class="overflow-hidden mt-20">
        <div class="container pb-10 mx-auto">
            <?php get_template_part( '/components/ot', 'right-img-section', get_field('right_img_section') ) ?>
        </div>
    </section>
    <section class="container  mt-20 mx-auto">
        <?php get_template_part( '/components/ot', 'map' ) ?>
    </section>
    <section class="container mx-auto py-10 mt-10">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center mb-14">
            <?php echo __("Wszędzie blisko", "oaza-tyniecka-theme") ?>
        </h2>
        <div class="grid gap-5 grid-cols-2 md:grid-cols-4 lg:grid-cols-6">
            <?php get_template_part( '/components/ot', 'path-icons', get_field('path_icons') ) ?>
        </div>
    </section>
    <section>
        <div class="px-20 mb-16 container mx-auto mt-10">
            <h2 class="text-4xl md:text-5xl lg:text-7xl font-bold text-center">
                <?php echo __("Wybierz dom", "oaza-tyniecka-theme") ?>
            </h2>
            <div class="text-2xl sm:text-3xl lg:text-4xl text-center">
                <?php echo __("Klikając na wizualizację", "oaza-tyniecka-theme"); ?>
            </div>
        </div>
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
        <div class="container lg:w-4/5 mx-auto py-5" data-apartaments="list" data-amount="10">
        </div>
        <a href="#" class="btn-yellow w-fit mx-auto my-5">
            <?php echo __("Zobacz wszystkie", "oaza-tyniecka-theme"); ?>
        </a>
    </section>
    <!--     <section class="py-10 diary bg-contain bg-left bg-no-repeat"
        style='background-image:url("<?php echo THEME_IMG . 'diary.jpg' ?>")'>
        <div class="container mx-auto">
            <h2 class="text-4xl md:text-5xl lg:text-7xl font-bold">Dziennik budowy,</h2>
            <div class="text-2xl sm:text-3xl lg:text-4xl mb-5">Zobacz postępy</div>
            <a href="#" class="btn-yellow  w-fit mb-5" data-filter>
                zobacz galerię
            </a>
            <?php get_template_part( '/components/ot', 'diary' ) ?>
        </div>
    </section> -->
    <section class="py-10 relative mt-20">
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