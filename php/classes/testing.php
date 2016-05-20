<?php
require_once ("../../ecnChurch.php");
require_once("members.php");




// setup dsn and options
$dsn = 'mysql:host=' . $config["hostname"] . ';dbname=' . $config["database"];
$options  = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");


// set up pdo connection with database and set error attributes
$pdo = new PDO($dsn, $config["username"], $config["password"], $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$members = new Members(null, "3", "activation", "greentea@az.com", "Aarick", "hashit", "Bluff", "435-672-2206", "Presidente",
   "86504", "NM", "ABQ", "Cresent View Rd", "P.O. Box Broadway", "Male", "05202016", "first half of hash");

var_dump($members);

//try {
 //   $members->insert($pdo);
//}catch (PDOException $exception) {
  //  echo $exception->getMessage();
//}




