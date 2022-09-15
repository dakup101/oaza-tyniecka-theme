<?php
$args = array(
    "posty_type" => "post",
    "status" => "publish",
    "numberposts" => 5
);
$posts = get_posts($args);
$counter = 0;
?>

<?php if (!empty($posts)) : ?>
<div class="swiper" data-diary>
    <div class="swiper-wrapper">

        <?php foreach($posts as $post) : ?>
        <div class="swiper-slide">
            <article class="grid grid-cols-12 w-full gap-24">
                <div class="col-span-5 relative">
                    <div class="flex w-full h-full justify-end items-start flex-col">
                        <span class="block mb-5 font-light">
                            <?php 
                         date_default_timezone_set('Europe/Warsaw');
                         setlocale(LC_TIME, array('pl_Pl.UTF-8', 'pl.UTF-8'));
                        echo get_the_date('d M Y', $post->ID) ?>
                        </span>
                        <a href="<?php echo get_the_permalink() ?>" class=" text-xl mb-3 block font-medium
                        hover:text-yellow transition-all">
                            <?php echo $post->post_title; ?>
                        </a>
                        <p><?php echo $post->post_excerpt; ?></p>
                        <a href="<?php echo get_the_permalink() ?>" class="mt-3 underline text-yellow-dark block font-medium
                            hover:text-yellow-dark transition-all">
                            Czytaj więcej
                        </a>
                    </div>


                </div>
                <div class="col-span-7">
                    <div class="h-80 w-full relative overflow-hidden">
                        <img src="<?php echo get_the_post_thumbnail_url($post) ?>" alt=""
                            class="absolute min-w-full min-h-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 object-cover">
                    </div>
                </div>
            </article>
        </div>
        <?php endforeach; ?>

    </div>
    <div class="flex justify-start items-center">
        <div class="swiper-button-prev">
            <svg version="1.1" class=" fill-dark stroke-dark hover:fill-yellow transition-all h-3.5 rotate-180"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 66.3 15"
                style="enable-background:new 0 0 66.3 15;" xml:space="preserve">
                <polygon points="59.8,3.8 53.3,0 53.3,5 0,5 0,10 53.3,10 53.3,15 59.8,11.2 66.3,7.5 " />
            </svg>
        </div>
        <div class="swiper-button-next ml-10">
            <svg version="1.1" class=" fill-dark stroke-dark hover:fill-yellow transition-all h-3.5"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 66.3 15"
                style="enable-background:new 0 0 66.3 15;" xml:space="preserve">
                <polygon points="59.8,3.8 53.3,0 53.3,5 0,5 0,10 53.3,10 53.3,15 59.8,11.2 66.3,7.5 " />
            </svg>
        </div>
    </div>
</div>
<?php endif; ?>