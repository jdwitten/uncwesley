<?php

 $charset = 'utf8';
 $host = "us-cdbr-azure-east-c.cloudapp.net";
 $user = "bddfe4567fcee0";
 $pass = "aaa47743";
 $db = "uncwesley";
 $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
 $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
      ];
$pdo = new PDO($dsn, $user, $pass, $opt);
$query =   $pdo->prepare("SELECT COUNT(*) FROM uncwesley.users");
$query->execute();
$arr = $query->fetch();
      
var_dump($arr);

?>
