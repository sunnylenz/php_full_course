<?php require_once('../../../private/initialize.php'); ?>
 
 <?php 

 // $id = isset($_GET['id']) ? $_GET['id'] : '1';
 $id = $_GET['id'] ?? '1';
 echo h($id);
 ?>

 <a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br>
 <a href="show.php?company=<?php echo u('Wigdets&More'); ?>">Link</a><br>
 <a href="show.php?querry=<?php echo u('!#*?'); ?>">Link</a><br>