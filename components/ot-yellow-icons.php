<?php 
// Catch variable from get_template_part();
$args = wp_parse_args($args, array());
?>

<?php foreach($args as $item) : ?>
<div class="flex flex-col items-center">
    <figure class="bg-yellow-light block w-fit p-2 rounded-full aspect-square">
        <div class="bg-yellow block w-fit p-6 rounded-full aspect-square">
            <img src="<?php echo $item['icon'] ?>" alt="" class="w-14">
        </div>
    </figure>
    <span class="block mt-3 text-center"><?php echo $item['text'] ?></span>
</div>
<?php endforeach; ?>