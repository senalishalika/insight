



<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
tr{
	height:50px;


}
input[type=text],input[type=date]{
	background-color: 	rgb(250,230,246);
}
</style>
</head>
<body style="background-color: #4B0082;">
	<div class="contain-fluid" style="font-family:arial; border: 1px solid DarkGray; border-radius:5px; margin-left:5%; margin-top:10px; width:90%; align:center; padding:10px; background-color:white; height:60px;">
		<h1 style="margin-top:-5px" align="center">Enter Employee Details</h1>
	</div>
<div class="contain-fluid" style="font-family:arial; border: 1px solid DarkGray; border-radius:5px; margin-left:5%; margin-top:10px; width:90%; align:center; padding:10px; background-color:white;">
<form  action="add.php" method="POST" style="margin-left:10%">
	<table width="80%" style="color:#4B0082">
<tr><td style="width:20%">Employee ID</td><td  width="50%" ><input class="form-control"   type="text" name="id"></td></tr>
<tr><td>NIC</td><td><input class="form-control" type="text"  name="nic"></td></tr>
<tr><td>Name</td><td><input class="form-control" type="text"  name="name"></td></tr>
<tr><td>Gender</td><td><input class="form-control" type="text"  name="gender"></td></tr>
<tr><td>Birth Day</td><td><input class="form-control" type="date"  name="bday"></td></tr>
<tr><td>Tel No</td><td><input class="form-control" type="text"  name="tel"></td></tr>
<tr><td>Address</td><td><input class="form-control"  type="text"   name="address"></td></tr>
<tr><td>Joined Date</td><td><input class="form-control"  type="date"  name="date"></td></tr>
<tr><td>Salary</td><td><input  class="form-control" type="text"  name="salary"></td></tr>

<tr><td></td><td><input  class="btn btn-default btn-lg"  type="submit" value="Submit" name="submit" style="width:200px; background-color:#4B0082; color:white; float:right;"></td></tr>
</table>
</form>
</div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insight";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["submit"])){
	$id=$_POST['id'];
	$nic=$_POST['nic'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$bday=$_POST['bday'];
	$tel=$_POST['tel'];
	$address=$_POST['address'];
	$date=$_POST['date'];
	$salary=$_POST['salary'];
	

$sql="INSERT INTO staff (ID,NIC,name,gender,birthDay,telNo,address,joined_date,salary) VALUES ('$id','$nic','$name','$gender','$bday','$tel','$address','$date','$salary')";

if(mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
</body>
</html>
