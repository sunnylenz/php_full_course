<?php 
require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])){
    redirect_to(url_for('/staff/pages/index.php'));
}
$id = $_GET['id'];
$subject = find_page_by_id($id);

if (is_post_request()) {
    
    $result = delete_page($id);
    $_SESSION['message'] = 'The page was deleted succesfully';
    redirect_to(url_for('/staff/subjects/show.php?id=' .h(u($page['subject_id']))));
}

?>

<?php $page_title = 'Delete Subject';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
<a class="back-link" href="<?php echo url_for('/staff/subjects/show.php?id=' . h(u($page['subject_id']))); ?>">&laquo; Back to Subject Page</a>

<div class="page delete ">
<h1>Delete Page</h1>
<p>Are you sure you want to delete this Page?</p>
<p class="item"><?php echo h($page['menu_name']);?></p>
<form action="<?php echo url_for('/staff/pages/delete.php?id=' . h(u($page['id'])));?>" method="post">
<div id="operations">
<input type="submit" value="Delete Page" name="commit">
</div>
</form>
</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php');?>