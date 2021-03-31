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
$sql="select id,roll,name,age,gender from table1";
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
<td><a href="web2.php?a=<?php echo $row['id']?>">Edit</a> </td>
</tr>
<?php 
}
?>
</table>
<h1>Print_r Function</h1>
<?php
$a=array("month1"=>"ffff","month2"=>"aaaa","month3"=>"bbbbb");
asort($a);
print_r($a);
?>



</body>
</html>

