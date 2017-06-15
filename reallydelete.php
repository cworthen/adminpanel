<?php
/**
 * Created by PhpStorm.
 * User: candace
 * Date: 5/2/16
 * Time: 7:38 PM
 */



include "admin.html";
include"mysqli_connect.php";


$id=$_POST[sel_record];

$query="SELECT * FROM `aliens_abduction` WHERE `id` ='$id' ";


$result = mysqli_query($dbc, $query) or die(mysql_connect_error());


while ($row = mysqli_fetch_array($result)) {
    $id = $row["id"];
    $email = $row["email"];
    $firstname = $row["first_name"];
    $lastname = $row["last_name"];

}

    print "<p> $id, $firstname, $lastname, $email has been permanetly deleted. </p>";


    $query = "DELETE FROM `aliens_abduction` WHERE `id` = '$id' ";

    $result = mysqli_query($dbc, $query) or die(mysql_connect_error());



?>