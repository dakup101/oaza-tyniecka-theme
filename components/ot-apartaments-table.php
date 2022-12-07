<table class="w-full lg:w-4/5 mx-auto" data-sort_table>
    <thead class="apartaments-list">
        <tr class="border-t-2 border-b-2 border-gray">
            <th class="px-5 py-2.5">
                <button data-sort="0"
                    class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                    <?php echo __("nr. domu", "oaza-tyniecka-theme") ?>
                    <figure class="apartament-list__sort ml-2">
                        <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 29">
                            <path d="M12,0l12,11H0L12,0Z" />
                            <path d="M12,29L0,18H24l-12,11Z" />
                        </svg>
                    </figure>
                </button>
            </th>
            <th class="px-5 py-2.5">
                <button data-sort="1"
                    class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                    <?php echo __("metraż", "oaza-tyniecka-theme") ?>
                    <figure class="apartament-list__sort ml-2">
                        <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 29">
                            <path d="M12,0l12,11H0L12,0Z" />
                            <path d="M12,29L0,18H24l-12,11Z" />
                        </svg>
                    </figure>
                </button>
            </th>
            <th class="px-5 py-2.5">
                <button data-sort="2"
                    class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                    <?php echo __("pokoje", "oaza-tyniecka-theme") ?>
                    <figure class="apartament-list__sort ml-2">
                        <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 29">
                            <path d="M12,0l12,11H0L12,0Z" />
                            <path d="M12,29L0,18H24l-12,11Z" />
                        </svg>
                    </figure>
                </button>
            </th>
            <th class="px-5 py-2.5">
                <button data-sort="3"
                    class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                    <?php echo __("ogród", "oaza-tyniecka-theme") ?>
                    <figure class="apartament-list__sort ml-2">
                        <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 29">
                            <path d="M12,0l12,11H0L12,0Z" />
                            <path d="M12,29L0,18H24l-12,11Z" />
                        </svg>
                    </figure>
                </button>
            </th>
            <th class="px-5 py-2.5">
                <button data-sort="4"
                    class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                    <?php echo __("status", "oaza-tyniecka-theme") ?>
                    <figure class="apartament-list__sort ml-2">
                        <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 29">
                            <path d="M12,0l12,11H0L12,0Z" />
                            <path d="M12,29L0,18H24l-12,11Z" />
                        </svg>
                    </figure>
                </button>
            </th>
            <th class="px-5 py-2.5">
                <button data-sort="5"
                    class="flex items-center uppercase justify-center w-full hover:text-yellow transition-all">
                    <?php echo __("cena", "oaza-tyniecka-theme") ?>
                    <figure class="apartament-list__sort ml-2">
                        <svg data-sort_icon class="w-4 h-4 fill-gray" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 29">
                            <path d="M12,0l12,11H0L12,0Z" />
                            <path d="M12,29L0,18H24l-12,11Z" />
                        </svg>
                    </figure>
                </button>
            </th>
            <th class="px-5 py-2.5">
                <span class="flex items-center uppercase justify-center w-full">
                    <?php echo __("Zobacz dom", "oaza-tyniecka-theme") ?>
                </span>
            </th>
        </tr>
    </thead>
    <?php        
    $args = array(  
        'post_type' => 'apartaments',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );
    $apartaments = get_posts($args);
    ?>
    <tbody>
        <?php foreach($apartaments as $item) : ?>
        <tr class="border-b border-gray">
            <td data-sort_col="0" class="text-center px-5 py-2.5 font-bold">
                <?php echo $item->post_title ?>
            </td>
            <td data-sort_col="1" class="text-center px-5 py-2.5 font-bold">
                <?php echo get_field('apartament', $item->ID)['meters'] ?>
            </td>
            <td data-sort_col="2" class="text-center px-5 py-2.5 font-bold">
                <?php echo get_field('apartament', $item->ID)['rooms'] ?>
            </td>
            <td data-sort_col="3" class="text-center px-5 py-2.5 font-bold">
                <?php echo get_field('apartament', $item->ID)['field'] ?>
            </td>
            <td data-sort_col="4" class="text-center px-5 py-2.5 font-bold">
                <?php echo get_field('apartament', $item->ID)['price'] ?>
            </td>
            <td data-sort_col="5" class="text-center px-5 py-2.5 font-bold">
                <?php echo get_field('apartament', $item->ID)['status'] ?>
            </td>
            <td class="text-center px-5 py-2.5 font-bold">
                <a href="<?php echo get_permalink($item->ID); ?>" class="mx-auto block w-fit">
                    <svg class="w-6 h-6 fill-yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.81 24">
                        <path
                            d="M23.81,21.65l-6.2-6.2c1.17-1.6,1.86-3.58,1.86-5.71C19.46,4.36,15.1,0,9.73,0S0,4.36,0,9.73s4.36,9.73,9.73,9.73c2.03,0,3.92-.63,5.49-1.7l6.24,6.24,2.35-2.35ZM2.85,9.73c0-3.79,3.09-6.88,6.88-6.88s6.88,3.09,6.88,6.88-3.09,6.88-6.88,6.88-6.88-3.09-6.88-6.88Z" />
                    </svg>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>