<?php

session_start();
$title = $_SESSION['title'];
$url = $_SESSION['url'];
$datetime = date("Y-m-d H:i:s");

$dsn = 'mysql:host=localhost;dbname=Your_dbname';
$username = 'Your_username';
$password = 'Your_password';
$options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ); 
$dbh = new PDO($dsn, $username, $password, $options);
$stmt = $dbh->prepare("insert into url_list (title, url, create_at) values (?, ?, ?)");
$stmt->bindParam(1, $title);
$stmt->bindParam(2, $url);
$stmt->bindParam(3, $datetime);
$stmt->execute();
header("Location: index.html");
