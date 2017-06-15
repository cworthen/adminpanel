<?php
/**
 * Created by PhpStorm.
 * User: candace
 * Date: 5/2/16
 * Time: 9:56 AM
 */

//increase session so logout doesn't happen too frequently

ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);


session_start();

if (isset($_POST["login"])) {
    if (isset($_POST["username"]) && ($_POST["username"] == "intern_476")
        && isset($_POST["password"] ) &&
        ($_POST["password"] == "password"))

    {
        $_SESSION["Authenticated"] = 1;
    }

    else{
        $_SESSION["Authenticated"] = 0;
        header("location: index.html");
        //ask about header

    }

    session_write_close();
    header("Location: viewsummary.php");
}



if (isset($_GET["logout"])){
    session_destroy();
    header("Location: index.html");
}





?>