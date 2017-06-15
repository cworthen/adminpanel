<?php
/**
 * Created by PhpStorm.
 * User: candace
 * Date: 4/19/16
 * Time: 10:19 AM
 */

require "admin_login.php";
include"admin.html";
include"mysqli_connect.php";

$query ="SELECT * FROM `aliens_abduction` ORDER BY id ASC";


$result = mysqli_query($dbc, $query) or die(mysql_connect_error());

print <<< HERE


<table id ="home">

<h3>Summary of all submitted alien abductions</h3>
<tr>
<td>Action</td>
<td>I.D.</td>
<td>Name</td>
<td>Email</td>
</tr>


HERE;

while($row=mysqli_fetch_array($result)) {
    $id = $row["id"];
    $email = $row["email"];
    $firstname = $row["first_name"];
    $lastname = $row["last_name"];


    print <<< HERE
<tr>
<td>

<form method="post" action="confirmdelete.php">
<input type="hidden" name="sel_record" value="$id">
<input type="submit" name="delete" value=" Delete "></form>

<form method="post" action="updateform.php">
<input type="hidden" name="sel_record" value="$id">
<input type="submit" name="update" value=" Edit ">
</form>

</td>

<td>$id</td>
<td><strong>$firstname  $lastname</strong><br/></td>
<td><a href="mailto: $email">$email</a></td>
</tr>



HERE;

}


?>