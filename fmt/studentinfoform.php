<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="stylestudentinfo.css">



</head>
<body>
    <div class="bg">

<div class="panel">
<fieldset>
<legend>Personal Information</legend>
<div class="form-group">

<form action="studentinfo.php" method="post">
<br>
<br>
    <label for="name" > Name: </label>
    <input style=" margin-left:74px"type="text" class="buttonwidth" name="name" placeholder="Your Name" size="25" required> <br><br>
    <label for="institutionname" >Instituition Name: </label>
    <input  type="text" class="buttonwidth" name="institutionname" placeholder="Institution Name" size="25"  required><br><br>

    <label for="contactno" > Contact No: </label>
    <input style=" margin-left:39px" type="text" class="buttonwidth" name="contactno" placeholder="Your Contact number" size="25" required><br><br>
    <label for="age" > Age </label>
    <input style=" margin-left:87px" type="text" class="buttonwidth" name="age" placeholder="Your Age" size="25" required><br><br>

    <label for="gender" > Gender: </label><br><br>
<input type="radio" name="gender" value="male" required> Male
 <input type="radio" name="gender" value="female" required> Female<br><br>


</fieldset>

</fieldset>
<input  style="padding: 8px 90px ; background-color:rgb(33, 33, 165);color:rgb(244, 244, 245)" type="submit"  name="search" value="next"> 
</form>
</div>






</div>
</div>
</body>
</html>