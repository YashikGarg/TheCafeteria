<?php
session_start();
$conn=new mysqli('localhost','root','','cafe');

if($conn->connect_error)
die("Connection error is ".$conn->connect_error);


$email=$_POST['email'];
$password=$_POST['password'];


$query="SELECT * FROM members where email='$email'";
$result=mysqli_query($conn,$query) or die(mysqli_error());
$num_row=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num_row >= 1)
{

if(password_verify($password,$row['password']))
{
$_SESSION['login']= $row['id'];
$_SESSION['fname'] = $row['fname'];
$_SESSION['lname'] = $row['lname'];

echo 'true';
}
else
echo 'false';

}
else
echo 'false';




?>