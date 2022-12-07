<?php
// Register Custom Taxonomy
function phase_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Etapy', 'Taxonomy General Name', 'oaza-tyniecka-theme' ),
		'singular_name'              => _x( 'Etap', 'Taxonomy Singular Name', 'oaza-tyniecka-theme' ),
		'menu_name'                  => __( 'Etapy', 'oaza-tyniecka-theme' ),
		'all_items'                  => __( 'Wszystkie', 'oaza-tyniecka-theme' ),
		'parent_item'                => __( 'Rodzicel', 'oaza-tyniecka-theme' ),
		'parent_item_colon'          => __( 'Rodziciel', 'oaza-tyniecka-theme' ),
		'new_item_name'              => __( 'Etap', 'oaza-tyniecka-theme' ),
		'add_new_item'               => __( 'Dodaj', 'oaza-tyniecka-theme' ),
		'edit_item'                  => __( 'Edytuj', 'oaza-tyniecka-theme' ),
		'update_item'                => __( 'Aktualizuj', 'oaza-tyniecka-theme' ),
		'view_item'                  => __( 'Pokaż', 'oaza-tyniecka-theme' ),
		'separate_items_with_commas' => __( 'Odziel komą', 'oaza-tyniecka-theme' ),
		'add_or_remove_items'        => __( 'Dodaj lub usuń', 'oaza-tyniecka-theme' ),
		'choose_from_most_used'      => __( 'Wybierz wśród popularnych', 'oaza-tyniecka-theme' ),
		'popular_items'              => __( 'Popularne', 'oaza-tyniecka-theme' ),
		'search_items'               => __( 'Szukaj', 'oaza-tyniecka-theme' ),
		'not_found'                  => __( '404', 'oaza-tyniecka-theme' ),
		'no_terms'                   => __( '404', 'oaza-tyniecka-theme' ),
		'items_list'                 => __( 'Items list', 'oaza-tyniecka-theme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'oaza-tyniecka-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	register_taxonomy( 'phase', array( 'gallery_img' ), $args );

}
add_action( 'init', 'phase_taxonomy', 0 );