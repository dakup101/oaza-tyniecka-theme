<?php /* Template Name: Kontakt */ ?>
<?php get_header('page'); ?>

<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            Skontaktuj się z nami
        </h1>
    </section>
    <section class="container mx-auto mt-20">
        <div class="grid grid-cols-12 gap-20">
            <div class="col-span-5">
                <h2 class="text-7xl font-bold">Przyjdź do nas</h2>
                <div class="font-bold text-xl mt-5">
                    <p>Biuro sprzedaży (na terenia inwestycji)</p>
                    <p class="text-gray-dark mt-5">
                        Ul. Piaseczyńska 41<br>
                        00-765 Warszawa<br>
                        +48 571 266 250<br>
                        +48 797 872 431<br>
                        apartamenty@oazamokotow.pl
                    </p>
                    <p class="mt-5">
                        Godziny otwarcia:<br>
                        Pon.-Pt. 9.00-17.00
                    </p>
                    <p class="mt-5">
                        Jeśli nie odpowiadają Ci godziny otwarcia, umów się telefonicznie na indywidualne spotkanie.
                    </p>
                </div>
            </div>
            <div class="col-span-6 pt-8">
                <h2 class="text-4xl font-bold mb-5">Npisz do nas wiadomość</h2>
                <?php echo do_shortcode('[contact-form-7 id="110" title="Kontakt"]') ?>
            </div>
        </div>
    </section>
    <section class="container mx-auto mt-10">
        <?php get_template_part( '/components/ot', 'map-contact' ) ?>
    </section>
    <section class="container mx-auto mt-10 mb-20">
        <h2 class="text-4xl text-center font-bold mb-10">Masz dodatkowe pytania? Zapytaj naszych specjalistów</h2>
        <?php get_template_part( '/components/ot', 'specialists', get_field('specialists') ) ?>
    </section>
</main>

<?php get_footer(); ?>