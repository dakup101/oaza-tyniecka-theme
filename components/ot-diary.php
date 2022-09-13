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
                        echo date('d M Y', strtotime($post->post_date)) ?>
                        </span>
                        <h3 class="text-xl mb-3 font-medium"><?php echo $post->post_title; ?></h3>
                        <p><?php echo $post->post_excerpt; ?></p>
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
            <svg class=" fill-dark stroke-dark h-5 rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 15"
                fill-rule="evenodd">
                <path d="M21.88,8l-7.53,6.24,.64,.76,9-7.52L15,0l-.65,.76,7.53,6.24H0v1H21.88Z" />
            </svg>
        </div>
        <div class="swiper-button-next ml-10">
            <svg class=" fill-dark stroke-dark h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 15"
                fill-rule="evenodd">
                <path d="M21.88,8l-7.53,6.24,.64,.76,9-7.52L15,0l-.65,.76,7.53,6.24H0v1H21.88Z" />
            </svg>
        </div>
    </div>
</div>
<?php endif; ?>