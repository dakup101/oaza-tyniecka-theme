<?php
add_action( 'init', 'post_type_locations', 0 );

function post_type_locations() {

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Lokalizacje', 'Post Type General Name', 'oaza-tyniecka-theme' ),
        'singular_name'       => _x( 'Lokalizacja', 'Post Type Singular Name', 'oaza-tyniecka-theme' ),
        'menu_name'           => __( 'Lokalizacje', 'oaza-tyniecka-theme' ),
        'all_items'           => __( 'Lokalizacje', 'oaza-tyniecka-theme' ),
        'view_item'           => __( 'Zobacz lokalizację', 'oaza-tyniecka-theme' ),
        'add_new_item'        => __( 'Dodaj lokalizację', 'oaza-tyniecka-theme' ),
        'add_new'             => __( 'Dodaj lokalizację', 'oaza-tyniecka-theme' ),
        'edit_item'           => __( 'Edytuj lokalizację', 'oaza-tyniecka-theme' ),
        'update_item'         => __( 'Zaktualizuj lokalizację', 'oaza-tyniecka-theme' ),
        'search_items'        => __( 'Szukaj lokalizację', 'oaza-tyniecka-theme' ),
        'not_found'           => __( 'Nie znaleziono', 'oaza-tyniecka-theme' ),
        'not_found_in_trash'  => __( 'Nie znaleziono w koszu', 'oaza-tyniecka-theme' ),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'locations', 'oaza-tyniecka-theme' ),
        'description'         => __( 'Lokalizacje: ikonki, nazwy, koordynaty i info', 'oaza-tyniecka-theme' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => false,
        'menu_position'       => 5,
        'can_export'          => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-location-alt',

        // This is where we add taxonomies to our CPT
        // 'taxonomies'          => array( 'building' ),
    );

    // Registering your Custom Post Type
    register_post_type( 'locations', $args );

}