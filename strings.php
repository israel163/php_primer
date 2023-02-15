<?php $title='String'; include"./includes/header.php"?>

  <title>String Manipulation</title>

  <?php
  // concatenation
  $name1 = 'hi there';
  $name2 = 'my name is PHP';

  echo $name1 . " how are you? " . $name2;

  // transformation

  echo "</br>".ucfirst($name1);
  echo "</br>".ucwords($name1);

  ?>
</body>

</html>