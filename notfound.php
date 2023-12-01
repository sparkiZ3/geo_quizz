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
<body>
    <?php include 'lst_flags.php';?>
    <div class="container">
        <h1 class="forgettitle">Flag game</h1>
        <img src="flags/<?php echo $_COOKIE['flag'];?>.png">
        <h2> <?php echo $pays[$_COOKIE['flag']] ?></h2>
        <a class="info" href="https://laendercode.net/fr/2-letter-code/<?php echo $_COOKIE['flag'] ?>"><h3>En savoir plus sur ce pays</h3></a>
        <a href="game.php?skip=1"><div class="ok"><p>ok</p></div></a>
    </div>
</body>
<style>
    body{
        height: 49vw;
    }
    a{
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .ok{
        display: flex;
        justify-content: center;
        width: 100px;
        height: 100%;
        background-color: #4CAF50;
        border-radius: 10px;
        text-align: center;
        margin: auto;
        margin-top: 30px;
        font-size: 20px;
        margin-bottom: 30px;
    }
    .forgettitle{
        margin-bottom: 30px;
    }
    .info{
        color: white;
        width: 100%;
    }
    .info >h3{
        text-decoration: underline;
        color: white;
    }

</style>