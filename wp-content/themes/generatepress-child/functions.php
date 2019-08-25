<?php
add_action( 'wp_enqueue_scripts', 'add_generatepress_style' );
function add_generatepress_style () {
    wp_enqueue_style( 'generatepress', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'custom-script.js', get_stylesheet_directory_uri() . '/js/custom-script.js', array('jquery'), null, true );

}

function prefix_my_scripts() {

	wp_enqueue_script(
		'custom-script', //nome identificativo dello script
		get_template_directory_uri().'/js/custom-script.js', //url dello script
		array('jquery'), //array di scripts di cui questo necessita per funzionare
		false, //versione dello script
		true //se impostato a true, lo script verrà caricato nel footer, tramite il gancio wp_footer()
	);

}
