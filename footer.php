<footer class="bg-gray-light py-20">
    <div class="container mx-auto">
        <div class="w-full sm:w-4/5 mx-auto pb-10 border-b border-dark">
            <div class="flex items-center justify-center sm:justify-between flex-col sm:flex-row">
                <div class="text-center sm:text-left mb-10 sm:mb-0">
                    <img src="<?php echo THEME_IMG . 'logo_dark.svg' ?>" alt="Oaza Tyniecka"
                        class="h-14 mb-5 mx-auto sm:mx-0">
                    <p class="text-sm  font-light ">
                        ul. Gabrieli Zapolskiej 44<br>
                        Centrum biznesu <b>Brama Bronowicka</b><br>
                        30-126 Kraków<br>
                        <?php echo __("Godziny pracy:", "oaza-tyniecka-theme") ?>
                        <b><?php echo __("Pn-Pt", "oaza-tyniecka-theme") ?></b> 9.00 - 17.00
                    </p>
                </div>
                <div>
                    <a class="block text-center sm:text-right font-light text-xl mb-3" href="tel:+48126889000">+48 126
                        889 000</a>
                    <a class="block text-center sm:text-right font-light text-xl mb-3"
                        href="mailto:sprzedaz@oazainvestment.com">e-mail:
                        sprzedaz@oazainvestment.com</a>
                    <!--                     <a class="block italic text-center sm:text-right text-xl underline" href="#">Facebook</a> -->
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( '/components/ot', 'site-overlay') ?>
    <?php wp_footer(); ?>
</footer>
</body>

</html>