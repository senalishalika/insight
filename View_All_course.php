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
                        <a class="" href="blank.php"><i class="fa fa-dashboard "></i>About</a>
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Staff Report </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                       <div >
     
      <div class="row pad-top-botm ">
         <div class="col-lg-6 col-md-6 col-sm-6 ">
            <img src="assets/img/profile.jpg" style="padding-bottom:20px;" /> 
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <strong>   Institue of Management & Technology</strong>
              <br />
                  <i>Address :</i> No: 18 A Palmyrah Avenue,
              <br />
                  Colombo. 03,
              <br />
                  Colombo, Sri Lanka.
              
         </div>
     </div>
     <div  class="row text-center contact-info">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
             <span>
                 <strong>Email : </strong>  insight@gmail.com
             </span>
             <span>
                 <strong>Call : </strong>   077-2992225
    
                                                </span>
              <span>
                 <strong>Fax : </strong>  011-2965789
             </span>
             <hr />
         </div>
     </div>
 <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
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
$sql = "SELECT * FROM course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo
                                "<table class=\"table table-striped table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <th>Course ID</th>
                                    <th>Course Name</th>
                                    <th>Start Date</th>
                                    <th>Duration</th>
                                     <th>In Charge</th>
                                     
                                </tr>
                            </thead>
                            <tbody>";
                            while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["course_id"]."</td><td>".$row["course_name"]." </td><td>".$row["start_date"]." </td><td>".$row["duration"]." </td><td>".$row["in_charge"]." </td><td>";
    }
    echo 

                                
                           " </tbody>
                        </table>";
} else {
    echo "0 results";
}
$conn->close();


?>
               </div>
             <hr />




 </div>
</div>


</body>
</html>
