<?php /* Template Name: Kontakt */ ?>
<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            <?php echo __("Skontaktuj się z nami", "oaza-tyniecka-theme") ?>
        </h1>
    </section>
    <section class="container mx-auto mt-20">
        <div class="grid grid-cols-1 sm:grid-cols-12 gap-20">
            <div class="sm:col-span-5">
                <h2 class="text-4xl md:text-5xl lg:text-7xl font-bold">
                    <?php echo __("Przyjdź do nas", "oaza-tyniecka-theme") ?>
                </h2>
                <div class="font-bold text-xl mt-5">
                    <p><?php echo get_field('pole_1') ?></p>
                    <p class="text-gray-dark mt-5">
                        <?php echo get_field('pole_2') ?>
                    </p>
                    <p class="mt-5">
                        <?php echo get_field('pole_3') ?>
                    </p>
                    <p class="mt-5">
                        <?php echo get_field('pole_4') ?>
                    </p>
                </div>
            </div>
            <div class="sm:col-span-6 pt-8">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-5">
                    <?php echo __("Npisz do nas wiadomość", "oaza-tyniecka-theme") ?>
                </h2>
                <?php echo do_shortcode('[contact-form-7 id="110" title="Kontakt"]') ?>
            </div>
        </div>
    </section>
    <section class="container mx-auto mt-10">
        <?php get_template_part( '/components/ot', 'map-contact' ) ?>
    </section>
    <section class="container mx-auto mt-10 mb-20">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl text-center font-bold mb-10">
            <?php echo __("Masz dodatkowe pytania? Zapytaj naszych specjalistów", "oaza-tyniecka-theme") ?>
        </h2>
        <?php get_template_part( '/components/ot', 'specialists', get_field('specialists') ) ?>
    </section>
</main>

<?php get_footer(); ?>