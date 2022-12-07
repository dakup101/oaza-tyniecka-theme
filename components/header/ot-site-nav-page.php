<div class="site-nav flex md:grid grid-cols-12 items-center justify-between py-5">
    <nav class="col-span-5 justify-self-end mb-7 hidden md:block" aria-label="Main left">
        <?php echo get_template_part( '/components/ot-menu-items', null, array(
            'menu'=>'primary-left',
            'class' => 'text-dark list-none flex'
        ) ) ?>
    </nav>
    <a href="<?php echo get_home_url() ?>" class="block col-span-2 px-5 md:px-10">
        <img src="<?php echo THEME_IMG . '/logo_dark.svg' ?>" alt="" class="w-full">
    </a>
    <nav class="col-span-5 shrink-0 pr-4 md:pr-0 justify-self-start items-center mb-7 flex" aria-label="Main right">
        <?php echo get_template_part( '/components/ot-menu-items', null, array(
            'menu'=>'primary-right',
            'class' => 'text-dark list-none flex hidden md:block'
        ) ) ?>
        <div class="flex shrink-0 items-center md:hidden h-fit mr-5">
            <button data-nav_mobile_open>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#333" class="bi bi-list w-8 h-8"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
        </div>
        <div class="pl-5  shrink-0 border-l border-l-dark font-light ">
            <a href="tel:+48126889000" class="flex items-center font-light text-dark py-2 overflow-hidden">
                <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.75 24.75" class="w-5">
                        <defs>
                            <style>
                            .cls-1 {
                                fill: none;
                                stroke: #333;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: .75px;
                            }
                            </style>
                        </defs>
                        <g>
                            <path class="cls-1"
                                d="M6.1,10.01l1.76-1.76c.63-.63,.63-1.65,0-2.27l-2.39-2.39c-.63-.63-1.65-.63-2.27,0L1.04,5.74" />
                            <path class="cls-1" d="M1.04,5.74c-1.95,1.95,.52,7.56,5.51,12.56" />
                            <path class="cls-1" d="M6.1,10.01c-.74,.74,.6,3.26,2.99,5.65" />
                            <path class="cls-1"
                                d="M14.74,18.65l1.76-1.76c.63-.63,1.65-.63,2.27,0l2.39,2.39c.63,.63,.63,1.65,0,2.27l-2.16,2.16" />
                            <path class="cls-1" d="M19.01,23.71c-1.95,1.95-7.56-.52-12.56-5.51" />
                            <path class="cls-1" d="M14.74,18.65c-.74,.74-3.26-.6-5.65-2.99" />
                        </g>
                        <path class="cls-1" d="M24.37,13.58c0-3.53-1.37-6.84-3.87-9.33C18.02,1.75,14.7,.37,11.17,.37" />
                        <path class="cls-1" d="M11.17,8.36c1.39,0,2.71,.54,3.69,1.53,.99,.99,1.53,2.3,1.53,3.69" />
                        <path class="cls-1" d="M20.41,13.58c0-2.36-.9-4.73-2.71-6.53-1.8-1.8-4.17-2.71-6.53-2.71" />
                    </svg>
                </figure>
                <span class="ml-3 hidden lg:block">+48 126 889 000</span>
                <span class="ml-3 block lg:hidden"><?php echo __("Zadzwoń", "oaza-tyniecka-theme") ?></span>
            </a>
        </div>
    </nav>

    <nav data-nav_mobile class="w-full flex flex-col mobile-nav site">
        <div class="px-5 mobile-nav__title">
            <span><?php echo __("Nawigacja", "oaza-tyniecka-theme") ?></span>
            <button data-nav_mobile_close>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>
        <?php echo get_template_part( '/components/ot-menu-items', null, array(
            'menu'=>'primary-left',
            'class' => 'text-dark list-none flex flex-col px-0 gap-3 mb-3'
        ) ) ?>
        <?php echo get_template_part( '/components/ot-menu-items', null, array(
            'menu'=>'primary-right',
            'class' => 'text-dark list-none flex flex-col px-0 gap-3'
        ) ) ?>
    </nav>
</div>