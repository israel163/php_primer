<?php $title = 'Switch';
include "./includes/header.php" ?>

<h1><?php echo $title ?></h1>

</br>
<p>"In this section several parts of teh switch statment are completed"</p>

<input type="text" placeholder="Capture your score">
<button type="button" class="btn btn-primary">Get</button>

</br>

<?php
$score = "B";

switch ($score) {
  case "A":
    echo '<h1>"success"</h1>';
    break;
  case "B":
    echo '<h1>"failed"</h1>';
    break;
  default:
    echo '<h1>"not valid"</h1>';
    break;
}
?>
</body>

</html>