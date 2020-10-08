
<?php


/*
1-Admin-BackOffice
2-Scripts
3-Theme
*/

/*
----------------------------------------------
 1-Admin-BackOffice
----------------------------------------------
 */

/* Ajout des emplacements des zones de widget */
function theme_widgets_init() {

  // Colonne de droite principale
  register_sidebar( array(
  'name' =>'Colonne de droite principale',
  'id' => 'primary-right-column',
  'description' =>'La colonne de droite principale.',
  'before_widget' => '<li id="%1$s" class="widget_container %2$s">',
  'after_widget' => '</li>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>'
  ) );
  
  }
  add_action( 'widgets_init', 'theme_widgets_init' );
  
  /* gestion des images à la une
  ---------------------------------------------- */
  
  add_theme_support('post-thumbnails');
  

  /* Ajout des formats d'article */

  add_theme_support('post-formats', array( 'image', 'status', 'quote') );


  /* CustomPost : EVENT
  ---------------------------------------------- */
 
  function jdv_register_cpt_event() {
  
      $labels = array( 
          'name' => _x( 'Evénements', 'evenements' ),
          'singular_name' => _x( 'Evénement', 'evenement' ),
          'add_new' => _x( 'Ajouter', 'evenement' ),
          'add_new_item' => _x( 'Ajouter un événement', 'evenement' ),
          'edit_item' => _x( 'Editer un événement', 'evenement' ),
          'new_item' => _x( 'Nouvel événement', 'evenement' ),
          'view_item' => _x( 'Voir l\'événement', 'evenement' ),
          'search_items' => _x( 'Rechercher un événement', 'evenement' ),
          'not_found' => _x( 'Aucun événement trouvé', 'evenement' ),
          'not_found_in_trash' => _x( 'Aucun événement dans la corbeille', 'evenement' ),
          'parent_item_colon' => _x( 'Evénement parent :', 'evenement' ),
          'menu_name' => _x( 'Evénements', 'evenement' ),
      );
  
      $args = array( 
          'labels' => $labels,
          'hierarchical' => false,
          'description' => 'Les rendez-vous de la saison',
          'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'post-formats' ),
          'taxonomies' => array( 'category', 'post_tag' ),
          'public' => true,
          'show_ui' => true,
          'show_in_menu' => true,
          'menu_position' => 5,
  
          //'show_in_nav_menus' => true,
          //'publicly_queryable' => true,
          //'exclude_from_search' => false,
          //'has_archive' => true,
          //'query_var' => true,
          //'can_export' => true,
          //'rewrite' => true,
          //'capability_type' => 'post'
      );
  
      register_post_type( 'evenement', $args );
  }

  add_action( 'init', 'jdv_register_cpt_event' );

  register_taxonomy( 'type', 'evenement', array( 'hierarchical' => true, 'label' => 'Type', 'query_var' => true, 'rewrite' => true ) );


/*
----------------------------------------------
2-Scripts
----------------------------------------------
*/


/* Styles */
function jdv_css_styles() {
  wp_register_style( 'style-theme',get_template_directory_uri() . '/dist/css/style-theme.css' );
  wp_enqueue_style( 'style-theme' );
  }
  add_action('wp_enqueue_scripts','jdv_css_styles');
  
  
  /* Scripts */
  
  
  //wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/js/my-custom-script.js', array('jquery'), null, true);
  
  // CDN jQuery Google API
  function jdv_modify_jquery() {
      if (!is_admin()) {
          // comment out the next two lines to load the local copy of jQuery
          //wp_deregister_script('jquery');
          //wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, '1.11.0');
          wp_enqueue_script('jquery');
      }
  }
  add_action('init', 'jdv_modify_jquery');
  
  
  
  function jdv_theme_enqueue_scripts() { 
    $js_directory = get_template_directory_uri() . '/dist/js/'; 
    wp_register_script( 'isotope', $js_directory . 'libs/isotope.pkgd.min.js', 'jquery', '1.0' ); 
    wp_register_script( 'fancybox', $js_directory . 'libs/jquery.fancybox.min.js', 'jquery', '1.0' ); 
    wp_register_script( 'parallax', $js_directory . 'libs/jquery.parallax-1.1.3.js', 'jquery', '1.0' ); 
    //wp_register_script( 'supersized', $js_directory . 'libs/supersized.core.3.2.1.js', 'jquery', '1.0' ); 
    //wp_register_script( 'fa', 'https://use.fontawesome.com/c3b1c44f29.js' ); 
    wp_register_script( 'global', $js_directory . 'global.js', 'jquery', '1.0' ); 
      //wp_enqueue_script( 'jquery' ); 
    wp_enqueue_script( 'isotope' ); 
    wp_enqueue_script( 'fancybox' ); 
    wp_enqueue_script( 'parallax' ); 
    //wp_enqueue_script( 'supersized' ); 
    wp_enqueue_script( 'fa' ); 
    wp_enqueue_script( 'global' ); 
  } 
  
  add_action( 'wp_enqueue_scripts', 'jdv_theme_enqueue_scripts' );
  



/*
----------------------------------------------
3-Theme
----------------------------------------------
*/







