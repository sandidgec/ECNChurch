<?php
require_once ("../../ecnChurch.php");
require_once("autoload.php");

// setup dsn and options
$dsn = 'mysql:host=' . $config["hostname"] . ';dbname=' . $config["database"];
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");


// set up pdo connection with database and set error attributes
$pdo = new PDO($dsn, $config["username"], $config["password"], $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$salt = "c95b9c80eeb7aa08d327f24f8884e6c8dba171d88aa69f3b790ee93800f2a58a";
$hash = "865187f5ba94ed115719aab747fb32fa2243a826be809762a6588149029994622f745a3e8db6d19f27cd21f23f7e863034e33c48d0800a5d05d94db8ed7370c0";

$memb = new Members (null, 2, 2, "VBS", "reply asap: vbs@ecnchurch.com", "timeStamp" );


try {
    $memb->insert($pdo);
}catch (PDOException $exception) {
    echo $exception->getMessage();
}


$bulle->setCategory("Youth Arts Oasis ");
var_dump($memb);

$bulle->update($pdo);

$bulle->delete($pdo);

try {
    $bulle = Bulletins::getBulletinByBulletinId($pdo, 31);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo'<br>';
var_dump($bulle);

$bulle = Members::getMembersByMissionsId($pdo, 3);
var_dump($bulle);

$bulle = Members::getAllMembers($pdo);
var_dump($bulle);

