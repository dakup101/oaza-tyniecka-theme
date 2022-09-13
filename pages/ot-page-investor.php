<?php /* Template Name: Inwestor */ ?>
<?php get_header('page'); ?>

<?php 
$title = get_field('title');
$title2 = get_field('title_2');
$subtitle2 = get_field('subtitle_2');
$text = get_field('text');
$projects = get_field('projects');
?>
<main class="mt-32">
    <section class="container mx-auto">
        <h1
            class="text-8xl font-bold relative before:absolute before:h-0.5 before:w-3/5 before:bg-dark w-fit before:-bottom-12 mb-20">
            <?php echo $title ?></h1>
    </section>
    <section class="container mx-auto mb-10">
        <div class="grid grid-cols-2">
            <div class="flex items-start">
                <figure class="mr-10">
                    <img src="<?php echo THEME_IMG . 'architecture.svg' ?>" alt="" class="h-28">
                </figure>
                <div>
                    <h2 class="text-7xl font-bold"><?php echo $title2 ?></h2>
                    <span class="block text-4xl"><?php echo $subtitle2 ?></span>
                </div>
            </div>
            <div>
                <?php echo $text ?>
            </div>
        </div>
    </section>
    <section class="container mx-auto mb-16">
        <h2 class="text-4xl font-bold text-center mb-14">Nasze projekty</h2>
        <?php $counter = 1; ?>
        <?php foreach($projects as $el) : ?>
        <article class="grid grid-cols-2 gap-24 mb-20 align-middle items-center">
            <div class="relative <?php echo $counter % 2 == 0 ? 'order-2' : 'order-1' ?>">
                <figure class="h-96 relative overflow-hidden">
                    <img src="<?php echo $el['img']; ?>" alt="<?php echo $el['title'] ?>" data-scale="1.2"
                        data-transition="cubic-bezier(0,0,0,1)"
                        data-orientation="<?php echo $counter % 2 == 0 ? 'up' : 'down' ?>" data-delay="1.5"
                        data-overflow="0" class="min-h-full min-w-full parallax">
                </figure>
                <figure
                    class="absolute w-full h-full -z-10 top-8 <?php echo $counter % 2 == 0 ? '-left-8' : '-right-8' ?>">
                    <div class="bg-gray-light w-full h-full parallax" data-scale="1.2"
                        data-transition="cubic-bezier(0,0,0,1)"
                        data-orientation="<?php echo $counter % 2 == 0 ? 'down' : 'up' ?>" data-delay="3"
                        data-overflow="1">

                    </div>
                </figure>
            </div>
            <div class=" <?php echo $counter % 2 == 0 ? 'order-1' : 'order-2' ?>">
                <h3 class="text-4xl px-5 py-2.5 bg-yellow w-fit mb-10"><?php echo $el['title'] ?></h3>
                <div class="px-5">
                    <?php echo $el['text'] ?>
                    <a class="mt-5 block relative font-medium underline hover:text-yellow-dark transition-all pl-7 before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-3 before:h-3 before:bg-yellow"
                        href="<?php echo $el['link'] ?>"><?php echo $el['link'] ?></a>
                </div>

            </div>
        </article>
        <?php $counter++; endforeach; ?>
    </section>
    <section class="relative">
        <div class="grid grid-cols-12">
            <div class="col-span-5">
                <img src="<?php echo THEME_IMG . 'contact.jpg' ?>" alt="" class="w-full">
            </div>
            <div class="col-span-6">
                <h2 class="text-4xl font-bold mb-5">Chcesz uzyskać więcej informacji?</h2>
                <?php echo do_shortcode('[contact-form-7 id="110" title="Kontakt"]') ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>