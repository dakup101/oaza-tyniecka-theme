<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            Dom: <?php echo get_the_title() ?>
        </h1>
    </section>
</main>

<?php get_footer(); ?>