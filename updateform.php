<?php


include "admin.html";
include"mysqli_connect.php";




$sel_record = $_POST[sel_record];

$query = "SELECT * FROM `aliens_abduction` WHERE id = '$sel_record'";

$result = mysqli_query($dbc, $query) or die(mysql_connect_error());


    while ($row = mysqli_fetch_array($result)) {
        $id = $row["id"];
        $email = $row["email"];
        $firstname = $row["first_name"];
        $lastname = $row["last_name"];

    }
        print <<< SOMETEXT


<h1>Modify  Record</h1>

<form method="post" action="update.php">
<input type="hidden" name="id" value="$id">



<!-- firstname text box -->

<label for="firstname">&#42;First Name:</label>
<input type="text" name="firstname"
placeholder="firstname" id="firstname" value="$firstname"> $FcharErr $firstnameError <br>



<!-- lastname text box -->

<label for="lastname">&#42;Last Name:</label>
<input type="text" name="lastname" placeholder="lastname"
id="lastname" value="$lastname">$lastnameError $LcharErr <br>


<label for="email">&#42;What is your email address ?</label>
<input type="text" name="email" placeholder="email" id="email" value="$email">$emailError
<br>


<input type="submit" value="Report Abduction">

    </form>


SOMETEXT;



?>















