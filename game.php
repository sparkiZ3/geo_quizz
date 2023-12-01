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
    <?php 
    if (isset($_GET['flaginit'])) {
        setcookie('flag', $_GET['flaginit'],time() + (10000), );
    }
    $correct_guess = false;
    echo "actuellement : ".$_COOKIE['flag']."!";
    if (isset($_GET['guess'])) {
        $guess = $_GET['guess'];
        if (strtoupper($guess) === $pays[$_COOKIE['flag']]) {
            $correct_guess = true;
            setcookie('flag', $liste_pays[rand(0, $nb_flags)],time() + (86400 * 30),);
            header('Location: game.php');
        }elseif (strtoupper($guess) !== strtoupper($pays[$_COOKIE['flag']])) {
            $correct_guess = false;
        }
    }
    ?>
    <div class="container">
        <h1>Flag game</h1>
        <div class="top_img">
            <div></div>
            <h2>Quel est le nom de ce pays ?</h2>
            <h3>Bonnes réponses : ../20</h3>
        </div>
        
        <img src="flags/<?php echo $_COOKIE['flag'];?>.png">
        <form method="get">
            <input name="guess" id="nom" type="text" />
         </form>
    </div>
    <?php
    ?>
</body>
</html>
