<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />

    <title>ShuaaSafarisUg - Tour Booking </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- jquery ui  -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="wrapper">
      <!-- header-section-->
      <div class="header-wrapper">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-7 col-md-8 d-none d-xl-block d-sm-block">
                        <div class="top-header-content">
                            <ul class="list-none">
                                <li><i class="fa fa-envelope top-header-icon emailId"></i>info.shuaasafaris@gmail.com</li>
                                <li><i class="fa fa-phone top-header-icon"></i>+256-782-355-555</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6 col-8 d-none d-block d-sm-block">
                        <div class="top-header-content">
                            <div class="top-social"> <a href="#" class="btn-social-icon"><i class="fa fa-facebook"></i></a> <a href="#" class="btn-social-icon"><i class="fa fa-twitter"></i></a> 
                                <a href="#" class="btn-social-icon"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">
                        <a href="#" class="search-icon" data-toggle="modal" data-target="#exampleModal">
                       <i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>

    
        <!-- header-section-->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-12">
                        <div class="logo"> <a href="index.php"><img src="images/ShuuaSafarisLogo.png" alt=""> </a> </div>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-sm-12 col-12 mt-4">
                        <!-- navigations-->
                        <div class="navigation">
                            <div id="navigation">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="tour-list.php">Destinations</a></li>
                                    <li class="has-sub"><a href="#">Travel Tips</a>
                                        <ul>
                                            <li><a href="Ugandatraveltips.doc.pdf">Uganda Travel Tips</a></li>
                                            <li><a href="terms.pdf">Terms & Conditions</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tour-booking.php">Tour Booking</a> </li>
                                    <li><a href="contact-us.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.navigations-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
        <!-- page-header -->
        <div class="page-header-tour-booking">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">Tour Booking</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-header-->
        <!-- tour-booking -->
        <div class="content">
            <div class="container">
                <div class="row ">
                    <!-- footer-logo -->
                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12 mb30">
                        <div class="tour-booking-form">
                            <form action="tour-booking-handler.php" method="POST">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="country">Full Name</label>
                                            <input id="country" type="text"  class="form-control" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email"> Email</label>
                                            <input id="email" type="text" name="email" placeholder="xxxx@xxxx.xxx" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="phone"> Phone</label>
                                            <input id="phone" type="text" name="phone" placeholder="(222) 222-2222" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Number of Adults:</label>
                                            <div class="select">
                                                <select id="select" name="NumberOfAdults" class="form-control" required>
                                                    <option value="">Number of Adults:</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Number of Children:</label>
                                            <div class="select">
                                                <select id="select" name="NumberOfChildren" class="form-control" required>
                                                    <option value="">Number of Children:</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Destination</label>
                                            <div class="select">
                                                <select id="select" name="Destination" class="form-control" required>
                                                    <option value="">Choose a Safari from the List</option>
                                                    <option value="Gorilla &amp; Chimp trekking">Gorilla &amp; Chimp trekking</option>
                                                    <option value="Game viewing &amp; nature walk">Game viewing &amp; Nature walk</option>
                                                    <option value="Rafting &amp; Bungee jumping">Rafting &amp; Bungee jumping</option>
                                                    <option value="Cultural &amp; Religious tourism">Cultural &amp; Religious tourism</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="datepicker">Arrival Date</label>
                                            <div class="input-group">
                                                <input id="datepicker" name="ArrivalDate" type="text" placeholder="Date" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                        </div>
                                    </div>

                                    

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="datepicker">Departure Date</label>
                                            <div class="input-group">
                                                <input id="datepicker" name="DepartureDate" type="date" placeholder="Date" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Describe Your Travel Requirements</label>
                                            <textarea class="form-control" id="textarea" name="Requirements" rows="4" placeholder="Write Your Requirements" required></textarea>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" class="btn btn-primary">send Enquiry</button>
                                    </div>
                                </div>
                                </form>
                        </div>
                        
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 ">
                        <div class="widget-primary support-list">
                            <div class="widget-primary-title">
                                <h3>Why Book With Us?</h3>
                            </div>
                            <ul class="arrow list-none">
                                <li>24X7 service and support</li>
                                <li>Totally complaint in all aspects</li>
                                <li>Dedicated, trustworthy team</li>
                                <li>Professional happy services</li>
                            </ul>
                        </div>
                        <div class="widget-default">
                            <div class="question-icon"><img src="images/question_icon.png" alt=""></div>
                            <h3 class="widget-default-title">Do You Have Any Question?</h3>
                            <p class="textColor">Free to contact us about any query,booking, preparations. </p>
                            <a href="#" class="btn btn-primary btn-block">Frequently Ask Question</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.tour-booking -->
           <!-- newsletter-section -->
        <div class="newsletter-wrapper newsletter-overlay" style="background:url(images/newsletter_wrapper.jpg) no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 offset-md-5 col-md-6 col-sm-12 col-12">
                        <div class="newsletter-block">
                           <h1 class="newsletter-title">Join The Newsletter</h1>
                        <p class="mb30">Subscribe the newsletter and get update for discounts on tours.</p>
                            <form>
                                <div class="input-group add-on">
                                    <input class="form-control" placeholder="email address here" type="text">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary newsletter-btn" type="submit">subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- /.newsletter-section -->
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="row ">
                    <!-- footer-logo -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                        <div class="ft-img"><img src="images/ShuuaSafarisLogo1.jpg" alt=""></div>
                    </div>
                    <!-- /.footer-logo -->
                    <!-- footer-links -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                        <div class="footer-widget ">
                            <h3 class="footer-title ">Quick Links</h3>
                            <ul class="angle list-none">
                                <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="tour-list.php">Destinations</a></li>
                        <li><a href="tour-booking.php">Tour Booking</a></li>
                        <li><a href="contact-us.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-links -->
                    <!-- footer-tours -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                        <div class="footer-widget ">
                            <h3 class="footer-title ">Best Destinations</h3>
                            <ul class="angle list-none">
                               
                                    <li><a href="tour-list.php">Uganda</a>
                                        <li><a href="tour-list.php">Kenya</a></li>
                                        <li><a href="tour-list.php">Tanzania</a></li>
                                        <li><a href="tour-list.php">Rwanda</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-Tours -->
                    <!-- footer-post -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                        <div class="footer-widget">
                            <h3 class="footer-title">Contact Info</h3>
                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-map-marker"></i></span> <span class="ft-contact-text">Plot 1171 Jinja Road Uganda</span></div>
                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-phone "></i></span> <span class="ft-contact-text">+256-782-355-555</span></div>
                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-envelope "></i></span> <span class="ft-contact-text">info.shuaasafaris@gmail.com</span></div>
                            <div class="social-icon "> <a href="https://www.facebook.com/shuaasafaris" class="btn-social-icon "><i class="fa fa-facebook "></i></a> <a href="https://twitter.com/shuaasafaris" class="btn-social-icon "><i class="fa fa-twitter "></i></a> <a href="https://wa.me/256782355555?text=" class="btn-social-icon "><i class="fa fa-whatsapp "></i></a> </div>
                        </div>
                    </div>
                    <!-- /.footer-post -->
                </div>
                <!-- tiny-footer -->
            </div>
            <div class="tiny-footer ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                            <p><a target="_blank" >© Shuaa Safaris Limited 2023</a></p>
                        </div>
                    </div>
                    <!-- /. tiny-footer -->
                </div>
            </div>
        </div>
        <!-- /.footer -->
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form>
                            <div class="search-form">
                                <input type="text" class="form-control" placeholder="Find here">
                                 <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">close</span>
                            </button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
          <!-- /.Modal -->
           <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/menumaker.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/sticky-header.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/date.js"></script>
         <script src="js/return-to-top.js"></script>
        
    </div>
</body>


</html>