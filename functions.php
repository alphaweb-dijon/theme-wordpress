<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Pour charger des styles
function alphaweb3_register_assets() {
    
    // Charger le script de Bootstrap
    wp_enqueue_script( 
        'bootstrap_script', 
        "https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js",
        array(), 
        '1.0'
    );

    // Charger le style de Bootstrap
    wp_enqueue_style( 
        'bootstrap_style', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css',
        array(), 
        '1.0'
    );



    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'alphaweb3_main',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	

}
add_action( 'wp_enqueue_scripts', 'alphaweb3_register_assets' );

// Déclarer un custom post types
function alphaweb_register_post_types() {
	// La déclaration de nos Custom Post Types et Taxonomies ira ici
    // CPT Portfolio
    $labels = array(
        'name' => 'prestations',
        'all_items' => 'Toutes les prestations',  // affiché dans le sous menu
        'singular_name' => 'prestations',
        'add_new_item' => 'Ajouter une prestation',
        'edit_item' => 'Modifier la prestation',
        'menu_name' => 'Prestations'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon'   => 'dashicons-money-alt',
	);

	register_post_type( 'portfolio', $args );
    }
add_action( 'init', 'alphaweb_register_post_types' );

