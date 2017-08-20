<?php

   

    if(isset($_POST['submit']))
    {
        
        
        $connect= mysqli_connect("localhost","root","","pes");

    $username=$_POST['UserName'];
    $password=md5($_POST['password']);
    $email=$_POST['email'];  

    
    $query="SELECT * FROM user WHERE UserName='$username' ";
   
   

   
    $check=mysqli_query($connect,$query);
    
    $count = mysqli_num_rows($check);
    
    
   
        
        if($count==1)
        {
            $message="UserName has already been taken!!!";
        }
        
        else
        {
             $query1="SELECT * FROM user WHERE Email='$email' ";
            $check1=mysqli_query($connect,$query1);
            $count1 = mysqli_num_rows($check1);
            if($count1==1)
            {
                $message="Email is already Exist!!!";
            }
            else
            {
                
        $firstname=$_POST['fname'];
        $lastname=$_POST['lname'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $username=$_POST['UserName'];
        $password=md5($_POST['password']);
        $confurmPassword=md5($_POST['conpassword']);
        
        if($password==$confurmPassword)
        {
        $query="INSERT INTO user(FirstName,LastName,Address,Phone,Email,UserName,Password) VALUES('$firstname','$lastname','$address','$phone','$email','$username','$password')";
        
        $check=mysqli_query($connect,$query);
        if($check>0)
        {
            $message="Registration Successful!!!";
        }
        else
        {
           $message="Registration Failed!!!"; 
        }
            
        }
        
        else
        {
            $message="Password Doesn't Matched !!!"; 
        }
            }
        
        
    }
            
        }
        
?>


    <?php

if(isset($_POST['login']))
{
    $connect= mysqli_connect("localhost","root","","pes");
    $username=$_POST['username'];
    $password=md5($_POST['password']);

$loginquery="SELECT * FROM user WHERE UserName='$username' AND Password='$password' ";

$check=mysqli_query($connect,$loginquery);
     $count = mysqli_num_rows($check);
if($count==1)
{
    header("location:patient.php");
    
}

else
{
    $Failedmessage="Login Failed !!!";
}
}

?>