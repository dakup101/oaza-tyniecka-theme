<?php
add_action( 'init', 'post_type_apartaments', 0 );

function post_type_apartaments() {

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Apartamenty', 'Post Type General Name', 'oaza-tyniecka-theme' ),
        'singular_name'       => _x( 'Apartament', 'Post Type Singular Name', 'oaza-tyniecka-theme' ),
        'menu_name'           => __( 'Apartamenty', 'oaza-tyniecka-theme' ),
        'all_items'           => __( 'Apartamenty', 'oaza-tyniecka-theme' ),
        'view_item'           => __( 'Zobacz apartament', 'oaza-tyniecka-theme' ),
        'add_new_item'        => __( 'Dodaj apartament', 'oaza-tyniecka-theme' ),
        'add_new'             => __( 'Dodaj apartament', 'oaza-tyniecka-theme' ),
        'edit_item'           => __( 'Edytuj apartament', 'oaza-tyniecka-theme' ),
        'update_item'         => __( 'Zaktualizuj apartament', 'oaza-tyniecka-theme' ),
        'search_items'        => __( 'Szukaj apartament', 'oaza-tyniecka-theme' ),
        'not_found'           => __( 'Nie znaleziono apartament', 'oaza-tyniecka-theme' ),
        'not_found_in_trash'  => __( 'Nie znaleziono apartament w koszu', 'oaza-tyniecka-theme' ),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'apartaments', 'oaza-tyniecka-theme' ),
        'description'         => __( 'Apartamenty: opisy, pliki etc', 'oaza-tyniecka-theme' ),
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
        'menu_icon'           => 'dashicons-admin-home',

        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'building' ),
    );

    // Registering your Custom Post Type
    register_post_type( 'apartaments', $args );

}

