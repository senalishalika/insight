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

if(isset($_POST["update"])){

	$id1=$_POST['id'];
	$address1=$_POST['address'];
	$salary1=$_POST['salary'];
	$tel=$_POST['tel'];
	$nic1=$_POST['nic'];


	

$sql="UPDATE staff SET address='$address1',salary='$salary1',ID='$id1',telNo='$tel' WHERE NIC='$nic1'";


if(mysqli_query($conn, $sql)) {
    header('location:search.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if(isset($_POST["delete"])){
	$id2=$_POST['id'];
	$nic2=$_POST['nic'];
	$name2=$_POST['name'];
	$gender2=$_POST['gender'];
	$birthday=$_POST['bday'];
	$tel2=$_POST['tel'];
	$address2=$_POST['address'];
	$date2=$_POST['date'];
	$salary2=$_POST['salary'];
	

$sql="DELETE FROM staff WHERE NIC='$nic2' ";

if(mysqli_query($conn, $sql)) {
    header('location:search.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


mysqli_close($conn);

?>
