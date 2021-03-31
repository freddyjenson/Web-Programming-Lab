<?php
if(isset($_GET['a'])){
$conn = mysqli_connect("localhost", "root", "","laravel");
$sql="select id,roll,name,age,gender from table1 where id=".$_GET['a'];
$result=mysqli_query($conn,$sql);	
while($row=mysqli_fetch_assoc($result)){


?>

<form action="update.php" method="post" >
<input type="hidden" name="id" value="<?php echo $row["id"];?>"><br>
roll : <input type="text" name="roll" value="<?php echo $row["roll"];?>"><br>
age: <input type="text" name="age" value="<?php echo $row["age"];?>"><br>
Name : <input type="text" name="name" value="<?php echo $row["name"];?>"><br>
gender: <input type="text" name="gender" value="<?php echo $row["gender"];?>"><br>
<input type="submit">
</form>

<?php
}}?>