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

<div class="form-group">

<form action="studentotherinfo.php" method="post">
<br>
<br>
   
<fieldset>
<legend> Other Information </legend>
    <label for="standard">Enter your standard:</label>
    <br>
 <select style=" margin-left:150px " name="standard"onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
   <option value="one">1st standard</option>
   <option value="two">2nd standard</option>
   <option value="three">3rd standard</option>
   <option value="four">4th standard</option>
   <option value="five">5th standard</option>
   <option value="six">6th standard</option>
   <option value="seven">7th standard</option>
   <option value="eight">8th standard</option>
   <option value="nine">9th standard</option>
   <option value="ten">10th standard</option>
   <option value="eleven">11th standard</option>
   <option value="twelve">12th standard</option>
   <option value="graduation">Graduation</option>
   

 
</select> 
<br>

        

   <br>
   <br>
    <label for="standard">Select Your State:</label>
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

</fieldset>
<input  style="padding: 8px 90px ; background-color:rgb(33, 33, 165);color:rgb(244, 244, 245)" type="submit"  name="search" value="search"> 
</form>
</div>






</div>
</div>
</body>
</html>