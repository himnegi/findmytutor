<?php

$conn = mysqli_connect('localhost','root','','findmytutor');
if(!$conn)
{ 
    die("connection counldnot formed" . mysqli_connect_error());
   
}
else
{
echo "success";
}


 if(isset($_POST['save']))
{$studentname=$_POST['studentname'];
    $studentemail=$_POST['studentemail'];
    $studentpassword=$_POST['studentpassword'];
    $cstudentpassword=$_POST['cstudentpassword'];
    
$emailquery="select * from studentlogin where email='$studentemail'";
$emailcheck=mysqli_query($conn,$emailquery);
$emailcount=mysqli_num_rows($emailcheck);

$namequery="select * from studentlogin where userid='$studentname'";
$namecheck=mysqli_query($conn,$namequery);
$namecount=mysqli_num_rows($namecheck);


if($namecount >0)
{
    echo '<script>alert("userid  alredy exist... select another.....!")</script>';
    echo "<script> window.location.assign('studentregisterationform.php'); </script>";

}
else if($emailcount >0)
{ echo '<script>alert("Email-Id already registered.......!")</script>';
    echo "<script> window.location.assign('studentregisterationform.php'); </script>";
}
else if( $studentpassword!=$cstudentpassword)


{
    echo '<script>alert("Password does not match.....!!")</script>';
    echo "<script> window.location.assign('studentregisterationform.php'); </script>";
}
else{
    
    
  

$sqlquery = "INSERT INTO studentlogin VALUES (  '$studentname','$studentemail','$studentpassword')";

$result=mysqli_query($conn,$sqlquery);


if($result)
{ echo '<script>alert("Registered successfully.......!")</script>';
    echo "<script> window.location.assign('studentloginform.php'); </script>";
}
else{
    echo '<script>alert("could not registered.......!")</script>';
}
}
}
?>