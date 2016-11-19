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
                        <a href="#"><i class="fa fa-desktop "></i>UI Elements <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Tabs & Panels</a>
                            </li>
                            <li>
                                <a href="notification.html"><i class="fa fa-bell "></i>Notifications</a>
                            </li>
                             <li>
                                <a href="progress.html"><i class="fa fa-circle-o "></i>Progressbars</a>
                            </li>
                             <li>
                                <a href="buttons.html"><i class="fa fa-code "></i>Buttons</a>
                            </li>
                             <li>
                                <a href="icons.html"><i class="fa fa-bug "></i>Icons</a>
                            </li>
                             <li>
                                <a href="wizard.html"><i class="fa fa-bug "></i>Wizard</a>
                            </li>
                             <li>
                                <a href="typography.html"><i class="fa fa-edit "></i>Typography</a>
                            </li>
                             <li>
                                <a href="grid.html"><i class="fa fa-eyedropper "></i>Grid</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Invoice</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-flash "></i>Pricing</a>
                            </li>
                             <li>
                                <a href="component.html"><i class="fa fa-key "></i>Components</a>
                            </li>
                             <li>
                                <a href="social.html"><i class="fa fa-send "></i>Social</a>
                            </li>
                            
                             <li>
                                <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-flash "></i>Data Tables </a>
                        
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>
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
                        <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
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
                        <h1 class="page-head-line">Institue of Management & Technology</h1>
                       

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="#">
                                <h5>Mission</h5>
                                <h6>Empowerment by Education</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="#">
                               <h5>Products</h5>
                                <h6>Certificate,Diploma an External Degree programmes</h6> 
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                                <h5>Story</h5>
                                <h6>Knowledge will be the most important commodity of the 21st century. Insight endeavours to give an opportunity to everyone o acquire knowledge and use it to the betterrment of oneself and of the whole world</h6> 
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">

                                <div id="reviews" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="item active">

                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>“All humans are dead except those who have knowledge;and all those who have knowledge are asleep, except those who do good deeds;and those who do good deeds are deceived,and those who are sincere are always in a state of worry.”<i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="" alt="" class="img-u image-responsive" />
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">Imam Shafi’i </strong></h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>Seek (beneficial) knowledge,because seeking it for the sake of Allaah is a worship. And knowing it makes you more God-fearing; and searching for it is jihad,teaching it to those who do not know is charity,reviewing and learning it more is like tasbeeh<i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="" alt="" class="img-u image-responsive" />
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">Imam Ibn Hazm Rahimahullah</strong></h5>
                                            </div>

                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>“True knowledge is not measured in relationship to how much you memorize and then narrate, but rather,true knowledge is an expression of piety [protecting oneself from what Allaah prohibited and acting upon what He mandated”<i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="" alt="" class="img-u image-responsive" />
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">Shaykh Sa’di</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active"></li>
                                        <li data-target="#reviews" data-slide-to="1"></li>
                                        <li data-target="#reviews" data-slide-to="2"></li>
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

                                </div>

                            </div>

                        </div>
                        <!-- /. ROW  -->
                        <hr />

                        <div class="panel panel-default">

                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #000;">

                                <div class="carousel-inner">
                                    <div class="item active">

                                        <img src="assets/img/slideshow/2.jpg" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/2.jpg" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/2.jpg" alt="" />

                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.REVIEWS &  SLIDESHOW  -->
                    <div class="col-md-4">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                            </div>
                            <div class="panel-body" style="padding: 0px;">
                                <div class="chat-widget-main">
                                        <h3>Company Details</h3>

                                    <div class="chat-widget-left">
                                        
                                    No: 18 A Palmyrah Avenue Colombo. 03, Colombo, Sri Lanka
                                        
                                    </div>
                                    <div class="chat-widget-name-left">
                                        <a href="">www.insight.lk</a>
                                    </div>
                                    <div class="chat-widget-right">
                                        Contact:
                                        011-2965789
                                        077-2992225
                                    </div>
                                    <div class="chat-widget-right">
                                        <img src="img/ad.jpg" alt="" />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Message" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="button">SEND</button>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--/.Chat Panel End-->
                </div>
                <!-- /. ROW  -->


                <div class="row">

                    <div class="col-md-8">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">INSIGHT INSTITUTE OF MANAGEMENT AND TECHNOLOGY HELPS TO UPLIFT THE RURAL ECONOMY</h4>
                                <p class="list-group-item-text" style="line-height: 30px;">
                                    Insight Institute of Management and Technology, situated at Palmyrah Avenue Colombo 3 conducted its 07th Three day Residential Business Development Program for small and medium enterprises, from the on 25th November up to 27th 2011 . at the ADRT, Jamiah Naleemiah, Beruwela.

Thirty Eight businessmen took part in this program to fine tune and professionalize many of their business skills, including Finance, HR, Marketing as well as Islamic business ethics, planning etc.

Mr. Hilmi Sulaiman, CEO of Insight Institute of Management and Technology stated, that these programmes are conducted regularly in Tamil, using experts in each field, to fill a vacuum in the training and development of the Tamil speaking business community and to uplift the rural economy, through local entrepreneurs.

In the second round, one day specialized programmes are conducted to give further insights and expertise in different fields.

One of the key features of these programmes is the opportunity given by Insight Institute to meet with and share experiences of successful entrepreneurs who have come to the top from small beginnings. Several top businessmen in the country have taken part in this programmes voluntarily and they have been able to boost the morale and resolve of the participants to overcome obstacles and succeed.

Another component is a module on Tax awareness and the usefulness of paying income tax which helps the government to continue to provide many free services like Health,Education etc.

Insight also gives low cost business counseling to SMEs with a view to support professionalism in the sector.

Insight Institute of Management and Technology is a “not for profit” organization managed by the Insight Education Trust
                                </p>
                            </a>
                        </div>
                        <br />
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.facebook.com/Insight-Institute-of-Management-Technology-210962315599689/"></iframe>
                        </div>
                    </div>
                   
                
   
   


</body>
</html>
