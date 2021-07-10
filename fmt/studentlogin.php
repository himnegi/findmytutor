<?php
$conn = mysqli_connect('localhost','root','','findmytutor');
if(!$conn)
{ 
    die("connection counldnot formed" . mysqli_connect_error());
   
}
else
{

}
session_start();




 if(isset($_POST['login']))
{
    $loginid=$_POST['loginid'];
  
    $loginpassword=$_POST['loginpassword'];
    $query ="select* from studentlogin where userid='$loginid'and pasword='$loginpassword'";
     $check=mysqli_query($conn,$query);
    $result=mysqli_fetch_array($check);
    $_SESSION['userid'] = $loginid;

if($result)
{
    echo '<script>alert("Log-in  successfull")</script>';


$usernamequery="select * from studentpersonalinfo where username='$loginid'";
$usernamecheck=mysqli_query($conn,$usernamequery);
$usernamecount=mysqli_num_rows($usernamecheck);


if($usernamecount >0)
{
    echo '<script>alert("Data already saved.....!")</script>';
    echo "<script> window.location.assign('studentotherinfoform.php'); </script>";

}else
{
    echo "<script> window.location.assign('studentinfoform.php'); </script>";
}


}
else
{
    echo '<script>alert("either userid or password is incorrect...try again")</script>';
    echo "<script> window.location.assign('studentloginform.php'); </script>";
}

}

?>