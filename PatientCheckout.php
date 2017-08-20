<?php

if(isset($_POST['GetValue']))
{
     $connect= mysqli_connect("localhost","root","","pes");
    $patientID=$_POST['patientId'];
    $searchQuery="SELECT * FROM patient WHERE PatientID='$patientID'";
    $result=mysqli_query($connect,$searchQuery);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        while($rows=mysqli_fetch_array($result))
        {
            $patientID=$rows['PatientId'];
    $firstname=$rows['FirstName'];        
    $lastname=$rows['LastName'];
    $fatherName=$rows['FatherName'];
    $motherName=$rows['MotherName'];
    $address=$rows['Address'];
    $age=$rows['Age'];
    $phone=$rows['Phone'];
    $email=$rows['Email'];
    $gender=$rows['Gender'];
    $bloodGroup=$rows['BloodGroup'];
    $roomType=$rows['RoomType'];
    $roomNumber=$rows['RoomNumber'];
    $roomCost=$rows['RoomCost'];
    $admissionDate=$rows['AdmissionDate']; 
            
                
        }
    }
    else
    {
        $Invalidmessage="The Given ID is Invalid !!!";
    }
}

if(isset($_POST['Checkout']))
{
    $connect= mysqli_connect("localhost","root","","pes");
    $patientID=$_POST['patientId'];
    $medicineCost=$_POST['medicine_cost'];
    
    $checkQuery="SELECT * FROM checkout WHERE PatientId='$patientID'";
    $query=mysqli_query($connect,$checkQuery);
    $count=mysqli_num_rows($query);
    if($count==1)
    {
        $successMessage="Patient has already been Checked Out !!!";
    }
    else
    {
        
    $addquery="INSERT INTO checkout(MedicineCost,PatientId)VALUES('$medicineCost','$patientID')";
    $result=mysqli_query($connect,$addquery);
    if($result>0)
    {
        $successMessage="Patient has been Checked out Successfully ";
    }
    else
    {
        $successMessage="Patien Check out Failed !!! ";
    }
    }
}

?>
