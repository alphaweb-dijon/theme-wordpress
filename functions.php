<?php 


add_theme_support( 'custom-logo', array(
    'height'      => 'auto',
    'width'       => 300,
    'flex-width' => true,
 ) );
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

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
    // CPT prestations
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

	register_post_type( 'prestations', $args );

        // CPT contact
        $labels = array(
            'name' => 'contact',
            'all_items' => 'la bannière en page daccueil',  // affiché dans le sous menu
            'singular_name' => 'contact',
            'add_new_item' => 'Ajouter une bannière',
            'edit_item' => 'Modifier la bannière',
            'menu_name' => 'Contact'
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

        register_post_type( 'contact', $args );

        // CPT equipe
        $labels = array(
            'name' => 'equipe',
            'all_items' => 'employés',  // affiché dans le sous menu
            'singular_name' => 'equipe',
            'add_new_item' => 'Ajouter du personnel',
            'edit_item' => 'Modifier le personnel',
            'menu_name' => 'Equipe'
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
    
        register_post_type( 'equipe', $args );

                // CPT presentation
                $labels = array(
                    'name' => 'presentation',
                    'all_items' => 'la bannière en page daccueil',  // affiché dans le sous menu
                    'singular_name' => 'equipe',
                    'add_new_item' => 'Ajouter une description',
                    'edit_item' => 'Modifier la presentation',
                    'menu_name' => 'Présentation'
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
            
                register_post_type( 'presentation', $args );
    }
add_action( 'init', 'alphaweb_register_post_types' );

// déclarer les menus
register_nav_menus( array(
	'main' => 'headermenu',
	'footer' => 'footermenu',
) );