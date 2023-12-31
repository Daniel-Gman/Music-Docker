<div class="card">
    <div>
        <p class="" id="<?php echo $single['song']?>__name"><?php echo $single['artist']?></p>
        <p class="" id="<?php echo $single['song']?>__song"><?php echo $single['song']?></p>
        <p class="" id="<?php echo $single['song']?>__genres"><?php echo $single['genre']?></p>
       
        <div>
            <div class="button__card">
                <button id="button__js" onClick="modal('<?php echo $single['song']; ?>')">
                    <?php
                    echo $single['button']
                    ?>
                    
                </button>
            </div>
            <div class="button__card">
            <button onClick="window.location.href = 'info.php?song=<?php echo $single['song'];
             ?>&artist=<?php echo $single['artist'];
              ?>&genre=<?php echo $single['genre'];
               ?>&year=<?php echo $single['year'];
                ?>&time=<?php echo $single['time'];
                ?>&bio=<?php echo $single['bio'];
                 ?>&img=<?php echo $single['img'];
                  ?>'">
                Info Pagina
            </button>

            </div>
            
            <p class="" id="<?php echo $single['song']?>__years"><?php echo $single['year']?></p>
            <p class="" id="<?php echo $single['song']?>__times"><?php echo $single['time']?></p>
            <p class=" bio" id="<?php echo $single['song']?>__bios"><?php echo $single['bio']?></p>
            <div class="foto">
            <?php
                echo "<img id='" . $single['song'] . "__img' src='" . $single['img'] . "'>";
            ?>
        </div>
        </div>
    </div>
</div>

<style>

    .bio{
        display: none;
    }

    .foto{
        width: 10rem;
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
        margin-bottom: 1rem;
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
        margin-bottom: 5rem;
    }

    p{
        display: flex;
        justify-content: center;
    }

    div > div > p{
        color: black;
    }
</style>