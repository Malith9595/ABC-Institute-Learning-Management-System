<?php

//get the values pass from "Form in login.php"
	$username = $_POST['user'];
	$password = $_POST['password'];

//to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

//connect to the server and select DB
	mysql_connect("localhost", "root", "");
	mysql_select_db("abc_institute");

	//Query the DB for user
	$result = mysql_query("select * from student where username = '@username' and password = '@password'") or die("Faild to query database" .mysql_errno());

	$row = mysql_fetch_array($result);
	
echo("hi");

?>
<!-- <?php

// define variables and set to empty values

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> -->