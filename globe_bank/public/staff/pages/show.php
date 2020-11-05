  <?php require_once('../../../private/initialize.php'); ?>

  <?php $page_title ='Show Page'; ?>
    <?php include(SHARED_PATH . '/staff_header.php'); ?>

  <?php 
    // $id = isset($_GET['id']) ? $_GET['id'] : '1';
    $id = $_GET['id'] ?? '1';
    // echo h($id);
  ?>

    
    <div id="content">
        <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">&laquo; Back to List</a>

        <div id="page show">
            Page ID: <?php echo h($id); ?>
        </div>


    </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>