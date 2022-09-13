<div class="site-nav grid grid-cols-12 items-center py-5">
    <nav class="col-span-5 justify-self-end mb-7" aria-label="Main left">
        <?php echo get_template_part( '/components/ot-menu-items', null, array(
            'menu'=>'primary-left',
            'class' => 'text-dark list-none flex'
        ) ) ?>
    </nav>
    <figure class="col-span-2 px-10">
        <img src="<?php echo THEME_IMG . '/logo_dark.svg' ?>" alt="" class="w-full">
    </figure>
    <nav class="col-span-5 justify-self-start items-center mb-7 flex" aria-label="Main right">
        <?php echo get_template_part( '/components/ot-menu-items', null, array(
            'menu'=>'primary-left',
            'class' => 'text-dark list-none flex'
        ) ) ?>
        <div class="pl-5 border-l border-l-dark font-light ">
            <a href="tel:+48733797093" class="flex items-center font-light text-dark py-2 overflow-hidden">
                <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.75 24.75" class="w-5">
                        <defs>
                            <style>
                            .cls-1 {
                                fill: none;
                                stroke: #fff;
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
                <span class="block ml-3">+48 733 797 093</span>
            </a>
        </div>
    </nav>
</div>