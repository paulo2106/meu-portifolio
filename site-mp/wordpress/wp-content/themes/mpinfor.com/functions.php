<?php

 function carregar_scripts() {
    wp_enqueue_style( 'flexboxgrid', get_template_directory_uri().'/css/flexboxgrid.css',  array (), 'all' );

}
add_action( 'wp_enqueue_scripts', 'carregar_scripts' );
?>

<?php
  function add_scripts() {
  wp_enqueue_script( 'scripts', get_template_directory_uri().'/js/scripts.js', array(),'1.1');

}
add_action( 'wp_enqueue_scripts', 'add_scripts' );

?>