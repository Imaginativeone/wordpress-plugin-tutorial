<?php 
  
  $myName = "Doug";

  $names = array("Doug", "Aline", "Dubhe", "Gilberto");

?>

<p>Hi, my name is <?php echo $names[0]; ?></p>
<p>Hi, my name is <?php echo $names[1]; ?></p>
<p>Hi, my name is <?php echo $names[2]; ?></p>
<p>Hi, my name is <?php echo $names[3]; ?></p>

<?php 

  $count = 1;
  while($count < 100) {
    echo "<li>$count</li>";
    $count++;
  }

?>