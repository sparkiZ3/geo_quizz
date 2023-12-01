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
    <?php 
    include 'lst_flags.php';
    setcookie('score', '0',time() + (86400 * 30));
    setcookie('drp_seen', '0',time() + (86400 * 30));
    ?>
    <div class="container">
        <div class="head">
            <h1>Flag game </h1>
            <h2>Trouvez le nom des pays !</h2>
            <?php
            if (isset($_GET['score']) && isset($_GET['nb'])) {
                echo "<div class=\"score_recap\">";
                    echo "<h1>Ton score :</h1>";
                    echo "<h2>". $_GET['score']."/". $_GET['nb']."</h2>";
                echo "</div>";
                echo "<h2>🔽 Rejouer 🔽</h2>";
            }
        ?>
        </div>
        
        <fieldset>
            <legend>nombre de drapeaux a deviner</legend>
            <form action="game.php" method="get" class="form-example">
                <div class="checkbox">
                    <div>
                        <input type="radio"name="nb" value="5" required />
                        <label for="huey">5</label>
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
    </div>
    <?php
    if (isset($_GET['score']) && isset($_GET['nb'])) {
        echo "<div>";
            echo "<h1>bravo !! voici ton score :</h1>";
            echo "<h2>". $_GET['score']."/". $_GET['nb']."</h2>";
        echo "</div>";
    }
    ?>
<fieldset>
    <legend>nombre de drapeaux a deviner</legend>
    <form action="game.php" method="get" class="form-example">
        <div class="checkbox">
            <div>
                <input type="radio"name="nb" value="5" required />
                <label for="huey">5</label>
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
