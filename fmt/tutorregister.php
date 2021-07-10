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
{$tutorid=$_POST['tutorid'];
    $tutoremail=$_POST['tutoremail'];
    $tutorpassword=$_POST['tutorpassword'];
    $ctutorpassword=$_POST['ctutorpassword'];
    
$emailquery="select * from tutorlogin where email='$tutoremail'";
$emailcheck=mysqli_query($conn,$emailquery);
$emailcount=mysqli_num_rows($emailcheck);

$namequery="select * from tutorlogin where userid='$tutorid'";
$namecheck=mysqli_query($conn,$namequery);
$namecount=mysqli_num_rows($namecheck);


if($namecount >0)
{
    echo '<script>alert("userid  alredy exist... select another.....!")</script>';
    echo "<script> window.location.assign('tutorregisterationform.php'); </script>";

}
else if($emailcount >0)
{ echo '<script>alert("Email-Id already registered.......!")</script>';
    echo "<script> window.location.assign('tutorregisterationform.php'); </script>";
}
else if( $tutorpassword!=$ctutorpassword)


{
    echo '<script>alert("Password does not match.....!!")</script>';
    echo "<script> window.location.assign('tutorregisterationform.php'); </script>";
}
else{
    
    
   

$sqlquery = "INSERT INTO tutorlogin() VALUES ( '$tutorid','$tutoremail','$tutorpassword')";

$result=mysqli_query($conn,$sqlquery);


if($result)
{ echo '<script>alert("Registered successfully.......!")</script>';
    echo "<script> window.location.assign('tutorloginform.php'); </script>";}
else{
    echo '<script>alert("could not registered.......!")</script>';
    echo "<script> window.location.assign('tutorregisterform.php'); </script>";
}
}
}
?>