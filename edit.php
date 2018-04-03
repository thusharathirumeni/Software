<!DOCTYPE html>
<html>
<body>
<?php
include 'dbcon.php';
$sql = mysqli_query($con,"SELECT * FROM customer"); //to fethch data from db
if(isset($_POST['update']))
{
$a=$_POST["name"];
$b=$_POST["email_id"];
$c=$_POST["cid"];
$l=$_POST["logid"];
$sql1="UPDATE `customer` SET `name`='$a',`email_id`='$b' WHERE `cid`='$c' and `logid`='$l'";
$result1=mysqli_query($con,$sql1) or die("error");
$sql21="UPDATE `login` SET `email`='$b',`status`='0' WHERE `logid`='$l' ";
$result21=mysqli_query($con,$sql21) or die("error");
echo "<script> alert('Update successfull');</script>";
header("location:edit.php");
}
if(isset($_POST['delete']))
{
$l=$_POST["logid"];
$c=$_POST["cid"];
$b=$_POST["email_id"];
$sql2="DELETE  FROM `customer` WHERE `cid`='$c'";
$result2=mysqli_query($con,$sql2) or die("error");
$sql11="UPDATE `login` SET `status`='0' WHERE `logid`='$l'";
$result11=mysqli_query($con,$sql11) or die("error");
echo "<script> alert('Update successfull');</script>";
header("location:edit.php");

}
?>
 <center><table border="1" >
<tr><th>id</th>
<th>name</th>
<th>email-id</td></tr>
<?php
while($row=mysqli_fetch_array($sql)){
	?><form action="#" method="post">
	<tr>
		<td><input type="text" name="cid" value="<?php echo $row['cid'];?>" ></td>
		<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
		<td><input type="text" name="email_id" value="<?php echo $row['email_id'];?>"></td>
		<td><input type="text" name="logid" value="<?php echo $row['logid'];?>"></td>

		<td><input type="submit" name="update" value="update"><input type="submit" name="delete" value="delete"></td>
	</tr></form>
	<?php
}
?>
</table></center>
</body>
</html>
