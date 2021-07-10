<?php
//SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
$conn=mysqli_connect('localhost','root','','findmytutor');
if(!$conn)
{
    echo  "connection couldnot formed";
}
else
{}
session_start();

$_SESSION['cityname'];
$_SESSION['state'];
$query="select * from tutorotherinfo where city='{$_SESSION['cityname']}' ";

$result=mysqli_query($conn,$query);

        
   
    
?>


<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
 <link rel="stylesheet" href="style3.css">
<body>

<?php
if (mysqli_num_rows($result) > 0) {

?>
<h1 style="color:red"> DATA FOUND....!!</h1>
  <table  >
  
  <tr  style="color:red">
  <td>S no</td>
    <td>Name</td>
    <td>Qualification</td>
    <td>Course</td>
    <td>Experince(yrs)</td>
    <td>E-mail</td>
    <td>Phone-No</td>
    <td>about him</td>
    

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
    $query1="select * from tutorpersonalinfo where username= '{$row["username"]}'";
    $query2="select * from tutorlogin where userid= '{$row["username"]}'";

$result1 =mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($result1);
$name=$row1[1];
$contact=$row1[2];
$result2 =mysqli_query($conn,$query2);
$row2 = mysqli_fetch_array($result2);
$email=$row2[1];


?>
<tr>
<td><?php echo $i+1; ?></td>
    <td><?php echo $name; ?></td>
    <td><?php echo $row["qualification"]; ?></td>
    <td><?php echo $row["course"]; ?></td>
    <td><?php echo $row["experience"]; ?></td>
    <td><?php echo $email;?></td>
    <td><?php echo $contact;?></td>
   
    <td><?php echo $row["otherinfo"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>


