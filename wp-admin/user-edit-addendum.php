<?php 
  $generic_message = 'Hello. This is a cute \'lil message.';
  // echo $generic_message;
  _e( $generic_message );

  $additional_html = 
  '<p style="background-color:white">'.
    'This is a test.'.
  '</p>';

  _e($additional_html);

  _e( 'The name of this file is directory is: ' . dirname(__FILE__) );

  require_once(dirname(__FILE__) . '/admin.php' );

?>
