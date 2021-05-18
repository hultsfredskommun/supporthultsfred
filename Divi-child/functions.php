<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    $translation_array = array(
    );
    wp_register_script( 'hultsfred-custom', get_stylesheet_directory_uri() . "/custom.js", array( 'jquery' ), '1.3' );
    wp_localize_script( 'hultsfred-custom', 'hksupport_js_object', $translation_array );
    wp_enqueue_script( 'hultsfred-custom');

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

?>
