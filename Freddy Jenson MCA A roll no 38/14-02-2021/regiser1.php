<html>
<?php

$conn = mysqli_connect("localhost", "root", "","register");

?>


<h1> Welcome to new page</h1>
<?php
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$email=$_POST['email'];
$password=$_POST['password'];



$sql="insert into reg1 (name,address,phone,country,gender,city,email,password) values('$name','$address',$phone,'$country','$gender','$city','$email','$password')";
mysqli_query($conn,$sql);
?>
</html>

