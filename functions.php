<?php
/**
* L'ensemble des fonctions du thème
*/
function enfiler_css() {
wp_enqueue_style('4w4-gr1-principal', // id
        get_template_directory_uri() . '/style.css', // adresse url de style.css
        array(), // définir les dépendances
        filemtime(get_template_directory() . '/style.css'), // le calcul de la version du fichier css
        'all'); // media
}        

add_action( 'wp_enqueue_scripts', 'enfiler_css' );     

/*-------------------------------enregistrement menu----------*/

	function enregistre_menus(){
		register_nav_menus( array(
	    	'menu_entete' => 'Menu entete',
	    	'menu_sidebar'  => 'Menu sidebar' ,
		) );
	}
	add_action( 'after_setup_theme', 'enregistre_menus', 0 );



/*-----------------------------------add_theme_support------------*/
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 150,
    'width'  => 150,
) );


/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
	if ( $query->is_home() //si page acceuil
	 && $query->is_main_query() // si requete principale
	  && ! is_admin() ) { // si pas dans le tableau de bord
		//query -> set permet de 
	  $query->set( 'category_name', '4w4' ); // filtre leas articles dans la categorie 4w4
	  $query->set( 'orderby', 'title' ); // trier selon le champ title
	  $query->set( 'order', 'ASC' ); // trer en ordre acensdant
	  }
	 }
	 add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );

	 /*** permet de personalisé chacun des titres deu menu corus
	  * @param $title : titre du menu a modifier
	  $item: la structure du LI du menu
	  $args: objet décrivant l'ensemble des menu de notre site
	  $depth : niveau de profondeur du menu (on la retiré)
	  */

	  function perso_menu_item_title($title, $item, $args) {
		// Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
		if($args->menu == 'cours') { // on filtre uniquement le menu cours
	// Modifier la longueur du titre en fonction de vos besoins
	$title = wp_trim_words($title, 3, ' ... '); // modifir améliorer pou rle tp1
	}
	return $title;
	}
	add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);


	// Enregistrement des widgets
function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'footer3', 'nom-de-mon-theme' ),
        'id' => 'sidebar',
        'description' => __( 'Un widget area pour afficher des widgets dans la sidebar.', 'nom-de-mon-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'enregistrer_sidebar' );