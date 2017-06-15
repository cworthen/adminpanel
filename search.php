<?php

include "admin.html";
include"mysqli_connect.php";

$search=$_POST[search];

$query = "SELECT * FROM `aliens_abduction` WHERE first_name LIKE '%$search%'
 OR last_name like '%$search%' OR
email like '%$search%'";

$result = mysqli_query($dbc,$query) or die(mysql_connect_error());

$number = mysqli_num_rows($result);



print <<<SOMETEXT

<h2>Search Results</h2>

    <h3> $number results found searching for "$search"</h3>
    <table cellpadding="15">


SOMETEXT;

while ($row=mysqli_fetch_array($result)) {
    $id = $row["id"];
    $email = $row["email"];
    $firstname = $row["first_name"];
    $lastname = $row["last_name"];


    print <<<HERE

        <tr>
<td>
<form method="post" action="confirmdelete.php">
<input type="hidden" name="sel_record" value="$id">
<input type="submit" name="delete" value=" Delete  ">
</form>


<form method="post" action="updateform.php">
<input type="hidden" name="sel_record" value="$id">
<input type="submit" name="update" value=" Edit   ">
</form>

</td>

<td><strong>$firstname $lastname</strong><br>
Email: $email<br>

</td>
</tr>


HERE;

}

?>