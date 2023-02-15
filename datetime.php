<?php $title='Date&Time'; include"./includes/header.php"?>

  <h1>Date and time manipulation</h1>
  <?php
  $datenow=getdate();
  echo 'Today is: ';
  echo $datenow['year']."/";
  echo $datenow['mon']."/";
  echo $datenow['mday'].'<br/>';

  print time().'<br/>';
  print date("m/d/y G.i:s A")."<br/>";
  print date("j of F Y, \a\\t g.i a",time());
  ?>
</body>
</html>