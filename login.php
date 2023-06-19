<?php
include('connexion_base.php');
$sql="SELECT  email, mot_pass FROM administrateur";
$result=$conn->$query($sql)
if(isset($_POST['connecter'])){
if(!empty($_POST['email'])AND !empty($_POST['mot_pass'])){
    $row=$result->fetch(PDO::FETCH_ASSOC);
    $email_defaut=$row["email"];
    $mot_de_passe_defaut=$row["mot_de_passe"];
    $email_saisi=htmlspecialchars($_POST['email']);
    $mot_de_passe_saisi=htmlspecialchars($_POST['mot_de_passe']);
}
if($mot_de_passe==$mot_de_passe_saisi AND $email_defaut==$email_saisi){
header('Location:index.php');
}else{
echo'<h6 ">votre mot de passe est incorrect!</h6>';
}
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styl.css">
    <title>login</title>
</head>
<body>
    <div class="container">
    <div class="login-box">
    
 <form>
    <div>
    <img class="logo" src="images/MySchool.png" alt="" heigth="120" width="120">
    </div>
   <div class="user-box">
     <input type="text" name="" required="">
     <label>E-mail</label>
   </div>
   <div class="user-box">
     <input type="password" name="" required="">
     <label>Password</label>
   </div><center>
   <a href="#">
          Se connecter
      <span></span>
   </a></center>
 </form>
</div>
    </div>
</body>
</html>