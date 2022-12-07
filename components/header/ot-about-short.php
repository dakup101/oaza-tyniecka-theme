<div class="grid gap-5 xs:grid-cols-2">
    <div>
        <h2 class="text-4xl sm:text-5xl lg:text-7xl font-bold">
            <?php echo __("Nasza inwestycja", "oaza-tyniecka-theme") ?>
        </h2>
        <span class="block text-2xl sm:text-3xl lg:text-4xl">
            <?php echo __("Poznaj więcej detali", "oaza-tyniecka-theme") ?>
        </span>
    </div>
    <div>
        <?php echo get_field("about_short_desc"); ?>
        <a href="https://oaza.local/o-inwestycji/" class="btn-yellow mt-5">
            <?php echo __("Czytaj więcej", "oaza-tyniecka-theme"); ?>
        </a>
    </div>
</div>