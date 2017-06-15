<?php
/**
 * Created by PhpStorm.
 * User: candace
 * Date: 5/2/16
 * Time: 6:22 PM
 */

include "admin.html";
include"mysqli_connect.php";
include "cleanData.php";



if ($_SERVER['REQUEST_METHOD'] == 'POST')

{
    $firstname =  cleanData($_POST['firstname']);

    $lastname  =  cleanData($_POST['lastname']);

    $email     =  cleanData($_POST['email']);

    //to check if data is cleaned: print "Data cleaned";
    addData($firstname, $lastname, $email);
}
else {

    printForm($firstname,$lastname, $email);

}


    function addData($firstname, $lastname, $email, $fluffy,
                     $mydate, $howlong, $howmany, $describe, $whatdidtheydo,
                     $mycomment)
    {

        include("mysqli_connect.php");

        $query = "INSERT INTO aliens_abduction VALUES (null,'$firstname', '$lastname', '$email',
'$mydate','$howlong','$howmany','$describe','$whatdidtheydo', '$fluffy','$mycomment')";


        $result = mysqli_query($dbc, $query);
        print mysqli_error($dbc);
        if ($result) {

            print <<<HERE
<h1>The following has been added:</h1>
<ul>
<li><strong>Firstname:</strong>$firstname</li>
<li><strong>Lastname:</strong>$lastname</li>
<li><strong>Email:</strong>$email</li>
</ul>

HERE;

        }


    }


    function printForm( $firstname,$lastname, $email)
    {
        print <<< SOMETEXT


<h1>Add New Record</h1>

<form method="post" action=" ">


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


<input type="submit" value="Submit">

    </form>


SOMETEXT;



}

?>



