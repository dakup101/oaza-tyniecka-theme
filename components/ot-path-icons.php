<?php 
$array = [1,2,3,4,5,6];
$paths = array(
    'path_1',
    'path_2',
    'path_3',
    'path_4',
    'path_5'
);
$counter = 1;
?>

<?php foreach($array as $item) : ?>
<div class="flex flex-col items-center relative">
    <figure class="bg-yellow-light block w-fit p-2 rounded-full aspect-square">
        <div class="bg-yellow block w-fit p-6 rounded-full aspect-square">
            <img src="<?php echo THEME_IMG . '/y1.svg' ?>" alt="" class="w-14">
        </div>
    </figure>
    <span class="block mt-3 text-center">Garaż podziemny <br>i miejsca postojowe</span>
    <?php if ($counter < 6) : ?>
    <figure class="absolute w-full top-4 left-1/2">
        <img src="<?php echo THEME_IMG . '/path_1.svg' ?>" alt="" class="w-full h-24">
    </figure>
    <?php endif; ?>
</div>
<?php $counter++ ; endforeach; ?>