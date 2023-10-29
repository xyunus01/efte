<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="igardo")
 {
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Şifreniz Yanlış!";
 }
}

if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="i-css/i-pw.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'/>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Igardo PHP Panel</title>

</head>
<body>
   <div class="box">
    <div class="container">

        <div class="top"> <center>
            <br><br><br><br><br><br><br>
            <img src="i-img/q-igardo.jpg" style="width: 30%; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; border-radius: 15px; text-align:center; "></center>

            <br>
            <header>Igardo PHP Panel</header>
        </div><br>
        <?php
if($_SESSION['password']=="igardo")
{
 ?> <center>
 <h1 style="color:#8dff2d; font-weight: 400; font-size: 20px;   padding: 10px 10px;
    background: rgba( 0, 0, 0, 0.3 );
backdrop-filter: blur( 15px );
-webkit-backdrop-filter: blur( 15px );
border-radius: 15px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
">Igardo tarafından tasarlanan PHP paneline hoşgeldiniz!</h1></center>


<br>


    <div class="player">
        <div class="player-track">
            <div class="artist-name"></div>
            <div class="music-name"></div>
            <div class="progress-bar">
               
            </div>
            <div class="time"></div>
        </div>
        <div class="circle">
            
            
        </div>
        <div class="player-control">
            <i id="prev" class="prev-btn fas fa-backward"></i>
            <i id="play" class="play-btn fas fa-play"></i>
            <i id="next" class="next-btn fas fa-forward"></i>
        </div>
    </div>





 <?php include("ivanov.php");?>

 <form method="post" action="" id="logout_form">
  <input type="submit" class="submit" name="page_logout" value="Çıkış yap">

 </form>
 <?php
}
else
{
 ?>

      <form method="post" action="" id="login_form">
     

        <div class="input-field">
            <input type="Password" class="input" placeholder="Şifrenizi girin" name="pass" placeholder="*******" id="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" name="submit_pass" value="Giriş yap" id="">
        </div>
      
        <div class="two-col">
          
            <div class="two">
<br>
                <label><a href="#igardo"><?php echo $error;?></a></label>
                 </form>
      

  
  
</head>


  
                <?php  
}
?>

             <script>
  window.console = window.console || function(t) {};
</script>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src='i-js/i-pw.js' id='rendered-js' > </script>

            </div>
        </div>
    </div>
</div>  
</body>
</html>
  
 
          
         
          
   
    


