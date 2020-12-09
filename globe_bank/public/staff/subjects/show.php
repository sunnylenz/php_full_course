
<?php require_once('../../../private/initialize.php'); ?>
 
    <?php 

        require_login();

        // $id = isset($_GET['id']) ? $_GET['id'] : '1';
        $id = $_GET['id'] ?? '1';
        //  echo h($id);

        $subject = find_subject_by_id($id);
        $pages_set = find_pages_by_subject_id($id);
    ?>
    <?php $page_title ='Show Subject'; ?>
    <?php include(SHARED_PATH . '/staff_header.php'); ?>

 

 <div id="content">
        <a href="<?php echo url_for('/staff/subjects/index.php'); ?>" class="back-link">&laquo; Back to List</a>

        <div id="Subject show">
            <h1>Subject: <?php echo h($subject['menu_name']); ?></h1>

            <div id="attributes">
                <dl>
                    <dt>Menu Name</dt>
                    <dd><?php echo h($subject['menu_name']); ?></dd>
                </dl>

                <dl>
                    <dt>Position</dt>
                    <dd><?php echo h($subject['position']); ?></dd>
                </dl>

                <dl>
                    <dt>Visible</dt>
                    <dd><?php echo h($subject['visible'] == '1' ? 'true' : 'false'); ?></dd>
                </dl>
            </div>


            <hr>

            <div class = "pages listing">
                <h2>Pages</h2>
                <div class="actions">
                    <a href="<?php echo url_for('/staff/pages/new.php?subject_id=' . h(u($subject['id'])));?>" class="action">Create New Pages</a>
                </div>

                <table class="list">
                    <tr>
                        <th>ID</th>
                        <th>Position</th>
                        <th>Visible</th>
                        <th>Name</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>

                    <?php while($page = mysqli_fetch_assoc($pages_set)){ ?>
                        <?php $subject = find_subject_by_id($page['subject_id']); ?>
                        <tr>
                            <td><?php echo h($page['id']); ?></td>
                            <td><?php echo h($page['position']); ?></td>
                            <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                            <td><?php echo h($page['menu_name']); ?></td>
                            <td><a href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>" class="action">View</a></td>
                            <td><a href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($page['id']))); ?>" class="action">Edit</a></td>
                            <td><a href="<?php echo url_for('/staff/pages/delete.php?id=' . h(u($page['id']))); ?>" class="action">Delete</a></td>
                        </tr>
                    
                    <?php
                    } ?>
                </table>
                <?php mysqli_free_result($pages_set);?>
            </div>

        </div>

    </div>