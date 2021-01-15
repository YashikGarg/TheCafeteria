<?php
session_start();
$conn=new mysqli('localhost','root','','cafe');

if($conn->connect_error)
die("Connection error is ".$conn->connect_error);

$fname=mysqli_real_escape_string($conn, $_POST['fname']);
$lname=mysqli_real_escape_string($conn, $_POST['lname']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

if(strlen($fname)<4)
echo 'fname';
else if(strlen($lname)<4)
echo 'lname';
else if(strlen($email)<=6)
echo 'eshort'; 
else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
echo 'eformat';
else if(strlen($password)<6)
echo 'pshort';
else
{
$spassword=password_hash($password,PASSWORD_BCRYPT,array('cost'=>12));
$query="SELECT * FROM members where  email='$email'";
$result=mysqli_query($conn,$query) or die(mysqli_error());
$num_row=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num_row < 1)
{
$ins=$conn->query("INSERT INTO members (fname,lname,email,password) VALUES ('$fname','$lname','$email','$spassword') ");

if($ins)
{
$_SESSION['login']= $conn->insert_id;
$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;

echo 'true';
}

}
else
echo 'false';

}


?>