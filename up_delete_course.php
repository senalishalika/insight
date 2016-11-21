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

	$course_id=$_POST['course_id'];
	$course_name=$_POST['course_name'];
	$start_date=$_POST['start_date'];
	$duration=$_POST['duration'];
	$in_charge=$_POST['in_charge'];


	

$sql="UPDATE course SET course_name='$course_name',start_date='$start_date',in_charge='$in_charge',duration='$duration' WHERE course_id='$course_id'";


if(mysqli_query($conn, $sql)) {
    header('location:search_course.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if(isset($_POST["delete"])){
	$course_id=$_POST['course_id'];
		

$sql="DELETE FROM course WHERE course_id='$course_id' ";

if(mysqli_query($conn, $sql)) {
    header('location:search_course.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


mysqli_close($conn);

?>
