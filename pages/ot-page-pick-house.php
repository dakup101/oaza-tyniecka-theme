<?php /* Template Name: Wybierz dom */ ?>
<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1 class="text-8xl font-bold mb-20">
            Wybierz Swój dom
        </h1>
    </section>
    <section>
        <img src="<?php echo THEME_IMG . 'pick-house.jpg' ?>" alt="" class="w-full">
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
        <div class="container w-4/5 mx-auto py-5" data-apartaments="list" data-amount="-1">
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