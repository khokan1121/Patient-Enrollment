<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Patient Registration</title>
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
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!---->
    <link href="CSS/animate.min.css" rel="stylesheet">
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
    <link href="CSS/patient.css" rel="stylesheet">
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
    
    
    include 'PatientCheckout.php';
    include 'PatientRegistration.php';
    
    ?>

        <!--**************
      Navigation
      ********************--->
        <div class="navbar navbar-default navbar-fixed-top" id="main-menu" role="navigation">
            <div class="container bg">
                <div class="row">
                    <div class="navbar-header">
                        <button class="button navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a href="#" class="navbar-brand">
                            <div class="logo">
                                <h2>creative</h2>
                            </div>
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <div class="mainmenu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-scroll href="#patient_reg">Patient Registration</a></li>
                                <li class="active"><a data-scroll href="#patient_enrolled"> enrolled Patient</a></li>
                                <li><a data-scroll href="#checkout_section">Patient Checkout</a></li>
                                <li><a data-scroll href="#">logout</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---*********************
            patient register form
      *********************-->

        <section id="patient_reg" class="section-padding">
            <div id="patient-head ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                            <div class="sec_title">
                                <h2>registration</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Patient_reg_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="patient_ditailes well">
                                <form action="" method="post">
                                    <form method="post" action="" id="contact-form">


                                        <div class="text-center" id="message" style="color:white">
                                            <?php
                         if(isset($message))
                            {
                                   echo $message;
                                
                               
                             }

                             ?>
                                        </div>

                                        <script>
                                            function lettersOnly(input) {
                                                var regx = /[^a-z]/gi;
                                                input.value = input.value.replace(regx, "");
                                            }

                                            function numbersOnly(input) {
                                                var regx = /[^0-9]/g;
                                                input.value = input.value.replace(regx, "");
                                            }

                                            function Address(input) {
                                                var regx = /[^a-z0-9-,/""]/gi;
                                                input.value = input.value.replace(regx, "");

                                            }

                                            function Email(input) {
                                                var regx = /[^a-z0-9@.]/gi;
                                                input.value = input.value.replace(regx, "");
                                            }

                                            function PopulateRoomCost() {
                                                var RoomType = document.getElementById("roomType");
                                                var RoomTypeSelected = RoomType.options[RoomType.selectedIndex].text;
                                                if (RoomTypeSelected == "General") {
                                                    document.getElementById("roomCost").value = parseInt(1000);
                                                } else if (RoomTypeSelected == "Good") {
                                                    document.getElementById("roomCost").value = parseInt(2000);
                                                } else if (RoomTypeSelected == "VIP") {
                                                    document.getElementById("roomCost").value = parseInt(5000);
                                                } else if (RoomTypeSelected == "Emergency") {
                                                    document.getElementById("roomCost").value = parseInt(8000);
                                                }

                                            }

                                        </script>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="FirstName" id="Fname" name="fname" onkeyup="lettersOnly(this)" class="form-control contact-form-field"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="LastName" id="lname" name="lname" onkeyup="lettersOnly(this)" class="form-control contact-form-field"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="Father Name" id="Fname" onkeyup="lettersOnly(this)" name="fatherName" class="form-control contact-form-field"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="Mother Name" id="lname" name="motherName" onkeyup="lettersOnly(this)" class="form-control contact-form-field"> </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="Address" id="address" name="address" onkeyup="Address(this)" class="form-control contact-form-field"> </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="Age" onkeyup="numbersOnly(this)" id="age" maxlength="2" name="age" class="form-control contact-form-field"> </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label for="AdmissionDate" style="color:#FB6816;">Admission Date</label>
                                                <input type="date" required="" name="AdmissionDate" id="AdmissionDate" class="form-control contact-form-field"> </div>
                                        </div>

                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <input type="text" required="" onkeyup="numbersOnly(this)" placeholder="Phone Number" id="phone" maxlength="11" name="phone" class="form-control contact-form-field"> </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <input type="email" required="" placeholder=" Email" id="address" name="email" onkeyup="Email(this)" class="form-control contact-form-field"> </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <p>Gender</p>
                                                <select class="form-control" name="gender">
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>

                                        </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <P>blood group</P>
                                                <select class="form-control" name="bloodGroup">
                                        <option value="">--Selcet One--</option>
                                        <option value="1">A+</option>
                                        <option value="2">A-</option>
                                        <option value="3">B+</option>
                                        <option value="4">B-</option>
                                        <option value="5">O+</option>
                                        <option value="6">O-</option>
                                        <option value="7">AB+</option>
                                        <option value="8">AB-</option>
                                        </select> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Room Type</p>
                                                <select class="form-control" name="roomType" id="roomType" onchange="PopulateRoomCost();">
                                        <option value="1">General</option>
                                        <option value="2">Good</option>
                                        <option value="3">VIP</option>
                                        <option value="4">Emergency</option>
                                        </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Room Number</p>
                                                <input type="text" class="form-control" maxlength="3" onkeyup="numbersOnly(this)" name="roomNumber"></div>
                                        </div>





                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="Room Cost" name="roomCost" id="roomCost" value="" disabled="true" onkeyup="numbersOnly(this)" class="form-control contact-form-field"> </div>
                                        </div>



                                        <button class="btn btn-success bnt-patint" type="submit" name="submit">Submit</button>
                                        <button class="btn btn-primary" type="reset">Clear</button>
                                    </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---Patient area---->
        <section id="checkout_section" class="section-padding">
            <div id="patient_check_head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                            <div class="sec_title">
                                <h2>Patient Checkout</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="patient_Checkout_area   wow fadeInUp" data-wow-delay=".2s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="patient_Checkout">
                                <form action="" method="post">



                                    <div class="text-center" id="message" style="color:black">
                                        <?php
                         if(isset($Invalidmessage))
                            {
                                   echo $Invalidmessage;
                                
                               
                             }

                             ?>
                                    </div>

                                    <div class="text-center" id="message" style="color:black">
                                        <?php
                         if(isset($successMessage))
                            {
                                   echo $successMessage;
                                
                               
                             }

                             ?>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <input type="text" name="patientId" value="<?php if(isset($patientID)){ echo htmlentities($patientID);}?>" class="search form-control payment_input" placeholder="Enter Patient Id">
                                            <input type="submit" class=" btn btn-success bnt-patint search_btn form-control" value="search" name="GetValue" id="GetValue">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname">FirstName</label>
                                            <input type="text" id="fname" disabled="true" name="fname" value="<?php if(isset($firstname)){ echo htmlentities($firstname);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname">LastName</label>
                                            <input type="text" id="lname" name="lname" disabled="true" value="<?php if(isset($lastname)){ echo htmlentities($lastname);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="father">Father Name</label>
                                            <input type="text" id="Fname" name="fatherName" disabled="true" value="<?php if(isset($fatherName)){ echo htmlentities($fatherName);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mother">Mother Name</label>
                                            <input type="text" id="lname" name="motherName" disabled="true" value="<?php if(isset($motherName)){ echo htmlentities($motherName);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="birth">Admission Date</label>
                                            <input type="text" id="admissionDate" name="admissionDate" value="<?php if(isset($admissionDate)){ echo htmlentities($admissionDate);}?>" disabled="true" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="checkoutDate">Checkout Date</label>
                                            <input type="text" id="checkoutDate" placeholder="Year-Month-Day" name="checkoutDate" onblur="addDashes(this);GetDays();" maxlength="10" minlength="10" onkeyup="validate(this);" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" name="adress" disabled="true" value="<?php if(isset($address)){ echo htmlentities($address);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" name="email" disabled="true" value="<?php if(isset($email)){ echo htmlentities($email);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" id="phone" name="phone" disabled="true" value="<?php if(isset($phone)){ echo htmlentities($phone);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <input type="text" id="gender" name="gender" disabled="true" value="<?php if(isset($gender)){ echo htmlentities($gender);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input type="text" id="age" name="age" disabled="true" value="<?php if(isset($age)){ echo htmlentities($age);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="bloodgroup">Blood Group</label>
                                            <input type="text" id="bloodgroup" disabled="true" name="bloodgroup" value="<?php if(isset($bloodGroup)){ echo htmlentities($bloodGroup);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="roomtype">Room Type </label>
                                            <input type="text" id="roomtype" name="roomtype" disabled="true" value="<?php if(isset($roomType)){ echo htmlentities($roomType);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="roomnumber">Room Number</label>
                                            <input type="text" id="roomnumber" disabled="true" name="roomnumber" value="<?php if(isset($roomNumber)){ echo htmlentities($roomNumber);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="roomcost">Room Cost</label>
                                            <input type="text" id="roomcost" disabled="true" name="roomcost" value="<?php if(isset($roomCost)){ echo htmlentities($roomCost);}?>" class="form-control contact-form-field"> </div>
                                    </div>

                                    <script>
                                        function addDashes(input) {
                                            if (input.length == 10) {
                                                alert("Date will be exactly 10 characters");
                                            } else {
                                                input.value = input.value.slice(0, 4) + "-" + input.value.slice(5, 7) + "-" + input.value.slice(8, 10);

                                            }

                                        }

                                    </script>

                                    <script>
                                        function validate(input) {
                                            var regx = /[^0-9-]/g;
                                            input.value = input.value.replace(regx, "");
                                        }

                                        function numbersOnly(input) {
                                            var regx = /[^0-9]/g;
                                            input.value = input.value.replace(regx, "");
                                        }

                                        function PayableAmount() {
                                            var checkoutDate = document.getElementById("checkoutDate").value;
                                            if (checkoutDate == "") {
                                                alert("Please , Enter Checkout Date First");
                                            } else {

                                                var TotalRoomCost = document.getElementById("totalRoom_cost").value;
                                                var medicineCost = document.getElementById("medicine_cost").value;
                                                if (medicineCost == "") {
                                                    document.getElementById("payable_amount").value = TotalRoomCost;
                                                } else {
                                                    var result = parseInt(TotalRoomCost) + parseInt(medicineCost);
                                                    document.getElementById("payable_amount").value = parseInt(result);
                                                }
                                            }

                                        }

                                        function Validate() {
                                            var medicineCost = document.getElementById("medicine_cost").value;
                                            if (medicineCost == "") {
                                                alert("Medicine Cost must need to be mentioned!!!");

                                            }
                                        }

                                    </script>


                                    <script>
                                        function GetDays() {


                                            var StartDate = document.getElementById("checkoutDate").value;
                                            var regx = /^\d{4}-\d{2}-\d{2}$/;
                                            if (!StartDate.match(regx)) {
                                                alert("Checkout date format is not matched(year-month-day)");
                                            } else {
                                                var EndDate = document.getElementById("admissionDate").value;
                                                var oneDay = 1000 * 60 * 60 * 24;
                                                var x = StartDate.split("-");
                                                var y = EndDate.split("-");
                                                var year1 = x[0];
                                                var month1 = x[1] - 1;
                                                var day1 = x[2];
                                                var year1 = x[0];
                                                var year2 = y[0];
                                                var month2 = y[1] - 1;
                                                var day2 = y[2];
                                                var date1 = new Date(year1, month1, day1);
                                                var date2 = new Date(year2, month2, day2);
                                                var spendedDays = Math.ceil((date1.getTime() - date2.getTime()) / (oneDay));
                                                document.getElementById("spended_day").value = spendedDays;
                                                var roomCost = document.getElementById("roomcost").value;
                                                document.getElementById("totalRoom_cost").value = parseInt(spendedDays * roomCost);
                                            }

                                        }

                                    </script>

                                    <div class="col-md-6 ">
                                        <div class="form-group ">

                                            <label for="spended_day">Spended Days</label>
                                            <input type="text" id="spended_day" placeholder="Spended Day" name="spended_day" disabled="true" class="form-control contact-form-field spn_input">

                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="medicine_cost">Total Room Cost</label>
                                            <input type="text" id="totalRoom_cost" name="totalRoom_cost" disabled="true" value="<?php if(isset($totalCost)){ echo htmlentities($totalCost);}?>" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="medicine_cost">Medicine cost</label>
                                            <input type="text" id="medicine_cost" onkeyup="numbersOnly(this);PayableAmount()" name="medicine_cost" class="form-control contact-form-field"> </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for="payable_amout">Payable amount</label>
                                            <input type="text" id="payable_amount" disabled="true" name="payable_amount" class="form-control contact-form-field spn_input">

                                        </div>
                                    </div>



                                    <button class="btn btn-success bnt-patint" onclick="Validate();" type="submit" id="Checkout" name="Checkout">Checkout</button>
                                    <button class="btn btn-primary" type="reset">Clear</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <script>
            function CheckEmpty() {
                var id = document.getElementById("search").value;
                if (id == "") {
                    alert("Enter any id two search");
                    return false;
                } else {
                    return true;
                }
            }

        </script>


        <?php 
    
    if(isset($_POST['sub_search']))
    {
        $connect=mysqli_connect("localhost","root","","pes");
        $SearchedId=$_POST['search'];
        $searchSql="SELECT * FROM patient WHERE PatientId='$SearchedId'";
        $searchQuery=mysqli_query($connect,$searchSql);
        $count=mysqli_num_rows($searchQuery);
        if($count==1)
        {
        }
        
    }
    ?>

        <section id="patient_enrolled" class="section-padding">
            <div id="patient_enrolled_head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                            <div class="sec_title">
                                <h2>Enrolled Patient</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <form method="post" action="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control custom_input" name="search" placeholder="Search by id" id="search">
                                <input type="submit" class="btn btn-lg btn-hover" value="Search" name="sub_search" onclick="CheckEmpty();">
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-3">
                            <input type="submit" class="btn btn-lg btn-right btn-hover" value="All patient" name="allPatient" id="allPatient">
                        </div>
                    </div>
                </div>
                <div class="patient_enroll">
                    <div class="container">
                        <div class="row">

                            <div class="text-center" id="message" style="color:black">
                                <?php
                         if(isset($FailedMessage))
                            {
                                   echo $FailedMessage;
                                
                               
                             }

                             ?>
                            </div>

                            <div class="col-md-12">

                                <table class="table table-bordered">
                                    <tr class="bg-primary">
                                        <th>Patient Id</th>
                                        <th class="primary">FirstName</th>
                                        <th class="primary">LastName</th>
                                        <th class="primary">Age</th>
                                        <th class="primary">Admisstion Date</th>
                                        <th class="primary">Blood Group</th>
                                        <th class="primary">Gender</th>
                                        <th class="primary">Phone</th>

                                    </tr>
                                    <?php
                
                
                
                if(isset($_POST['allPatient'])){
                    
                    $connect=mysqli_connect("localhost","root","","pes");
                    
         $sql = "SELECT PatientId,FirstName,LastName,Age,AdmissionDate,BloodGroup,Gender,Phone FROM patient";
             $query=mysqli_query($connect,$sql);
                $count=mysqli_num_rows($query);

               if($count>0)
               {
                  
                 while($row=mysqli_fetch_array($query))
                 {  

            ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['PatientId']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['FirstName']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['LastName']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['Age']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['AdmissionDate']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['BloodGroup']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['Gender']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['Phone']; ?>
                                            </td>

                                        </tr>
                                        <?php

            }
            }
                }
             ?>



                                            <?php
                
                
                if(isset($_POST['sub_search'])){
                    
                    $connect=mysqli_connect("localhost","root","","pes");
        $SearchedId=$_POST['search'];
        $searchSql="SELECT * FROM patient WHERE PatientId='$SearchedId'";
        $searchQuery=mysqli_query($connect,$searchSql);
        $count=mysqli_num_rows($searchQuery);
        if($count==1)
        {
                  
                 while($row=mysqli_fetch_array($searchQuery))
                 {  

            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row['PatientId']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['FirstName']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['LastName']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['Age']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['AdmissionDate']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['BloodGroup']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['Gender']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['Phone']; ?>
                                                    </td>

                                                </tr>
                                                <?php

            }
            }
                    else
                    {
                        $FailedMessage="Invalid Id, Try Correct One !!!";
                    }
                }
             ?>


                                </table>





                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <footer id="footer-area" class="section-top-border">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="footer wow fadeInUp" data-wow-delay="0.5s">
                            <div class="copyright text-center">
                                <p class="wow bounce" data-wow-delay="0.2s">Copyright &copy;2017 <a href="#">khokon</a></p>
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
