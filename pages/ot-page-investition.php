<?php /* Template Name: O Inwestycji */ ?>
<?php get_header('page'); ?>

<?php 
$title = get_field('title');
$right_img_section = get_field('right_img_section');
$left_img_section = get_field('left_img_section');
$recommended = get_field('recommended_decor');
?>
<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            <?php echo $title ?></h1>
    </section>
    <section class="overflow-x-clip">
        <div class="container mx-auto">
            <?php get_template_part( '/components/ot-right-img-section', null, $right_img_section) ?>
        </div>
    </section>
    <section class="bg-gray-lighter sm:bg-none block">
        <div class="container mx-auto mb-20">
            <?php get_template_part( '/components/ot-left-img-section', null, $left_img_section) ?>
        </div>
    </section>
    <section class="container mx-auto mb-20">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl text-center mb-10">
            <?php echo __("Kluczowe atuty naszej inwestycji", "oaza-tyniecka-theme") ?>
        </h2>
        <div class="grid gap-5 grid-cols-2 sm:grid-cols-3 md:grid-cols-6">
            <?php get_template_part( '/components/ot', 'yellow-icons', get_field('icons') ) ?>
        </div>
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
    <section class="container mx-auto mb-20">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl text-center mb-10">
            <?php echo __("Propozycje wykończenia domu", "oaza-tyniecka-theme") ?>
        </h2>
        <?php get_template_part( '/components/ot', 'recommended-decor', $recommended ) ?>
    </section>
    <section class="relative mt-20">
        <div class="grid grid-cols-1 sm:grid-cols-12">
            <div class="sm:col-span-5 sm:order-1 order-2 flex items-end">
                <img src="<?php echo THEME_IMG . 'contact.jpg' ?>"
                     alt=""
                     class="w-full">
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