<?php
$conn= mysqli_connect('localhost','root','','findmytutor');
if(!$conn)
{ echo "error";
}
else
{
    echo  "successfull";
}
session_start();

$_SESSION['userid'] ;
    echo $_SESSION['userid'];

if(isset($_POST['search']))
{ 

    $name=$_POST['name'];
   $institutionname=$_POST['institutionname'];
    $contactno=$_POST['contactno'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $query="INSERT INTO studentpersonalinfo  VALUES ('{$_SESSION['userid']}','$name ',' $institutionname',' $contactno ','$age','$gender')";
    
$result=mysqli_query($conn,$query);
if($result){
    echo "succc";
    echo "<script> window.location.assign('studentotherinfoform.php'); </script>";
}
else
{echo "not succ  ";}



}












?>