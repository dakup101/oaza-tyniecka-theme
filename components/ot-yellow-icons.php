<?php 
$array = [1,2,3,4,5,6];
?>

<?php foreach($array as $item) : ?>
<div class="flex flex-col items-center">
    <figure class="bg-yellow-light block w-fit p-2 rounded-full aspect-square">
        <div class="bg-yellow block w-fit p-6 rounded-full aspect-square">
            <img src="<?php echo THEME_IMG . '/y1.svg' ?>" alt="" class="w-14">
        </div>
    </figure>
    <span class="block mt-3 text-center">Garaż podziemny <br>i miejsca postojowe</span>
</div>
<?php endforeach; ?>