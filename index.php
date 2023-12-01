<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    $nb_flags = 120;
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flag game</title>
    <link rel="stylesheet" type="text/css" href="style_index.css" />
</head>
<body>
    <?php include 'lst_flags.php';
    setcookie('score', '0',time() + (86400 * 30), "/");
    setcookie('drp_seen', '0',time() + (86400 * 30), "/");
    ?>

    <a href="game.php?flaginit=<?php echo $liste_pays[rand(0, 120)]; ?>"><div></div></a>
<fieldset>
    <legend>nombre de drapeaux a deviner</legend>
    <form action="game.php" method="get" class="form-example">
        <div class="checkbox">
            <div>
                <input type="radio"name="nb" value="20" required />
                <label for="huey">20</label>
            </div>
            <div>
                <input type="radio"name="nb" value="50" />
                <label for="dewey">50</label>
            </div>
            <div>
                <input type="radio"name="nb" value="100" />
                <label for="dewey">100</label>
            </div>
            <div>
                <input type="radio"name="nb" value="150" />
                <label for="dewey">150</label>
            </div>
            <div>
                <input type="radio"name="nb" value="200" />
                <label for="dewey">200</label>
            </div>
            <div>
                <input type="radio" name="nb" value="250" />
                <label for="louie">250</label>
            </div>
        </div>
        <button type="submit">Jouer !</button>
    </form>
</fieldset>
    
</body>
