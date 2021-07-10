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
      

<div class="bg">
    <div class="anotherbg">
    <div class="formlayout">
     
    <h1 style="color:blue; ">Login</h1>
    <span style="color:blue">Does not have an account yet ? </span><a href="tutorregisterationform.php">sign-in</a>
    <form action="tutorlogin.php" method="post">
    <div class="form-group">
        <label for="logiid">User Id</label></br>
        <input type="text" class="" name="loginid" placeholder="Enter UserId" size="25" required>
    </br>
        <label for="loginpassword">Password</label>
    </br>
        <input type="password" name="loginpassword" placeholder="Password" size="25" required>
    </br> 
    
    </br>
    <input  style="padding: 8px 90px ; background-color:rgb(33, 33, 165);color:rgb(244, 244, 245)" type="submit" name="login" value="log-in" >
    </br>
    </div>
    </form>
    </div>
    
    </div>
    </div>
</body>
</html>