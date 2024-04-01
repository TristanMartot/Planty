<?php

// action pour faire entrer en file d'attente le style.css du thème parent
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 20);

function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'enfant-style', get_stylesheet_directory_uri() . '/style.css' );
wp_enqueue_style( 'enfant-style-nav', get_stylesheet_directory_uri() . '/css/nav.css' );
wp_enqueue_style( 'enfant-style-shortcodes', get_stylesheet_directory_uri() . '/css/shortcodes.css' );
}



//************* SHORTCODE ***************//

// Ajout de code dans la section de commande de la page COMMANDER 
add_shortcode('order_quantity', 'order_quantity_func');

function order_quantity_func($atts)
{
    //Je récupère les attributs mis sur le shortcode
    $atts = shortcode_atts(array(
        'column' => '',
    ), $atts, 'order_quantity');

    //Je commence à récupérer le flux d'information
    ob_start();

    if ($atts['column'] != "") {
        ?>

            <div class="container">
                <div class="column1">
                <div class="column1_left"><input value="0"></div>
                <div class="column1_right">
                    <div class="column1_right_top"><a href="#">+</a></div>
                    <div class="column1_right_bottom"><a href="#">-</a></div>
                </div>
                </div>  
                <div class="column2"><a href="#">OK</a></div>  
            </div>

        <?php
    }

    //J'arrête de récupérer le flux d'information et le stock dans la fonction $output
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}



/********* HOOKS **********/

// Ajoute le bouton admin sur le menu lorsque l'utilisateur est connecté
function add_admin_item( $items, $args ) {
    if (is_user_logged_in() && $args->menu == 'menu') {
        $items .= '<li class="item_menu"><a href="../wp-admin">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_item', 10, 2 );

?>