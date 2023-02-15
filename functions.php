<?php $title='Functions'; include"./includes/header.php"?>
  <h1>Functions</h1>

  <?php
  function welcomeUser($name)
  {
    print 'Welcome to the functions secction ' . $name."</br>";
  }

  welcomeUser('Israel');

  function product($a, $b) {
    $product = $a * $b;
    return $product;
  }

  $result=product(10,10);
  echo $result."</br>";
  ?>
</body>

</html>