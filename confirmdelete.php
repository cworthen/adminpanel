<?php
/**
 * Created by PhpStorm.
 * User: candace
 * Date: 5/2/16
 * Time: 7:22 PM
 */





// PHP form to get input from user

//include the function to clean data


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

<h1>Are you sure you want to delete this record?: </h1>
<ul>
<li><strong>Firstname:</strong>$firstname</li>
<li><strong>Lastname:</strong>$lastname</li>
<li><strong>Email:</strong>$email</li>
</ul>
<p><br>


<form method="post" action="reallydelete.php">
<input type="hidden" name="sel_record" value="$id">
<input type="submit" name="delete" value=" Delete "></form>

<input type="hidden" name="id" value="$id">
<input type="button" name="cancel" value="Cancel"
onClick="location.href='viewsummary.php' "></a>
</p></form>


SOMETEXT;




    ?>





















