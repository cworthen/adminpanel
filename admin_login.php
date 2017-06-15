<?php
/**
 * Created by PhpStorm.
 * User: candace
 * Date: 5/2/16
 * Time: 10:39 AM
 */


session_start();


if(!isset($_SESSION["Authenticated"])
|| ($_SESSION["Authenticated"] !=1)){

   header("Location: index.html");
    exit();
}

?>
