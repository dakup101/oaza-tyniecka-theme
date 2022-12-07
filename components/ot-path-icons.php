<?php 
// Catch variable from get_template_part();
$args = wp_parse_args($args, array());
$paths = array(
'path_1.svg',
'path_2.svg',
'path_3.svg',
'path_4.svg',
'path_5.svg'
);
$counter = 0;
?>

<?php foreach($args as $item) : ?>
<div class="flex flex-col items-center relative">
    <figure class="bg-yellow-light block w-fit p-2 rounded-full aspect-square">
        <div class="bg-yellow block w-fit p-3 md:p-5 lg:p-6 rounded-full aspect-square">
            <img src="<?php echo $item['icon'] ?>" alt="" class="w-8 md:w-10 lg:w-14">
        </div>
    </figure>
    <span class="block mt-3 text-center"><?php echo $item['text'] ?></span>
    <?php if ($counter < 5) : ?>
    <figure class="absolute w-full top-4 left-1/2 hidden lg:block">
        <img src="<?php echo THEME_IMG . $paths[$counter] ?>" alt="" class="w-full h-24">
    </figure>
    <?php endif; ?>
</div>
<?php $counter++ ; endforeach; ?>