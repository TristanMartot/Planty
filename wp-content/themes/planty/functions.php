<?php
// action pour faire entrer en file d'attente le style.css du thème parent
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
// action avec priorité 20. 
// on sort wallstreet-style de la file d'attente et on rentre le style.css de l'enfant
add_action('wp_enqueue_scripts', 'style_theme_enfant', 20);
function style_theme_enfant() {
wp_dequeue_style('twentytwenty', get_stylesheet_uri() );
wp_enqueue_style('enfant-style', get_stylesheet_uri() );
}


function planty_menu_class($classes, $item)
{
    $classes[] = 'item_' .$item->title ;
    return str_replace(' ', '_', $classes);
}

add_filter('nav_menu_css_class', 'planty_menu_class', 10, 2);




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
                    <div class="column1_right_top">+</div>
                    <div class="column1_right_bottom">-</div>
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
?>