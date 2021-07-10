<?php
$conn=mysqli_connect('localhost','root','','findmytutor');
if(!$conn)
{
echo "connection not formed";

}
else
{
    echo "connection formed";

}
SESSION_START();
 
if(isset($_POST['save']))
{
echo     $_SESSION['userid'];
$name=$_POST['name'];
  
    $contactno=$_POST['contactno'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
$qualification=$_POST['qualification'];
$course=$_POST['course'];

$experience=$_POST['experience'];
$state=$_POST['state'];
$cityname=$_POST['cityname'];
$pincode=$_POST['pincode'];
$urself=$_POST['urself'];

$query="INSERT INTO tutorpersonalinfo VALUES ('{$_SESSION['userid']}','$name','$contactno','$age','$gender')";
$result=mysqli_query($conn,$query);
 if($result)
 { echo "true";}
 else
 {echo "not true";
}



$anotherquery="INSERT INTO tutorotherinfo VALUES ('{$_SESSION['userid']}','$qualification','$course','$experience','$state','$cityname','$pincode','$urself')";
$anotherresult=mysqli_query($conn,$anotherquery);
 if($anotherresult)
 { echo "true";}
 else
 {echo "not true 2";
}






}



?>