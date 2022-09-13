<?php
// Catch variable from get_template_part();
$args = wp_parse_args($args, array(
    'title' => null,
    'img' => null,
    'icon' => null,
    'content' => null
)
);
?>

<div class="flex justify-end relative">
    <figure class="absolute left-0 top-0 h-full z-20 img-right flex items-center justify-center overflow-hidden">
        <img src="<?php echo $args['img'] ?>" alt="" class="min-w-full min-h-full parallax" data-scale="1.3"
            data-transition="cubic-bezier(0,0,0,1)" data-orientation="down" data-delay="1.5" data-overflow="0">
    </figure>
    <figure class=" absolute top-8 left-8 h-full img-right -z-10 flex justify-center items-end">
        <div class="w-full h-full bg-gray">
        </div>
    </figure>
    <figure class="bg-gray-lighter h-full w-auto aspect-square absolute -right-1/2 -translate-x-1/2 top-0 rounded-full">
    </figure>
    <div class="w-6/12 bg-white p-20 my-28 z-30">
        <img src="<?php echo $args['icon'] ?>" alt="" class="w-14 h-14">
        <h2 class="text-5xl py-4 px-6 mt-8 mb-12 w-fit bg-yellow"><?php echo $args['title'] ?></h2>
        <div class="px-6 mb-24">
            <?php echo $args['content'] ?>
        </div>
    </div>

</div>