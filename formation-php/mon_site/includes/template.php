<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site - <?php echo $title; ?> </title>
    <link rel="stylsheet" href="/style.css">
</head>
<body>
<?php require
'header.php';
?>
<?php
include $content;
?>
</body>
<?php
require 'footer.php';
?>
</html>