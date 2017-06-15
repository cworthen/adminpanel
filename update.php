

<?php

// PHP form to get input from user

//include the function to clean data

include "admin.html";
include"mysqli_connect.php";

$id = $_POST["id"];
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];


$query= "UPDATE `aliens_abduction` SET

email='$email',

first_name='$firstname',

last_name='$lastname'

WHERE id='$id' ";



$result = mysqli_query($dbc, $query) or die(mysql_connect_error());

print "<html><head><title>Update Record</title></head></html>";

print <<< SOMETEXT

<h1>The new record looks like this: </h1>

<ul>
<ul>
<li><strong>Firstname:</strong>$firstname</li>
<li><strong>Lastname:</strong>$lastname</li>
<li><strong>Email:</strong>$email</li>
</ul>


SOMETEXT;




    ?>
















