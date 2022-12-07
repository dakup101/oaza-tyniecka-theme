<?php 
// Catch variable from get_template_part();
$args = wp_parse_args($args, array());
?>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-5 sm:gap-10">
    <?php foreach($args as $item) : ?>
    <figure data-lightbox
        class="cursor-pointer hover:-translate-y-2 hover:shadow-lg transition-all after:absolute after:top-0 after:left-0 after:w-full after:h-full after:bg-yellow after:opacity-0 after:pointer-events-none hover:after:opacity-30 after:transition-all">
        <img src="<?php echo $item['image'] ?>" alt="">
    </figure>
    <?php endforeach ?>
</div>