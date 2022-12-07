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

<div class="sm:flex justify-start relative  pb-10 sm:pb-0">
    <figure
        class="sm:absolute pt-8 pb-8 right-0 top-0 h-full z-20 img-right flex items-center justify-center overflow-hidden">
        <img src="<?php echo $args['img'] ?>" alt="" class="min-w-full min-h-full parallax" data-scale="1.3"
            data-transition="cubic-bezier(0,0,0,1)" data-orientation="down" data-delay="1.5" data-overflow="0">
    </figure>
    <figure class="hidden sm:flex sm:absolute right-8 h-full img-right justify-center items-end">
        <div class="w-full h-full bg-gray">
        </div>
    </figure>
    <figure class="hidden sm:block bg-gray-lighter h-full w-full -translate-x-1/2 -z-20 absolute left-0 top-0">
    </figure>
    <div class="w-full sm:w-6/12 sm:bg-white sm:p-10 md:p-16 sm:shadow-sm lg:p-20 sm:mt-10 sm:mb-10 lg:my-28 z-30">
        <img src="<?php echo $args['icon'] ?>" alt="" class="w-14 h-14">
        <h2 class="text-2xl sm:text-4xl md:text-5xl py-4 px-6 mt-8 mb-12 w-fit bg-yellow"><?php echo $args['title'] ?>
        </h2>
        <div class="sm:px-6">
            <?php echo $args['content'] ?>
        </div>
    </div>

</div>