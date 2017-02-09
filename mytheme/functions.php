<?php
add_action('widgets_init','zero_add_sidebar');
function zero_add_sidebar(){
	$before_widget = "<div class='widgetRight'>";
	$after_widget = '</div>';
	$before_title = '<h1>';
	$after_title = '</h1>';
    register_sidebar(array(
        'id' => 'my_custom_zone',
        'name' => 'colonne droite',
        'description' => 'Apparait en sur la droite de la page',
        'before_widget' => $before_widget,
        'after_widget' => $after_widget,
        'before_title' => $before_title,
        'after_title' => $after_title
    ));
}

add_action('init', 'zero_add_menu');
function zero_add_menu()
{
    register_nav_menu('main_menu', 'Menu principal');
}
?>