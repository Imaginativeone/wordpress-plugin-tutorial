<?php 
  
  $myName = "Doug";

  $names = array("Doug", "Aline", "Dubhe", "Gilberto");

?>

<?php 

  $count = 0;
  while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
  }

?>
