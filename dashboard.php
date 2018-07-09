<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

<?php

$username = $_POST['username'];
$password = $_POST['password'];
$confirmpass = $_POST['confirmpass'];
$email = $_POST['email'];
$confirmemail = $_POST['confirmemail'];
$contact = $_POST['contact'];

echo "username : " . $username . "<br>";
echo "password : " . $password . "<br>";
echo "confirm password : " . $confirmpass . "<br>";
echo "Email : " . $email . "<br>";
echo "Confirm Email : " . $confirmemail . "<br>";
echo "Contact Number : " . $contact . "<br>";

?>


</body>
</html>