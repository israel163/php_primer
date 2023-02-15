<?php $title='Do-While'; include"./includes/header.php"?>

  <title>Do-While</title>

  <h1>While condition</h1>
  <?php
  $count = 0;
  while ($count < 5) {
    echo "<p>$count</p>";
    $count++;
  }
  ?>

  <h1>Do-Condition</h1>
  <?php
  do {
    echo "<p>$count</p>";
    $count++;
  } while ($count < 7)
  ?>
</body>

</html>