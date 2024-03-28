<?php

// action pour faire entrer en file d'attente le style.css du thème parent
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 20);

function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'enfant-style', get_stylesheet_directory_uri() . '/style.css' );
wp_enqueue_style( 'enfant-style-nav', get_stylesheet_directory_uri() . '/css/nav.css' );
wp_enqueue_style( 'enfant-style-shortcodes', get_stylesheet_directory_uri() . '/css/shortcodes.css' );
}



//*************SHORTCODE***************//

// Ajour de code dans la section de commande de la page COMMANDER 
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

function add_admin_item() {
    if (is_user_logged_in()) 
	{
        $items =    '<li id="menu-item-168" class="item_Nous_rencontrer"><a href="http://localhost/planty/nous-rencontrer/">Nous rencontrer</a></li>
                    <li id="menu-item-61" class="item_Admin"><a href="http://localhost/planty/wp-admin/">Admin</a></li>
                    <li id="menu-item-169" class="item_Commander"><a href="http://localhost/planty/commander/">Commander</a></li>';
    }
    else 
    {
        $items =    '<li id="menu-item-168" class="item_Nous_rencontrer"><a href="http://localhost/planty/nous-rencontrer/">Nous rencontrer</a></li>
                    <li id="menu-item-169" class="item_Commander"><a href="http://localhost/planty/commander/">Commander</a></li>';
    }
        return $items;
}
add_action('wp_nav_menu_items', 'add_admin_item', 10);


function create_menu() { 
    register_nav_menu('planty_footer',__( 'Planty Footer' )); 
    } 
add_action( 'init', 'create_menu' );
?>