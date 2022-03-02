<?php 


echo'
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>E-Event.IO!</title>
    <link rel="icon" href="/view/img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;800&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="view\css\index.css" rel="stylesheet" type="text/css"/>
    <link href="view\css\style.css" rel="stylesheet" type="text/css"/>
    <script src="/view/js/script.js"></script>
  </head>
  <body>

    <header>
    <nav>
    <input type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
        <div class="wrapper">
        <ul class="menu">  
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php?ctrl=homepage&action=contact">Contact</a></li> '?>

    <?php
    if (isset($_SESSION['auth'])):
        
        echo'<li> <a href="index.php?ctrl=compte&   action=Compte">Compte</a></li>
            <li> <a href="index.php?ctrl=user&action=logout">Déconnexion</a></li>'
            ?> 
    <?php else:
        echo'<li> <a href="index.php?ctrl=user&action=signin">Connexion</a></li>' ?>
    <?php endif; ?> 

    <?php echo' 
        </ul>
        </div>
    </nav>';?> 

    <?php 
    if(isset($_SESSION['flash'])){
        foreach($_SESSION['flash'] as $type => $message){
            echo '<div class = "erreur-' . $type . '">';
            echo '<p>' . $message . '</p>';  
            echo '</div>';
        }
        unset($_SESSION['flash']); 
    }
    echo '</header>';
?>