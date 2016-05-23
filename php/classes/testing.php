<?php
require_once ("../../ecnChurch.php");
require_once("missions.php");




// setup dsn and options
$dsn = 'mysql:host=' . $config["hostname"] . ';dbname=' . $config["database"];
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");


// set up pdo connection with database and set error attributes
$pdo = new PDO($dsn, $config["username"], $config["password"], $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$miss = new Missions(null, "1 Kit Carson Drive", "Po Box 618", "Ft. Defiance", "gjgordy1996@yahoo.com", "(928) 729-2322", "Cynthia Hizer", "10:30", "AZ",
   "86504");

var_dump($miss);

try {
    $miss->insert($pdo);
}catch (PDOException $exception) {
    echo $exception->getMessage();
}




