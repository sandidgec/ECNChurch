<?php
require_once ("../../ecnChurch.php");
require_once("programs.php");

// setup dsn and options
$dsn = 'mysql:host=' . $config["hostname"] . ';dbname=' . $config["database"];
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");


// set up pdo connection with database and set error attributes
$pdo = new PDO($dsn, $config["username"], $config["password"], $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$prog = new Programs(null, 2, "2016-10-15", "Fundraising for the Church", " All Saints", "Fall Festival", "06:00:00");

try {
    $prog->insert($pdo);
}catch (PDOException $exception) {
    echo $exception->getMessage();
}




