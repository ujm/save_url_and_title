<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap-4.3.1-dist/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<?php

session_start();
$_SESSION['url'] = $_POST['url'];
$_SESSION['title'] = $_POST['title'];
?>
</head>
<body>
    <div class="container">
        <?php
            echo 'サイト名 : ';
            echo htmlentities($_SESSION['title']);
            echo '<br />';
            echo 'サイト URL : ';
            echo htmlentities($_SESSION['url']);
        ?>

        <form action="complete.php" method="POST">
            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    <div>
</body>
</html>
