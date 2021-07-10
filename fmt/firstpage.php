<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindYourTutor</title>
    <link rel="stylesheet" href="style.css">
    <style>
    p{
  
        position: relative;
        animation: mymove 5s infinite;
        animation-timing-function: linear;
      }
      
      @keyframes mymove {
        from {left:0px;}
        to {left: 100px;}
      }
      </style>
</head>
<body>
    <div class="backimage">
        
        <img src="images/logo.jpg"  alt="Avatar" style=" border:2px solid rgb(178, 213, 230); margin:8px 660px ;width:180px;  border-radius: 80%;">
        <p style=" padding: 0px; text-align:center; font-size : 40px; ">welcome to <span style="color:red">FindMyTutor ..!</span></p> 
        <div class="tutorstudent">
         

            <div class="button">
                <a href="tutorloginform.php"> <button class="button1" style="padding: 15px 32px;border:1px solid black;">Are, you Tutor..?</button></a>
                
                  <a href="studentloginform.php"><button class="button1"  button style="padding: 14px 30px;border:1px solid black">Are, you Student..?</button></a>
           
            </div> 
        </div>

    </div>

   
</body>
</html>