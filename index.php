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
    <section class="container mx-auto">
        <?php get_template_part( '/components/ot', 'map' ) ?>
    </section>
</main>
<?php get_footer(); ?>