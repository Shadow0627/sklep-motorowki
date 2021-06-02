<?php
include 'config.php';
session_start();
function myAutoload($class_name) 
 {
    require_once 'lib/'.$class_name. '.php';
 }

 spl_autoload_register('myAutoload');


