<?php
/**
 * Pretty simple.  Contains a single function that can be reused for
 * establishing a database connection via ini file.
 * * * * */

function establishConn($iniFile) {

  if ($GLOBALS['dbConn'] != null) {

    $db = parse_ini_file($iniFile);

    $user = $db['user'];
    $pass = $db['pass'];
    $name = $db['name'];
    $host = $db['host'];
    $type = $db['type'];

    $GLOBALS['dbConn'] = new PDO($type . ":host=" . $host . ";dbname=" . $name,
      $user, $pass);
  }

}

?>
