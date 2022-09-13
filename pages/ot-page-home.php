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
        <h2 class="text-4xl text-center mb-10">Jest wiele powodów dla których warto zamieszkać w Oazie Tynieckiej</h2>
        <div class="grid grid-cols-6">
            <?php get_template_part( '/components/ot', 'yellow-icons' ) ?>
        </div>
    </section>
    <section class="overflow-hidden mt-20">
        <div class="container pb-10 mx-auto">
            <?php get_template_part( '/components/ot', 'right-img-section' ) ?>
        </div>
    </section>
    <section class="container  mt-20 mx-auto">
        <?php get_template_part( '/components/ot', 'map' ) ?>
    </section>
    <section class="container mx-auto py-10 mt-10">
        <h2 class="text-4xl font-bold text-center mb-14">Wszędzie blisko</h2>
        <div class="grid grid-cols-6">
            <?php get_template_part( '/components/ot', 'path-icons' ) ?>
        </div>
    </section>
    <section>
        <div class="px-20 mb-16 container mx-auto mt-10">
            <h2 class="text-7xl font-bold text-center">Wybierz dom</h2>
            <div class="text-4xl text-center">Lorem Ipsum</div>
        </div>
        <?php get_template_part( '/components/ot', 'house-picker' ) ?>
    </section>
    <section>
        <div class="w-full bg-gray-light">
            <div class="w-1/2 mx-auto py-10">
                <h2 class="text-4xl font-bold text-center mb-5">Lista domów</h2>
                <?php get_template_part( '/components/ot', 'filters' ) ?>
            </div>
        </div>
        <div class="container w-4/5 mx-auto pt-10 pb-5">
            <?php get_template_part( '/components/ot', 'aprtaments-style-changer' ) ?>
        </div>
        <!-- Apartaments list according to style -->
        <div class="container w-4/5 mx-auto py-5" data-apartaments="list" data-amount="10">
        </div>
        <a href="#" class="btn-yellow w-fit mx-auto my-5">
            Zobacz wszystkie
        </a>
    </section>
    <section class="py-10 diary bg-contain bg-left bg-no-repeat"
        style='background-image:url("<?php echo THEME_IMG . 'diary.jpg' ?>")'>
        <div class="container mx-auto">
            <h2 class="text-7xl font-bold">Dziennik budowy,</h2>
            <div class="text-4xl mb-5">Zobacz postępy</div>
            <a href="#" class="btn-yellow  w-fit mb-5" data-filter>
                zobacz galerię
            </a>
            <?php get_template_part( '/components/ot', 'diary' ) ?>
        </div>
    </section>
    <section class="relative">
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