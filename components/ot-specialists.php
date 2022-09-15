<?php $args = wp_parse_args($args, array()); ?>
<div class="grid grid-cols-3 gap-20 px-32">
    <?php foreach ($args as $el) : ?>
    <div class="bg-gray-light">
        <img src="<?php echo $el['zdjecie'] ?>" alt="<?php echo $el['name'] ?>" class="w-full">
        <div class="px-10 py-5">
            <p class="font-bold text-lg"><?php echo $el['name'] ?></p>
            <p class="text-sm"><?php echo $el['pos'] ?></p>
            <a class="block w-fit mt-3" href="tel:<?php echo $el['tel'] ?>"><?php echo $el['tel'] ?></a>
            <a class="block w-fit" href="mailto:<?php echo $el['email'] ?>"><?php echo $el['email'] ?></a>
        </div>
    </div>
    <?php endforeach; ?>
</div>