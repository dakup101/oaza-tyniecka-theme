<footer class="bg-gray-light py-20">
    <div class="container mx-auto">
        <div class="w-4/5 mx-auto pb-10 border-b border-dark">
            <div class="flex justify-between items-start">
                <div>
                    <img src="<?php echo THEME_IMG . 'logo_dark.svg' ?>" alt="Oaza Tyniecka" class="h-14 mb-5">
                    <p class="text-sm font-light">
                        Kraków, 95 Oaza Tyniecka<br>
                        Godziny pracy: 8.00 - 16.00
                    </p>
                </div>
                <div>
                    <a class="block text-right font-light text-xl mb-3" href="tel:+48123123123">+48 123 123 123</a>
                    <a class="block text-right font-light text-xl mb-3" href="mailto:daniel@everywhere.pl">e-mail:
                        daniel@everywhere.pl</a>
                    <a class="block italic text-right text-xl underline" href="#" class="italic underline">Facebook</a>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( '/components/ot', 'site-overlay') ?>
    <?php wp_footer(); ?>
</footer>
</body>

</html>