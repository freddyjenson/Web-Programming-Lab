<html>
<body>
<form action="web1.php" method="post" >
roll : <input type="text" name="roll"><br>
age: <input type="text" name="age"><br>
Name : <input type="text" name="name"><br>
gender: <input type="text" name="gender"><br>
<input type="submit">
</form>
<?php

$conn = mysqli_connect("localhost", "root", "","laravel");
$sql="select roll,name,age,gender from table1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
echo mysqli_num_rows($result)." Rows Found..!!";
?>
<table><tr>
<td>roll</td><td>name</td><td>age</td><td>gender</td>
</tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row["roll"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php if($row["age"]>28) echo $row["age"]; else echo "Age Below 28";?></td>
<td><?php echo $row["gender"];?></td>
</tr>
<?php 
}
?>
</table>
</body>
</html>

