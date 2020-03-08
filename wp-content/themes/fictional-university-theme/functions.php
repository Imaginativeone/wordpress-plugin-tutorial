<?php 

  function university_files() {

     // arg1 (handle): nickname for main css stylesheet wp_enqueue_script for JavaScript
     // arg2 (src):    location to points to the file
      wp_enqueue_style( 'university_main_styles', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'university_files'); // First argument: WordPress File, 2nd argument: Controller function

?>
