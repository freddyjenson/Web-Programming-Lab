<html>
<body>
<form action="regiser1.php" method="post" >
name : <input type="text" name="name"required><br>
address: <input type="text" name="address"required><br>
phone : <input type="text" name="phone"required><br>
country: <input type="text" name="country"required><br>
gender: <input type="text" name="gender"required><br>
city: <input type="text" name="city"required><br>
email: <input type="text" name="email" required><br>
password: <input type="text" name="password"required><br>
<input type="submit">
</form>
<?php
$conn = mysqli_connect("localhost", "root", "","register");
$sql="select name,address,phone,country,gender,city,email,password from reg1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
echo mysqli_num_rows($result)." Rows Found..!!";
if( $conn->query($sql)===TRUE )
				{
					
					echo "<script>alert('Registered Successfully')</script>";

					header("location: login1.php");  

				}
				else
				{
					echo "error:" . $sql ."<br>" . $conn->error;
				}
            


?>
<table><tr>
<td>name</td><td>address</td><td>phone</td><td>country</td><td>gender</td><td>city</td><td>email</td><td>password</td>
</tr>
<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["address"];?></td>
<td><?php echo $row["phone"];?></td>
<td><?php echo $row["country"];?></td>
<td><?php echo $row["gender"];?></td>
<td><?php echo $row["city"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["password"];?></td>
</tr>
<?php

}
?>
</table>
</body>
</html>

