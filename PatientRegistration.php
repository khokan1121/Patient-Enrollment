<?php

if(isset($_POST['submit']))
{
    
     $connect= mysqli_connect("localhost","root","","pes");
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $fatherName=$_POST['fatherName'];
    $motherName=$_POST['motherName'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $admissionDate=$_POST['AdmissionDate'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $bloodGroup=$_POST['bloodGroup'];
    $roomType=$_POST['roomType'];
    $roomNumber=$_POST['roomNumber'];
    $roomCost=$_POST['roomCost'];
    
   if($gender==1)
   {
       $genderText="Male";
   }
    else if($gender==2)
   {
       $genderText="Female";
   }
    
    
    
    
        if($roomType==1)
    {
        $roomTypeText="General";
        $roomCost="1000";
    }
    else if($roomType==2)
    {
        $roomTypeText="Good";
        $roomCost="2000";
    }
    else if($roomType==3)
    {
        $roomTypeText="VIP";
        $roomCost="4000";
    }
    else if($roomType==4)
    {
        $roomTypeText="Emergency";
        $roomCost="7000";
    }
    
    
   
    if($bloodGroup==1)
    {
        $bloodGroupText="A+";
    }
    else if($bloodGroup==2)
    {
        $bloodGroupText="A-";
    }
    else if($bloodGroup==3)
    {
        $bloodGroupText="B+";
    }
    if($bloodGroup==4)
    {
        $bloodGroupText="B-";
    }
    else if($bloodGroup==5)
    {
        $bloodGroupText="O+";
    }
    else if($bloodGroup==6)
    {
        $bloodGroupText="O-";
    }
    else if($bloodGroup==7)
    {
        $bloodGroupText="AB+";
    }
    else if($bloodGroup==8)
    {
        $bloodGroupText="AB-";
    }
    
    $addQuery="INSERT INTO patient(FirstName,LastName,FatherName,MotherName,Address,Age,AdmissionDate,Phone,Email,Gender,BloodGroup,RoomType,RoomNumber,RoomCost) VALUES('$firstname','$lastname','$fatherName','$motherName','$address','$age','$admissionDate','$phone','$email','$genderText','$bloodGroupText','$roomTypeText','$roomNumber','$roomCost')";
    
    $query=mysqli_query($connect,$addQuery);
    if($query>0)
    {
        $message="Patient has been registered Successfully !!!";
    }
    else
    {
        $message="Patient registration Failed, Try Again !!!";
    }
    
}

?>
