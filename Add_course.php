<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
    header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM user WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main page</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
tr{
    height:50px;


}
input[type=text],input[type=date]{
    background-color:   rgb(240,248,255);
}
</style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Insight</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="logout.php?logout" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/profile.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo "Login as ".$userRow['username']; ?>
                            <br />
                                
                            </div>
                        </div>

                    </li>


                   <li>
                        <a href="#"><i class="fa fa-desktop "></i>Cources <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="Add_course.php"><i class="fa fa-toggle-on"></i>Enter new Course</a>
                            </li>
                            <li>
                                <a href="search_course.php"><i class="fa fa-bell "></i>Search Course</a>
                            </li>
                             
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Staff<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add1.php"><i class="fa fa-coffee"></i>Add Staff Members</a>
                            </li>
                             <li>
                                <a href="search.php"><i class="fa fa-flash "></i>Search Staff Members</a>
                            </li>
                             
                           </ul>
                    <li>
                        <a href="table.html"><i class="fa fa-flash "></i>Students </a>
                        
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                   <a href="#"><i class="fa fa-sitemap "></i>Reports<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="staff_report.php"><i class="fa fa-bicycle "></i>Staff reports</a>
                            </li>           
                             <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                      <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
                    </li>
                     <li>
                        <a href="error.html"><i class="fa fa-bug "></i>Error Page</a>
                    </li>
                    
                   
                    <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>

            </div>

        </nav>
             <div id="page-wrapper" style="background-color:black;">
            <div id="page-inner" style="background-color: #4B0082;" >
                <div class="contain-fluid" style="font-family:arial; border: 1px solid DarkGray; border-radius:5px; margin-left:5%; margin-top:10px; width:90%; align:center; padding:10px; background-color:white; height:60px;">
        <h1 style="margin-top:-5px" align="center">Enter Employee Details</h1>
    </div>
<div class="contain-fluid" style="font-family:arial; border: 1px solid DarkGray; border-radius:5px; margin-left:5%; margin-top:10px; width:90%; align:center; padding:10px; background-color:white;">

<form  action="Add_course.php" method="POST" style="margin-left:10%">
                <table width="80%" style="color:#4B0082">
            <tr><td>Course ID</td><td> <input class="form-control" type="text" name="course_id" required="aa"></td></tr>
            <tr><td>Course Name</td><td><input class="form-control" type="text" name="course_name" required></td></tr>
            <tr><td>start date</td><td><input class="form-control" type="text" name="start_date" required></td></tr>
            <tr><td>Duration</td><td><input class="form-control" type="text" name="duration" required></td></tr>
            <tr><td>Incharge</td><td><input class="form-control" type="text" name="incharge" required></td></tr>

            <tr><td></td><td><input  class="btn btn-default btn-lg"  type="submit" value="Submit" name="submit" style="width:200px; background-color:#4B0082; color:white; float:right;"></td></tr>
            </table>
            </form>
<!--form  action="add1.php" method="POST" style="margin-left:10%">
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

<tr><td></td><td><input  class="btn btn-default btn-lg"  type="submit" value="Submit" name="submit" style="width:200px; background-color:#000080; color:white; float:right;"></td></tr>
</table>
</form-->
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


    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $course_id=$_POST['course_id'];
        $course_name=$_POST['course_name'];
        $start_date=$_POST['start_date'];
        $duration=$_POST['duration'];
        $incharge=$_POST['incharge'];
        

        $sqlCheckCID = "SELECT * FROM course WHERE course_id='$course_id' ";
        $res1=$conn->query($sqlCheckCID);
        
        if ($res1->num_rows==0) {
            
            $sql = "INSERT INTO course VALUES ('$course_id', '$course_name', '$start_date','$duration','$incharge')";

            if ($conn->query($sql) === TRUE) {

                echo " <script>
                alert('sucsessfully Added');
                </script>";

            } else {

                echo " <script>
                alert(''Error : '. $sql . '<br>'' . $conn->error');
                </script>";

            }

        }else{

            echo " <script>
            alert(' This Course ID is Already Registed');
            </script>";
        }
        $conn->close();
    }
?>







            </div>
        </div>

       
        <!-- /. NAV SIDE  -->
        <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>