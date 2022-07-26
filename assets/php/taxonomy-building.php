<?php
add_action( 'init', 'taxonomy_building', 0 );
function taxonomy_building() {
    register_taxonomy('med_title', 'apartaments', array(
        'hierarchical' => false,
        'labels' => array(
        'name' => _x( 'Domy', 'taxonomy general name' ),
        'singular_name' => _x( 'Dom', 'taxonomy singular name' ),
        'search_items' =>  __( 'Wyszukaj dom' ),
        'all_items' => __( 'Wszystkie domy' ),
        'edit_item' => __( 'Edytuj dom' ),
        'update_item' => __( 'Zaktualizuj dom' ),
        'add_new_item' => __( 'Dodaj dom' ),
        'new_item_name' => __( 'Dom' ),
        'menu_name' => __( 'Domy' ),
        ),
        'rewrite' => array(
        'slug' => 'building',
        'with_front' => false, 
        'hierarchical' => true 
        ),
    ));
}