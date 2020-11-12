<?php 
require_once('../../../private/initialize.php');

$menu_name = '';
$position = '';
$visible = '';

if(is_post_request()){
    // Handles form values  by new php
    $page = [];
    $page['subject_id'] = $_POST['subject_id'] ?? '';
    $page['menu_name'] = $_POST['menu_name'] ?? '';
    $page['position'] = $_POST['position'] ?? '';
    $page['visible'] = $_POST['visible'] ?? '';
    $page['content'] = $_POST['content'] ?? '';

    $result = insert_page($page);
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/staff/pages/show.php?id=' . $new_id));

    // echo "Form parameters<br>";
    // echo "Menu name: " . $menu_name . "<br>";
    // echo "Position: " . $position . "<br>";
    // echo "Visible: " . $visible . "<br>";
} else {

    $page = [];
    $page['subject_id'] = '';
    $page['menu_name'] = '';
    $page['position'] = '';
    $page['visible'] = '';
    $page['content'] = '';
    

    $page_set = find_all_pages();
    $page_count = mysqli_num_rows($page_set) + 1;
    mysqli_free_result($page_set);
}
?>

<?php $page_title = 'Create Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
<a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">&laquo; Back to List</a>

<div class="page new">
    <h1>Create Page</h1>
    <form action="<?php echo url_for('/staff/pages/new.php'); ?>" method="post">

        <dl>
            <dt>Subject</dt>
            <dd>
                <select name="subject_id" id="">
                    <?php 
                    $subject_set = find_all_subjects();
                    while($subject = mysql_fetch_assoc($subject_set)){
                        echo "<option value=\"" . h($subject['id']) . "\"";
                        if($page["subject_id"] == $subject['id']) {
                            echo " Selected";
                        }
                        echo ">" . h($subject['menu_name']) . "</option>";
                    }
                    mysqli_free_result($subject_set);
                    ?>
                </select>
            </dd>
        </dl>


        <dl>
            <dt>Menu Name</dt>
            <dd>
                <input type="text" name="menu_name" value="<?php echo h($page['menu_name']); ?>">
            </dd>
        </dl>

        <dl>
            <dt>Position</dt>
            <dd>
                <select name="position">
                    <?php 
                    for ($i=1; $i <= $page_count; $i++) { 
                        echo "<option value=\"{$i}\"";
                            if ($page["position"] == $i) {
                                echo " selected";
                            }
                            echo ">{$i}</option>";
                    }
                    ?>
                </select>
            </dd>
        </dl>

        <dl>
            <dt>Visible</dt>
            <dd>
                <input type="hidden" name="visible" value="0">
                <input type="checkbox" name="visible" value="1" <?php if($visible == "1"){ echo " checked";} ?>>
            </dd>
        </dl>

        <div id="operations">
            <input type="submit" value="Create Page">
        </div>

 
    </form>
</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>