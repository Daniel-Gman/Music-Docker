<?php

$song = $_GET['song'];
$artist = $_GET['artist'];
$genre = $_GET['genre'];
$year = $_GET['year'];
$time = $_GET['time'];
$img = $_GET['img'];
?>

<style>
<?php
include 'css/style.css';
?>
</style>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Info Page</title>
</head>
<body>
    <div class="flex">
    <figure class="figure__left">
         <div>
        <p>Artist: <?php echo $artist; ?></p>
        <p>Song: <?php echo $song; ?></p>
        <p>Genre: <?php echo $genre; ?></p>
        <p>Year: <?php echo $year; ?></p>
        <p>Time: <?php echo $time; ?></p>
        <div>
        <img class="foto" src="<?php echo $img; ?>">
        </div>
    </figure>
    <figure class="figure__rechts">
        <p class="figure__p">
            test
        </p>
</figure></div>
   
</body>
</html>
