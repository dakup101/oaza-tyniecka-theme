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
            class="text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            <?php echo $title ?></h1>
    </section>
    <section class="overflow-x-clip">
        <div class="container mx-auto">
            <?php get_template_part( '/components/ot-right-img-section', null, $right_img_section) ?>
        </div>
    </section>
    <section class="container mx-auto mb-20">
        <?php get_template_part( '/components/ot-left-img-section', null, $left_img_section) ?>
    </section>
    <section class="container mx-auto">
        <h2 class="text-4xl text-center mb-10">Kluczowe atuty naszej inwestycji</h2>
        <div class="grid grid-cols-6">
            <?php get_template_part( '/components/ot', 'yellow-icons', get_field('icons') ) ?>
        </div>
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
    <section class="container mx-auto mb-20">
        <h2 class="text-4xl text-center mb-10">Propozycje wykończenia domu</h2>
        <?php get_template_part( '/components/ot', 'recommended-decor', $recommended ) ?>
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