<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "job_applications";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);
?>