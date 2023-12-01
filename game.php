<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    $nb_flags = 120;
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flag game</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<?php include 'lst_flags.php';?>

<body>
    <script> //pour que le curseur soit dans l'input au chargement de la page
        window.onload = function() {
            document.getElementById('nom').focus(); // Place le curseur dans l'input avec l'ID 'monInput'
        };
    </script>
    <?php 
    if($_COOKIE['drp_seen'] == $_COOKIE['nb']){
        header('Location: index.php?score='.$_COOKIE['score'].'&nb='.$_COOKIE['nb']); //fin du jeu quand tout les drapeaux dans la range ont été vus
    }
    if (isset($_GET['nb'])) {
        setcookie('nb', $_GET['nb'],time() + (86400 * 30)); //on définit le nombre de drapeaux à deviner
    }
    if (isset($_GET['skip'])==1) { //si on skip le drapeau
        setcookie('flag', $liste_pays[rand(0, count($liste_pays))],time() + (86400 * 30),); //on en choisi un autre random
        setcookie('drp_seen', $_COOKIE['drp_seen']+1,time() + (86400 * 30)); //on incrémente le nombre de drapeaux vus
        header('Location: game.php'); //on refresh la page
    }

    if (isset($_GET['flaginit'])) {
        setcookie('flag', $_GET['flaginit'],time() + (10000), ); //premier drapreau a deviner
    }
    $correct_guess = false;
    if (isset($_GET['guess'])) {
        $guess = $_GET['guess'];
        if (strtoupper($guess) === $pays[$_COOKIE['flag']]) {
            $correct_guess = true;
            setcookie('flag', $liste_pays[rand(0, count($liste_pays))],time() + (86400 * 30),);
            setcookie('score',$_COOKIE['score']+1,time() + (86400 * 30),);
            setcookie('drp_seen', $_COOKIE['drp_seen']+1,time() + (86400 * 30));
            header('Location: game.php');
        }elseif (strtoupper($guess) !== strtoupper($pays[$_COOKIE['flag']])) {
            $correct_guess = false;
        }
    }
    ?>
    <div class="container">
        <h1>Flag game</h1>
        <div class="top_img">
            <h3 id="nbdrap">Drapeau n° <?php echo $_COOKIE['drp_seen']."/".$_COOKIE['nb']?></h3>
            <h2>Quel est le nom de ce pays ?</h2>
            <h3>Bonnes réponses : <?php echo $_COOKIE['score']."/".$_COOKIE['nb']?></h3>
        </div>
        <img src="flags/<?php echo $_COOKIE['flag'];?>.png">
        <form method="get">
            <input name="guess" id="nom" type="text" />
         </form>
         <a href="notfound.php"><div class="skip"><h2>Je passe >></h2></div></a>
         <div class="indice">
            <h2>Indice</h2>
            <p>code pays :<?php echo $_COOKIE['flag'];?></p>
         </div>
    </div>
    
    <?php
    echo $_COOKIE['drp_seen']."/".$_COOKIE['nb']
    ?>
</body>
</html>
