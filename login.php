<?php              /*PHP session code for Login module */
session_start();  /*Creates a session or resumes the current one based on a session identifier passed via a GET or POST request */

$con = mysqli_connect('localhost','root',' '); /* Connects to the database */
mysqli_select_db($con,'logindb'); 
$email = $_POST['email'];  /* used to send emails from PHP scripts */

$password = $_POST['password']; /* used to send passwords from PHP scripts */

$s = "select * from users where email = '$email' && password = '$password'"; /*  The table that will be queried to retrieve the results */

$result = mysqli_query($con, $s); /* The mysqli_query function is used to execute SQL queries */

$num = mysqli_num_rows($result); /*Used to return the number of rows present in the result set. It is generally used to check if data is present in the database or not */

if($num == 1) { /* Checks if the data is correct or not */

	header('location:custom.php');
} else {
	header('location:home.php');
	
}

?>