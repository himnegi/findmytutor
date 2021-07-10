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

<form action="tutorinfo.php" method="post">
<br>
<br>
    <label for="name" > Name: </label>
    <input style=" margin-left:74px"type="text" class="buttonwidth" name="name" placeholder="Your Name" size="25" required> <br><br>
    

    <label for="contactno" > Contact No: </label>
    <input style=" margin-left:39px" type="text" class="buttonwidth" name="contactno" placeholder="Your Contact number" size="25" required><br><br>
    <label for="age" > Age </label>
    <input style=" margin-left:87px" type="text" class="buttonwidth" name="age" placeholder="Your Age" size="25" required><br><br>

    <label for="gender" > Gender: </label><br><br>
<input type="radio" name="gender" value="male"required > Male
 <input type="radio" name="gender" value="female" required> Female<br><br>


</fieldset>
<fieldset>
<legend> Other Information </legend>
<br>
<br>
    <label for="qualification" > Qualification: </label>
    <input style=" margin-left:60px"type="text" class="buttonwidth" name="qualification" placeholder="Your Qualification" size="25" required> <br><br>
    
    <br>
<br>
<label for="course" > Course: </label>
    <input style=" margin-left:90px"type="text" class="buttonwidth" name="course" placeholder="Course Name" size="25" required> <br><br>
    <label for="experience" > Experience: </label>
  
    <br>
 <select style=" margin-left:150px " name="experience"onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
   <option value="one">1 year</option>
   <option value="two">2 year</option>
   <option value="three">3 year</option>
   <option value="four">4 year</option>
   <option value="five">5 year</option>
   <option value="six">6 year</option>
   <option value="seven">7 year</option>
   <option value="eight">8 year</option>
   <option value="nine">9 year</option>
   <option value="ten">10 year</option>
   <option value="eleven">11 year</option>
   <option value="twelve">12 year</option>
 
</select> 
<br>


        

   <br>
   <br>
    <label for="state">Select Your State:</label>
    <br>
    <select  style=" margin-left:150px;padding-left:0px" name="state"onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'' name="state" id="state" required>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
        <option value="Daman and Diu">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        </select>
        <br>
<br>
<label for="cityname" > City Name: </label>
<input style=" margin-left:71px"type="text" class="buttonwidth" name="cityname" placeholder="Your City" size="25" required> <br><br>
<label for="pincode" >Pin Code: </label>
<input  style=" margin-left:79px" type="text" class="buttonwidth" name="pincode" placeholder="Pin Code" size="25" required><br><br>


<br>
<label for="urself"> Tells us more about you:</label>
<textarea  name="urself" rows="4" cols="50" ></textarea>
<br>
<br>

</fieldset>

<input  style="padding: 8px 90px ; background-color:rgb(33, 33, 165);color:rgb(244, 244, 245)" type="submit"  name="save" value="save"> 
</form>
</div>






</div>
</div>
</body>
</html>