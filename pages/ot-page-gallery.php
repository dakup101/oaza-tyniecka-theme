<?php /* Template Name: Galeria */ ?>
<?php get_header('page'); ?>

<main class="mt-32">
    <?php echo gallery_images_query("stan-zerowy", "etap-1", 1) ?>
</main>

<?php get_footer(); ?>