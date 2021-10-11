<?php

?>

<!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
        
        <link rel="stylesheet" href="style.css">
        
        <title>Formatierungen</title>
    </head>
    <body>
        <h1>H1 Heading</h1>
        <h2>H2 Heading</h2>
        <h3>H3 Heading</h3>
        <h4>H4 Heading</h4>
        <h5>H5 Heading</h5>
        <h6>H6 Heading</h6>

        <p>Normal Text</p>

        <button>Button</button>  
        
        <button type="button" class="sm-btn btn-reload" id="btn-reload"><i class="bi bi-arrow-clockwise"></i></button>
        <button type="button" class="sm-btn btn-arrow" id="btn-arrow"><i class="bi bi-arrow-right-circle"></i></button>
        <button type="button" class="sm-btn btn-bookmark" id="btn-bookmark"><i class="bi bi-bookmark"></i></button>
        <button type="button" class="sm-btn btn-thumbs" id="btn-thumbs"><i class="bi bi-hand-thumbs-up"></i></button>
        <button type="button" class="sm-btn btn-heart" id="btn-heart"><i class="bi bi-heart"></i></button>

        <script>
            const btn = document.getElementById("btn-reload");

            btn.addEventListener("click", ()=>{

                if(btn.innerText === "<i class="bi bi-arrow-clockwise"></i>"){
                    btn.innerText = "<i class="bi bi-arrow-repeat"></i>";
                }else{
                    btn.innerText = "<i class="bi bi-arrow-clockwise"></i>";
                }
            })
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>