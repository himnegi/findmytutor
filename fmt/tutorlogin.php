<?php
$conn = mysqli_connect('localhost','root','','findmytutor');
if(!$conn)
{ 
    die("connection counldnot formed" . mysqli_connect_error());
   
}
else
{


}
SESSION_START();

 if(isset($_POST['login']))
{   
    $loginid=$_POST['loginid'];
    $_SESSION['userid'] = $loginid;
    $loginpassword=$_POST['loginpassword'];
    $query ="select* from tutorlogin where userid='$loginid'and pasword='$loginpassword'";
     $check=mysqli_query($conn,$query);
    $result=mysqli_fetch_array($check);
if($result)
{
    echo '<script>alert("Log-in  successfull")</script>';
    echo "<script> window.location.assign('tutorinfoform.php'); </script>";
}
else
{
    echo '<script>alert("either userid or password mismatch... try again")</script>';
    echo "<script> window.location.assign('tutorloginform.php'); </script>";
}

}

?>