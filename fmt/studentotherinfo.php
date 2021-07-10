<?php
$conn=mysqli_connect('localhost','root','','findmytutor');
if(!$conn)
{ echo "connection not formed";
}
else
{}
session_start();

$_SESSION['userid'] ;
 if(isset($_POST['search']))
 {
    $standard=$_POST['standard'];
   
    $state=$_POST['state'];
    $cityname=$_POST['cityname'];
    $pincode=$_POST['pincode'];
    $_SESSION['standard'] = $standard;
    $_SESSION['pincode'] = $pincode;
    $_SESSION['cityname'] = $cityname;
    $_SESSION['state'] = $state;

   $query=" INSERT INTO studentotherinfo VALUES ('{$_SESSION['userid']}','$standard','$state','$cityname','$pincode')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo '<script>alert("Data  saved.....!")</script>';
  echo "<script> window.location.assign('finalform.php'); </script>";
} 
else
{ echo "data not saved";

}

}





?>