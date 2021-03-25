<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'rek-ai', "https://static.rek.ai/183414f4.js");
    //wp_enqueue_script( 'rek-ai-autocomplete', "https://static.rek.ai/addon/rekai_autocomplete.min.js", array("rek-ai"));

    $translation_array = array(
      'rekcsf1' => $_POST['rekcsf1'],
      'rekcsf2' => $_POST['rekcsf2'],
      'rekcsf3' => $_POST['rekcsf3'],
      'rekcsf4' => $_POST['rekcsf4']
    );
    wp_register_script( 'hultsfred-custom', get_stylesheet_directory_uri() . "/custom.js", array( 'jquery' ), '1.3' );
    wp_localize_script( 'hultsfred-custom', 'hksupport_js_object', $translation_array );
    wp_enqueue_script( 'hultsfred-custom');

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function script_on_not_front_page() {
  if (!is_home() && !is_front_page()) {
?>
  <script>
    window.rek_viewclick = true;
  </script>
<?php
  }
}
add_action('wp_head', 'script_on_not_front_page');


?>
