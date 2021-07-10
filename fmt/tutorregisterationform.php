<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>

<body>
   <div class="registerbg">
<div class="registerform">
<h1 style="text-align:center">CREATE ACCOUNT</h1>


<form  action="tutorregister.php" method ="post">
    
    <input type="text" class="buttonwidth" name="tutorid" placeholder="userid" size="25" required>     </br>
        <input type="email" class="buttonwidth" name="tutoremail" placeholder="Your Email" size="25" required>
    <br>
        <input type="password" class="buttonwidth" name="tutorpassword" placeholder="Password" size="25"required >
        <br>
        <input type="password" class="buttonwidth" name="ctutorpassword" placeholder="Confirm Password" size="25" required>
<br>
<br>
        <input class="buttonwidth" style=" text-align:center; background-color:rgb(33, 33, 165);color:rgb(244, 244, 245)" name="save" type="submit" value="Sign-in">
   

    </form>
    <span style="color:blue">Already have an account ? </span><a href="tutorloginform.php">sign-in</a>

</div>


   </div>
</body>
</html>