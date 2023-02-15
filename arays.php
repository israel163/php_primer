<?php $title='Arrays'; include"./includes/header.php"?>
 
  <h1>Arrays Manuipulation</h1>
  <?php
  $names = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
  echo $names[1];
  $size=count($names);
  echo "<p>The elemnts in the array are: $size</p>";

  for($count=0;$count<$size;$count++){
    echo "<br/>".$names[$count];
  }
  ?>

</body>

</html>