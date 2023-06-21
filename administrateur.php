<?php
include('connexion_base.php');
$msg_success = "";
$msg = "";

if(isset($_POST['administrer'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_passe = $_POST['mot_passe'];

    $query = "INSERT INTO administrateur (nom, email, mot_passe) VALUES (:nom,:email, :mot_passe)";
    $query_run = $conn->prepare($query);
    $query_run->bindParam(':nom', $nom);
    $query_run->bindParam(':email', $email);
    $query_run->bindParam(':mot_passe', $mot_passe);

    if($query_run->execute()){
        $msg_success = "Vos données ont été bien enregistrées!";
    }
    else{
        $msg = "Erreur d'enregistrement";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stylA.css">
    <title>Administrateur</title>

</head>
<body>
    <div class="container">
        <div class="login-box">
            <form method="POST" action="">
                <div>
                    <img class="logo" src="images/MySchool.png" alt="" height="120" width="120">
                </div>
                <div>
                    <h2 class="ad">
                        CONNEXION
                    </h2>
                </div>
                <div class="user-box">
                    <input type="text" name="nom" required="">
                    <label>Nom complet</label>
                </div>
                <div class="user-box">
                    <input type="text" name="email" required="">
                    <label>E-mail</label>
                </div>
                <div class="user-box">
                    <input type="password" name="mot_passe" required="">
                    <label>Password</label>
                </div>
                <div class="user-box">
                <select name="type">
                        <option value="">-- Sélectionnez le type --</option>
                        <option value="admin">administrateur</option>
                        <option value="secretaire">sécrétaire</option>
                </select>
                </div>
                <center>
                <button type="submit" name="administrer">Se connecter</button>
                    </a>
                </center>
            </form>
        </div>
    </div>
    <?php
        if($msg_success != "") {
            echo '<p>'.$msg_success.'</p>';
        }
        if($msg != "") {
            echo '<p>'.$msg.'</p>';
        }
    ?>
</body>
</html>
