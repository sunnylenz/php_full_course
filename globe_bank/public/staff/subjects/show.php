<?php require_once('../../../private/initialize.php'); ?>
 
 <?php 

 // $id = isset($_GET['id']) ? $_GET['id'] : '1';
 $id = $_GET['id'] ?? '1';
//  echo h($id);
 ?>
 <?php $page_title ='Show Subject'; ?>
    <?php include(SHARED_PATH . '/staff_header.php'); ?>

 <a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br>
 <a href="show.php?company=<?php echo u('Wigdets&More'); ?>">Link</a><br>
 <a href="show.php?querry=<?php echo u('!#*?'); ?>">Link</a><br>

 <div id="content">
        <a href="<?php echo url_for('/staff/subjects/index.php'); ?>" class="back-link">&laquo; Back to List</a>

        <div id="Subject show">
            Subject ID: <?php echo h($id); ?>
        </div>


    </div>