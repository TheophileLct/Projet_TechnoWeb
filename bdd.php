<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bddprojet";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
