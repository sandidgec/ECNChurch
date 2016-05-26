<?php
/**
 * automatically loads the class on demand
 *
 * @param string $className class name to load
 * @return bool true if the class loaded correctly, false if not
 **/
function loadClass($members) {
    $members[0] = strtolower($members[0]);
    $members = preg_replace_callback("/([A-Z])/", function($matches) {
        return("-" . strtolower($matches[0]));
    }, $members);
    $members = __DIR__ . "autoload.php/" . $members . ".php";
    if(is_readable($members) === true && require_once($members)) {
        return(true);
    } else {
        return(false);
    }
}
// tell PHP to use the loadClass() function to automatically load class files
spl_autoload_register("loadClass");

spl_autoload_register("Autoloader::classLoader");
class Autoloader {
    /**
     * This function autoloads classes if they exist
     *
     * @param string $className name of class to load
     * @return bool false if classes can not be loaded
     **/
    public static function classLoader($className) {
        $className = strtolower($className);
        if(is_readable(__DIR__ . "/$className.php")) {
            require_once(__DIR__ . "/$className.php");
        } else {
            return (false);
        }
    }
}