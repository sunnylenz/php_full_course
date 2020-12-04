<?php if(!isset($page_title)){
    $page_title = "Staff Area";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI - <?php echo h($page_title); ?></title>
    <link rel="stylesheet" media ="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>">
</head>
<body>
    <header>
    <h1>GBI Staff Area</h1>
    </header>

    <navigation>
    <ul>
    <li>User: <?php echo $_SESSION['username'] ?? '';?></li>
    <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
    <li><a href="<?php echo url_for('/staff/logout.php'); ?>">Logout</a></li>
    </ul>
    </navigation>
    
</body>
</html>