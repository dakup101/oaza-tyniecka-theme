<?php 
$array = [1,2,3,4,5,6];
$paths = array(
    'path_1.svg',
    'path_2.svg',
    'path_3.svg',
    'path_4.svg',
    'path_5.svg'
);
$counter = 0;
?>

<?php foreach($array as $item) : ?>
<div class="flex flex-col items-center relative">
    <figure class="bg-yellow-light block w-fit p-2 rounded-full aspect-square">
        <div class="bg-yellow block w-fit p-6 rounded-full aspect-square">
            <img src="<?php echo THEME_IMG . '/y1.svg' ?>" alt="" class="w-14">
        </div>
    </figure>
    <span class="block mt-3 text-center">Garaż podziemny <br>i miejsca postojowe</span>
    <?php if ($counter < 5) : ?>
    <figure class="absolute w-full top-4 left-1/2">
        <img src="<?php echo THEME_IMG . $paths[$counter] ?>" alt="" class="w-full h-24">
    </figure>
    <?php endif; ?>
</div>
<?php $counter++ ; endforeach; ?>