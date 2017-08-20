<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>


    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">




    <!---FontAwesome---->
    <link type="text/css" href="CSS/font-awesome.min.css" rel="stylesheet">


    <!--Font Link--->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
     <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!---->
    <link href="CSS/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">




    <!----====== Jquery ui ======--->
    <link href="CSS/jquery-ui.min.css" rel="stylesheet">

    <!--===========OWL CAROUSEL===================
    ===============================================-->
    <link href="CSS/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/owl.theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/owl.transitions.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    
    <!-----================= floating socialbar ================---->
<link href="CSS/contact-buttons.css" rel="stylesheet">
    <!---Main CSS-->
    <link href="CSS/style.css" type="text/css" rel="stylesheet">
    <!--RESPONSIVE-->
    <link href="CSS/responsive.css" type="text/css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#main-menu">
    
    
    <?php 
    include 'registration.php'; 
    
    
    ?>
    
    

    <!--=====================Navigation===========--->
    <div class="navbar navbar-default navbar-fixed-top" id="main-menu" role="navigation">
        <div class="container bg">
            <div class="row">
                <div class="navbar-header">
                    <button class="button navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">
                        <div class="logo">
                            <h2>Pes</h2>
                        </div>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <div class="mainmenu">
                        <ul class="nav navbar-nav">
                            <li class="active"><a data-scroll href="index.html">Home</a></li>
                            <li><a data-scroll href="#service-head">Services</a></li>
                            <li><a data-scroll href="#about-head">About Us</a></li>
                            <li><a data-scroll href="#testimonial-head">reviews</a></li>
                            <li><a data-scroll href="#registration-head">Registration</a></li>
                            <li><a data-scroll href="#login-head">login</a></li>
                            <li><a data-scroll href="#contact-head">Contact US</a></li>
                        </ul>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--start slider-->

    <section class="slider_area">
        <div class="slide">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider-bg slide-1"></div>
                        <div class="slide-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                                        <div class="slider-text">
                                            <h1 class="wow fadeInUp">Welcome to <span>pes</span> </h1>
                                            <h3 class="wow fadeInUp" data-wow-delay=".7s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                            <a class=" slide-btn wow fadeInUp data-scroll" data-wow-delay="1.5s" href="#about-head">our service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-bg slide-2"></div>
                        <div class="slide-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                                        <div class="slider-text">
                                           <h1 class="wow fadeInUp">Welcome to <span>pes</span> </h1>
                                            <h3 class="wow fadeInUp" data-wow-delay=".7s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                            <a class=" slide-btn wow fadeInUp data-scroll" data-wow-delay="1.5s" href="#about-head">our service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-bg slide-3"></div>
                        <div class="slide-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                                        <div class="slider-text">
                                            <h1 class="wow fadeInUp">Welcome to <span>pes</span> </h1>
                                            <h3 class="wow fadeInUp" data-wow-delay=".7s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                            <a class=" slide-btn wow fadeInUp data-scroll" data-wow-delay="1.5s" href="#about-head">our service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    <!--End s-->

    <section id="service-head" class=" wow fadeIn" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class=" col-xs-12 col-sm-12 col-md-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="section-head">
                        <h2>Our top services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum exercitationem maxime saepe ipsa esse veniam voluptas a nesciunt ea tempore, laboriosam suscipit sunt pariatur reprehenderit possimus ullam doloremque facilis commodi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service-section" class=" section-padding section-top-border  wow fadeInUp" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-sx-12 wow fadeInUp" data-wow-delay=".4s" data-wow-offset="10">
                    <div class="single-service">
                        <i class="fa fa-code"></i>
                        <h2>Patient Registration</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-sx-12 wow fadeInUp" data-wow-delay=".6s" data-wow-offset="10">
                    <div class="single-service">
                        <i class="fa fa-paint-brush"></i>
                        <h2>Patient checkout</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-sx-12 wow fadeInUp" data-wow-delay=".10s" data-wow-offset="10">
                    <div class="single-service">
                        <i class="fa fa-paper-plane-o"></i>
                        <h2>online treatment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================
           About area
    ========================-->
    <section id="about-head" class=" wow fadeIn" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="section-head">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum exercitationem maxime saepe ipsa esse veniam voluptas a nesciunt ea tempore, laboriosam suscipit sunt pariatur reprehenderit possimus ullam doloremque facilis commodi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about-section " data-wow-delay=".2s" class="section-padding section-top-border  wow fadeInRight">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="our_company">
                        <div class="sub-section-title text-center">
                            <h2 class="wow fadeInLeft" data-wow-offset="10" data-wow-delay="0.5s">creative</h2>
                        </div>
                        <div class="about-company wow fadeInUp" data-wow-delay=".1s">
                            <h3>Expert Designers and Developers trained in the creative and digital industry who offer a bespoke, professional and trustworthy service.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum exercitationem maxime saepe ipsa esse veniam voluptas a nesciunt ea tempore, laboriosam suscipit sunt pariatur reprehenderit possimus ullam doloremque facilis commodi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum exercitationem maxime saepe ipsa esse veniam voluptas a nesciunt ea tempore, laboriosam suscipit sunt pariatur reprehenderit possimus ullam doloremque facilis commodi...</p>

                            <div class="company-btn">
                                <a class="custom-btn btn" href="#">Know more</a>
                                <a class="custom-btn btn" href="#">Get more quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 ">
                    <div class="patner wow fadeInUp" data-wow-delay=".2s">
                        <div class="sub-section-title text-center">
                            <h2 class="wow fadeInRight" data-wow-offset="10" data-wow-delay="0.5s">our expertise</h2>
                        </div>
                        <ul>
                            <li class="single-expert">
                                <div class="expert-overlay">
                                    <div class="vcenter">
                                        <div class="centrize">
                                            <p>jhon</p>
                                            <a class="btn btn-social" href="#"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img alt="" src="img/doctors/doc%20(5).jpg" class="img-responsive">
                            </li>
                            <li class="single-expert">
                                <div class="expert-overlay">
                                    <div class="vcenter">
                                        <div class="centrize">
                                            <p>Jack</p>
                                            <a class="btn btn-social" href="#"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img alt="" src="img/doctors/doc_6.jpg" class="img-responsive">
                            </li>
                            <li class="single-expert">
                                <div class="expert-overlay">
                                    <div class="vcenter">
                                        <div class="centrize">
                                            <p>jon</p>
                                            <a class="btn btn-social" href="#"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img alt="" src="img/doctors/doc%20(4).jpg" class="img-responsive">
                            </li>
                            <li class="single-expert">
                                <div class="expert-overlay">
                                    <div class="vcenter">
                                        <div class="centrize">
                                            <p>zakion</p>
                                            <a class="btn btn-social" href="#"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img alt="" src="img/doctors/doc%20(3).png" class="img-responsive">
                            </li>
                            <li class="single-expert">
                                <div class="expert-overlay">
                                    <div class="vcenter">
                                        <div class="centrize">
                                            <p>jon</p>
                                            <a class="btn btn-social" href="#"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img alt="" src="img/doctors/doc%20(3).jpg" class="img-responsive">
                            </li>
                            <li class="single-expert">
                                <div class="expert-overlay">
                                    <div class="vcenter">
                                        <div class="centrize">
                                            <p>jon</p>
                                            <a class="btn btn-social" href="#"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img alt="" src="img/doctors/doc%20(2).png" class="img-responsive">
                            </li>
                            <li class="single-expert">
                                <div class="expert-overlay">
                                    <div class="vcenter">
                                        <div class="centrize">
                                            <p>jhon</p>
                                            <a class="btn btn-social" href="#"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img alt="" src="img/doctors/doc%20(2).jpg" class="img-responsive">
                            </li>
                            <li class="single-expert">
                                <div class="expert-overlay">
                                    <div class="vcenter">
                                        <div class="centrize">
                                            <p>jhon</p>
                                            <a class="btn btn-social" href="#"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img alt="" src="img/doctors/doc%20(1).png" class="img-responsive">
                            </li>
                            <li class="single-expert">
                                <div class="expert-overlay">
                                    <div class="vcenter">
                                        <div class="centrize">
                                            <p>jhon</p>
                                            <a class="btn btn-social" href="#"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <img alt="" src="img/doctors/doc%20(1).jpg" class="img-responsive">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->


    <!--=====================
             testimonial
    ========================-->

    <section id="testimonial-head" class=" wow fadeIn" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="section-head">
                        <h2>reviews</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum exercitationem maxime saepe ipsa esse veniam voluptas a nesciunt ea tempore, laboriosam suscipit sunt pariatur reprehenderit possimus ullam doloremque facilis commodi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="testimonial-area" class="section-padding section-top-border wow fadeInUp" data-wow-delay="0.6s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial">
                        <div class="single_slide">
                            <img src="img/client.jpg" class="img-responsive">
                            <div class="client-say text-center">
                                <h2>Md Khokon Mahmud <span>Alo Group</span></h2>
                                <p><i class="fa fa-quote-left quote-left"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut .
                                    <i class="fa fa-quote-right quote-right"></i></p>
                            </div>
                        </div>
                        <div class="single_slide">
                            <img src="img/client.jpg" class="img-responsive">
                            <div class="client-say text-center">
                                <h2>Md Khokon Mahmud <span>Alo Group</span></h2>
                                <p><i class="fa fa-quote-left quote-left"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut .
                                    <i class="fa fa-quote-right quote-right"></i></p>
                            </div>
                        </div>
                        <div class="single_slide">
                            <img src="img/client.jpg" class="img-responsive">
                            <div class="client-say text-center">
                                <h2>Md Khokon Mahmud <span>Alo Group</span></h2>
                                <p><i class="fa fa-quote-left quote-left"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut .
                                    <i class="fa fa-quote-right quote-right"></i></p>
                            </div>
                        </div>
                        <div class="single_slide">
                            <img src="img/client.jpg" class="img-responsive">
                            <div class="client-say text-center">
                                <h2>Md Khokon Mahmud <span>Alo Group</span></h2>
                                <p><i class="fa fa-quote-left quote-left"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut .
                                    <i class="fa fa-quote-right quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!--=====================
          Registation  area
    ========================-->
    <section id="registration_area" >
    <div id="registration-head" class=" wow fadeIn" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="section-head">
                        <h2>Registration</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="registraion_area   section-padding section-top-border  wow fadeInUp">
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="reg_form">
            <form action="" method="post">
                <form method="post" action="" id="contact-form">
                    
                    <div class="text-center" id="message"><?php
                         if(isset($message))
                            {
                                   echo $message;
                               
                             }

                             ?>
                    </div>
                    
                    
                    <script>
    
                                    function lettersOnly(input)
                                        {
                                            var regx=/[^a-z]/gi;
                                        input.value= input.value.replace(regx,"");
                                          }
                                    
                                    function numbersOnly(input)
                                    {
                                        var regx=/[^0-9]/g;
                                       input.value= input.value.replace(regx,"");
                                    }
                        function Address(input)
                        {
                            var regx=/[^a-z0-9-,/""]/gi;
                            input.value= input.value.replace(regx,"");
                            
                        }
                        function Email(input)
                        {
                             var regx=/[^a-z0-9@.]/gi;
                            input.value= input.value.replace(regx,"");
                        }
                        function userName(input)
                        {
                            var regx=/[^a-z0-9]/gi;
                            input.value= input.value.replace(regx,"");
                        }
                        
                        
                        
                        function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('conpassword');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#00CC00";
    var badColor = "#FF0000";
    var white="#FFFFFF";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value=="")
        {
            pass2.value="";
            alert("Please , Enter password first");
        }
    else
        {
            
    if(pass2.value=="")
        {
            pass2.style.backgroundColor = white;
             message.innerHTML = ""
        }
    else
        {
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
        }
        }
}  
    
                                </script>
                    
                    
                    
                   
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" required="" onkeyup="lettersOnly(this)" placeholder="Please Enter your FirstName" id="Fname" name="fname" class="form-control contact-form-field">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" required="" onkeyup="lettersOnly(this)" placeholder="Please Enter Your LastName" id="lname" name="lname" class="form-control contact-form-field">
                            </div>
                        </div>
                    <div class="col-md-12 ">
                            <div class="form-group">
                                <input type="text" required="" placeholder="Please Enter Your Address" id="address" name="address" onkeyup="Address(this)" class="form-control contact-form-field">
                            </div>
                        </div>   <div class="col-md-12 ">
                            <div class="form-group">
                                <input type="text" required="" onkeyup="numbersOnly(this)" placeholder="Please Enter Your Phone Number" maxlength="11" id="phone" name="phone" class="form-control contact-form-field">
                            </div>
                        </div>   <div class="col-md-12 ">
                            <div class="form-group">
                                <input type="email" required="" placeholder="Please Enter Your Email" id="email" name="email" onkeyup="Email(this)" class="form-control contact-form-field">
                            </div>
                        </div>  
                    
                    <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" required="" placeholder="Please Enter your UserName" id="UserName" name="UserName" onkeyup="userName(this)" class="form-control contact-form-field">
                            </div>
                        </div>
                    
                    <div class="col-md-12 ">
                            <div class="form-group">
                                <input type="password" required="" placeholder="Please Enter Your password" id="password" name="password" class="form-control contact-form-field">
                            </div>
                        </div>
                    <div class="col-md-12 ">
                            <div class="form-group">
                                <input type="password" required="" placeholder="Please Confirm Your password" id="conpassword" onkeyup="checkPass(); return false;" name="conpassword" class="form-control contact-form-field">
                                 <span id="confirmMessage" class="confirmMessage"></span>
                            </div>
                        </div>
                    <button class="btn btn-reg" type="submit" name="submit" id="submit">Submit</button>
                    <button class="btn btn-clear" type="reset">Clear</button>
                      
                    </form>
                
                
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!------========================
login
-------------------------->
     <section id="login_area">
    <!--**************
        login Header
      ********************--->
    <section id="login-head" class=" wow fadeIn" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="section-head">
                        <h2>user  Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="login_area " >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" data-wow-delay=".3s">
                    <div class="form wow fadeInUp">
                        <form action="" method="post">
                            
                            <div class="text-center" id="message"><?php
                         if(isset($Failedmessage))
                            {
                                   echo $Failedmessage;
                               
                             }

                             ?>
                    </div>
                            
                            <script>
                            function Validate(input)
                                {
                                    var regx=/[^a-z0-9]/gi;
                            input.value= input.value.replace(regx,"");
                                }
                            </script>
                            
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" required="" name="username" onkeyup="Validate(this)" id="username" class="form-control "> 
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" required="" onkeyup="Validate(this)" name="password" class="form-control"> 
                            </div>
                            <button type="submit" name="login" class="btn btn-login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>

    <!--==========
    contact
    ==============-->

    <section id="contact-head" class="wow fadeIn" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="section-head">
                        <h2>Contact us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum exercitationem maxime saepe ipsa esse veniam voluptas a nesciunt ea tempore, laboriosam suscipit sunt pariatur reprehenderit possimus ullam doloremque facilis commodi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact-section" class="section-padding section-top-border wow fadeIn" data-wow-delay=".2s">
        <div id="parallax-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 contact-form-wrap text-center wow fadeInLeft" data-wow-offset="10" data-wow-delay="0.5s">
                    <h3>get in touch</h3>
                    <form method="post" action="" id="contact-form">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <input type="text" required="" placeholder="Your name" id="name" name="name" class="form-control contact-form-field">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" required="" placeholder="Your email" id="email" name="email" class="form-control contact-form-field">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" required="" placeholder="Your subject" id="subject" name="subject" class="form-control contact-form-field">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <textarea required="" id="message" name="message" class="form-control contact-form-field" placeholder="Your message" rows="6" cols="30"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary black ">submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="10" data-wow-delay="0.5s">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <h4>ADDRESS</h4>
                                <p>Shukrabad,Dhanmondi32, Dhaka</p>
                            </li>
                            <li>
                                <h4>WE ARE OPEN</h4>
                                <p>Open hours: 8.00-5.00 Sat-Wed</p>
                            </li>
                            <li>
                                <h4>phone</h4>
                                <p>017333333333</p>
                            </li>
                            <li>
                                <h4>EMAIL</h4>
                                <p>creative3279@gmail.com</p>
                            </li>
                        </ul>
                        <h2>SOCIAL</h2>
                        <div class="contact-socail ">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="scroll-to-top">
        <div class="scrollup">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </div>
    </div>

    <footer id="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="footer wow fadeInUp" data-wow-delay="0.5s">
                        <ul class="nav">
                            <li><a data-scroll href="#">Home</a></li>
                            <li><a data-scroll href="#service-head">Services</a></li>
                            <li><a data-scroll href="#portfolio-head">Portfolio</a></li>
                            <li><a data-scroll href="#about-head">About Us</a></li>
                            <li><a data-scroll href="#testimonial-head">testimonial</a></li>
                            <li><a data-scroll href="#contact-head">Contact US</a></li>
                        </ul>
                        <div class="copyright text-center">
                            <p class="wow bounce" data-wow-delay="0.2s">Copyright &copy; <a href="#">Khokon</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-----Jquery UI --->
    <script src="js/jquery-ui.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <!-----floating socialbar-------->
    <script src="js/jquery.contact-buttons.js" type="text/javascript"></script>
    <!--Main js--->
    <script src="js/main.js"></script>
</body>

</html>