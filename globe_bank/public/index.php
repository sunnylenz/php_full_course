<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

    <?php include(SHARED_PATH . '/public_navigation.php'); ?>

    <div id="page">

    
    <?php 
    // Show the Home page
    // The home page content could:
    // * be static content (here or in a shared file)
    // * show the first page from the nav
    // * be in the database but add code to hide in the nav
    
    include(SHARED_PATH . '/static_homepage.php'); 
    
    ?>
    </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>