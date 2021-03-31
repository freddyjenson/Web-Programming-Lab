<html>
<?php

$conn = mysqli_connect("localhost", "root", "","laravel");

?>


<h1> Welcome to new page</h1>
<?php
$roll=$_POST['roll'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$id=$_POST['id'];
$sql="update table1 set roll=$roll,name='$name',age=$age,gender='$gender' where id=$id";
mysqli_query($conn,$sql);
?>
</html>
