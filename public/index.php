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
function balls(artist) {
    const naam = document.getElementById("naam");
    naam.innerText = artist;
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
<p id="ander">ander nummer</p>
</div>
<img src="img/best.webp" alt="">
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
        background:#a4b17a;
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
        height: 10rem;
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