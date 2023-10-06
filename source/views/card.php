<div class="card">
    <div>
        <p>
            <?php
            echo $single['artist'];
            echo '</br>';
            echo $single['title'];
            echo '</br>';
            echo $single['genre'];
            ?>
        </p>
        <div>
            <div class="button__card">
                <button id="button__js" onClick="console.log('<?php echo $single['artist']; ?>')">
                    <?php
                    echo $single['button']
                    ?>
                    
                </button>
            </div>
            <p>
                <?php 
                echo $single['year'];
                echo '</br>';
                echo $single['time'];
                ?>
            </p>
            <div class="foto">
            <?php
                echo "<img src='" . $single['img'] . "'>";
            ?>
        </div>
        </div>
    </div>
</div>

<style>

    .foto{
        whidth: 10rem;
        height: 10rem;
        background: red;
        border-bottom-left-radius: 2rem;
        border-bottom-right-radius: 2rem;
    }

    img{
        width: 100%;
        height: 100%;
        border-bottom-left-radius: 2rem;
        border-bottom-right-radius: 2rem;
    }

    .button__card{
        display: flex;
        justify-content: center;
    }

    button{
        background: #a4b17a;
        width: 8rem;
        transform: scale();
        transition: 1.5s;
    }

    button:hover{
        transform: scale(1.1);
        transition: 0.3s;
        background: #a4b17a;
    }

    .card{
        width: 10rem;
        height: 20rem;
        background: #bac49a;
        border-radius: 2rem;
    }

    p{
        display: flex;
        justify-content: center;
    }

    div > div > p{
        color: black;
    }
</style>