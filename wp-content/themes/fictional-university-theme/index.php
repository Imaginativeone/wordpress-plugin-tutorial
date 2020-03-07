<?php 
  function myFirstFunction() {
      echo "<p>Hello, this is my first function.</p>";
  }

  function greet($name, $color) {
      echo "<p>Hi, my name is <b><font color=\"$color\">$name</font></b> and my favorite color is <font color=\"$color\">$color</font>.</p>";
  }

  greet('John', 'blue');
  greet('Jane', 'green');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
