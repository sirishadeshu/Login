<?php

include_once 'database.php';
if(isset($_POST['save']))
{	 
    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $lname=$_POST[ 'lname'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
 $sql = "INSERT INTO logtab ( email,
    fname,
   lname,
    password,
    dob)
 VALUES ( '$email',
    '$fname',
    '$lname',
    '$password',
    '$dob')";
 if (mysqli_query($conn, $sql)) {
		echo "<h2>New record created successfully !</h2>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>