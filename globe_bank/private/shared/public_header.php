<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globe Bank <?php if(isset($page_title)){ echo '- ' .h($page_title);} ?> <?php 
    if(isset($preview) && $preview) { echo ' [PREVIEW]'; }?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css');?>">
</head>
<body>
    <header>
        <h1>
            <a href="<?php echo url_for('/index.php'); ?>"></a>
            <img src="<?php echo url_for('/images/gbi_logo.png'); ?>" width ="280" height = "71" alt="">
        </h1>
    </header>
</body>
</html>