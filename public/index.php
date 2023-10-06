<?php 
require_once('../source/config.php');
include('../source/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include('../source/views/menu.php');
?>

<script>
function modal(songName) {
    const naam = document.getElementById("naam");
    const song = document.getElementById("song");
    const genre = document.getElementById("genre");
    const year = document.getElementById("datum");
    const time = document.getElementById("duur");
    const image = document.getElementById("image");

    const artiest_naam = document.getElementById(songName + "__name");
    const artiest_song = document.getElementById(songName + "__song");
    const artiest_genre = document.getElementById(songName + "__genres");
    const artiest_datum = document.getElementById(songName + "__years");
    const artiest_duur = document.getElementById(songName + "__times");
    const artiest_image = document.getElementById(songName + "__img");

    naam.innerText = artiest_naam.innerText;
    song.innerText = artiest_song.innerText;
    genre.innerText = artiest_genre.innerText;
    year.innerText = artiest_datum.innerText;
    time.innerText = artiest_duur.innerText;
    image.src = artiest_image.src;
}
</script>

<div class="container">
    <figure>
        <p>Browse ur favorite song:</p>
            <div>
                <h1 id="naam">naam</h1>
                <p id="song">song</p>
                <p id="genre">genre</p>
                <p id="datum">datum</p>
                <p id="duur">duur</p>
            <div class="button__card">
        <button onClick="window.location.href = 'info.php'">Full detail</button>
    </div>
</div>
<img id="image" src="img/L8owPX.jpg" alt="">
</figure>
    <div class="blokjes">
        <?php
        foreach($library as $single){
            include('../source/views/card.php');
        }
        ?>
    </div>
</div>

</body>


<style>

    body{
        background: #e5edca;
    }

    
    figure{
        background: #bac49a;
        width: 40rem;
        height: 40rem;
        position: relative;
        border-radius: 5rem;
    }

    figure > div{
        
        align-items: center;
    }

    figure > div > h1{
        display: flex;
        justify-content: center;
    }

    figure > p{
        color: black;
        font-size: 2rem;
    }

    figure > img{
        width: 100%;
        height: 20rem;
        object-fit: cover;
        position: absolute;
        bottom: 0px;
    }

    .blokjes{
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        width: 100%;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .container{
        display: flex;
        justify-content: center;
    }

</style>