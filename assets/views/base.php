<?php
if (array_key_exists('view_only', $_GET) && $_GET['view_only']) {
    include($template);
} else {
    ?>
    <html>
    <?php include(__DIR__ . '/header.php'); ?>
    <body class="main-body">
        <?php include($template); ?>
    </body>
    </html>
<?php
}
?>