<?php
// Register Custom Post Type
function gallery_img() {

	$labels = array(
		'name'                  => _x( 'Grafiki Galerii', 'Post Type General Name', 'oaza-tyniecka-theme' ),
		'singular_name'         => _x( 'Garfika Galerii', 'Post Type Singular Name', 'oaza-tyniecka-theme' ),
		'menu_name'             => __( 'Galeria', 'oaza-tyniecka-theme' ),
		'name_admin_bar'        => __( 'Galeria', 'oaza-tyniecka-theme' ),
		'archives'              => __( 'Galeria', 'oaza-tyniecka-theme' ),
		'attributes'            => __( 'Atrybuty', 'oaza-tyniecka-theme' ),
		'parent_item_colon'     => __( 'Rodziciel', 'oaza-tyniecka-theme' ),
		'all_items'             => __( 'Wszystko', 'oaza-tyniecka-theme' ),
		'add_new_item'          => __( 'Dodaj', 'oaza-tyniecka-theme' ),
		'add_new'               => __( 'Dodaj', 'oaza-tyniecka-theme' ),
		'new_item'              => __( 'Grafika', 'oaza-tyniecka-theme' ),
		'edit_item'             => __( 'Edytuj', 'oaza-tyniecka-theme' ),
		'update_item'           => __( 'Aktualizuj', 'oaza-tyniecka-theme' ),
		'view_item'             => __( 'Pokaż', 'oaza-tyniecka-theme' ),
		'view_items'            => __( 'Pikaż', 'oaza-tyniecka-theme' ),
		'search_items'          => __( 'Szukaj', 'oaza-tyniecka-theme' ),
		'not_found'             => __( '404', 'oaza-tyniecka-theme' ),
		'not_found_in_trash'    => __( '404', 'oaza-tyniecka-theme' ),
		'featured_image'        => __( 'Obrazek wyróżniający', 'oaza-tyniecka-theme' ),
		'set_featured_image'    => __( 'Ustaw obrazek', 'oaza-tyniecka-theme' ),
		'remove_featured_image' => __( 'Usuń obrazek', 'oaza-tyniecka-theme' ),
		'use_featured_image'    => __( 'Użyj obrazek', 'oaza-tyniecka-theme' ),
		'insert_into_item'      => __( 'Dodaj do grafiki', 'oaza-tyniecka-theme' ),
		'uploaded_to_this_item' => __( 'Załadowano do Grafiki', 'oaza-tyniecka-theme' ),
		'items_list'            => __( 'Items list', 'oaza-tyniecka-theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'oaza-tyniecka-theme' ),
		'filter_items_list'     => __( 'Filter items list', 'oaza-tyniecka-theme' ),
	);
	$args = array(
		'label'                 => __( 'Garfika Galerii', 'oaza-tyniecka-theme' ),
		'description'           => __( 'Oaza Tyniecka Grafiki z Galerii', 'oaza-tyniecka-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'phase' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-format-gallery'
	);
	register_post_type( 'gallery_img', $args );

}
add_action( 'init', 'gallery_img', 0 );