<div class="w-full relative overflow-y-hidden overflow-x-scroll sm:overflow-x-hidden sm:overflow-y-hidden">
    <div class="relative w-fit h-96 sm:h-fit sm:w-full">

        <img src="<?php echo THEME_IMG . 'houses/houses.png' ?>" alt=""
            class="h-full w-auto max-w-none sm:h-auto sm:w-full">
        <?php for ($i=1; $i <= 20; $i++): ?>
        <div class="house-picker house-picker__<?php echo $i; ?>" data-house_info="<?php echo $i ?>">
            <?php
            $i < 10 ? $file = "0" . $i . ".svg" : $file = $i . ".svg";
            $context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
            echo file_get_contents( get_template_directory_uri() . '/assets/img/houses/' . $file, false, $context );
            ?>
        </div>
        <?php endfor; ?>
    </div>
    <div
        class="house-picker-finger absolute left-5 bottom-5 bg-white p-3 flex items-center justify-center rounded-lg shadow">
        <figure class="bg-yellow-light/50 p-2 rounded-full ">
            <img src="<?php echo THEME_IMG . 'finger.svg' ?>" alt="" class="w-10 h-10 -rotate-45">
        </figure>
        <p class="font-bold ml-3">
            <span class="inline sm:hidden text-xs text-gray">
                <?php echo __("(Grafika się przesuła w boki)", "oaza-tyniecka-theme") ?>
            </span>
            <br class="sm:hidden">
            <?php echo __("Kliknij i wybierz<br>dom", "oaza-tyniecka-theme") ?>
        </p>
    </div>
</div>