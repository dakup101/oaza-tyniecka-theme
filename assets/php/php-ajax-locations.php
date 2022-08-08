<?php

add_action('init', 'fetch_locations_init');

function fetch_locations_init(){
    add_action( 'wp_ajax_fetch_locations', 'fetch_locations' );
    add_action( 'wp_ajax_nopriv_fetch_locations', 'fetch_locations' );
}

function fetch_locations(){
    $locID = (int) $_POST['id'];
    $locations = get_field('locations', $locID);
    if (!$locations){
        echo json_encode(array('err' => 'Nie znaleziono lokalizacji'));
        wp_die();
    }
    $response = array();
    foreach ($locations as $item){
        $location = array(
            'name'  => $item['name'],
            'desc'  => $item['desc'],
            'x'     => $item['cord_x'],
            'y'     => $item['cord_y']
        );
        $response[] = $location;
    }
    echo json_encode($response);
    wp_die();
}